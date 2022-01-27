@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtr5">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add</div> -->
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('save-booklet')}}" >
          @csrf
              <div class="panel-body">
              @if($errors->any())
              <h4 class="text-danger">No. of Duplicate : {{$errors->first()}}</h4>
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
                        <option value="Thematic">Thematic Studies</option>
                      </select> 
                    </div>
                    

                    <div class="col-md-6 form-group">
                      <label>  Title : <span class="text-danger">*</span></label>
                      <input type="text" style="height:30px" class="form-control" placeholder="Enter Title" name="booklet_title" required>
                    </div> 
                    
 
                    <div class="col-md-6 form-group">
                    <label>Document (attachments) :  </label>
                    <input type="file" class="form-control"  name="attachment"/>
                    </div> 

                    <div class="col-md-12 form-group">
                    <label>Banner Image :  <span class="text-danger" >*</span></label>
                    <input type="file" class="form-control"  name="banner_image" required/>
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Unit : <span class="text-danger" >*</span></label></r>
                      <select id="first" data-placeholder="Select Unit" class="abc" name="booklet_unit[]"  style=" width:506px; box-shadow:none; text-shadow:none;" multiple="multiple">
                        @foreach($booklet['abc'] as $unit)
                        <option value="{{$unit[0]->uid}}">{{$unit[0]->unit_title}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Gallery : </label></r>
                      <select  name="booklet_gallery" class="form-control" >
                        <option value="">Select Gallery</option>
                      @foreach($booklet['gallerybooklet'] as $b)
                        <option value="{{$b[0]->g_id}}">{{$b[0]->gallery_title}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                    <label>Booklet Active : </label><br/>
                    Yes :  <input type="radio" name="booklet_active" value="Yes" checked>
                    No : <input type="radio" name="booklet_active" value="No">
                    </div>

                    <div class="col-md-9 form-group">
                      <label>  description : </label>
                
                      <div> <textarea class="ckeditor" name="booklet_description"></textarea></div>
                    </div>
                   &nbsp;&nbsp;   <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>
                
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