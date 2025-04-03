<div class="tab-pane fade" id="list-product-page-banner" role="tabpanel" aria-labelledby="list-product-page-banner-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.productpage-banner')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$product_page_banner->banner_four ->status == 1 ? 'checked' : '' }} name="status" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$product_page_banner->banner_four->banner_image)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image" value="">
                    <input type="hidden" class="form-control" name="banner_old_image" value="{{@$product_page_banner->banner_four->banner_image}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url" value="{{@$product_page_banner->banner_four->banner_url}}">
                </div>
                <div class="form-group">
                    <label>Product Page Banner Text P</label>
                    <input type="text" class="form-control" name="product_page_banner_text_p" value="{{@$product_page_banner->banner_four->product_page_banner_text_p}}">
                </div>
                <div class="form-group">
                    <label>Product Page Banner Text Span P</label>
                    <input type="text" class="form-control" name="product_page_banner_text_span_p" value="{{@$product_page_banner->banner_four->product_page_banner_text_span_p}}">
                </div>
                <div class="form-group">
                    <label>Product Page Banner Text H5</label>
                    <input type="text" class="form-control" name="product_page_banner_text_h5" value="{{@$product_page_banner->banner_four->product_page_banner_text_h5}}">
                </div>
                <div class="form-group">
                    <label>Product Page Banner Text H3</label>
                    <input type="text" class="form-control" name="product_page_banner_text_h3" value="{{@$product_page_banner->banner_four->product_page_banner_text_h3}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
