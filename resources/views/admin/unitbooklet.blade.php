@extends('admin.layout.app')

@section('content')


@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Unit </h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Add Unit  </div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('save-unit-booklet')}}" >
          @csrf
              <div class="panel-body">
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
                      <label> Title : <span class="text-danger">*</span></label>
                      <input type="text" style="height:30px" class="form-control" placeholder="Enter Title" name="unitchapter_title" required>
                    </div>

                    <div class="col-md-6 form-group">
                      <label> Chapter: <span class="text-danger" >*</span></label></r>
                      <select id="second"  data-placeholder="Select Sub Chapter" class="abc form-control" name="unit_chapter[]" multiple="multiple" required>
                      
                      @foreach($chapter as $unit)
                    
                         <option value="{{$unit[0]->cid}}">{{$unit[0]->chapter_title}}</option> 
                      @endforeach
                      </select>

                      <!-- <input type="hidden" name="uid" value=""/> -->
                    </div>
                    <div class="col-md-12 form-group">
                      <label> Description : </label>
                      <div> <textarea class="ckeditor" name="unit_description"></textarea></div>
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