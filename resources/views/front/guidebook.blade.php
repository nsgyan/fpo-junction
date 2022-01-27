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
            <img src="{{URL::to('/storage/app/public/'.$guidebook[0]->banner_image)}}" class="img-responsive" style="width: 100%;">
          </div>

          <div class="col-md-12 top_space">

            
                <div class="col-md-9">
                  

                  <!-- <div class="container row">
                    <ul class="nav nav-tabs" role="tablist">
                      
                      <li class="nav-item">
                        <a class="nav-link li_style active fpo_tab" data-toggle="tab" href="#fpo_tab3">Business Planning Guide...</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link li_style " data-toggle="tab" href="#fpo_tab1">Defining the Business</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link li_style " data-toggle="tab" href="#fpo_tab2">understanding why FPO </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link li_style" data-toggle="tab" href="#fpo_tab3">Components of Business </a>
                      </li>
                    </ul>
                  
                  
                  </div> -->
                  


                  <div class="tab-content top_space">
                     @foreach($chapter as $chp)
                        <div class="tab-pane {{($count==0?'active':'')}}" id="fpo_tab{{$chp->cid}}">
                          <h5>{{$chp->chapter_title}}</h5>
                          <p>{!!html_entity_decode($chp->chapter_description)!!}</p>
                        </div>
                        @php $count++; @endphp
                    @endforeach 
                    <span id="subcontent"></span>
                  </div>
                </div>
                
            
      
                <div class="col-md-3"> 
                  <div class="col-md-12 tab tab_css_outer">
                    <div class="row tab_header">
                      <h4>CAPACITY BUILDING TOOLKIT</h4>
                    </div>
                    <ul class="nav nav-tabs tabs-right sideways">
                    @foreach($chapter as $c)
                      <a href="#fpo_tab{{$c->cid}}" data-toggle="tab" class="text-danger">
                        <li class="li_style text-danger" onclick="getsubchapter('{{$c->code}}')">
                          {{$c->chapter_title}}
                        </li>
                      </a>
                      <span id="spn{{$c->code}}"></span> 
                    @endforeach  
                    </ul>
                  </div>  
                  <div class="col-md-12 right_btn top_space">
                    <p>Download the detailed resource material to help understand the better functioning and best practices for FPO.</p>
                    <button type="button" class="btn btn-default"><a href="{{URL::to('/storage/app/public/'.$guidebook[0]->attachment)}}" download>Download</a></button>
                    <button type="button" class="btn btn-default"><a href="{{URL::to('/storage/app/public/'.$guidebook[0]->attachment)}}" target="_blank">View More</a>
                 </button>
                  </div>
              </div>


          </div>


        </div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
  
  

  </div>


@endsection

<script>

function getsubchapter(code){
  $('.sideways span').hide()
  $.ajax({
    type:"get",
    url:'/getsubchapter/'+code,
     headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              },
    success:function(res){
      let subjson=JSON.parse(res)
      var ulstr="<ul>"
      var divstr="";
      for(var k=0;k<(subjson.sub).length;k++)
      {
        let kval=subjson.sub[k];
        ulstr+='<a href="#fpo_tab'+kval.subid+'" data-toggle="tab" class="text-success" ><li class="li_style text-success" style="font-size:12px">'+kval.subchapter_title+' </li></a>';
        divstr+='<div class="tab-pane" id="fpo_tab'+kval.subid+'"><h5>'+kval.subchapter_title+'</h5><p>'+kval.subchapter_des+'</p></div>';
      }
      ulstr+="</ul>";
      $('.sideways #spn'+code).show()
      $('#spn'+code).html(ulstr)
      $('#subcontent').replaceWith(divstr+'<span id="subcontent"></span>')
    }
  })
}
</script>