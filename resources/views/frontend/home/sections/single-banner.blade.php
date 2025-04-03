<section id="wsus__single_banner" class="wsus__single_banner_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                @if(@$homepage_section_banner_two->banner_two_1->status_one ==1)
                <div class="wsus__single_banner_content">
                    <div class="wsus__single_banner_img">
                        <img src="{{asset($homepage_section_banner_two->banner_two_1->banner_image_one)}}" alt="banner" class="img-fluid w-100">
                    </div>
                    <div class="wsus__single_banner_text">
                        <h6>{{@$homepage_section_banner_two->banner_two_1->single_banner_text_h6_1}} <span>{{@$homepage_section_banner_two->banner_two_1->single_banner_text_h6_span_1}}</span></h6>
                        <h3>{{@$homepage_section_banner_two->banner_two_1->single_banner_text_h3_1}}</h3>
                        <a class="shop_btn" href="{{$homepage_section_banner_two->banner_two_1->banner_url_one}}">shop now</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-xl-6 col-lg-6">
                @if(@$homepage_section_banner_two->banner_two_2->status_two ==1)
                <div class="wsus__single_banner_content single_banner_2">
                    <div class="wsus__single_banner_img">
                        <img src="{{asset($homepage_section_banner_two->banner_two_2->banner_image_two)}}" alt="banner" class="img-fluid w-100">
                    </div>
                    <div class="wsus__single_banner_text">
                        <h6>{{@$homepage_section_banner_two->banner_two_2->single_banner_text_h6_2}} <span>{{@$homepage_section_banner_two->banner_two_2->single_banner_text_h6_span_2}}</span></h6>
                        <h3>{{@$homepage_section_banner_two->banner_two_2->single_banner_text_h3_2}}</h3>
                        <a class="shop_btn" href="{{$homepage_section_banner_two->banner_two_2->banner_url_two}}">shop now</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
