<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Hash;
use DB;
use Auth;
use App\Models\SliderModel;
use App\Models\SubSliderModel;
use App\Models\VideoModel;
use App\Models\SuccessStoriesModel;
use App\Models\SchemeModel;
use App\Models\FAQModel;
use App\Models\BusinessModel;
use App\Models\ROIAnalysisModel;
use App\Models\ChapterModel;
use App\Models\GalleryModel;
use App\Models\SubchapterBookletModel;
use App\Models\ChapterBookletModel;
use App\Models\BookletGalleryModel;
use App\Models\UnitBookletModel;
use App\Models\BookletModel;
use App\Models\MapModel;
use App\Models\KnowledgeSeriesModel;
use App\Models\BusinessState;

class AdminController extends Controller
{



    public function __construct()
    {
  
            $this->middleware('IsAdmin');
              
    }

    

    public function index()
    {
        return View('admin.index');
        // print_r(Auth::user());
    }

    ///////////////////////////// Slider//////////////////////

    public function add_Slider()
    {
        return View('admin.addSlider');
    }


    public function save_slider(Request $request)
    {
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,jpg,png'
            ]);
           $data= $request->file->store('admin/images/slider', 'public');

            $slider = new SliderModel([
                "title" => $request->get('name'),
                "lang" => $request->get('lang'),
                "category" => $request->get('category'),
                "slider_active" => $request->get('slider_active'),
                "image" => $data
            ]);
            $slider->save();
            // dd($slider);
        } 
        return redirect('Slider-List')->with('message', 'IT WORKS!');
  }

    public function slider_list()
    {
        $slider=DB::table('add_slider')->get();
        return view('admin.SliderList')->with('slider', $slider);
    }

    public function destory_slider($id)
    {
        DB::delete('delete from add_slider where slider_id = ?', [$id]);
        return redirect()->back()->with('deleted', 'deleted');
    }


    public function show_slider($slider_id) {
        $data= SliderModel::find($slider_id);
        return view('admin.edit_slider',['data'=>$data]);
     }

     public function update_slider(Request $request)
     {
     
        $title=$request->post('title');
        $category=$request->post('category');
        $banner_ordering=$request->post('banner_ordering');
        $slider_active=$request->post('slider_active');
        $status=$request->post('status');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=SliderModel::find($id);
            $slider->title=$title;
            $slider->category=$category;
            $slider->banner_ordering=$banner_ordering;
            $slider->slider_active=$slider_active;
            $slider->status=$status;
            $slider->save();
            // echo 1;
            return redirect ('Slider-List');
        }
        else{
            if($request->file('file')){
            
                $path=$request->file('file')->store('/admin/images/slider','public');
                $arr=array(
                        "title"=>$title,
                        "category"=>$category,
                        "banner_ordering"=>$banner_ordering,
                        "slider_active"=>$slider_active,
                        "status"=>$status,
                        "image"=>$path
                    );
                    // dd($arr);
                        $data=SliderModel::update_slider($id,$arr);
                        echo $data;
                        return redirect('Slider-List')->with('messages', 'IT WORKS!');
                   
           }
            else{
                echo 4;
                 }
         }
    }


  

     /////////////////////////////Sub Slider//////////////////////

     public function add_Sub_Slider()
     {
         return View('admin.subSlider');
     }

     public function save_sub_slider(Request $request)
     {
           if ($request->hasFile('file')) {
   
               $request->validate([
                   'image' => 'mimes:jpeg,bmp,png'
               ]);
               $path=$request->file('file')->store('/admin/images/sub_slider','public');
   
               $sub_slider = new SubSliderModel([
                   "title" => $request->get('title'),
                   "lang" => $request->get('lang'),
                   "category" => $request->get('category'),
                   "sub_title" => $request->get('sub_title'),
                   "sub_category" => $request->get('sub_category'),
                   "description" => $request->get('description'),
                   "link" => $request->get('link'),

                   "subslider_active" => $request->get('slider_active'),
                   "image" => $path
               ]);
               $sub_slider->save();
           }
           return redirect('Sub-Slider-List')->with('message', 'IT WORKS!');
        // return redirect ('Sub-Slider-List');
     }

     public function sub_slider_list()
    {
        $slider=DB::table('subslider')->get();
        return view('admin.SubSliderList')->with('slider', $slider);
    }

    public function destory_sub_slider($id)
    {
        DB::delete('delete from subslider where id = ?', [$id]);
        return redirect()->back()->with('deleted', 'deleted');
    }

    public function show_sub_slider($id) {
        $data= SubSliderModel::find($id);
        return view('admin.edit_sub_slider',['data'=>$data]);
     }

     public function update_sub_slider(Request $request)
     {
     
        $title=$request->post('title');
        $category=$request->post('category');
        $sub_title=$request->post('sub_title');
        $sub_category=$request->post('sub_category');
        $description=$request->post('description');
        $link=$request->post('link');
        $status=$request->post('status');
        $banner_ordering=$request->post('banner_ordering');
        $subslider_active=$request->post('subslider_active');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=SubSliderModel::find($id);
            $slider->title=$title;
            $slider->category=$category;
            $slider->sub_title=$sub_title;
            $slider->sub_category=$sub_category;
            $slider->description=$description;
            $slider->link=$link;
            $slider->status=$status;
            $slider->banner_odering=$banner_ordering;
            $slider->subslider_active=$subslider_active;
            $slider->save();
            // echo 1;
            return redirect('Sub-Slider-List')->with('messages', 'IT WORKS!');
        }
        else{
            if($request->file('file')){
            
                $path=$request->file('file')->store('/admin/images/sub_slider','public');
                $arr=array(
                        "title"=>$title,
                        "category"=>$category,
                        "sub_title"=>$sub_title,
                        "sub_category"=>$sub_category,
                        "description"=>$description,
                        "link"=>$link,
                        "status"=>$status,
                        "banner_odering"=>$banner_ordering,
                        "subslider_active"=>$subslider_active,
                        "image"=>$path
                    );
                    // dd($arr);
                        $data=SubSliderModel::update_sub_slider($id,$arr);
                        echo $data;
                        return redirect('Sub-Slider-List')->with('messages', 'IT WORKS!');
                   
           }
            else{
                echo 4;
                 }
         }
    }

    ////////////////////////////Add Video//////////////////////////////

    public function video()
    {
        return View('admin.video');
    }

    public function save_video(Request $request)
    {
          if ($request->hasFile('file')) {
  
              $request->validate([
                  'image' => 'mimes:jpeg,bmp,png'
              ]);
              $path=$request->file('file')->store('/admin/video/thumbnail_image','public');
  
              $video = new VideoModel([
                  "title" => $request->get('title'),
                  "lang" => $request->get('lang'),
                  "category" => $request->get('category'),
                  "description" => $request->get('description'),
                  "video_url" => $request->get('url'),

                  "video_active" => $request->get('video_active'),
                  "thumbnail_image" => $path
              ]);
              $video->save();
          }
          return redirect('Video-List')->with('message', 'IT WORKS!');
        // return redirect ('Video-List');
    }

    public function video_list()
    {
        $video=DB::table('video')->get();
        return view('admin.VideoList')->with('video', $video);
    }

    public function destory_video($id)
    {
        DB::delete('delete from  video where id = ?', [$id]);
        return redirect()->back()->with('deleted', 'deleted');
    }


    public function show_video($id)
     {
        $data= VideoModel::find($id);
        return view('admin.edit_video',['data'=>$data]);
     }

     public function update_video(Request $request)
     {

        $category=$request->post('category');
        $title=$request->post('title');
        $description=$request->post('description');
        $url=$request->post('url');
        $status=$request->post('status');
        $video_active=$request->post('video_active');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=VideoModel::find($id);
            $slider->category=$category;
            $slider->title=$title;
            $slider->description=$description;
            $slider->video_url=$url;
            $slider->status=$status;
            $slider->video_active=$video_active;
            $slider->save();
            return redirect('Video-List')->with('messages', 'IT WORKS!');
        }
        else{
            if($request->file('file')){
            
                $path=$request->file('file')->store('/admin/video/thumbnail_image','public');
                $arr=array(
                        "title"=>$title,
                        "category"=>$category,
                        "description"=>$description,
                        "video_url"=>$url,
                        "status"=>$status,
                        "video_active"=>$video_active,
                        "thumbnail_image"=>$path
                    );
                    // dd($arr);
                        $data=VideoModel::update_video($id,$arr);
                        echo $data;
                        return redirect('Video-List')->with('messages', 'IT WORKS!');
                   
           }
            else{
                echo 4;
                 }
         }
     }
     ////////////////////////////Success Stories//////////////////////////////

     public function success_stories()
     {
         return View('admin.success_stories');
     }

     public function save_success_stories(Request $request)
    {
          if ($request->hasFile('file')) {
  
              $request->validate([
                  'image' => 'mimes:jpeg,png,png'
              ]);
              $path=$request->file('file')->store('/admin/images/success_stories','public');
              
              $stories = new SuccessStoriesModel([
                  "category" => $request->get('category'),
                  "lang" => $request->get('lang'),
                  "title" => $request->get('title'),
                  "description" => $request->get('description'),
                  "success_s_active" => $request->get('active'),
                  "image" => $path
              ]);
              $stories->save();
            //   print_r($stories);
          }
          
          return redirect('Success-Stories-List')->with('message', 'IT WORKS!');
        // return redirect ('Success-Stories-List');
    }
    

    public function success_stories_list()
    {
        $stories=DB::table('succes_stories')->get();
        return view('admin.success_stories_list')->with('stories', $stories);
    }

    public function destory_stories($id)
    {
        DB::delete('delete from  succes_stories where id = ?', [$id]);
        return redirect()->back()->with('deleted', 'deleted');
    }


    public function show_stories($id) {
        $data= SuccessStoriesModel::find($id);
        return view('admin.edit_stories',['data'=>$data]);
     }

     public function update_stories(Request $request)
     {

        $category=$request->post('category');
        $title=$request->post('title');
        $description=$request->post('description');
        $status=$request->post('status');
        $active=$request->post('active');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=SuccessStoriesModel::find($id);
            $slider->category=$category;
            $slider->title=$title;
            $slider->description=$description;
            $slider->status=$status;
            $slider->success_s_active=$active;
            $slider->save();
            return redirect('Success-Stories-List')->with('messages', 'IT WORKS!');
        }
        else{
            if($request->file('file')){
            
                $path=$request->file('file')->store('/admin/images/success_stories','public');
                $arr=array(
                        "title"=>$title,
                        "category"=>$category,
                        "description"=>$description,
                        "status"=>$status,
                        "success_s_active"=>$active,
                        "image"=>$path
                    );
                    // dd($arr);
                        $data=SuccessStoriesModel::update_stories($id,$arr);
                        echo $data;
                        return redirect('Success-Stories-List')->with('messages', 'IT WORKS!');
                   
           }
            else{
                echo 4;
                 }
         }
    }

     ////////////////////////////Scheme//////////////////////////////
     
     public function scheme()
     {
         return View('admin.scheme');
     }

     public function save_scheme(Request $request)
     {
               

        if ($request->hasFile('file')) {
   
               
               $path=$request->file('file')->store('/admin/images/scheme','public');
               
              
            //    dd($scheme);
           }
           else{
               $path='';
           }
           $scheme = new SchemeModel([
            "main_category" => $request->get('m_category'),
            "lang" => $request->get('lang'),
            "category" => $request->get('category'),
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "url" => $request->get('url'),
            "scheme_active" => $request->get('scheme_active'),
            "document" => $path
        ]);
        $scheme->save();
        return redirect('Scheme-List')->with('message', 'IT WORKS!');
     }

     public function scheme_list()
     {
         $scheme=DB::table('scheme')->get();
         return view('admin.scheme_list')->with('scheme', $scheme);
     }

     public function destory_scheme($id)
    {
        DB::delete('delete from   scheme where id = ?', [$id]);
        return redirect()->back()->with('deleted', 'deleted');
    }

    public function show_scheme($id) {
        $data= SchemeModel::find($id);
        return view('admin.edit_scheme',['data'=>$data]);
     }

     public function update_scheme(Request $request)
     {

        $m_category=$request->post('m_category');
        $category=$request->post('category');
        $title=$request->post('title');
        $description=$request->post('description');
        $url=$request->post('url');
        $status=$request->post('status');
        $scheme_active=$request->post('scheme_active');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=SchemeModel::find($id);
            $slider->main_category=$m_category;
            $slider->category=$category;
            $slider->title=$title;
            $slider->description=$description;
            $slider->url=$url;
            $slider->status=$status;
            $slider->scheme_active=$scheme_active;
            $slider->save();
            return redirect('Scheme-List')->with('messages', 'IT WORKS!');
        }
        else{
            if($request->file('file')){
            
                $path=$request->file('file')->store('/admin/images/scheme','public');
                $arr=array(
                        "title"=>$title,
                        "category"=>$category,
                        "main_category"=>$m_category,
                        "description"=>$description,
                        "url"=>$url,
                        "status"=>$status,
                        "scheme_active"=>$scheme_active,
                        "document"=>$path
                    );
                    // dd($arr);
                        $data=SchemeModel::update_scheme($id,$arr);
                        echo $data;
                        return redirect('Scheme-List')->with('messages', 'IT WORKS!');
                   
           }
            else{
                echo 4;
                 }
         }
     }

    ////////////////////////////Scheme//////////////////////////////
     
     public function faq()
          {
              return View('admin.FAQ');
          }
     
          public function save_faq(Request $request)
          {
                    $faq = new FAQModel([
                        "category" => $request->get('category'),
                        "lang" => $request->get('lang'),
                        "question" => $request->get('question'),
                        "answer" => $request->get('answer'),
                        "faq_active" => $request->get('faq_active'),
                    ]);
                    $faq->save();
                    return redirect('FAQ-List')->with('message', 'IT WORKS!');
                    // return redirect ('FAQ-List');
          }


          public function faq_list()
          {
              $faq=DB::table('faq')->get();
              return view('admin.faq_list')->with('faq', $faq);
          }
    public function destory_faq($id)
       {
              DB::delete('delete from   faq where id = ?', [$id]);
              return redirect()->back()->with('deleted', 'deleted');
       }

    
    
    
     ////////////////////////////////////View News Letter///////////////////////////
    public function view_newsletter()
    {
         $newsletter=DB::table('newsletter')->get();
        return View('admin.view_newsletter')->with('newsletter', $newsletter);
    }


    ///////////////////////////Business model////////////////////////////
    public function business_model()
    {
        $business=DB::table('business_model')->get();
        $path = asset("public/state.json"); 
        $jsonstate = json_decode(file_get_contents($path), true); 
        $booklet['abc']=UnitBookletModel::all()->groupBy('code');
        $booklet['gallerybooklet']=BookletGalleryModel::all()->groupBy('code');
        return View('admin.business_model')->with('business', $business)->with('jsonstate', $jsonstate)->with('booklet',$booklet);
    }

    public function save_business_model(Request $request)
    {
   
            $rand=rand(1000,9999);
            if ($request->file('banner_image')) {
                $imagePath = $request->file('banner_image');
                $imageName = $imagePath->getClientOriginalName();
                $path2 = $request->file('banner_image')->storeAs('attachment', $imageName, 'public');
                    if ($request->file('attachment')) {
                        $imagePath = $request->file('attachment');
                        $imageName = $imagePath->getClientOriginalName();
                        $path1 = $request->file('attachment')->storeAs('booklet', $imageName, 'public');
                    }
                    else{
                        $path1="";
                    }
                
                    $booklet_title=$request->input('booklet_title');
                    $type = $request->input('type');
                    $lang = $request->input('lang');
                    $booklet_description=$request->input('booklet_description');
                    $attachment=$path1;
                    $banner_image=$path2;
                    $booklet_unit=$request->input('booklet_unit');
                    $booklet_gallery=$request->input('booklet_gallery');
                    $booklet_active=$request->input('booklet_active');
                    if($booklet_gallery==""){

                    }
                    else{
                        if (BookletModel::where('booklet_gallery', '=', $booklet_gallery)->exists()) {
                        return redirect('business-model')->withErrors(['Gallery has been already added']);
                        }
                    }
                    
                    $fields = array();
                    $field_notfound=0;
                    for($i = 0; $i<count($booklet_unit); $i++)
                    {
                        if (BookletModel::where('booklet_unit', '=', $booklet_unit[$i])->exists()) {
                        $field_notfound++;
                        return redirect('business-model')->withErrors(['Unit has been already added']);
                        }else{

                            $fields[$i]['code'] = $rand;
                            $fields[$i]['booklet_title'] = $booklet_title;
                            $fields[$i]['type'] = $type;
                            $fields[$i]['lang'] = $lang;
                            $fields[$i]['booklet_description'] = $booklet_description;
                            $fields[$i]['attachment'] = $attachment;
                            $fields[$i]['banner_image'] = $banner_image;
                            $fields[$i]['booklet_unit'] = $booklet_unit[$i];
                            $fields[$i]['booklet_gallery'] = $booklet_gallery;
                            $fields[$i]['booklet_active'] = $booklet_active;
                        }
                     }
                
            }
            $state=array("state"=>$request->input('state'),"code"=>$rand);
            BusinessState::insert($state);
            BookletModel::insert($fields);
            $title=$request->input('title');
            $value=$request->input('value');
            $color=$request->input('color');

            $meta_box = array(  
                'code' => $rand,
                'title' => $title,
                'value' => $value,
                'color' => $color,
                );

                $fields = array();
                for($i = 0; $i<count($title); $i++){
                    $fields[$i]['code'] = $rand;
                    $fields[$i]['title'] = $title[$i];
                    $fields[$i]['value'] = $value[$i];
                    $fields[$i]['color'] = $color[$i];
                }

                ROIAnalysisModel::insert($fields);
                return redirect('business-model-view')->with('message', 'IT WORKS!');

    }


    public function save_gallery(Request $request)

    {
        // $data=GalleryModel::getData();
        $gallery = array();
        // $code=$request->input('code');
        $p_title=$request->input('p_title');
        $p_active=$request->input('p_active');

        $files = [];

        if($request->hasfile('filenames'))

         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
               
                $files[] = $name;  

            }
         }
         for($j = 0; $j<count($files); $j++){
            // $chapter[$j]['code'] = $code;
            $chapter[$j]['model_name'] = $p_title;
            $chapter[$j]['image'] = $files[$j];
            $chapter[$j]['gallery_active'] = $p_active;
        }
        // GalleryModel::insert($chapter);
        dd($chapter);
        //  return redirect ('business-model-view');

    }

    //////////////////////////Business Model List View///////////////////////////

    public function business_view()
    {
        $business_model=DB::table('business_model')->get();
        // print_r($business_model);
        return view('admin.business_model_list')->with('business_model',$business_model);
       
    }


  

        //////////////////////////Delete ROI Analysis/////////////////

        public function delete_roi($id)
        {
            DB::delete('delete from  roi_analysis where id = ?', [$id]);
             return back();
        }
      
        //////////////////////////Delete Chapter/////////////////

        public function delete_chapter($id)
        {
            DB::delete('delete from  chapter where id = ?', [$id]);
             return back();
        }

           //////////////////////////Delete Business Model/////////////////

           public function delete_business($id)
           {
               DB::delete('delete from  business_model where business_id = ?', [$id]);
               return redirect()->back()->with('deleted', 'deleted');
           }
     //////////////////////////Business Model edit///////////////////////////

        public function business_show($code)
            {
                
                $path = asset("public/state.json"); 
                $json = json_decode(file_get_contents($path), true); 
                $userData= BusinessModel::getDataRoi($code);
                $chapter= BusinessModel::getDataChapter($code);
            
                // print_r($userData);
                
                return view('admin.edit_business_model',compact('userData'))->with('chapter',$chapter)->with('allstates',$json);
                
                
            }

        public function update_business_model(Request $request)
            {
    
                $state=$request->post('state');
                $b_title=$request->post('b_title');
                $description=$request->post('description');
                $link=$request->post('link');
                $code=$request->post('code');

                $title=$request->post('title');
                $value=$request->post('value');
                $color=$request->post('color');
                $fields = array();
                $meta_box = array(  
                   
                    'code' => $code,
                    'title' => $title,
                    'value' => $value,
                    'color' => $color,
                    );

                $cname=$request->input('cname');
                $c_description=$request->input('c_description');
                $chapter = array();
                $meta_box1 = array(  
                    'code' => $code,
                    'chapter_name' => $cname,
                    'c_description' => $c_description
                    );

              
                    if($request->hasFile('file')){
                    
                        $path=$request->file('file')->store('/admin/images/businessModel','public');
                        $path2=$request->file('attachment')->store('/admin/images/attachment','public');
                        $arr=array(
                                "state"=>$state,
                                "b_title"=>$b_title,
                                "b_description"=>$description,
                                "link"=>$link,
                                "banner_image" => $path,
                                "attachment" => $path2
                            );
                            // dd($arr);
                                $data=BusinessModel::update_business($code,$arr);
                                echo $data;

                                                
                                ROIAnalysisModel::where('code', '=' ,$code)->delete();
                                
                                for($i = 0; $i<count($title); $i++){
                                    $fields[$i]['code'] = $code;
                                    $fields[$i]['title'] = $title[$i];
                                    $fields[$i]['value'] = $value[$i];
                                    $fields[$i]['color'] = $color[$i];
                                }

                                ROIAnalysisModel::insert($fields);


                                ChapterModel::where('code', '=' ,$code)->delete();

                                    for($j = 0; $j<count($cname); $j++){
                                        $chapter[$j]['code'] = $code;
                                        $chapter[$j]['chapter_name'] = $cname[$j];
                                        $chapter[$j]['c_description'] = $c_description[$j];
                                    }
                            
                                ChapterModel::insert($chapter);

                                return redirect('business-model-view')->with('messages', 'IT WORKS!');
                           
                   }
                    else
                    {
                        $business=BusinessModel::where('code','=',$code)->update(
                            [
                                'state'=>$state,
                                'b_title'=>$b_title,
                                'b_description'=>$description,
                                'link'=>$link,
                            ]
                        );
                    
    
    
                        
    
                        ROIAnalysisModel::where('code', '=' ,$code)->delete();
                        
                        for($i = 0; $i<count($title); $i++){
                            $fields[$i]['code'] = $code;
                            $fields[$i]['title'] = $title[$i];
                            $fields[$i]['value'] = $value[$i];
                            $fields[$i]['color'] = $color[$i];
                        }
    
                        ROIAnalysisModel::insert($fields);
    
                    
                        ChapterModel::where('code', '=' ,$code)->delete();
    
                            for($j = 0; $j<count($cname); $j++){
                                $chapter[$j]['code'] = $code;
                                $chapter[$j]['chapter_name'] = $cname[$j];
                                $chapter[$j]['c_description'] = $c_description[$j];
                            }
                    
                        ChapterModel::insert($chapter);
                        return redirect('business-model-view')->with('messages', 'IT WORKS!');
                         }
                 

               
             
             
            }

 /////////////////////////////Unitbooklet/////////////////////

 public function Unit_booklet()
 {
     $chapter['code']=ChapterBookletModel::all()->groupBy('code');
     // dd($chapter['code']);
     return view('admin.unitbooklet')->with('chapter',$chapter['code']);
 }

 public function save_unit_booklet(Request $request)
 {
     $rand=rand(1000,9999);
     $type=$request->input('type');
     $lang=$request->input('lang');
     $unitchapter_title=$request->input('unitchapter_title');
     $unit_chapter=$request->input('unit_chapter');
     $unit_description=$request->input('unit_description');
   
         $fields = array();
         $fields_notfound=0;
         for($i = 0; $i<count($unit_chapter); $i++){
             if (UnitBookletModel::where('chapter_id', '=', $unit_chapter[$i])->exists()) {
             $fields_notfound++;
             }
             else{
                 $fields[$i]['code'] = $rand;
                 $fields[$i]['lang'] = $lang;
                 $fields[$i]['type'] = $type;
                 $fields[$i]['unit_title'] = $unitchapter_title;
                 $fields[$i]['unit_description'] = $unit_description;
                 $fields[$i]['chapter_id'] = $unit_chapter[$i];
             }
             
         }
 
         UnitBookletModel::insert($fields);
        //  dd($fields);
         $unitbooklet=DB::table('unitbooklet')->get();
         if($fields_notfound==0){
            return redirect('booklet')->with('message', 'IT WORKS!')->with('unitbooklet',$unitbooklet);
         }
         else{
             return redirect('unitbooklet')->withErrors(['Record already existed.']);
         }
         
          //dd($fields);
 }

    ////////////////unitbookletlist/view//////////////////////////

    public function unit_book_list(){
    $unitbooklet=UnitBookletModel::all()->where('type','Booklet')->groupBy('code');
        return view('admin.unit_booklet_list')->with('unitbooklet',$unitbooklet);
    }

    //////////////////////////////unitbookletdelete///////////////////

    public function destroy_unitbooklet($code){

        DB::delete('delete from unitbooklet where code = ?', [$code]);
        return redirect()->back()->with('deleted', 'deleted');
    }
      
    ////////////////////////////subchapterbooklet////////////////////

    public function SubchapterBooklet(){

        $subchapterbooklet=DB::table('subchapterbooklet')->get();
       // print_r( $subchapterbooklet);
       // exit;

        return view('admin.subchapterbooklet');
    }

    public function save_subchapter_booklet(Request $request)
        {
       
            $subchapterbooklet = new SubchapterBookletModel([

            "type" => $request->get('type'),
            "lang" => $request->get('lang'),
            "subchapter_title" => $request->get('name'),
            "subchapter_des" => $request->get('description')
             
         ]);
        //  dd($business);
        $subchapterbooklet->save();

        return redirect()->back()->with('message', 'IT WORKS!');
        }
    
    //////////////////SubchapterBooklet view////////////////////////

    public function subchapterbooklet_view(){
        $subchapterbooklet=DB::table('subchapterbooklet')->where('type','Booklet')->get();
             //print_r($subchapterbooklet);
        return view('admin.subchapterbooklet_list')->with('subchapterbooklet',$subchapterbooklet);
    }


    ////////////////deletesubchapterbooklet//////////////
      
    public function destroy_subchapter($subid){
        // print_r($subid);
        // exit;
        DB::delete('delete from subchapterbooklet where subid = ?', [$subid]);
        return redirect()->back()->with('deleted', 'deleted');
    }


       //////////////////editsubchapterbooklet/////////////////////

       public function edit_subchapter($id)
       {

           $data= SubchapterBookletModel::find($id);
           // print_r($data);
           return view('admin.subchapter_booklet_edit',['data'=>$data]);
           }

     public function update_subchapter(Request $request)
        {
        $subchapter_title=$request->post('subchapter_title');
        $sub_description=$request->post('sub_description');
        $id=$request->post('id');
        if(!$request->hasFile('file')){
            $slider=SubchapterBookletModel::find($id);
            $slider->subchapter_title=$subchapter_title;
            $slider->subchapter_des=$sub_description;
            $slider->save();
            return redirect('subchapter-booklet-list')->with('messages', 'IT WORKS!');
        }
        } 
    ///////////////////// BookletGallery /////////////////////////


    public function BookletGallery(){
        $gellery=DB::table('booklet_gallery')->get();
       return View('admin.BookletGallery');
   }

    public function save_gallery_booklet(Request $request)
    { 
        
        $rand=rand(1000,9999);
        $gallery = array();
        $gallery_title=$request->input('gallery_title');
        $type=$request->input('type');
        $lang=$request->input('lang');
        $gallery_desc=$request->input('gallery_desc');
        $files = [];

        if($request->hasfile('filenames'))

         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('BookletGallery'), $name);  
                $files[] = $name;  

            }
         }

         for($j = 0; $j<count($files); $j++){
            $chapter[$j]['code'] = $rand;
            $chapter[$j]['type'] = $type;
            $chapter[$j]['lang'] = $lang;
            $chapter[$j]['gallery_title'] = $gallery_title;
            $chapter[$j]['file_upload'] = $files[$j];
            $chapter[$j]['gallery_desc'] = $gallery_desc;
        }
        BookletGalleryModel::insert($chapter);
        return redirect()->back()->with('message', 'IT WORKS!');

    }



    ///////////////////////// bookletgallery_view///////////////////
    public function bookletgallery_view()
    {
        $users['code'] = BookletGalleryModel::all()->where('type','Booklet')->groupBy('code');
  
    return view('admin.BookletGallery_list')->with('users',$users['code']);
    }

    public function bookletgallerydelete($g_id){
    $data  =    DB::delete('delete from booklet_gallery where code = ?',[$g_id]);
    return redirect()->back()->with('deleted', 'deleted');
        
    }

    ///////////////////////////booklet gallery delete image////////////////

    public function booklet_image_delete($g_id){
        $data  =    DB::delete('delete from booklet_gallery where g_id = ?',[$g_id]);
        return redirect()->back()->with('deleted', 'deleted');
            
        }


    //////////////////////////booklet gallery update////////////////////////

    public function edit_gallery_booklet($code) {
        $data['code']= BookletGalleryModel::where('code',$code)->get();
        // dd($data);
         return view('admin.EditBookletGallery')->with('data',$data['code']);
      }

    public function update_gallery_booklet(Request $request)
    {
        $rand=$request->input('id');
        $gallery = array();
        $gallery_title=$request->input('gallery_title');
        $gallery_desc=$request->input('gallery_desc');
        $files = [];
        $chapter = [];

        if($request->hasfile('filenames'))

         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('BookletGallery'), $name);  
                $files[] = $name;  

            }
         }

         for($j = 0; $j<count($files); $j++){
            $chapter[$j]['code'] = $rand;
            $chapter[$j]['gallery_title'] = $gallery_title;
            $chapter[$j]['file_upload'] = $files[$j];
            $chapter[$j]['gallery_desc'] = $gallery_desc;
        }
        BookletGalleryModel::insert($chapter);
        return redirect()->back()->with('messages', 'IT WORKS!');
    }  

    public function chapter_booklet(){
        $subchapter=DB::table('subchapterbooklet')->get();
         return view('admin.chapter_booklet')->with('subchapter',$subchapter);
     }
    ///////////////////////////chapter booklet add////////////////////////
    public function chapter(){
        $subchapter=DB::table('subchapterbooklet')->get();
        return view('admin.chapter_booklet')->with('subchapter',$subchapter);
    }
        
    public function save_chapter(Request $request)
    {
    
    
        $rand=rand(1000,9999);
        $chapter_title=$request->input('chapter_title');
        $type=$request->input('type');
        $lang=$request->input('lang');
        $chapters_des=$request->input('chapters_des');
        $sub_chapter=$request->input('sub_chapter');

        $data=array(
            'code'=>$rand,
            'lang'=>$lang,
            'type'=>$type,
            'chapter_title'=>$chapter_title,
            'chapter_description'=>$chapters_des,
        ); 


        if(!$request->input('sub_chapter'))
        {
            ChapterBookletModel::insert($data);
            return back()->with('message', 'IT WORKS!');
        }
     
        else{
            $fields = array();
            $field_notfound=0;
            for($i = 0; $i<count($sub_chapter); $i++){
                if (ChapterBookletModel::where('subid', '=', $sub_chapter[$i])->exists()) {
                   $field_notfound++;
                 }
                 else{
                    $fields[$i]['code'] = $rand;
                    $fields[$i]['lang'] = $lang;
                    $fields[$i]['type'] = $type;
                    $fields[$i]['chapter_title'] = $chapter_title;
                    $fields[$i]['chapter_description'] = $chapters_des;
                    $fields[$i]['subid'] = $sub_chapter[$i];
                 }
                
            }
             
            ChapterBookletModel::insert($fields);
            // return redirect('chapter-list');
            if($field_notfound==0){
                return back()->with('message', 'IT WORKS!');
            }
            else{
                return redirect('chapter_booklet')->withErrors([$field_notfound]);
            }
        }
            // dd($fields);
        
    
    }
    
    
    /////////////////////////booklet chpater view list/////////////////////////
    public function chapter_list()
    {
        $chapter_booklet['chapter']=ChapterBookletModel::all()->where('type','Booklet')->groupBy('code');
        return view('admin.chapter_booklet_list')->with('chapter_booklet',$chapter_booklet['chapter']);
    }
    
    ///////////chapter booklet Delete///////////////
    
    public function delete_chapter_booklet($cid)
    {
        DB::delete('delete from   booklet_chapter where code = ?', [$cid]);
        return redirect()->back()->with('deleted', 'deleted');
    }

    ////////////////////////////////chapter booklet update///////////////////

    public function edit_chapter($code)
    {
       
        $chapters=ChapterBookletModel::where('code',$code)->get();
        $subchapter=SubchapterBookletModel::get();
        // print_r($subchapter);
        return view('admin.chapter_booklet_edit')->with('chapters',$chapters)->with('subchapter',$subchapter);
    }


    
    public function edit_unitbooklet(Request $request)
    {
        $uid=$request->segment(2);
        $unitbooklet=DB::table('unitbooklet')->join('booklet_chapter','unitbooklet.chapter_id','=','booklet_chapter.cid')->where('unitbooklet.code',$uid)
        ->get();
        $chapter=ChapterBookletModel::all()->groupBy('code');
        return View('admin.unit-booklet-edit',compact('unitbooklet'))->with('chapter',$chapter);
     }

    ////////////////////////Main Booklet/////////////////////////////////////
    public function booklet()
        {
            $booklet['abc']=UnitBookletModel::all()->groupBy('code');
            $booklet['gallerybooklet']=BookletGalleryModel::all()->groupBy('code');
        // $gallerybooklet=DB::table('booklet_gallery')->get();
            
            return view('admin.booklet')->with('booklet', $booklet);
        }
        public function save_booklet(Request $request)
        {
            $rand=rand(1000,9999);
            if ($request->file('banner_image')) {
                $imagePath = $request->file('banner_image');
                $imageName = $imagePath->getClientOriginalName();
                $path2 = $request->file('banner_image')->storeAs('attachment', $imageName, 'public');
                    if ($request->file('attachment')) {
                        $imagePath = $request->file('attachment');
                        $imageName = $imagePath->getClientOriginalName();
                        $path1 = $request->file('attachment')->storeAs('booklet', $imageName, 'public');
                    }
                    else{
                        $path1="";
                    }
                
                    $booklet_title=$request->input('booklet_title');
                    $type = $request->input('type');
                    $lang = $request->input('lang');
                    $booklet_description=$request->input('booklet_description');
                    $attachment=$path1;
                    $banner_image=$path2;
                    $booklet_unit=$request->input('booklet_unit');
                    $booklet_gallery=$request->input('booklet_gallery');
                    $booklet_active=$request->input('booklet_active');
                    if($booklet_gallery==""){

                    }
                    else{
                        if (BookletModel::where('booklet_gallery', '=', $booklet_gallery)->exists()) {
                        return redirect('booklet')->withErrors(['Gallery has been already added']);
                        }
                    }
                    
                    $fields = array();
                    $field_notfound=0;
                    for($i = 0; $i<count($booklet_unit); $i++)
                    {
                        if (BookletModel::where('booklet_unit', '=', $booklet_unit[$i])->exists()) {
                        $field_notfound++;
                        return redirect('booklet')->withErrors(['Unit has been already added']);
                        }else{

                            $fields[$i]['code'] = $rand;
                            $fields[$i]['booklet_title'] = $booklet_title;
                            $fields[$i]['type'] = $type;
                            $fields[$i]['lang'] = $lang;
                            $fields[$i]['booklet_description'] = $booklet_description;
                            $fields[$i]['attachment'] = $attachment;
                            $fields[$i]['banner_image'] = $banner_image;
                            $fields[$i]['booklet_unit'] = $booklet_unit[$i];
                            $fields[$i]['booklet_gallery'] = $booklet_gallery;
                            $fields[$i]['booklet_active'] = $booklet_active;
                        }
                     }
                
            }
                            BookletModel::insert($fields);
                            return redirect()->back()->with('message', 'IT WORKS!');
                 
        } 
   
    public function booklet_list()
    {
        $booklet=BookletModel::all()->where('type','Booklet')->groupBy('code');
        // $booklet=DB::table('booklet')
        // ->where('type','Booklet')
        // ->groupBy('code')
        // ->get();
        // dd($booklet);
        return view('admin.booklet_list')->with('booklet',$booklet);
    }

    public function destroy_booklet($code){

        DB::delete('delete from booklet where code = ?', [$code]);
        return redirect()->back()->with('deleted', 'deleted');

    }

    ///////////////////////////////////////////////////////////////////
    ///////////////////////////Guide Book ///////////////////////////////

    ///////////////Guide book subchapter list view///////////////////////////

    public function guide_subchapter()
    {
        $subchapterGuide=DB::table('subchapterbooklet')->where('type','Guide Book')->get();
        // dd($subchapterGuide);
        return view('admin.guide_subchapter')->with('subchapterGuide',$subchapterGuide);
    }
   ///////////////Guide book chapter list view///////////////////////////
    public function guide_chapter()
    {
        $chapter_guide['chapter']=ChapterBookletModel::all()->where('type','Guide Book')->groupBy('code');
        
        return view('admin.guide_chapter')->with('chapterGuide',$chapter_guide['chapter']);
    }

     ///////////////Guide book Unit list view///////////////////////////
     public function guide_unit()
     {
        $unit_guidebook['unit']=UnitBookletModel::all()->where('type','Guide Book')->groupBy('code');
        // dd($unit_guidebook['unit']);
         return view('admin.guide_unit')->with('unitGuidebook',$unit_guidebook['unit']);  
     }

       ///////////////Guide book Gallery list view///////////////////////////
       public function guide_gallery()
       {
        $gallery['code'] = BookletGalleryModel::all()->where('type','Guide Book')->groupBy('code');
           return view('admin.guide_gallery')->with('gallery',$gallery['code']);  
       }

       ///////////////Guide book Gallery list view///////////////////////////
        public function guidebook_list()
        {
          $guidebook=BookletModel::all()->where('type','Guide Book')->groupBy('code');  
        //   dd($guidebook);
          return view('admin.guidebook_list')->with('guidebook',$guidebook);  
        }

     
   //////////////////////////////////////////////////////////////////////////////////  
   //////////////////////////Add Map Admin Section////////////////////////////////////
   
   
   public function map()
   {
    $path = asset("public/state.json"); 
    $jsonstate = json_decode(file_get_contents($path), true); 
       return view('admin.map')->with('jsonstate',$jsonstate);
   }

   public function save_map(Request $request)
   {
    $map = new MapModel([
        "type" => $request->get('fpo_type'),
        "code" => $request->get('fpo_code'),
        "fpo_name" => $request->get('fpo_name'),
        "ceo_name" => $request->get('ceo_name'),
        "email" => $request->get('email'),

        "mobile" => $request->get('mobile'),
        "street_address" => $request->get('street_address'),
        "address" => $request->get('address'),
        "state" => $request->get('state'),
        "city" => $request->get('city'),
        "zip_code" => $request->get('zip_code'),
        "country" => $request->get('country'),
        "user_name" => $request->get('user_name'),
        "fpo_password" => $request->get('c_password'),
        "promotion_institute" => $request->get('p_institute'),
        "resorce_institute" => $request->get('resource_institute'),
        "programm" => $request->get('programme'),
        "ri_popi" => $request->get('ri_popi'),
    ]);
    $map->save();
    // dd($map);
    return redirect('map-list');
   }    
     ///////////////////list view of map////////////
   public function map_list()
   {
       $mapdata=DB::table('map')->get();
       return view('admin.map_list')->with('mapdata',$mapdata);
   }
    //////////////////delete map////////////////

   public function delete_map($mapid)
   {
        DB::delete('delete from map where mapid = ?', [$mapid]);
        return redirect()->back()->with('deleted', 'deleted');
   }



   /////////////////////////////////////////////////////////
   /////////////////////////////edit main booklet all part///////////


   public function editbooklet(Request $request,$code){
    
    $code=$request->segment(2);
    $booklet=DB::table('booklet')->where('code','=',$code)->get();
    return view('admin.editbooklet',compact('booklet'));
}
public function updatebooklet(Request $request)
{
    $booklet_title = $request->post('booklet_title');
    $booklet_description = $request->post('booklet_description');
    $attachment = $request->post('attachment');
    $banner_image = $request->post('banner_image');
    $booklet_active = $request->post('booklet_active');
    $code=$request->post('code');
    $fields = array();
    if ($request->file('attachment')) {
        $imagePath = $request->file('attachment');
        $imageName = $imagePath->getClientOriginalName();
        $path1 = $request->file('attachment')->storeAs('booklet', $imageName, 'public');
        
    }
    else{
        $path1="";
    }
    if ($request->file('banner_image')) {
        
        $imagePath = $request->file('banner_image');
        $imageName = $imagePath->getClientOriginalName();
        $path2 = $request->file('banner_image')->storeAs('attachment', $imageName, 'public');
    }
    else{
        $path2="";
    }
    if($path1=="" && $path2!=""){
        $arr=array(
            "code"=>$code,
            "booklet_title" => $request->get('booklet_title'),
            "booklet_description" => $request->get('booklet_description'),
            "banner_image" => ($path2??''),
            "booklet_active"=>$request->get('booklet_active')
        );
    }
    else if($path1!="" && $path2==""){
        $arr=array(
            "code"=>$code,
            "booklet_title" => $request->get('booklet_title'),
            "booklet_description" => $request->get('booklet_description'),
            "attachment" => ($path1??''),
            "booklet_active"=>$request->get('booklet_active')
        );
    }else if($path1=="" && $path2==""){
        $arr=array(
            "code"=>$code,
            "booklet_title" => $request->get('booklet_title'),
            "booklet_description" => $request->get('booklet_description'),
            "booklet_active"=>$request->get('booklet_active')
        );
   }else{
    $arr=array(
        "code"=>$code,
        "booklet_title" => $request->get('booklet_title'),
        "booklet_description" => $request->get('booklet_description'),
        "banner_image" => ($path2??''),
        "attachment" => ($path1??''),
        "booklet_active"=>$request->get('booklet_active')
        );
    }
            $data=BookletModel::where('code','=',$code)->update($arr);
            return redirect()->back()->with('messages', 'IT WORKS!');
            // return redirect('booklet-list');
}


public function editbookletunit()
{
    $booklet=DB::table('booklet')->get();
    $unitbooklet=UnitBookletModel::all()->groupBy('code');
    return view('admin.editbookletunit',compact('booklet'))->with('unitbooklet',$unitbooklet);
}
public function updateunit(Request $request){
    $booklet_unit= $request->post('booklet_unit');
    $code=$request->post('code');
    $booklet = new  BookletModel([
        "code"=>$code,
        "booklet_unit" => $request->get('booklet_unit'),
    ]);
    $fields = array();
    $field_notfound=0;
    for($i = 0; $i<count($booklet_unit); $i++)
    {
        $booklet=DB::table('booklet')->where('code','=',$code)->get();
        BookletModel::where('code', '=' ,$code)->delete();
        if (BookletModel::where('booklet_unit', '=', $booklet_unit[$i])->exists()) {
        $field_notfound++;
        }else{
            for($i = 0; $i<count($booklet_unit); $i++)
        {
            $fields[$i]['code'] = $code;
            $fields[$i]['type'] = $booklet[0]->type;
            $fields[$i]['lang'] = $booklet[0]->lang;
            $fields[$i]['booklet_title'] = $booklet[0]->booklet_title;
            $fields[$i]['booklet_description'] = $booklet[0]->booklet_description;
            $fields[$i]['attachment'] = $booklet[0]->attachment;
            $fields[$i]['banner_image'] = $booklet[0]->banner_image;
            $fields[$i]['booklet_gallery'] = $booklet[0]->booklet_gallery;
            $fields[$i]['booklet_active'] = $booklet[0]->booklet_active;
            $fields[$i]['booklet_unit'] = $booklet_unit[$i];
        } 
    }
        BookletModel::insert($fields);
         if($field_notfound==0){
            return redirect()->back()->with('messages', 'IT WORKS!');
        //  return redirect('booklet-list')->withErrors(['Record Update Successfully']);
        }
         else{
             return redirect('booklet')->withErrors([$field_notfound]);
        }
    }
}


public function editgallerybooklet(){
$booklet=DB::table('booklet')->get();
$gallery=BookletGalleryModel::all()->groupBy('code');
return view('admin.editgallerybooklet')->with('booklet',$booklet)->with('gallery',$gallery);   
}


public function updategallery(Request $request){
$booklet_gallery= $request->post('booklet_gallery');
    $code=$request->post('code');
    $booklet = new  BookletModel
    ([
        "code"=>$code,
        "booklet_gallery" => $request->get('booklet_gallery'),
    ]);
    $fields = array();
    $field_notfound=0;
        $booklet=DB::table('booklet')->where('code','=',$code)->get();
         if (BookletModel::where('booklet_gallery', '=', $booklet_gallery)->exists()) {
            return redirect('booklet-list')->withErrors(['Gallery has been already added']);  
        }   
        else{
            for($i = 0; $i<count($booklet); $i++)
            {
                $fields[$i]['code'] = $code;
                $fields[$i]['type'] = $booklet[0]->type;
                $fields[$i]['lang'] = $booklet[0]->lang;
                $fields[$i]['booklet_title'] = $booklet[0]->booklet_title;
                $fields[$i]['booklet_description'] = $booklet[0]->booklet_description;
                $fields[$i]['attachment'] = $booklet[0]->attachment;
                $fields[$i]['banner_image'] = $booklet[0]->banner_image;
                $fields[$i]['booklet_gallery'] = $booklet_gallery;
                $fields[$i]['booklet_active'] = $booklet[0]->booklet_active;
                $fields[$i]['booklet_unit'] = $booklet[0]->booklet_unit;
            } 
        }
        BookletModel::where('code', '=' ,$code)->delete();
        BookletModel::insert($fields); 
        return redirect()->back()->with('messages', 'IT WORKS!');
        // return redirect('booklet-list')->withErrors(['Gallery Update Successfully']);

}



    //////////////////////fpofpoknowledge//////////////////////////////////////
    public function fpoknowledge(){
        $fpo=DB::table('knowledge_series')->get();
        return view('admin.fpoknowledge');
    }
    public function save_fpoknowledge(Request $request){

        if ($request->hasFile('file')) {

            $validator= $request->validate([
                 'serice_image' => 'mimes:jpeg,jpg,png'
             ]);
            $data= $request->file->store('admin/images/fpoKnowledge', 'public');
 
            $fpo = new KnowledgeSeriesModel([
                
                 "lang" => $request->get('lang'),
                 "serice_title" => $request->get('serice_title'),
                 "serice_desc" => $request->get('serice_desc'),
                 "serice_image" => $data
             ]);
             $fpo->save();
         }
        //  dd($fpo); 
        return redirect('fpoknowledgelist')->with('message', 'IT WORKS!');
    }
    public function fpoknowledgelist(){

        $fpo=DB::table('knowledge_series')->get();
       
        return view('admin.fpoknowledgelist')->with('fpo',$fpo);
    }
    public function delete_fpoknowledge($serice_id)
    {
        DB::delete('delete from knowledge_series where serice_id = ?', [$serice_id]);
        return redirect()->back()->with('deleted', 'deleted');
    }
    public function editfpoknowledge($serice_id){
        $data=KnowledgeSeriesModel::find($serice_id);
       return view('admin.editfpoknowledge',['data'=>$data]);
    }
    public function updateknowledge(Request $request){

        $serice_title=$request->post('serice_title');
        $serice_desc=$request->post('serice_desc');
        $serice_id=$request->post('serice_id');
        if(!$request->hasFile('file')){
            $fpo=KnowledgeSeriesModel::find($serice_id);
            $fpo->serice_title=$serice_title; 
            $fpo->serice_desc=$serice_desc;
            $fpo->save();
            return redirect('fpoknowledgelist')->with('messages', 'IT WORKS!');  
        }
        else{
            if($request->file('file')){
                $path=$request->file('file')->store('admin/images/fpoKnowledge', 'public');
                $arr=array(
                        "serice_title"=>$serice_title,
                        "serice_desc"=>$serice_desc,
                        "serice_image"=>$path,
                    );
                        $data=KnowledgeSeriesModel::update_fpo($serice_id,$arr);
                        // echo $data;
                        return redirect('fpoknowledgelist')->with('messages', 'IT WORKS!');
           }
            
         }
        
    }

    /////////////////////////////////


    public function thematic_list()
        {
          $thematic=BookletModel::all()->where('type','Thematic')->groupBy('code');  
        //   dd($guidebook);
          return view('admin.thematic_list')->with('thematic',$thematic);  
        }

        public function thematic_gallery()
       {
        $gallery['code'] = BookletGalleryModel::all()->where('type','Thematic')->groupBy('code');
           return view('admin.thematic_gallery')->with('gallery',$gallery['code']);  
       }

       public function thematic_unit()
     {
        $thematic['unit']=UnitBookletModel::all()->where('type','Thematic')->groupBy('code');
        // dd($unit_guidebook['unit']);
         return view('admin.thematic_unit')->with('thematic',$thematic['unit']);  
     }


}
