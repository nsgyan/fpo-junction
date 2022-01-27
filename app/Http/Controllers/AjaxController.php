<?php

namespace App\Http\Controllers;
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

class AjaxController extends Controller
{
    public function getsubchapter($code){
       $subid= ChapterBookletModel::select('subid')->where('code',$code)->get();
       $subchapterdata=array();
       $i=0;
       foreach ($subid as $key => $value) {
          $subchapterdata['sub'][$i]=$value->Subchapter;
          $i++;
       }
       echo json_encode($subchapterdata);
    }

    //thematic studies

      
}
