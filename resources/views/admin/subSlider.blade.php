@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Sub Slider</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('Save-Sub-Slider')}}" >
          @csrf
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
              <label>Title : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Title" name="title" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Category : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Categry" name="category" required>
            </div>

            <div class="col-md-6 form-group">
              <label>Sub Title : <span class="text-danger">*</span> </label>
              <input type="text" class="form-control" placeholder="Sub Title" name="sub_title" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Sub Category : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Sub Categry" name="sub_category" required>
            </div>

            <div class="col-md-6 form-group">
              <label>Description  : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Description" name="description" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Link : </label>
              <input type="text" class="form-control" placeholder="Link" name="link">
            </div>

            <div class="col-md-6 form-group">
              <label>Image : <span class="text-danger">*</span> </label>
              <input type="file" class="form-control"  name="file" required/>
            </div>
            <div class="col-md-6 form-group">
              <label>Slider Active : </label><br/>
              Yes :  <input type="radio" name="slider_active" value="Yes" checked>
              No : <input type="radio" name="slider_active" value="No">
            </div>
         
            <div class="col-md-12">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
  
  
</div>



	</div>
  </div>
  <!-- /content -->
  
 

@endsection