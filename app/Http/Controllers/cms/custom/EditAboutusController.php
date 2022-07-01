<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Support\Facades\File;

class EditAboutusController extends Controller
{
    //
    public function editAboutus(){
        $page = CustomPage::find(2);

        $aboutus_heading = DB::table('aboutus_page_heading')->where('id', '1')->first();
        $top_info_section = DB::table('aboutus_top_info_section')->where('id', '1')->first();
        $aboutus_section = DB::table('aboutus_section')->where('id', '1')->first();
        $ourwork_section = DB::table('aboutus_our_work_section')->where('id', '1')->first();
        $chief_officer = DB::table('aboutus_cheif_officer')->where('id', '1')->first();
        $our_product = DB::table('aboutus_about_our_product_section')->where('id', '1')->first();
        $product_info_section = DB::table('aboutus_our_product_info_section')->where('id', '1')->first();
        $our_customer = DB::table('aboutus_our_customer')->where('id', '1')->first();

        return view('admin.cms.custome-pages.edit-aboutus', compact('page','aboutus_heading', 'top_info_section','aboutus_section', 'ourwork_section', 'chief_officer','our_product', 'product_info_section','our_customer'));
    }

                        //Aboutus page
    //heading
    public  function aboutusHeadingUpdate(Request $request){
        $data = DB::table('aboutus_page_heading')->where('id', '1')->first();
        if($data !=null){

            if($request->aboutus_heading){
                $d = $request->aboutus_heading;
            }
            $result = DB::table('aboutus_page_heading')->where('id', $data->id)->update([
                'aboutus_heading'=> $d,
            ]);
            if($result){
                return redirect()->back()->with('success' , 'AboutUs heading updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";
        }

    }
    // Top Info section
    public function topInfoSectionUpdate(Request $request){
        $data = DB::table('aboutus_top_info_section')->where('id', '1')->first();
        if($data != null){
            if($request->value_1){
                $v1 = $request->value_1;
            }
            if($request->text_1){
                $t1 = $request->text_1;
            }
            if($request->icon_1){
                $file = $request->file('icon_1');
                $icon_1 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/top-info-section-icon/';
                $file->move($destinationPath, $icon_1);
            }

            if($request->value_2){
                $v2 = $request->value_2;
            }
            if($request->text_2){
                $t2 = $request->text_2;
            }
            if($request->icon_2){
                $file = $request->file('icon_2');
                $icon_2 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/top-info-section-icon/';
                $file->move($destinationPath, $icon_2);
            }
            if($request->value_3){
                $v3 = $request->value_3;
            }
            if($request->text_1){
                $t3 = $request->text_3;
            }
            if($request->icon_3){
                $file = $request->file('icon_3');
                $icon_3 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/top-info-section-icon/';
                $file->move($destinationPath, $icon_3);
            }
            $result = DB::table('aboutus_top_info_section')->where('id', $data->id)->update([
                'value_1' => $v1,
                'text_1' => $t1,
                'icon_1' => $icon_1,

                'value_2' => $v2,
                'text_2' => $t2,
                'icon_2' => $icon_2,

                'value_3' => $v3,
                'text_3' => $t3,
                'icon_3' => $icon_3,

            ]);
            if($result){
                return redirect()->back()->with('success' , 'AboutUs page top section updated!');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }

        }else{
            $data = "";
        }

    }

    //aboutus section
    public function aboutusSectionUpdate(Request $request){
        $data = DB::table('aboutus_section')->where('id', '1')->first();
        if($data != null){
            if($request->our_heading){
               $our_heading = $request->our_heading;
            }
            if($request->our_description){
                $our_description = $request->our_description;
            }
            $data_set =[
                'our_heading' => $our_heading,
                'our_description' => $our_description,
            ];
            if($request->our_image){
                $destination = public_path('frontend').'/images/About-rrstek/aboutus-section/'.$data->our_image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('our_image');
                $filename = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/aboutus-section/';
                $file->move($destinationPath,$filename);
                $data_set =[
                    'our_heading' => $our_heading,
                    'our_description' => $our_description,
                    'our_image' => $filename,

                ];
            }

            $result = DB::table('aboutus_section')->where('id', $data->id)->update($data_set);
            if($result){
                return redirect()->back()->with('success' , 'AboutUs section updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";

        }

    }

    // our work section
    public function ourworkSectionUpdate(Request $request){
        $data = DB::table('aboutus_our_work_section')->where('id', '1')->first();

        if($data != null){
            if($request->our_work_heading){
                $our_work_heading = $request->our_work_heading;
            }
            if($request->sub_heading_1){
                $sub_heading_1 = $request->sub_heading_1;
            }
            if($request->sub_heading_1_icon !=null){
                //delete file form folder functionality
                $desti_1 = public_path('frontend').'/images/About-rrstek/ourwork-section/'.$data->sub_heading_1_icon;
                if(File::exists($desti_1)){
                    File::delete($desti_1);
                }
                $file = $request->file('sub_heading_1_icon');
                $filename_1 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/ourwork-section/';
                $file->move($destinationPath,$filename_1);
            }
            if($request->sub_heading_2){
                $sub_heading_2 = $request->sub_heading_2;
            }
            if($request->sub_heading_2_icon !=null){
                //delete file form folder functionality
                $desti_2 = public_path('frontend').'/images/About-rrstek/ourwork-section/'.$data->sub_heading_2_icon;
                if(File::exists($desti_2)){
                    File::delete($desti_2);
                }
                $file = $request->file('sub_heading_2_icon');
                $filename_2 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/ourwork-section/';
                $file->move($destinationPath,$filename_2);
            }

            if($request->sub_heading_3){
                $sub_heading_3 = $request->sub_heading_3;
            }
            if($request->sub_heading_3_icon !=null){
                //delete file form folder functionality
                $desti_3 = public_path('frontend').'/images/About-rrstek/ourwork-section/'.$data->sub_heading_3_icon;
                if(File::exists($desti_3)){
                    File::delete($desti_3);
                }
                $file = $request->file('sub_heading_3_icon');
                $filename_3 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/ourwork-section/';
                $file->move($destinationPath,$filename_3);
            }

            if($request->sub_heading_4){
                $sub_heading_4 = $request->sub_heading_4;
            }
            if($request->sub_heading_4_icon !=null){
                //delete file form folder functionality
                $desti_4 = public_path('frontend').'/images/About-rrstek/ourwork-section/'.$data->sub_heading_4_icon;
                if(File::exists($desti_4)){
                    File::delete($desti_4);
                }

                $file = $request->file('sub_heading_4_icon');
                $filename_4 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/ourwork-section/';
                $file->move($destinationPath,$filename_4);
            }
            // dd($filename);
            $result = DB::table('aboutus_our_work_section')->where('id', $data->id)->update([
                'our_work_heading' => $our_work_heading,

                'sub_heading_1' => $sub_heading_1,
                'sub_heading_1_icon' => $filename_1,

                'sub_heading_2' => $sub_heading_2,
                'sub_heading_2_icon' => $filename_2,

                'sub_heading_3' => $sub_heading_3,
                'sub_heading_3_icon' => $filename_3,

                'sub_heading_4' => $sub_heading_4,
                'sub_heading_4_icon' => $filename_4,

            ]);
            if($result){
                return redirect()->back()->with('success' , 'Our Work section updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";

        }
    }
    //chief Office
    public function chiefOfficeUpdate(Request $request){
        $data = DB::table('aboutus_cheif_officer')->where('id', '1')->first();
        if($data != null){
            if($request->name){
               $name = $request->name;
            }
            if($request->about){
                $about = $request->about;
            }
            $data_set =[
                'name' => $name,
                'about' => $about,
            ];
            if($request->image){
                $destination = public_path('frontend').'/images/About-rrstek/chief-officer/'.$data->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('image');
                $filename = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/chief-officer/';
                $file->move($destinationPath,$filename);
                $data_set =[
                    'name' => $name,
                    'about' => $about,
                    'image' => $filename,

                ];
            }

            $result = DB::table('aboutus_cheif_officer')->where('id', $data->id)->update($data_set);
            if($result){
                return redirect()->back()->with('success' , 'Chief officer data updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";

        }
    }

    // About Our Product Section
    public function ourProductUpdate(Request $request)
    {
        $data = DB::table('aboutus_about_our_product_section')->where('id','1')->first();
        if($data != null){
            if($request->heading){
                $h = $request->heading;
            }

            if($request->text_1){
                $t1 = $request->text_1;
            }
            if($request->icon_1){
                $file = $request->file('icon_1');
                 $filename_1 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/our-product/';
                $file->move($destinationPath, $filename_1);
                $data_array = [
                    'icon_1' => $filename_1,
                ];

            }
            if($request->text_2){
                $t2 = $request->text_2;
            }
            if($request->icon_2){
                $file = $request->file('icon_2');
                $filename_2 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/our-product/';
                $file->move($destinationPath, $filename_2);
                $data_array = [
                    'icon_2' => $filename_2,
                ];

            }
            if($request->text_3){
                $t3 = $request->text_3;
            }
            if($request->icon_3){
                $file = $request->file('icon_3');
                $filename_3 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/our-product/';
                $file->move($destinationPath, $filename_3);
                $data_array = [
                    'icon_3' => $filename_3,
                ];

            }
            if($request->text_4){
                $t4 = $request->text_4;
            }
            if($request->icon_4){
                $file = $request->file('icon_4');
                $filename_4 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/our-product/';
                $file->move($destinationPath, $filename_4);
                $a = [
                    'icon_4' => $filename_4,
                ];

            }
            $result = DB::table('aboutus_about_our_product_section')->where('id', '1')->update([
                'heading' => $h,

                'text_1' => $t1,
                'icon_1' => $filename_1,

                'text_2' => $t2,
                'icon_2' => $filename_2,

                'text_3' => $t3,
                'icon_3' => $filename_3,

                'text_4' => $t4,
                'icon_4' => $filename_4,
            ]);
            if($result){
                return redirect()->back()->with('success' , 'Our product section data updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";
        }
    }

    //our product info section
    public function productInfoSectionUpdate(Request $request){
        $data = DB::table('aboutus_our_product_info_section')->where('id','1')->first();
        if($data != null){
            if($request->value_1){
                $v1 = $request->value_1;
            }

            if($request->text_1){
                $t1 = $request->text_1;
            }
            if($request->icon_1){
                $file = $request->file('icon_1');
                 $filename_1 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/product_info_section/';
                $file->move($destinationPath, $filename_1);

            }
            if($request->value_2){
                $v2 = $request->value_2;
            }

            if($request->text_2){
                $t2 = $request->text_2;
            }
            if($request->icon_1){
                $file = $request->file('icon_2');
                 $filename_2 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/product_info_section/';
                $file->move($destinationPath, $filename_2);

            }
            if($request->value_3){
                $v3 = $request->value_3;
            }

            if($request->text_1){
                $t3 = $request->text_3;
            }
            if($request->icon_3){
                $file = $request->file('icon_3');
                 $filename_3 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/product_info_section/';
                $file->move($destinationPath, $filename_3);

            }
            if($request->value_4){
                $v4 = $request->value_4;
            }

            if($request->text_1){
                $t4 = $request->text_4;
            }
            if($request->icon_4){
                $file = $request->file('icon_4');
                 $filename_4 = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/product_info_section/';
                $file->move($destinationPath, $filename_4);
            }

            $result = DB::table('aboutus_our_product_info_section')->where('id', '1')->update([
                'value_1' => $v1,
                'text_1' => $t1,
                'icon_1' => $filename_1,

                'value_2' => $v2,
                'text_2' => $t2,
                'icon_2' => $filename_2,

                'value_3' => $v3,
                'text_3' => $t3,
                'icon_3' => $filename_3,

                'value_4' => $v4,
                'text_4' => $t4,
                'icon_4' => $filename_4,

            ]);
            if($result){
                return redirect()->back()->with('success' , 'Product info section data updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";
        }
    }

    //our customer section
    public function ourCustomerUpdate(Request $request){
        $data = DB::table('aboutus_our_customer')->where('id', '1')->first();
        if($data != null){
            if($request->heading){
               $d = $request->heading;
            }
            $data_set =[
                'heading' => $d,
            ];
            if($request->image){
                $destination = public_path('frontend').'/images/About-rrstek/our-customer/'.$data->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('image');
                $filename = rand().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('frontend').'/images/About-rrstek/our-customer/';
                $file->move($destinationPath,$filename);
                $data_set =[
                    'heading' => $d,
                    'image' => $filename,

                ];
            }

            $result = DB::table('aboutus_our_customer')->where('id', $data->id)->update($data_set);
            if($result){
                return redirect()->back()->with('success' , 'Our work section updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong!');

            }
        }else{
            $data = "";

        }

    }

                //contactus functions for  dynamic page content
    public function editContactus(Request $request){

        $page = CustomPage::find(3);
        $contactus = ContactUs::find(1);
        return view('admin.cms.custome-pages.edit-contactus', compact('page','contactus'));
    }
    //main page section
    public function contactusMainUpdate(Request $request){
        $data = ContactUs::find(1);
        if($data !=null){
            $data = new ContactUs;
        }
        if($request->main_heading){
            $data->main_heading = $request->main_heading;
        }
        if($request->small_description){
            $data->small_description = $request->small_description;
        }
        if($data->save)
        {
            return redirect()->back()->with('success' , 'Contact us page data has been updated successfully');
        }else{
            return redirect()->back()->with('error' , 'Something went wrong!');

        }

    }
}
