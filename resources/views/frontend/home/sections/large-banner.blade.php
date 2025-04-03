<section id="wsus__large_banner">
    <div class="container">
        <div class="row">
            <div class="cl-xl-12">
                @if(@$homepage_section_banner_four->banner_four ->status == 1)
                <div class="wsus__large_banner_content" style="background: url('{{ $homepage_section_banner_four->banner_four->banner_image }}');">
                    <div class="wsus__large_banner_content_overlay">
                        <div class="row">
                            <div class="col-xl-6 col-12 col-md-6">
                                <div class="wsus__large_banner_text">
                                    <h3>{{@$homepage_section_banner_four->banner_four->large_banner_left_text_h3}}</h3>
                                    <p>{{@$homepage_section_banner_four->banner_four->large_banner_left_text_p}}</p>
                                    <a class="shop_btn" href="{{@$homepage_section_banner_four->banner_four->large_banner_left_text_url}}">view more</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 col-md-6">
                                <div class="wsus__large_banner_text wsus__large_banner_text_right">
                                    <h3>{{@$homepage_section_banner_four->banner_four->large_banner_right_text_h3}}</h3>
                                    <h5>{{@$homepage_section_banner_four->banner_four->large_banner_right_text_h5}}</h5>
                                    <p>{{@$homepage_section_banner_four->banner_four->large_banner_right_text_p}}</p>
                                    <a class="shop_btn" href="{{@$homepage_section_banner_four->banner_four->banner_url}}">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
