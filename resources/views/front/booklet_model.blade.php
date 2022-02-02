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
              <a  href="/fpo/index.html">HOME</a>
              <span> > ASSESSMENT KARNARAKA</span>
        
          </div>
          <div class="col-md-12 top_space">
            <img src="{{URL::to('/storage/app/public/'.$booklet[0]->banner_image)}}" class="img-responsive" style="width: 100%;">
          </div>

          <div class="col-md-12 top_space">

            
                <div class="col-md-9">

                  <div class="tab-content top_space">
                  @php 
                $i=0;
                @endphp
                    @foreach($subchapter as $c)
                    <div class="tab-pane {{($i==0?'active':'')}}" id="fpo_tab{{$c->subid}}">
                      <h5>{{$c->subchapter_title}}</h5>
                      <p>{!!html_entity_decode($c->subchapter_des)!!}</p>
                    </div>
                      @php 
                      $i++;
                      @endphp
                    @endforeach  
                  </div>
                </div>
                
            
      
                <div class="col-md-3"> 
                  <div class="col-md-12 tab tab_css_outer">
                    <div class="row tab_header">
                      <h4>CAPACITY BUILDING TOOLKIT</h4>
                    </div>
                    <ul class="nav nav-tabs tabs-right sideways">
                    @php 
                $i=0;
                @endphp
                    @foreach($chapter as $c)
                      <li class="li_style"><a   href="#fpo_tab" data-toggle="tab">{{$c[0]->chapter_title}} </a></li>
                      <ul>
                      @foreach($c as $c1)
                      @php 
                      $subtitle="";
                     $abx=(array)json_decode($c1->sub);
                     if(count($abx)){
                      $subtitle=$abx['subchapter_title'];
                     }
                     
                      @endphp
                        <li class="active"> <a href="#fpo_tab{{$c1->subid}}" data-toggle="tab" class="{{($i==0?'active':'')}}">
                                 {{$subtitle}}   </a>
                        </li>
                        @php 
                      $i++;
                      @endphp
                      @endforeach  
                      </ul>
                    @endforeach  
                    </ul>
                  </div>  
                  <div class="col-md-12 right_btn top_space">
                    <p>Download the detailed resource material to help understand the better functioning and best practices for FPO.</p>
                    <button type="button" class="btn btn-default"><a href="{{URL::to('/storage/app/public/'.$booklet[0]->attachment)}}" download>Download</a></button>
                    <button type="button" class="btn btn-default"><a href="{{URL::to('/storage/app/public/'.$booklet[0]->attachment)}}" target="_blank">View More</a>
                 </button>
                  </div>
              </div>


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