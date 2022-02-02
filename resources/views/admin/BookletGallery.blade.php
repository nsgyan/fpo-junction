@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Gallery</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Add Gallery</div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('save-gallery-booklet')}}" >
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
                      <label> Gallery Title : <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Title" name="gallery_title" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Gallery Description :</label>
                      <input type="text" class="form-control" placeholder="Enter Description" name="gallery_desc" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label> File Upload :  <span class="text-danger">*</span></label>
                      <input type="file" class="form-control"  name="filenames[]" multiple required/>
                    </div></div>
                
                   &nbsp;&nbsp;   <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" onclick="alert('Add Gallery  Successfully !')">Submit</button>
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

  
@endsection