@extends('front.layout.app')

@section('content')

<style>
    .short_dis {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    margin-bottom: 4%;
}

.short_title {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    margin-bottom: 1%;
}
</style>

<div class="container-fluid" id="pagecontent">
<!-- alert success -->

<div class="clearfix"></div>
<section id="breadcrumbSec">
  <!-- <div class="container-fluid">
      <div class="row">
        <img src="img/calendarHead.png">
      </div>
  </div> -->
  <div class="container-fluid">
    <div class="breadcrumbBox">
      <div class="breadcrumbText">
        <h4 class="breadcrumbTitle">FPO Performance Assessment</h4>
        <div class="">
          <a href="/fpo/index.html"><i class="fa fa-home"></i> Home</a>
          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          <span>Assessment Karnatka</span>
    
      </div>
      </div>
      <img src="public/user/img/breadcrumb.png">
    </div>
  </div>
</section>

<div class="clearfix"></div>
<section class="mt-4 mb-4">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            @foreach($business as $model)
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">{{$model->state}}</span>
                <img src="{{asset('/storage/app/public/'.$model->banner_image)}}" >
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <!-- <p class="businessMcat">BRAVING HARDSHIPS!</p> -->
                  <a href="#" class="fpobusinessTitle short_title">{{$model->b_title}}</a>
                  <p class="short_dis">{{$model->b_description}}</p>
                <!-- <p><span class="pull-left">{{date('d-m-Y',strtotime($model->created_at))}}</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p>  -->
                <div class="clearfix"></div>
                  <a href="{{URL::to('Business_Model/'.$model->business_id)}}" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage3.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage4.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage1.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage3.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage2.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage4.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage3.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <span class="fpobusinessCat">Assam</span>
                <img src="public/user/img/businessmodelimage1.png">
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <p class="businessMcat">BRAVING HARDSHIPS!</p>
                  <a href="#" class="fpobusinessTitle">Resilient Indian farmers led us Self-reliant in Food Production</a>
                  <p>Despite possessing just 2.4% of world's land and 4% of its water resources India feeds 17% of world's population and 15% of livestock Though 85% of our farmers sess marginalised and small land.....</p>
                <p><span class="pull-left">23/06/2021</span><span class="pull-right"><span><i class="fa fa-eye"></i> 500</span> <span style="padding-left: .5rem;"><a href="#"><i class="fa fa-share-alt"></i> Share</a></span></span></p> 
                <div class="clearfix"></div>
                  <a href="FPO_Business.html" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
  
  <!--------------------------------------Homepage Map Section------------------------------------>
<!-- Map section -->
  <!------------------------------------------End Home page map Section--------------------------->

  </div>

@endsection