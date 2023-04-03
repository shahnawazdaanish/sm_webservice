<?php

namespace App\Orchid\Screens;

use App\Entity\OrderRequest;
use App\Models\TempCILRequests;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class OrderViewScreen extends Screen
{
    public $orderRequest;
    public $tempCilRequest;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(OrderRequest $orderRequest): iterable
    {
        return [
            'orderRequest' => $orderRequest,
            'tempCilRequest' => TempCILRequests::where([$orderRequest->request_id => $orderRequest->requestid])->first(),
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
        return [
            Button::make('Accept Order')
                ->confirm('Accept Order')
                ->icon('call-in')
                ->method('acceptOrder')
                ->canSee($this->orderRequest->exists),

            Button::make('Change Request')
                ->icon('refresh')
                ->method('changeRequest')
                ->canSee($this->orderRequest->exists),

            Button::make('Get Stickers')
                ->icon('docs')
                ->method('getStickers')
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
                       ->value($this->tempCilRequest->synced),
               ]),
            ]),
        ];
    }
}
