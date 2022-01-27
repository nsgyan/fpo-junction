@extends('front.layout.app')

@section('content')


<div class="container-fluid" id="pagecontent">
 
<div class="clearfix"></div>
<section>
  <div class="container branding">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 top_space">
              <a  href="/fpo/index.html">{{ __('message.home') }}</a>
              <span> > {{ __('message.business_models') }}</span>
              
          </div>

          <div class="col-md-12 top_space">
            <h3>{{$business[0]->b_title}}</h3>
           <P>{{$business[0]->b_description}}</P>
      
          </div>


          <div class="row top_space">
            <div class="col-md-9">
              <img src="{{asset('/storage/app/public/'.$business[0]->banner_image)}}" class="img-responsive" style="width: 100%;">
            </div>
            <div class="col-md-3">
                <div class="col-md-12 tab tab_css_outer">
                    <div class="row tab_header">
                      <h4>ROI Analysis</h4>
                    </div>
                  
                    @foreach($roi as $r)
                    <div class="col-md-9 sub_head">
                      <p class="{{($r->color=='Red'? 'text-danger':'text-success')}}">{{$r->title}} </p>
                    </div>
                    <div class="col-md-3 sub_head">
                      <p class="{{($r->color=='Red'? 'text-danger':'text-success')}}">{{$r->value}}</p>
                    </div>
               
                    @endforeach
            
                    
                 </div>   

                <div class="col-md-12 right_btn top_space">
                  <p>Download the detailed resource material to help understand the better functioning and best practices for FPO.</p>
             
                  <button type="button" class="btn btn-default"><a href="{{ URL::to('/storage/app/public/') }}/{{$business[0]->attachment}}" download>Download</a></button>
                    <button type="button" class="btn btn-default"><a href="{{URL::to('/storage/app/public/'.$business[0]->attachment)}}" target="_blank">View More</a>
                 </button>
                 
                </div>  
            

            </div>
          </div>

          <div class="row top_space">

            
                <div class="col-md-9">
                  

                  <div class="container row">
          
                    <ul class="nav nav-tabs" role="tablist">
                    @php 
                      $i=0;
                    @endphp
                      @foreach($chapters as $chapter)
                      <li class="nav-item">
                        <a class="nav-link li_style {{($i==0?'active':'')}} " data-toggle="tab" href="#fpo_tab1{{$chapter->id}}">{{$chapter->chapter_name}}</a>
                      </li>
                      @php 
                      $i++;
                      @endphp 
                      @endforeach
             
                    </ul>
                  
                  </div>
                  
              
                  <div class="tab-content top_space">
                  @php 
                      $i=0;
                    @endphp
                      @foreach($chapters as $c)
                    <div class="tab-pane  background_css {{($i==0?'active':'')}}" id="fpo_tab1{{$c->id}}">

                     {!!html_entity_decode($c->c_description)!!}

                
                    </div>
                    @php 
                      $i++;
                      @endphp 
                      @endforeach

                  </div>
                </div>
                
            
      
                <div class="col-md-3  "></div>


          </div>


        </div>
      </div>
  </div>
</section>

    <div class="clearfix"></div>




  <section id="bottomLogoScroll" class="mt-2">
    <div class="container mb-3">
      <div class="row">
        <h4> Photo Gallery</h4>
      </div>
    </div>
    <div class="container-fluid"> 
      <div id="demo" class="row" style="padding-left: 15rem;">
        <div class="col-sm-12">
          <div id="owl-demo" class="owl-carousel">
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo1.png')}}"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo2.png')}}"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo3.png')}}"></div>
            </a> 
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo1.png')}}"></div>
            </a> 
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo2.png')}}"></div>
            </a> 
            <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="{{asset('/public/user/img/logo3.png')}}"></div>
            </a> 
          </div>
        </div>
      </div> 
  </section>
  
</div>
@endsection