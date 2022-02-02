@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add FAQ</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('Save-FAQ')}}" >
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
              <label>Category : </label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="category">
            </div>

            <div class="col-md-6 form-group">
              <label>Question : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Question" name="question" required>
            </div>
            <div class="col-md-6 form-group">
              <label>FAQ Active : </label><br/>
              Yes :  <input type="radio" name="faq_active" value="Yes" checked>
              No : <input type="radio" name="faq_active" value="No">
            </div>

            <div class="col-md-12 form-group">
              <label>Answer : <span class="text-danger">*</span></label>
              <!-- <input type="text" class="form-control" placeholder="Enter Answer" name="answer"> -->
              <div> <textarea class="ckeditor" name="answer" required></textarea></div>
            </div>

            
         
            <div class="col-md-12">
            <button type="submit" class="btn btn-sm btn-primary" >Submit</button>
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
  
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

@endsection