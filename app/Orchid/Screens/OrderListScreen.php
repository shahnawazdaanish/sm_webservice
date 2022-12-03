<?php

namespace App\Orchid\Screens;

use App\Entity\OrderRequest;
use App\Orchid\Layouts\OrderRequestListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class OrderListScreen extends Screen
{
    public $orderRequest;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $posts = OrderRequest::paginate();

        return [
            'orderRequests' => OrderRequest::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Order Requests';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All Order Requests";
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
//            Link::make('Create new')
//                ->icon('pencil')
//                ->route('platform.post.edit')
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
            OrderRequestListLayout::class
        ];
    }
}
