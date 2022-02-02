@extends('front.layout.app')

@section('content')


<div class="container-fluid" id="pagecontent">
<!-- alert success -->

<div class="clearfix"></div>
<section>
  <div class="container branding">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 top_space">
              <a  href="/fpo/index.html">{{ __('message.home') }}</a>
              <span> > ASSESSMENT KARNARAKA</span>
        
          </div>
          <div class="col-md-12 top_space">
            <img src="{{URL::to('/storage/app/public/'.$details[0]->serice_image)}}" class="img-responsive" style="width: 100%;">
          </div>
          <div class="col-md-12 top_space">
            <h5>{{$details[0]->serice_title}}</h5>
            <p>{!!html_entity_decode($details[0]->serice_desc)!!}</p>
          </div>

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