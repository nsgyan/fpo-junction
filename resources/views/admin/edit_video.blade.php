@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update Video</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('update-video')}}" >
          @csrf
          <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="col-md-6 form-group">
              <label>Category :</label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="category" value="{{$data['category']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Title :</label>
              <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$data['title']}}">
            </div>


            <div class="col-md-6 form-group">
              <label>Description  :</label>
              <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$data['description']}}">
            </div>
            <div class="col-md-6 form-group">
              <label>Video URL : </label>
              <input type="text" class="form-control" placeholder="Video URL" name="url" value="{{$data['video_url']}}">
            </div>


            <div class="col-md-6 form-group">
              <label>Thumbnail Image : </label>
              <input type="file" class="form-control"  name="file" />
            </div>

            <div class="col-md-6 form-group">
              <label>Status : </label>
              <select name="status" id="status" class="form-control">
                <option value="active" name="status" >active</option>
                <option value="block" name="status">block</option>
              </select>
              
            </div>
            <div class="col-md-6 form-group">
              <label>Video Active : </label><br/>
              <!-- Yes :  <input type="radio" name="video_active" value="Yes">
              No : <input type="radio" name="video_active" value="No"> -->
              <select name="video_active" id="video_active" class="form-control">
                <option value="Yes" name="video_active" >Yes</option>
                <option value="No" name="video_active">No</option>
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