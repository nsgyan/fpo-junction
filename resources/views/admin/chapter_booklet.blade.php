@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add  Chapter</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Add Booklet chapter</div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('save-chapter')}}" >
          @csrf
              <div class="panel-body">
              @if($errors->any())
              <h4 class="text-danger">No. of Duplicate Subchapters: {{$errors->first()}}</h4>
              @endif
              <div class="col-md-6 form-group">
                      <label>  Language : <span class="text-danger">*</span></label>
                      <select name="lang" id="lang" class="form-control" required>
                        <option value="">Select Language</option>
                        <option value="en">English</option>
                        <option value="hi">Hindi</option>
                        <option value="kn">Kannada</option>
                        <option value="te">Telugu</option>
                        <option value="or">Oriya</option>
                      </select> 
                    </div>
              <div class="col-md-6 form-group">
                      <label>  Type : <span class="text-danger">*</span></label>
                      <select name="type" id="type" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Booklet">Booklet</option>
                        <option value="Guide Book">Guide Book</option>
                        <option value="Business">Business Modal</option>
                        <option value="Thematic">Thematic Studies</option>
                      </select> 
                    </div>
                    
                    <div class="col-md-6 form-group">
                      <label> Chapter Title : <span class="text-danger">*</span></label>
                      <input type="text" style="height:30px" class="form-control" placeholder="Enter Title" name="chapter_title" required>
                    </div>
@php
   $cid="";       
@endphp
                    <div class="col-md-6 form-group">
                      <label>Sub Chapter: </label></r>
                      <select id="second" data-placeholder="Select Sub Chapter" class="abc" name="sub_chapter[]"  style=" width:506px; box-shadow:none; text-shadow:none;" multiple="multiple">
                      
                  
                      @foreach($subchapter as $sub)
                      <option value="{{$sub->subid}}">{{$sub->subchapter_title}}</option> 
                      @endforeach
                     
                 
                      </select>

                      <!-- <input type="hidden" name="cid" value="{{substr($cid, 0, -1)}}"/> -->
                    </div>
                    <div class="col-md-12 form-group">
                      <label> Chapter description : </label>
                      <div> <textarea class="ckeditor" name="chapters_des"></textarea></div>
                    </div></div>

                   &nbsp;&nbsp;   <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>
             </div>
                  </div>
          </form>
  </div>
</div>
  </div>


  <!-- /content -->

  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script>

$('select[name=sub_chapter]').change(function(){
           $("input[name=cid]").val($(this).val())
});

$(".abc").chosen();
$('button').click(function(){
        $(".abc").trigger("chosen:updated");
});
</script>
  
@endsection