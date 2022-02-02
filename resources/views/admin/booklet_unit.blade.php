@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Unit</h1>
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
              <label>Title : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Enter Title" name="unit_title">
            </div>

            <div class="col-md-6 form-group">
              <label>Description : </label>
           
              <textarea name="unit_description" id="unit_description" class="form-control" rows="1"></textarea>
            </div>

           
            <div class="col-md-12">
            <button type="submit" class="btn btn-sm btn-primary" onclick="alert('Add Unit Successfully !')">Submit</button>
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