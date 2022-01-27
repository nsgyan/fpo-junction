@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update Slider</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
        <form role="form" enctype="multipart/form-data" method="post" action=" {{URL::to('update_slider')}}">
          @csrf
          <input type="hidden" name="id" value="{{$data['slider_id']}}">
            <div class="col-md-6 form-group">
              <label>Title : </label>
              <input type="text" class="form-control" placeholder="Enter Title" name="title" value = "{{$data['title']}}">
            </div>
            <div class="col-md-6 form-group">
              <label>Category : </label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="category" value ="{{$data['category']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Banner Ordering : </label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="banner_ordering" value ="{{$data['banner_ordering']}}">
            </div>


            <div class="col-md-6 form-group">
              <label>Image : <span class="text-danger">*</span> </label>
              <input type="file" class="form-control"  name="file" id="file"/>
              <!-- <img src="{{asset('../storage/app/public/admin/images/slider/'.$data->image)}}" alt="" height="30px" width="30px"> -->
            </div>

            <div class="col-md-6 form-group">
              <label>Status : </label>
              <select name="status" id="status" class="form-control">
                <option value="active" name="status" >active</option>
                <option value="block" name="status">block</option>
              </select>
              
            </div>
            <div class="col-md-6 form-group">
              <label>Slider Active : </label><br/>
              <!-- Yes :  <input type="radio" name="slider_active" value="Yes" >
              No : <input type="radio" name="slider_active" value="No" > -->
              <select name="slider_active" id="slider_active" class="form-control">
                <option value="Yes" name="slider_active" >Yes</option>
                <option value="No" name="slider_active">No</option>
              </select>
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
  
 

@endsection