<?php

namespace App\Http\Controllers;

use App\Helpers\FestHelper;
use App\Models\City;
use App\Models\Order;
use App\Models\OrderTag;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::query()
            ->with('tags', 'city', 'district', 'neighborhood')
            ->withCount('tags')
            ->orderBy('tags_count', 'asc')
            ->orderByDesc('created_at')
            ->paginate(50);

        $tags = Tag::all();
        $cities = City::query()->orderBy('name')->get();

        return view('admin.dashboard', ['orders' => $orders, 'tags' => $tags, 'cities' => $cities]);
    }

    public function storeOrder(Request $request)
    {
        $order = Order::create($request->all());

        if ($request->has('tags')) {
            foreach ($request->get('tags') as $tagId) {
                $order->tags()->attach($tagId);
            }
        }

        return redirect()->back();
    }

    public function updateOrder(Order $order, Request $request)
    {
        $order->update($request->all());

        if ($request->has('tags') && is_array($request->get('tags'))) {
            $existingTagIds = $order->tags->pluck('id')->toArray();
            $newTagIds = array_diff($request->get('tags'), $existingTagIds);

            foreach ($newTagIds as $tagId) {
                $order->tags()->attach($tagId);
            }

            $tagsToRemove = array_diff($existingTagIds, $request->get('tags'));
            if (!empty($tagsToRemove)) {
                $order->tags()->detach($tagsToRemove);
            }
        } else {
            $order->tags()->detach();
        }

        return redirect()->back();
    }

    public function orderDestroy(Order $order)
    {
        $order->delete();

        return redirect()->back();
    }

    public function products()
    {
        $products = Product::query()->with(['media', 'comments' => function ($commentsQuery) {
            $commentsQuery->orderBy('order');
        }])->get();

        return view('admin.product', ['products' => $products]);
    }

    public function festStore(Order $order, Request $request)
    {
        $festHelper = new FestHelper();

        try {
            $festHelper->storeConsignment($order);
        } catch (\Exception $exception) {
            dd($exception);
        }
        $tag = Tag::where('name', 'fest')->first();

        $order->tags()->attach($tag);

        return redirect()->back();
    }

    public function getStatusView(Order $order, Request $request)
    {
        $festHelper = new FestHelper();

        $response = $festHelper->getStatusByBarcode($order->barcode);

        return response()->json($response);

//        return view('admin.order_status', ['htmlContent' => $response]);
    }
}
