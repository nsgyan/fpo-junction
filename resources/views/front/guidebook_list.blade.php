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
<section>
  <div class="container-fluid">
      <div class="row">
        <img src="public/user/img/calendarHead.png">
      </div>
  </div>
</section>

<div class="clearfix"></div>
<section class="mt-4 mb-4">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            @foreach($guidebook as $model)
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
                  <p class="short_dis"> {!!html_entity_decode($model->booklet_description)!!}</p>
              
                <div class="clearfix"></div>
                  <a href="{{URL::to('guidebook/'.$model->booklet_id)}}" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
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