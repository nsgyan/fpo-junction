@extends('front.layout.app')

@section('content')



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
        @foreach($series as $model)
          <div class="col-md-4 mb-3">
            <div class="listAllModelsBox"> 
              <a  class="fpobusinessIMG">
                <!-- <span class="fpobusinessCat"></span> -->
                <img src="{{asset('/storage/app/public/'.$model->serice_image)}}" >
              </a> 
              <div class="clearfix"></div>
              <div class="fpoBusinessDetail">
                <div class="fpobusinessBox">
                  <a  class="fpobusinessTitle short_title">{{$model->serice_title}}</a>
                  <p class="short_dis">{!!html_entity_decode($model->serice_desc)!!}</p>
              
                <div class="clearfix"></div>
                  <a href="{{URL::to('knowledge-series-details/'.$model->serice_id)}}" class="btn btn-block btnViewAllbm mt-5">READ STORY</a>
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