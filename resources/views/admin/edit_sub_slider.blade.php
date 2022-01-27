@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update Sub Slider</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('update-sub-slider')}}" >
          @csrf
          <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="col-md-6 form-group">
              <label>Title :</label>
              <input type="text" class="form-control" placeholder="Title" name="title" value = "{{$data['title']}}">
            </div>
            <div class="col-md-6 form-group">
              <label>Category : </label>
              <input type="text" class="form-control" placeholder="Categry" name="category" value = "{{$data['category']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Sub Title :</label>
              <input type="text" class="form-control" placeholder="Sub Title" name="sub_title" value = "{{$data['sub_title']}}" >
            </div>
            <div class="col-md-6 form-group">
              <label>Sub Category :</label>
              <input type="text" class="form-control" placeholder="Sub Categry" name="sub_category" value = "{{$data['sub_category']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Description  : </label>
              <input type="text" class="form-control" placeholder="Description" name="description" value = "{{$data['description']}}">
            </div>
            <div class="col-md-6 form-group">
              <label>Link : </label>
              <input type="text" class="form-control" placeholder="Link" name="link" value = "{{$data['link']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Image : </label>
              <input type="file" class="form-control"  name="file" value = "{{$data['image']}}"/>
            </div>

            <div class="col-md-6 form-group">
              <label>Banner Ordering : </label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="banner_ordering" value ="{{$data['banner_ordering']}}">
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
              <!-- Yes :  <input type="radio" name="slider_active" value="Yes">
              No : <input type="radio" name="subslider_active" value="No"> -->

              <select name="subslider_active" id="subslider_active" class="form-control">
                <option value="Yes" name="subslider_active" >Yes</option>
                <option value="No" name="subslider_active">No</option>
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