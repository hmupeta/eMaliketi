@php
    $popularCategories = json_decode($popularCategory->value, true);
@endphp
<section id="wsus__monthly_top" class="wsus__monthly_top_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="wsus__monthly_top_banner">
                    <div class="wsus__monthly_top_banner_img">
                        <img src="{{asset($homepage_section_banner_one->banner_one->banner_image)}}" alt="" class="img-fluid w-100">
                        <span></span>
                    </div>
                    <div class="wsus__monthly_top_banner_text">
                        <h4>{{$homepage_section_banner_one->banner_one->top_banner_text_h4}}</h4>
                        <h3>{{$homepage_section_banner_one->banner_one->top_banner_text_h3}} <span>{{$homepage_section_banner_one->banner_one->top_banner_text_h3_span}}</span></h3>
                        <H6>{{$homepage_section_banner_one->banner_one->top_banner_text_h6}}</H6>
                        <a class="shop_btn" href="{{$homepage_section_banner_one->banner_one->banner_url}}">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__section_header for_md">
                    <h3>Popular Categories</h3>
                    <div class="monthly_top_filter">
                        @php
                            $products = [];
                        @endphp
                        @foreach ($popularCategories as $popularCategory)
                            @php
                                $lastKey = [];
                                foreach ($popularCategory as $key => $category) {
                                    if ($category == null) {
                                        break;
                                    }
                                    $lastKey = [$key => $category];
                                }

                                if (array_keys($lastKey)[0] == 'category') {
                                    //category model
                                    $category = \App\Models\Category::find($lastKey['category']);
                                    $products[] = \App\Models\Product::withAvg('reviews', 'rating')->withCount('reviews')
                                    ->with('variants','category','productImageGalleries')->where('category_id', $category->id)
                                        ->orderBy('id', 'DESC')
                                        ->take(12)
                                        ->get();
                                } elseif (array_keys($lastKey)[0] == 'sub_category') {
                                    //sub category model
                                    $category = \App\Models\SubCategory::find($lastKey['sub_category']);
                                    $products[] = \App\Models\Product::withAvg('reviews', 'rating')->withCount('reviews')
                                    ->with('variants','category','productImageGalleries')->where('sub_category_id', $category->id)
                                        ->orderBy('id', 'DESC')
                                        ->take(12)
                                        ->get();
                                } elseif (array_keys($lastKey)[0] == 'child_category') {
                                    //child category model
                                    $category = \App\Models\ChildCategory::find($lastKey['child_category']);
                                    $products[] = \App\Models\Product::withAvg('reviews', 'rating')->withCount('reviews')
                                    ->with('variants','category','productImageGalleries')->where('child_category_id', $category->id)
                                        ->orderBy('id', 'DESC')
                                        ->take(12)
                                        ->get();
                                }
                            @endphp
                            <button class="auto_click {{ $loop->index == 0 ? 'active' : '' }}"
                                data-filter=".category-{{ $loop->index }}">{{ $category->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row grid">
                    @foreach ($products as $key => $product)
                        @foreach ($product as $item)
                            <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  category-{{ $key }}">
                                <a class="wsus__hot_deals__single" href="{{ route('product-detail',$item->slug) }}">
                                    <div class="wsus__hot_deals__single_img">
                                        <img src="{{ asset($item->thumb_image) }}" alt="bag"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="wsus__hot_deals__single_text">
                                        <h5>{!! limitText($item->name) !!}</h5>
                                        <p class="wsus__pro_rating">
                                            @for ($i=1;$i<=5;$i++)
                                                @if($i<= $item->reviews_avg_rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="fas fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>({{ $item->reviews_count }} review)</span>
                                        </p>
                                        @if (checkDiscount($item))
                                            <p class="wsus__tk">
                                                {{ $settings->currency_icon }}{{ $item->offer_price }}<del>
                                                    {{ $settings->currency_icon }}{{ $item->price }}</del></p>
                                        @else
                                            <p class="wsus__tk">{{ $settings->currency_icon }}{{ $item->price }}</p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
