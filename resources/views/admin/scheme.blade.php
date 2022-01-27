@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Scheme</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('Save-Scheme')}}" >
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
              <label>Main Category : <span class="text-danger">*</span></label>
              <!-- <input type="text" class="form-control" placeholder="Enter Main Category" name="m_category"> -->
              <select name="m_category" id="m_category" class="form-control" required>
                <option value="">Select Main Category</option>
                <option value="All India Scheme"  >All India Scheme</option>
                <option value="State Government Scheme"> State Government Scheme</option>
                <option value="FPO News"> FPO News</option>
              </select>
            </div>

            <div class="col-md-6 form-group">
              <label>Category :</label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="category" >
            </div>

            <div class="col-md-6 form-group">
              <label>Title : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
            </div>

            <div class="col-md-6 form-group">
              <label>Description : </label>
              <input type="text" class="form-control" placeholder="Enter Description" name="description">
            </div>


            <div class="col-md-6 form-group">
              <label>Document (attachments) :  </label>
              <input type="file" class="form-control"  name="file"/>
            </div>

            <div class="col-md-6 form-group">
              <label>Link/URL : </label>
              <input type="text" class="form-control" placeholder="Enter Link/URL" name="url">
            </div>

            <div class="col-md-6 form-group">
              <label>Scheme Active : </label><br/>
              Yes :  <input type="radio" name="scheme_active" value="Yes">
              No : <input type="radio" name="scheme_active" value="No">
            </div>
         
            <div class="col-md-12">
            <button type="submit" class="btn btn-sm btn-primary" onclick="alert('Add Scheme Successfully !')">Submit</button>
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