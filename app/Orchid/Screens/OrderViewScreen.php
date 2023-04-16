<?php

namespace App\Orchid\Screens;

use App\Entity\Consumer\AcceptOrderRequest;
use App\Entity\Consumer\AcceptOrderRequests;
use App\Entity\Consumer\ChangeOrderRequest;
use App\Entity\Consumer\ChangeOrderRequests;
use App\Entity\Consumer\GetStickerRequest;
use App\Entity\OrderRequest;
use App\Entity\SkuTable;
use App\Entity\Sticker;
use App\Models\TempCILRequests;
use App\Service\Converter\StickerFileXMLToCSVConverter;
use App\Service\Converter\StickerXMLToStickerConverter;
use App\Service\WebServiceConsumer\SportMasterWebServiceConsumer;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class OrderViewScreen extends Screen
{
    public OrderRequest $orderRequest;
    public ?TempCILRequests $tempCilRequest;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(OrderRequest $orderRequest): iterable
    {
        return [
            'orderRequest' => $orderRequest,
            'tempCilRequest' => TempCILRequests::where(['request_id' => $orderRequest->requestid])->first(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'View Order Request';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        $parameters = [
            'requestID' => $this->orderRequest->requestid,
            'orderID' => $this->orderRequest->orderid,
            'version' => $this->orderRequest->version,
        ];

        return [
            Button::make('Accept Order')
                ->confirm('Accept Order')
                ->icon('call-in')
                ->method('acceptOrder')
                ->parameters($parameters)
                ->canSee($this->orderRequest->exists),

            ModalToggle::make('Change Request')
                ->icon('refresh')
                ->modal('OrderRejectModal')
                ->canSee($this->orderRequest->exists)
                ->parameters($parameters)
                ->method('changeRequest'),

            Button::make('Get Stickers')
                ->confirm('Are you sure to call?')
                ->icon('docs')
                ->method('getStickers')
                ->parameters($parameters)
                ->canSee($this->orderRequest->exists),

            Button::make('Send Event Request')
                ->icon('event')
                ->method('sendEventRequest')
                ->canSee($this->orderRequest->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                Layout::rows([
                    Label::make('Request ID')
                        ->title('Request ID'),

                    Label::make('requestid')
                        ->value($this->orderRequest->requestid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('orderid')
                        ->title('Order ID'),

                    Label::make('orderid')
                        ->value($this->orderRequest->orderid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('vporderid')
                        ->title('VP Order ID'),

                    Label::make('vporderid')
                        ->value($this->orderRequest->vporderid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('version')
                        ->title('Version'),

                    Label::make('version')
                        ->value($this->orderRequest->version),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('collectionid')
                        ->title('Collection ID'),

                    Label::make('collectionid')
                        ->value($this->orderRequest->collectionid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('collectionname')
                        ->title('Collection Name'),

                    Label::make('collectionname')
                        ->value($this->orderRequest->collectionname),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('iscancelled')
                        ->title('Is Cancelled?'),

                    Label::make('iscancelled')
                        ->value($this->orderRequest->iscancelled),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('nomineeid')
                        ->title('Nominee ID'),

                    Label::make('nomineeid')
                        ->value($this->orderRequest->nomineeid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('nomineename')
                        ->title('Nominee Name'),

                    Label::make('nomineename')
                        ->value($this->orderRequest->nomineename),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('vendorid')
                        ->title('Vendor ID'),

                    Label::make('vendorid')
                        ->value($this->orderRequest->vendorid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('vendorname')
                        ->title('Vendor Name'),

                    Label::make('vendorname')
                        ->value($this->orderRequest->vendorname),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('factoryid')
                        ->title('Factory ID'),

                    Label::make('factoryid')
                        ->value($this->orderRequest->factoryid),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('factoryname')
                        ->title('Factory Name'),

                    Label::make('factoryname')
                        ->value($this->orderRequest->factoryname),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('deliveryaddress')
                        ->title('Delivery Address'),

                    Label::make('deliveryaddress')
                        ->value($this->orderRequest->deliveryaddress),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('comment')
                        ->title('Comment'),

                    Label::make('comment')
                        ->value($this->orderRequest->comment),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('cilquantity')
                        ->title('CIL Quantity'),

                    Label::make('cilquantity')
                        ->value($this->orderRequest->cilquantity),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('cilrequestquantity')
                        ->title('CIL Request Quantity'),

                    Label::make('cilrequestquantity')
                        ->value($this->orderRequest->cilrequestquantity),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('created_at')
                        ->title('Created'),

                    Label::make('created_at')
                        ->value($this->orderRequest->created_at),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('updated_at')
                        ->title('Last Updated'),

                    Label::make('updated_at')
                        ->value($this->orderRequest->updated_at),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('updated_at')
                        ->title('Last Updated'),

                    Label::make('updated_at')
                        ->value($this->orderRequest->updated_at),
                ]),
            ]),
            Layout::columns([
                Layout::rows([
                    Label::make('synced')
                        ->title('Synced'),
                    Label::make('updated_at')
                        ->value($this->tempCilRequest !== null ? $this->tempCilRequest->synced : 'N/A'),
                ]),
            ]),
            Layout::modal('OrderRejectModal', [
                Layout::rows([
                    Input::make('comment')->title('Comment')->required()
                ]),
            ])
                ->title('Order Reject Form')
                ->applyButton('Reject')
                ->closeButton('Cancel')
            ,
        ];
    }

    public function acceptOrder(Request $request): void
    {
        $acceptOrderRequests = (new AcceptOrderRequests())
            ->setRequestID($request->get('requestID'))
            ->setParticipantID(env('PARTICIPANT_ID') ?? '')
            ->setAcceptOrderRequest(
                [
                    (new AcceptOrderRequest())
                        ->setOrderID($request->get('orderID'))
                        ->setVersion($request->get('version')),
                ]
            )
        ;

        $consumer = new SportMasterWebServiceConsumer();
        $response = $consumer->acceptOrderRequest($acceptOrderRequests);

        if (isset($response->return)) {
            if (isset($response->return->OrderVersionResponse)) {
                if (isset($response->return->OrderVersionResponse->Status)) {
                    $status = $response->return->OrderVersionResponse->Status;
                    $errorMessage = $response->return->OrderVersionResponse->ErrorMessage ?? '';

                    if ($status === true) {
                        Toast::success('Order Approved Successfully');
                    } else {
                        Toast::error('Cannot approve order, reason: ' . $errorMessage);
                    }
                    return;
                }
            }
        }

        Toast::info('Response: ' . json_encode($response));
    }

    public function getStickers(Request $request): void
    {
        $isStickerPresent = Sticker::where('requestid', $request->get('requestID'))->count() >= 1;

        if ($isStickerPresent) {
            Toast::error('Stickers already fetched to database');
            return;
        }

        $skuTables = SkuTable::where('requestid', $request->get('requestID'))->get();

        if ($skuTables->count() === 0) {
            Toast::error('No Sku present for this request');
            return;
        }

        $skuArr = $skuTables->toArray();

        $stickers = array_column($skuArr, 'stickerid');


        $getStickerRequest = (new GetStickerRequest())
            ->setRequestID($request->get('requestID'))
            ->setParticipantID(env('PARTICIPANT_ID') ?? '')
            ->setStickerID($stickers)
            ->setJoinFile(false)
        ;

        $consumer = new SportMasterWebServiceConsumer();
        $response = $consumer->getStickerRequest($getStickerRequest);

        if (isset($response->return)) {
            if (isset($response->return->Status)) {
                $status = $response->return->Status;
                $errorMessage = $response->return->ErrorMessage ?? '';

                if ($status === true) {
                    $stickerDocs = '<documents>' . implode('', $response->return->StickerFile) . '</documents>';
                    (new StickerXMLToStickerConverter())
                        ->convert(simplexml_load_string($stickerDocs), $request->get('requestID'))
                    ;

                    Alert::success('Stickers collected successfully');
                } else {
                    Toast::error('Cannot collect stickers, reason: ' . $errorMessage);
                }
                return;
            }
        }

        Toast::info('Response: ' . json_encode($response));
    }

    public function changeRequest(Request $request): void
    {
        if (empty($request->get('comment'))) {
            Toast::warning('Please enter a comment');
            return;
        }

        $changeOrderRequests = (new ChangeOrderRequests())
            ->setRequestID($request->get('requestID'))
            ->setParticipantID(env('PARTICIPANT_ID') ?? '')
            ->setChangeOrderRequest(
                [
                    (new ChangeOrderRequest())
                        ->setOrderID($request->get('orderID'))
                        ->setVersion($request->get('version'))
                        ->setRFCID(uniqid('SM'))
                        ->setRFCDateTime(now()->toIso8601String())
                        ->setComment($request->get('comment'))
                    ,
                ]
            )
        ;

        $consumer = new SportMasterWebServiceConsumer();
        $response = $consumer->changeOrderRequest($changeOrderRequests);

        if (isset($response->return)) {
            if (isset($response->return->OrderRFCResponse)) {
                if (isset($response->return->OrderRFCResponse->Status)) {
                    $status = $response->return->OrderRFCResponse->Status;
                    $errorMessage = $response->return->OrderRFCResponse->ErrorMessage ?? '';

                    if ($status === true) {
                        Toast::success('Order Rejected Successfully, RFCID: '
                            . ($response->return->OrderRFCResponse->RFCID ?? 'N/A')
                        );
                    } else {
                        Toast::error('Cannot approve order, reason: ' . $errorMessage);
                    }
                    return;
                }
            }
        }

        Toast::info('Response: ' . json_encode($response));
    }
}
