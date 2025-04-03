<section id="wsus__hot_deals" class="wsus__hot_deals_2">
    <div class="container">
        <div class="wsus__hot_large_item">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header justify-content-start">
                        <div class="monthly_top_filter2 mb-1">
                            <button data-filter=".new_arrival" class="active auto_click">New Arrival</button>
                            <button data-filter=".featured_product">Featured</button>
                            <button data-filter=".top_product">Top Product</button>
                            <button data-filter=".best_product">Best Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid2">
                @foreach ($typeBaseProducts as $key => $products )
                    @foreach ($products as $product )
                        <!--Call to product card component -->
                        <x-product-card :product="$product" :key="$key" />
                    @endforeach
                @endforeach
            </div>
        </div>

    <!--============================
        HOT DEALS 3 BANNERS
    ==============================-->

        <section id="wsus__single_banner" class="home_2_single_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        @if(@$homepage_section_banner_three->banner_three_one ->status_one == 1)
                        <div class="wsus__single_banner_content banner_1">
                            <div class="wsus__single_banner_img">
                                <img src="{{asset(@$homepage_section_banner_three->banner_three_one->banner_image_one)}}" alt="banner" class="img-fluid w-100">
                            </div>
                            <div class="wsus__single_banner_text">
                                <h6>{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h6_1}} <span>{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h6_span_1}}</span></h6>
                                <h3>{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h3_1}}</h3>
                                <a class="shop_btn" href="{{@$homepage_section_banner_three->banner_three_one->banner_url_one}}">shop now</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                @if(@$homepage_section_banner_three->banner_three_two ->status_two == 1)
                                <div class="wsus__single_banner_content single_banner_2">
                                    <div class="wsus__single_banner_img">
                                        <img src="{{asset(@$homepage_section_banner_three->banner_three_two->banner_image_two)}}" alt="banner" class="img-fluid w-100">
                                    </div>
                                    <div class="wsus__single_banner_text">
                                        <h6>{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h6_2}} <span>{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h6_span_2}}</span></h6>
                                        <h3>{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h3_2}}</h3>
                                        <a class="shop_btn" href="{{@$homepage_section_banner_three->banner_three_two->banner_url_two}}">shop now</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-12 mt-lg-4">
                                @if(@$homepage_section_banner_three->banner_three_three ->status_three == 1)
                                <div class="wsus__single_banner_content">
                                    <div class="wsus__single_banner_img">
                                        <img src="{{asset(@$homepage_section_banner_three->banner_three_three->banner_image_three)}}" alt="banner" class="img-fluid w-100">
                                    </div>
                                    <div class="wsus__single_banner_text">
                                        <h6>{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h6_3}} <span>{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h6_span_3}}</span></h6>
                                        <h3>{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h3_3}}</h3>
                                        <a class="shop_btn" href="{{@$homepage_section_banner_three->banner_three_three->banner_url_three}}">shop now</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

 <!--============================
        HOT DEALS 3 BANNERS END
 ==============================-->

<!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->


    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->
