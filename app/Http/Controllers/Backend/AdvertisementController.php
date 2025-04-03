<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        $homepage_section_banner_one = Advertisement::where('key','homepage_section_banner_one')->first();
        $homepage_section_banner_one = json_decode(@$homepage_section_banner_one->value);

        $homepage_section_banner_two = Advertisement::where('key','homepage_section_banner_two')->first();
        $homepage_section_banner_two = json_decode(@$homepage_section_banner_two->value);

        $homepage_section_banner_three = Advertisement::where('key','homepage_section_banner_three')->first();
        $homepage_section_banner_three = json_decode(@$homepage_section_banner_three->value);

        $homepage_section_banner_four = Advertisement::where('key','homepage_section_banner_four')->first();
        $homepage_section_banner_four = json_decode(@$homepage_section_banner_four->value);

        $product_page_banner = Advertisement::where('key','product_page_banner')->first();
        $product_page_banner = json_decode(@$product_page_banner->value);

        $cart_page_banner = Advertisement::where('key','cart_page_banner')->first();
        $cart_page_banner = json_decode(@$cart_page_banner->value);

        $flash_sales_page_banner = Advertisement::where('key','flash_sales_page_banner')->first();
        $flash_sales_page_banner = json_decode(@$flash_sales_page_banner->value);
        //dd($flash_sales_page_banner);
        
        return view('admin.advertisement.index' ,compact(
            'homepage_section_banner_one',
            'homepage_section_banner_two',
            'homepage_section_banner_three',
            'homepage_section_banner_four',
            'product_page_banner',
            'cart_page_banner',
            'flash_sales_page_banner'
            )
        );
    }
    //Homepage banner section one logic
    public function homepageBannerSectionOne(Request $request)
    {
        $request->validate([
            'banner_image' => ['image'],
            'banner_url' => ['required'],
            'top_banner_text_h4' => ['nullable'],
            'top_banner_text_h3' => ['nullable'],
            'top_banner_text_h3_span' => ['nullable'],
            'top_banner_text_h6' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePath = $this->updateImage($request, 'banner_image','uploads');
        $value = [
            'banner_one'=> [
                'banner_url' => $request->banner_url,
                'status' => $request->status == 'on' ? 1 : 0,
                'top_banner_text_h4' => $request->top_banner_text_h4,
                'top_banner_text_h3' => $request->top_banner_text_h3,
                'top_banner_text_h3_span' => $request->top_banner_text_h3_span,
                'top_banner_text_h6' => $request->top_banner_text_h6
            ]
            ];
            if(!empty($imagePath)){
                $value['banner_one']['banner_image'] = $imagePath;
            }else {
                $value['banner_one']['banner_image']= $request->banner_old_image;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'homepage_section_banner_one'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
    }

    //Homepage banner section two logic
    public function homepageBannerSectionTwo(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'banner_image_one' => ['image'],
            'banner_url_one' => ['required'],
            'single_banner_text_h6_1' => ['nullable'],
            'single_banner_text_h6_span_1' => ['nullable'],
            'single_banner_text_h3_1' => ['nullable'],
            'banner_image_two' => ['image'],
            'banner_url_two' => ['required'],
            'single_banner_text_h6_2' => ['nullable'],
            'single_banner_text_h6_span_2' => ['nullable'],
            'single_banner_text_h3_2' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePathOne = $this->updateImage($request, 'banner_image_one','uploads');
        $imagePathTwo = $this->updateImage($request, 'banner_image_two','uploads');
        $value = [
            'banner_two_1'=> [
                'banner_url_one' => $request->banner_url_one,
                'status_one' => $request->status_one == 'on' ? 1 : 0,
                'single_banner_text_h6_1' => $request->single_banner_text_h6_1,
                'single_banner_text_h6_span_1' => $request->single_banner_text_h6_span_1,
                'single_banner_text_h3_1' => $request->single_banner_text_h3_1
            ],
            'banner_two_2'=> [
                'banner_url_two' => $request->banner_url_two,
                'status_two' => $request->status_two == 'on' ? 1 : 0,
                'single_banner_text_h6_2' => $request->single_banner_text_h6_2,
                'single_banner_text_h6_span_2' => $request->single_banner_text_h6_span_2,
                'single_banner_text_h3_2' => $request->single_banner_text_h3_2
            ]
            ];
            if(!empty($imagePathOne)){
                $value['banner_two_1']['banner_image_one'] = $imagePathOne;
            }else {
                $value['banner_two_1']['banner_image_one']= $request->banner_old_image_one;
            }
            if(!empty($imagePathTwo)){
                $value['banner_two_2']['banner_image_two'] = $imagePathTwo;
            }else {
                $value['banner_two_2']['banner_image_two']= $request->banner_old_image_two;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'homepage_section_banner_two'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
    }
     //Homepage banner section three logic
     public function homepageBannerSectionThree(Request $request)
     {
        //dd($request->all());
         $request->validate([
            'banner_image_one' => ['image'],
            'banner_url_one' => ['required'],
            'hot_deals_text_h6_1' => ['nullable'],
            'hot_deals_text_h6_span_1' => ['nullable'],
            'hot_deals_text_h3_1' => ['nullable'],
            'banner_image_two' => ['image'],
            'banner_url_two' => ['required'],
            'hot_deals_text_h6_2' => ['nullable'],
            'hot_deals_text_h6_span_2' => ['nullable'],
            'hot_deals_text_h3_2' => ['nullable'],
            'banner_image_three' => ['image'],
            'banner_url_three' => ['required'],
            'hot_deals_text_h6_3' => ['nullable'],
            'hot_deals_text_h6_span_3' => ['nullable'],
            'hot_deals_text_h3_3' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePathOne = $this->updateImage($request, 'banner_image_one','uploads');
        $imagePathTwo = $this->updateImage($request, 'banner_image_two','uploads');
        $imagePathThree = $this->updateImage($request, 'banner_image_three','uploads');
        $value = [
            'banner_three_one'=> [
                'banner_url_one' => $request->banner_url_one,
                'status_one' => $request->status_one == 'on' ? 1 : 0,
                'hot_deals_text_h6_1' =>  $request-> hot_deals_text_h6_1,
                'hot_deals_text_h6_span_1' => $request-> hot_deals_text_h6_span_1,
                'hot_deals_text_h3_1' => $request-> hot_deals_text_h3_1
            ],
            'banner_three_two'=> [
                'banner_url_two' => $request->banner_url_two,
                'status_two' => $request->status_two == 'on' ? 1 : 0,
                'hot_deals_text_h6_2' =>  $request-> hot_deals_text_h6_2,
                'hot_deals_text_h6_span_2' => $request-> hot_deals_text_h6_span_2,
                'hot_deals_text_h3_2' => $request-> hot_deals_text_h3_2
            ],
            'banner_three_three'=> [
                'banner_url_three' => $request->banner_url_three,
                'status_three' => $request->status_three == 'on' ? 1 : 0,
                'hot_deals_text_h6_3' =>  $request-> hot_deals_text_h6_3,
                'hot_deals_text_h6_span_3' => $request-> hot_deals_text_h6_span_3,
                'hot_deals_text_h3_3' => $request-> hot_deals_text_h3_3
            ]
            ];
            if(!empty($imagePathOne)){
                $value['banner_three_one']['banner_image_one'] = $imagePathOne;
            }else {
                $value['banner_three_one']['banner_image_one']= $request->banner_old_image_one;
            }
            if(!empty($imagePathTwo)){
                $value['banner_three_two']['banner_image_two'] = $imagePathTwo;
            }else {
                $value['banner_three_two']['banner_image_two']= $request->banner_old_image_two;
            }
            if(!empty($imagePathThree)){
                $value['banner_three_three']['banner_image_three'] = $imagePathThree;
            }else {
                $value['banner_three_three']['banner_image_three']= $request->banner_old_image_three;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'homepage_section_banner_three'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
     }

      //Homepage banner section four logic
    public function homepageBannerSectionFour(Request $request)
    {
        $request->validate([
            'banner_image' => ['image'],
            'banner_url' => ['required'],
            'large_banner_left_text_h3' => ['nullable'],
            'large_banner_left_text_p' => ['nullable'],
            'large_banner_left_text_url' => ['nullable'],
            'large_banner_right_text_h3' => ['nullable'],
            'large_banner_right_text_h5' => ['nullable'],
            'large_banner_right_text_p' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePath = $this->updateImage($request, 'banner_image','uploads');
        $value = [
            'banner_four'=> [
                'banner_url' => $request->banner_url,
                'status' => $request->status == 'on' ? 1 : 0,
                'large_banner_left_text_h3'  => $request->large_banner_left_text_h3,
                'large_banner_left_text_p' => $request->large_banner_left_text_p,
                'large_banner_left_text_url' => $request->large_banner_left_text_url,
                'large_banner_right_text_h3'  => $request->large_banner_right_text_h3,
                'large_banner_right_text_h5'  => $request->large_banner_right_text_h5,
                'large_banner_right_text_p'  => $request->large_banner_right_text_p
            ]
            ];
            if(!empty($imagePath)){
                $value['banner_four']['banner_image'] = $imagePath;
            }else {
                $value['banner_four']['banner_image']= $request->banner_old_image;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'homepage_section_banner_four'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
    }
    /**
     * To handle product page banner
     */
    public function productPageBanner(Request $request)
    {
        $request->validate([
            'banner_image' => ['image'],
            'banner_url' => ['required'],
            'product_page_banner_text_p'=>['nullable'],
            'product_page_banner_text_span_p'=>['nullable'],
            'product_page_banner_text_h5'=>['nullable'],
            'product_page_banner_text_h3'=>['nullable']
        ]);

        /**Handle the image upload */
        $imagePath = $this->updateImage($request, 'banner_image','uploads');
        $value = [
            'banner_four'=> [
                'banner_url' => $request->banner_url,
                'status' => $request->status == 'on' ? 1 : 0,
                'product_page_banner_text_p'=>$request->product_page_banner_text_p,
                'product_page_banner_text_span_p'=>$request->product_page_banner_text_span_p,
                'product_page_banner_text_h5'=>$request->product_page_banner_text_h5,
                'product_page_banner_text_h3'=>$request->product_page_banner_text_h3
            ]
            ];
            if(!empty($imagePath)){
                $value['banner_four']['banner_image'] = $imagePath;
            }else {
                $value['banner_four']['banner_image']= $request->banner_old_image;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'product_page_banner'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();

    }
    /**
     * Method to handle image upload for cart page
     */
    public function cartPageBanner(Request $request)
    {
        $request->validate([
            'banner_image_one' => ['image'],
            'banner_url_one' => ['required'],
            'cart_page_banner_left_text_h6' => ['nullable'],
            'cart_page_banner_left_text_span_h6' => ['nullable'],
            'cart_page_banner_left_text_h3' => ['nullable'],
            'banner_image_two' => ['image'],
            'banner_url_two' => ['required'],
            'cart_page_banner_right_text_h6' => ['nullable'],
            'cart_page_banner_right_text_span_h6' => ['nullable'],
            'cart_page_banner_right_text_h3' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePathOne = $this->updateImage($request, 'banner_image_one','uploads');
        $imagePathTwo = $this->updateImage($request, 'banner_image_two','uploads');
        $value = [
            'banner_two_1'=> [
                'banner_url_one' => $request->banner_url_one,
                'status_one' => $request->status_one == 'on' ? 1 : 0,
                'cart_page_banner_left_text_h6' =>$request->cart_page_banner_left_text_h6,
                'cart_page_banner_left_text_span_h6' =>$request->cart_page_banner_left_text_span_h6,
                'cart_page_banner_left_text_h3' =>$request->cart_page_banner_left_text_h3
            ],
            'banner_two_2'=> [
                'banner_url_two' => $request->banner_url_two,
                'status_two' => $request->status_two == 'on' ? 1 : 0,
                'cart_page_banner_right_text_h6' =>$request->cart_page_banner_right_text_h6,
                'cart_page_banner_right_text_span_h6' =>$request->cart_page_banner_right_text_span_h6,
                'cart_page_banner_right_text_h3'=>$request->cart_page_banner_right_text_h3
            ]
            ];
            if(!empty($imagePathOne)){
                $value['banner_two_1']['banner_image_one'] = $imagePathOne;
            }else {
                $value['banner_two_1']['banner_image_one']= $request->banner_old_image_one;
            }
            if(!empty($imagePathTwo)){
                $value['banner_two_2']['banner_image_two'] = $imagePathTwo;
            }else {
                $value['banner_two_2']['banner_image_two']= $request->banner_old_image_two;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'cart_page_banner'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
    }
    //Flash Sales Page Banner
    //Homepage banner section two logic
    public function flashSalesPageBanner(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'banner_image_one' => ['image'],
            'banner_url_one' => ['required'],
            'single_banner_text_h6_1' => ['nullable'],
            'single_banner_text_h6_span_1' => ['nullable'],
            'single_banner_text_h3_1' => ['nullable'],
            'banner_image_two' => ['image'],
            'banner_url_two' => ['required'],
            'single_banner_text_h6_2' => ['nullable'],
            'single_banner_text_h6_span_2' => ['nullable'],
            'single_banner_text_h3_2' => ['nullable']
        ]);

        /**Handle the image upload */
        $imagePathOne = $this->updateImage($request, 'banner_image_one','uploads');
        $imagePathTwo = $this->updateImage($request, 'banner_image_two','uploads');
        $value = [
            'banner_two_1'=> [
                'banner_url_one' => $request->banner_url_one,
                'status_one' => $request->status_one == 'on' ? 1 : 0,
                'single_banner_text_h6_1' => $request->single_banner_text_h6_1,
                'single_banner_text_h6_span_1' => $request->single_banner_text_h6_span_1,
                'single_banner_text_h3_1' => $request->single_banner_text_h3_1
            ],
            'banner_two_2'=> [
                'banner_url_two' => $request->banner_url_two,
                'status_two' => $request->status_two == 'on' ? 1 : 0,
                'single_banner_text_h6_2' => $request->single_banner_text_h6_2,
                'single_banner_text_h6_span_2' => $request->single_banner_text_h6_span_2,
                'single_banner_text_h3_2' => $request->single_banner_text_h3_2
            ]
            ];
            if(!empty($imagePathOne)){
                $value['banner_two_1']['banner_image_one'] = $imagePathOne;
            }else {
                $value['banner_two_1']['banner_image_one']= $request->banner_old_image_one;
            }
            if(!empty($imagePathTwo)){
                $value['banner_two_2']['banner_image_two'] = $imagePathTwo;
            }else {
                $value['banner_two_2']['banner_image_two']= $request->banner_old_image_two;
            }

            $value = json_encode($value);
            Advertisement::updateOrCreate(
                ['key' => 'flash_sales_page_banner'],
                ['value' => $value]
            );

            toastr('Updated Successfully!','success','success');

            return redirect()->back();
    }

}
