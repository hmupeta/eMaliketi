<div class="tab-pane fade" id="list-homepage-banner-four" role="tabpanel" aria-labelledby="list-homepage-banner-four-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{route('admin.homepage-banner-section-four')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>banner one</h5>
                <div class="form-group">
                    <label for="">Status</label>
                    <br>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" {{@$homepage_section_banner_four->banner_four ->status == 1 ? 'checked' : '' }} name="status" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <img src="{{asset(@$homepage_section_banner_four->banner_four->banner_image)}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control" name="banner_image" value="">
                    <input type="hidden" class="form-control" name="banner_old_image" value="{{@$homepage_section_banner_four->banner_four->banner_image}}">
                </div>
                <div class="form-group">
                    <label>Banner url</label>
                    <input type="text" class="form-control" name="banner_url" value="{{@$homepage_section_banner_four->banner_four->banner_url}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Left Text H3</label>
                    <input type="text" class="form-control" name="large_banner_left_text_h3" value="{{@$homepage_section_banner_four->banner_four->large_banner_left_text_h3}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Left Text P</label>
                    <input type="text" class="form-control" name="large_banner_left_text_p" value="{{@$homepage_section_banner_four->banner_four->large_banner_left_text_p}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Left URL</label>
                    <input type="text" class="form-control" name="large_banner_left_text_url" value="{{@$homepage_section_banner_four->banner_four->large_banner_left_text_url}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Right Text H3</label>
                    <input type="text" class="form-control" name="large_banner_right_text_h3" value="{{@$homepage_section_banner_four->banner_four->large_banner_right_text_h3}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Right Text H5</label>
                    <input type="text" class="form-control" name="large_banner_right_text_h5" value="{{@$homepage_section_banner_four->banner_four->large_banner_right_text_h5}}">
                </div>
                <div class="form-group">
                    <label>Large Banner Right Text P</label>
                    <input type="text" class="form-control" name="large_banner_right_text_p" value="{{@$homepage_section_banner_four->banner_four->large_banner_right_text_p}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
