<div class="tab-pane fade" id="list-homepage-banner-three" role="tabpanel" aria-labelledby="list-homepage-banner-three-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.homepage-banner-section-three')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$homepage_section_banner_three->banner_three_one ->status_one == 1 ? 'checked' : '' }} name="status_one" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$homepage_section_banner_three->banner_three_one->banner_image_one)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_one" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_one" value="{{@$homepage_section_banner_three->banner_three_one->banner_image_one}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_one" value="{{@$homepage_section_banner_three->banner_three_one->banner_url_one}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner Text H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_1" value="{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h6_1}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner Text Span H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_span_1" value="{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h6_span_1}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner H3</label>
                    <input type="text" class="form-control" name="hot_deals_text_h3_1" value="{{@$homepage_section_banner_three->banner_three_one->hot_deals_text_h3_1}}">
                </div>

                <h5>banner two</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$homepage_section_banner_three->banner_three_two ->status_two == 1 ? 'checked' : '' }} name="status_two" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$homepage_section_banner_three->banner_three_two->banner_image_two)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_two" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_two" value="{{@$homepage_section_banner_three->banner_three_two->banner_image_two}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_two" value="{{@$homepage_section_banner_three->banner_three_two->banner_url_two}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_2" value="{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h6_2}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner Span H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_span_2" value="{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h6_span_2}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner H3</label>
                    <input type="text" class="form-control" name="hot_deals_text_h3_2" value="{{@$homepage_section_banner_three->banner_three_two->hot_deals_text_h3_2}}">
                </div>

                <h5>banner three</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$homepage_section_banner_three->banner_three_three ->status_three == 1 ? 'checked' : '' }} name="status_three" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$homepage_section_banner_three->banner_three_three->banner_image_three)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_three" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_three" value="{{@$homepage_section_banner_three->banner_three_three->banner_image_three}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_three" value="{{@$homepage_section_banner_three->banner_three_three->banner_url_three}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_3" value="{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h6_3}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner Span H6</label>
                    <input type="text" class="form-control" name="hot_deals_text_h6_span_3" value="{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h6_span_3}}">
                </div>
                <div class="form-group">
                    <label>Hot Deals Banner H3</label>
                    <input type="text" class="form-control" name="hot_deals_text_h3_3" value="{{@$homepage_section_banner_three->banner_three_three->hot_deals_text_h3_3}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
