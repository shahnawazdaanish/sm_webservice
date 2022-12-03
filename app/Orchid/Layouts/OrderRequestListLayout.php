<?php

namespace App\Orchid\Layouts;

use App\Entity\OrderRequest;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class OrderRequestListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'orderRequests';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('requestid', 'Request ID')
                ->render(function (OrderRequest $orderRequest) {
                    return Link::make($orderRequest->requestid)
                        ->route('platform.order.view', $orderRequest);
                }),
            TD::make('orderid', 'Order ID'),
            TD::make('vporderid', 'VP Order ID'),
            TD::make('version', 'Version'),
            TD::make('collectionid', 'Collection ID'),
            TD::make('collectionname', 'Collection Name'),
            TD::make('iscancelled', 'Is Cancelled?'),
            TD::make('nomineeid', 'Nominee ID'),
            TD::make('nomineename', 'Nominee Name'),
            TD::make('vendorid', 'Vendor ID'),
            TD::make('vendorname', 'Vendor Name'),
            TD::make('factoryid', 'Factory ID'),
            TD::make('factoryname', 'Factory Name'),
            TD::make('deliveryaddress', 'Delivery Address'),
            TD::make('comment', 'Comment'),
            TD::make('cilquantity', 'CIL Quantity'),
            TD::make('cilrequestquantity', 'CIL Request Quantity'),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last Updated'),
        ];
    }
}
