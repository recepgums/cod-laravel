<?php

namespace App\Http\Controllers;

use App\Helpers\TrendyolReviewHelper;
use App\Models\City;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'template' => $request->get('template'),
            'price' => $request->get('price'),
            'old_price' => $request->get('old_price'),
            'emoji_benefits' => $request->get('emoji_benefits'),
            'content' => $request->get('content'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $product->addMedia($image)->toMediaCollection('product_images');
            }
        }

        return redirect()->back();
    }

    public function update(Product $product,Request $request)
    {
        $product->update([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'template' => $request->get('template'),
            'price' => $request->get('price'),
            'old_price' => $request->get('old_price'),
            'emoji_benefits' => $request->get('emoji_benefits'),
            'content' => $request->get('content'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index=> $image) {
                $media = $product->addMedia($image)->toMediaCollection('product_images');
                $media->setCustomProperty('order', $index)->save();
            }
        }
        if ($request->has('order')) {
            foreach ($request->input('order') as $mediaId => $order) {
                $media = $product->getMedia('product_images')->where('id', $mediaId)->first();
                if ($media) {
                    $media->setCustomProperty('order', $order)->save();
                }
            }
        }
        $quantityPrice = trim($request->get('quantity_price'));
        $quantityPrice = preg_replace("/\s+/", " ", $quantityPrice);
        $quantityPrice = str_replace("'", '"', $quantityPrice);
        $quantityPrice = preg_replace("/,(\s*})/", "$1", $quantityPrice);

        $quantityDiscount = trim($request->get('quantity_discount'));
        $quantityDiscount = preg_replace("/\s+/", " ", $quantityDiscount);
        $quantityDiscount = str_replace("'", '"', $quantityDiscount);
        $quantityDiscount = preg_replace("/,(\s*})/", "$1", $quantityDiscount);
        $product->updateSetting('quantity_price', $quantityPrice);
        $product->updateSetting('quantity_discount', $quantityDiscount);

        if ($request->get('comment_url')){
            $trendyolComments = TrendyolReviewHelper::getReviewsByTrendyolUrl(
                $request->get('comment_url'),
                (bool)$request->get('only_image'),
                    $request->get('count') ?? null
            );

            foreach ($trendyolComments as $trendyolComment){
                Comment::create([
                    'product_id' => $product['id'],
                    'rating' => $trendyolComment['rating'],
                    'author' => $trendyolComment['author'],
                    'content' => $trendyolComment['content'],
                    'photo_url_1' => $trendyolComment['photo_url_1'],
                    'order' => 999,
                ]);
            }
        }

        return redirect()->back();
    }

    public function updateMedia(Media $media,Request $request)
    {
        $media->setCustomProperty('order', $request->get('order'))->save();

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function show(Product $product)
    {
        $cities = Cache::remember('cities', 14460,function (){
           return City::query()->orderBy('name')->get();
        });

        $comments = $product->comments()->orderBy('order')->paginate(12);

        return view('products.review', [
            'cities' => $cities,
            'product' => $product->load('media'),
            'comments' => $comments,
            'productImages' => $product->getMedia('product_images')->sortBy(fn($media) => $media->getCustomProperty('order'))
        ]);
    }

    public function show2()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::query()->orderBy('name')->get();
        });

        return view('products.tak-cikar-lamba',[
            'cities' => $cities,
        ]);
    }
    public function showKumSanati()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::query()->orderBy('name')->get();
        });

        return view('layouts/only_images_app',[
            'cities' => $cities,
        ]);
    }
    public function showPaspas()
    {
        $cities = Cache::remember('cities', 14460,function (){
            return City::query()->orderBy('name')->get();
        });

        return view('products.paspas',[
            'cities' => $cities,
        ]);
    }
    public function deleteMedia($mediaId)
    {
        $media = \Spatie\MediaLibrary\MediaCollections\Models\Media::findOrFail($mediaId);
        $media->delete();

        return redirect()->back();
    }

    public function commentUpdate(Comment $comment,Request $request)
    {
        $comment->update($request->all());

        return redirect()->back();
    }
}
