<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use DB;
use App\Models\NewsletterModel;
use App\Models\BusinessModel;
use App\Models\ROIAnalysisModel;
use App\Models\ChapterModel;
use App\Models\ChapterBookletModel;
use App\Models\SubchapterBookletModel;
use App\Models\UnitBookletModel;
use App\Models\MapModel;
use PDF;
use App;

class UserController extends Controller
{


    public function index()
    {
        $slider=DB::table('add_slider')->get();
        $sub_slider=DB::table('subslider')->get();
        $video=DB::table('video')->get();
        $stories=DB::table('succes_stories')->get();
        $scheme_sgs=DB::table('scheme')->where('main_category','State Government Scheme')->get();
        $scheme_ais=DB::table('scheme')->where('main_category','All India Scheme')->get();
        $scheme_fn=DB::table('scheme')->where('main_category','FPO News')->get();
        return View('front.index')->with('slider', $slider)->with('sub_slider',$sub_slider)->with('video',$video)->with('stories',$stories)->with('scheme_sgs',$scheme_sgs)->with('scheme_ais',$scheme_ais)->with('scheme_fn',$scheme_fn);;
    }


    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
          return redirect()->back();
    }

   ////////////////////////////////newsletter/////////////////////////

    public function save_newsletter(Request $request)
    {
        $newsletter = new NewsletterModel([
            "email" => $request->get('email'),
        ]);
        $newsletter->save();
        return redirect ('/user/index');
    }

    ////////////////////////business model////////////////////////////////

    public function business_model_list()
    {
        $business=DB::table('business_model')->get();
        return view('front.business_model_list')->with('business', $business);
    }

    public function business_model($code)
    {
        $business=DB::table('business_model')
        ->where('business_id',$code) 
        ->get();
        $roi=DB::table('business_model')
        ->join('roi_analysis','business_model.code','=','roi_analysis.code')
        ->where('business_id',$code)
        ->get();
        $chapters=DB::table('business_model')
        ->join('chapter','business_model.code','=','chapter.code')
        ->where('business_id',$code)
        ->get();

        return view('front.business_model')->with('business', $business)->with('chapters', $chapters)->with('roi', $roi);
    }

    /////////////////////////////////booklet model/////////////////////////////////

    public function booklet_view()
    {
        $booklet=DB::table('booklet')->where('type','Booklet')->get();
       //  dd($booklet);
        return view('front.booklet_view')->with('booklet', $booklet);
    }

   public function booklet($code)
   {
       $booklet=DB::table('booklet')
       ->where('type','Booklet')
       ->where('booklet_id',$code)
       ->get();
       $chapter=ChapterBookletModel::all()->where('type','Guide Book')->groupBy('code');
   
           foreach ($chapter as $key => $value) {
               foreach ($value as $key1 => $value1) {
                   $value1['sub']=json_encode(SubchapterBookletModel::find($value1->subid));
               }
           }
   
       $subchapter=SubchapterBookletModel::get();
       // dd($chapter);
       return view('front.booklet_model')->with('booklet',$booklet)->with('chapter',$chapter)->with('subchapter',$subchapter);
   }

    /////////////////////////////////FAQ///////////////////////////

    public function faq()
    {
        $faqdata=DB::table('faq')->get();
        return view('front.faq')->with('faqdata',$faqdata);
    }

     /////////////////////////////////Guide Book///////////////////////////

     public function guidebook_list()
     {
         $guidebook=DB::table('booklet')->where('type','Guide Book')->get();
        //  dd($guidebook);
         return view('front.guidebook_list')->with('guidebook', $guidebook);
     }

     public function guidebook($code)
     {
        $guidebook=DB::table('booklet')
        ->where('type','Guide Book') 
        ->where('booklet_id',$code)
        ->get();
        $unit=UnitBookletModel::select('code')->where('uid',$guidebook[0]->booklet_unit)->get();
        
        $chapters=UnitBookletModel::select('chapter_id')->where('code',$unit[0]->code)->get();
        $chapter_arr=array();
        foreach ($chapters as $key => $chapter_id) {
           array_push( $chapter_arr,$chapter_id->chapter_id);
        }
        $chapter=ChapterBookletModel::whereIn('cid',$chapter_arr)
        ->orderBy('cid','DESC')
        ->get();
      
        return view('front.guidebook')->with('guidebook',$guidebook)->with('chapter',$chapter)->with('count',0);
     }

      /////////////////////////////Register FPO form////////////////////////

      public function register_fpo()
      {
         $path = asset("public/state.json"); 
         $jsonstate = json_decode(file_get_contents($path), true); 
          return view('front.register_fpo')->with('jsonstate',$jsonstate);
      }
 
      public function save_register_fpo(Request $request)
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
       return redirect('/user/index');
      }




      //////////////////////map///////////////////

      public function map_list()
      {
          $mapdata=DB::table('map')->get();
          return json_encode($mapdata);
      }

      //////////////////////////chapter list/////////////////////

      public function chapter_list()
      {
        $chapterdata=DB::table('booklet_chapter')->get();
        return json_encode($chapterdata);
      }


       ///////////////////////FPO Map of india////////////
    
    public function fpo_map()
    {
        return view('front.fpo_map');
    }

    ///////////////////////success stories////////////
    
    public function success_stories()
    {
        return view('front.success_stories');
    }

     ///////////////////////government scheme////////////
    
     public function government_scheme()
     {
        $scheme_sgs=DB::table('scheme')->where('main_category','State Government Scheme')->get();
        $scheme_ais=DB::table('scheme')->where('main_category','All India Scheme')->get();
        $scheme_fn=DB::table('scheme')->where('main_category','FPO News')->get();
         return view('front.government_scheme')->with('scheme_sgs',$scheme_sgs)->with('scheme_ais',$scheme_ais)->with('scheme_fn',$scheme_fn);
     }

      ///////////////////////Policy and strategy document////////////
    
      public function policy_strategy()
      {
          return view('front.policy_strategy');
      }

    ///////////////////////trainer manual////////////
    
    public function trainer_manual()
     {
        return view('front.trainer_manual');
     }

    ///////////////////////capacity assessment////////////
    
    public function capacity_assessment()
    {
       return view('front.capacity_assessment');
    }

    ///////////////////////About Us////////////
    
    public function about()
    {
       return view('front.about_us');
    }

    ///////////////////////Help Center////////////
    
     public function help_center()
     {
        return view('front.help_center');
     }
 
    ///////////////////////Disclaimer////////////
    
       public function disclaimer()
       {
          return view('front.disclaimer');
       }
    
    
   ///////////////////////knowledgey series ////////////
    
   public function knowledge_series()
   {
      $series=DB::table('knowledge_series')->get();
      return view('front.knowledge_series_list')->with('series',$series);
   }   

   public function knowledge_series_detail($serice_id)
   {
      $details=DB::table('knowledge_series')->where('serice_id',$serice_id)->get();
   //    dd($details);
      return view('front.knowledge_series_details')->with('details',$details);
   }


      /////////////////////////////////thematic-view///////////////////////////

      public function thematic_view()
      {
          $thematic=DB::table('booklet')->where('type','Thematic')->get();
          return view('front.thematic_view')->with('thematic', $thematic);
      }
  
      public function thematic_details($code)
      {
          $guidebook=DB::table('booklet')
          ->where('type','Thematic') 
          ->where('booklet_id',$code)
          ->get();
          $unit=UnitBookletModel::select('code')->where('uid',$guidebook[0]->booklet_unit)->get();
          
          $chapters=UnitBookletModel::select('chapter_id')->where('code',$unit[0]->code)->get();
          $chapter_arr=array();
          foreach ($chapters as $key => $chapter_id) {
             array_push( $chapter_arr,$chapter_id->chapter_id);
          }
          $chapter=ChapterBookletModel::whereIn('cid',$chapter_arr)
          ->orderBy('cid','DESC')
          ->get();
        
          return view('front.thematic_details')->with('guidebook',$guidebook)->with('chapter',$chapter)->with('count',0);
      }
  
}
