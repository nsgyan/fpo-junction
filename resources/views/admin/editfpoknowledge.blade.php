@extends('admin.layout.app')
@section('content')

<!-- content -->
<div id="content" class="app-content" role="main">
<div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
<h1 class="m-n font-thin h3">Edit FPO Knowledge</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('updateknowledge')}}" >
          @csrf
          <input type="hidden" name="serice_id" value="{{$data['serice_id']}}">
             <div class="col-md-6 form-group">
                <label>Title : </label>
                <input type="text" class="form-control" placeholder="Enter Title" name="serice_title" value="{{$data['serice_title']}}" >
                </div>
                <div class="col-md-6 form-group">
                <label>Image: </label>
                <input type="file" class="form-control" placeholder="Enter Title"  name="file" id="file" value="{{$data['serice_image']}}">
                </div>
                <div class="col-md-12 form-group">
                      <label> Description :  </label>
                      <div> <textarea  required class="ckeditor" name="serice_desc"  >{!!html_entity_decode($data->serice_desc)!!}</textarea></div>
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
        <!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        @endsection