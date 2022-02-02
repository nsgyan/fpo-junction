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
        <h4 class="breadcrumbTitle">Thematic studies</h4>
        <div class="">
          <a href="{{URL::to('/user/index')}}"><i class="fa fa-home"></i> Home</a>
          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          <span>Thematic studies</span>
    
      </div>
      </div>
      <img src="public/user/img/breadcrumb.png">
    </div>
  </div>
</section>
<div class="clearfix"></div>


<div class="clearfix"></div>
<section class="mt-4 mb-4">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            @foreach($thematic as $model)
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a href="#" class="fpobusinessIMG">
                <!-- <span class="fpobusinessCat"></span> -->
                <img src="{{asset('/storage/app/public/'.$model->banner_image)}}" >
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <a href="#" class="fpobusinessTitle short_title">{{$model->booklet_title}}</a>
                  <p class="short_dis">{{$model->booklet_description}}</p>
              
                <div class="clearfix"></div>
                  <a href="{{URL::to('thematic-details/'.$model->booklet_id)}}" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
  
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