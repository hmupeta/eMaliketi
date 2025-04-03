<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendProductController extends Controller
{
    //Show products based on category
    public function productsIndex(Request $request)
    {

        $product_page_banner = Advertisement::where('key', 'product_page_banner')->first();
        $product_page_banner = json_decode(@$product_page_banner->value);
        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where([
                    'category_id' => $category->id,
                    'status' => 1,
                    'is_approved' => 1
                ])
                ->when($request->has('range'), function ($query) use ($request) {
                    $price = explode(';', $request->range);
                    $from = $price[0];
                    $to = $price[1];
                    return $query->where('price', '>=', $from)->where('price', '<=', $to);
                })
                ->paginate(12);
        } elseif ($request->has('subcategory')) {
            $category = SubCategory::where('slug', $request->subcategory)->firstOrFail();
            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where([
                    'sub_category_id' => $category->id,
                    'status' => 1,
                    'is_approved' => 1
                ])
                ->when($request->has('range'), function ($query) use ($request) {
                    $price = explode(';', $request->range);
                    $from = $price[0];
                    $to = $price[1];
                    return $query->where('price', '>=', $from)->where('price', '<=', $to);
                })
                ->paginate(12);
        } elseif ($request->has('childcategory')) {
            $category = ChildCategory::where('slug', $request->childcategory)->firstOrFail();
            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where([
                    'child_category_id' => $category->id,
                    'status' => 1,
                    'is_approved' => 1
                ])
                ->when($request->has('range'), function ($query) use ($request) {
                    $price = explode(';', $request->range);
                    $from = $price[0];
                    $to = $price[1];
                    return $query->where('price', '>=', $from)->where('price', '<=', $to);
                })
                ->paginate(12);
        } elseif ($request->has('brand')) {
            $brand = Brand::where('slug', $request->brand)->firstOrFail();

            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where([
                    'brand_id' => $brand->id,
                    'status' => 1,
                    'is_approved' => 1
                ])
                ->when($request->has('range'), function ($query) use ($request) {
                    $price = explode(';', $request->range);
                    $from = $price[0];
                    $to = $price[1];
                    return $query->where('price', '>=', $from)->where('price', '<=', $to);
                })
                ->paginate(12);
        } elseif ($request->has('search')) {
            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where(['status' => 1, 'is_approved' => 1])
                ->where(['status' => 1, 'is_approved' => 1])->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%')
                        ->orWhere('long_description', 'like', '%' . $request->search . '%')
                        ->orWhereHas('category', function ($query) use ($request) {
                            $query->where('name', 'like', '%' . $request->search . '%')
                                ->orWhere('long_description', 'like', '%' . $request->search . '%');
                        });
                })
                ->paginate(12);
        } else {
            $products = Product::withAvg('reviews', 'rating')->withCount('reviews')
                ->with('variants', 'category', 'productImageGalleries')
                ->where(['status' => 1, 'is_approved' => 1])->orderBy('id', 'DESC')->paginate(12);
        }

        $categories = Category::where(['status' => 1])->get();
        $brands = Brand::where(['status' => 1])->get();
        return view('frontend.pages.product', compact('products', 'categories', 'brands', 'product_page_banner'));
    }
    /** Show product detail page */
    public function showProduct(string $slug)
    {
        // Fetch the current product with related data
        $product = Product::with(['category', 'brand', 'productImageGalleries', 'variants', 'reviews', 'vendor'])
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        // Fetch reviews for the product
        $reviews = ProductReview::where(['product_id' => $product->id, 'status' => 1])->paginate(12);

        // Fetch related products (same category, exclude current product)
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        // Check if the user is authenticated
        $userId = auth()->check() ? auth()->user()->id : null;

        // Pass data to the view
        return view('frontend.pages.product-detail', compact('product', 'reviews', 'relatedProducts', 'userId'));
    }

    public function chageListView(Request $request)
    {
       Session::put('product_list_style', $request->style);
    }
}
