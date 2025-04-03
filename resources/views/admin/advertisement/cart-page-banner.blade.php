<div class="tab-pane fade" id="list-cart-page-banner" role="tabpanel" aria-labelledby="list-cart-page-banner-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.cartpage-banner')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$cart_page_banner->banner_two_1 ->status_one == 1 ? 'checked' : '' }} name="status_one" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$cart_page_banner->banner_two_1->banner_image_one)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_one" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_one" value="{{@$cart_page_banner->banner_two_1->banner_image_one}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_one" value="{{@$cart_page_banner->banner_two_1->banner_url_one}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Left Text H6</label>
                    <input type="text" class="form-control" name="cart_page_banner_left_text_h6" value="{{@$cart_page_banner->banner_two_1->cart_page_banner_left_text_h6}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Left Text Span H6</label>
                    <input type="text" class="form-control" name="cart_page_banner_left_text_span_h6" value="{{@$cart_page_banner->banner_two_1->cart_page_banner_left_text_span_h6}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Left Text H3</label>
                    <input type="text" class="form-control" name="cart_page_banner_left_text_h3" value="{{@$cart_page_banner->banner_two_1->cart_page_banner_left_text_h3}}">
                </div>


                <h5>banner two</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$cart_page_banner->banner_two_2 ->status_two == 1 ? 'checked' : '' }} name="status_two" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$cart_page_banner->banner_two_2->banner_image_two)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image_two" value="">
                    <input type="hidden" class="form-control" name="banner_old_image_two" value="{{@$cart_page_banner->banner_two_2->banner_image_two}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url_two" value="{{@$cart_page_banner->banner_two_2->banner_url_two}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Right Text H6</label>
                    <input type="text" class="form-control" name="cart_page_banner_right_text_h6" value="{{@$cart_page_banner->banner_two_2->cart_page_banner_right_text_h6}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Right Text Span H6</label>
                    <input type="text" class="form-control" name="cart_page_banner_right_text_span_h6" value="{{@$cart_page_banner->banner_two_2->cart_page_banner_right_text_span_h6}}">
                </div>
                <div class="form-group">
                    <label>Cart Page Banner Right Text H3</label>
                    <input type="text" class="form-control" name="cart_page_banner_right_text_h3" value="{{@$cart_page_banner->banner_two_2->cart_page_banner_right_text_h3}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
