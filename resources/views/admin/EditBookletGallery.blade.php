@extends('admin.layout.app')

@section('content')



  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">{{$data[0]->type}} Gallery</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Update Gallery</div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('update-gallery-booklet')}}" >
        @csrf


          <input type="hidden" name="id" value="{{$data[0]->code}}">

              <div class="panel-body">
                    <div class="col-md-4 form-group">
                      <label> Gallery Title :</label>
                      
                      <input type="text" class="form-control" value="{{$data[0]->gallery_title}}" placeholder="Enter Title" name="gallery_title"  readonly>
                    </div>
                    <div class="col-md-4 form-group">
                      <label>Gallery Description :</label>
                      <input type="text" class="form-control" value="{{$data[0]->gallery_desc}}" placeholder="Enter Description" name="gallery_desc" readonly>
                    </div>
                    <div class="col-md-4 form-group">
                      <label> File Upload : </label>
                      <input type="file" class="form-control"  name="filenames[]" id="file" multiple />
                    </div></div>

                    <div class="container">
                      @foreach($data as $gallery)
                      <a class="dropdown-item" href="{{URL::to('/booklet-image-delete')}}/{{ $data[0]->g_id }}" class="deletebtn"  onclick="return confirm('Are your sure want to delete this record ?')">
                      <img height="70px" width="70px"; src="{{asset('/public/BookletGallery/'.$gallery->file_upload)}}">
                    </a>
                
                    @endforeach
                    </div>

                  
                   &nbsp;&nbsp;   <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>
                  
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