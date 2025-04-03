<div class="tab-pane fade show active" id="list-homepage-banner-one" role="tabpanel" aria-labelledby="list-homepage-banner-one-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.homepage-banner-section-one')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$homepage_section_banner_one->banner_one ->status == 1 ? 'checked' : '' }} name="status" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$homepage_section_banner_one->banner_one->banner_image)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image" value="">
                    <input type="hidden" class="form-control" name="banner_old_image" value="{{@$homepage_section_banner_one->banner_one->banner_image}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url" value="{{@$homepage_section_banner_one->banner_one->banner_url}}">
                </div>
                <div class="form-group">
                    <label>Banner Text H4</label>
                    <input type="text" class="form-control" name="top_banner_text_h4" value="{{@$homepage_section_banner_one->banner_one->top_banner_text_h4}}">
                </div>
                <div class="form-group">
                    <label>Banner Text H3</label>
                    <input type="text" class="form-control" name="top_banner_text_h3" value="{{@$homepage_section_banner_one->banner_one->top_banner_text_h3}}">
                </div>
                <div class="form-group">
                    <label>Banner Text H3 Span</label>
                    <input type="text" class="form-control" name="top_banner_text_h3_span" value="{{@$homepage_section_banner_one->banner_one->top_banner_text_h3_span}}">
                </div>
                <div class="form-group">
                    <label>Banner Text H6</label>
                    <input type="text" class="form-control" name="top_banner_text_h6" value="{{@$homepage_section_banner_one->banner_one->top_banner_text_h6}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
