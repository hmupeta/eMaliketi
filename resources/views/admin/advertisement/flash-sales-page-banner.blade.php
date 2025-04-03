<div class="tab-pane fade" id="list-flash-sales-banner" role="tabpanel" aria-labelledby="list-flash-sales-banner-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.flash-sales-page-banner')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$flash_sales_page_banner->banner_two_1 ->status_one == 1 ? 'checked' : '' }} name="status_one" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$flash_sales_page_banner->banner_two_1->banner_image_one)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_one" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_one" value="{{@$flash_sales_page_banner->banner_two_1->banner_image_one}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_one" value="{{@$flash_sales_page_banner->banner_two_1->banner_url_one}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H6</label>
                    <input type="text" class="form-control" name="single_banner_text_h6_1" value="{{@$flash_sales_page_banner->banner_two_1->single_banner_text_h6_1}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H6 Span</label>
                    <input type="text" class="form-control" name="single_banner_text_h6_span_1" value="{{@$flash_sales_page_banner->banner_two_1->single_banner_text_h6_span_1}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H3</label>
                    <input type="text" class="form-control" name="single_banner_text_h3_1" value="{{@$flash_sales_page_banner->banner_two_1->single_banner_text_h3_1}}">
                </div>

                <h5>banner two</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$flash_sales_page_banner->banner_two_2 ->status_two == 1 ? 'checked' : '' }} name="status_two" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$flash_sales_page_banner->banner_two_2->banner_image_two)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_two" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_two" value="{{@$flash_sales_page_banner->banner_two_2->banner_image_two}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_two" value="{{@$flash_sales_page_banner->banner_two_2->banner_url_two}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H6</label>
                    <input type="text" class="form-control" name="single_banner_text_h6_2" value="{{@$flash_sales_page_banner->banner_two_2->single_banner_text_h6_2}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H6 Span</label>
                    <input type="text" class="form-control" name="single_banner_text_h6_span_2" value="{{@$flash_sales_page_banner->banner_two_2->single_banner_text_h6_span_2}}">
                </div>
                <div class="form-group">
                    <label>Single Banner Text H3</label>
                    <input type="text" class="form-control" name="single_banner_text_h3_2" value="{{@$flash_sales_page_banner->banner_two_2->single_banner_text_h3_2}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
