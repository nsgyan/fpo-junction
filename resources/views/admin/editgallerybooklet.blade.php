@extends('admin.layout.app')
@section('content')
  <!-- content -->
<div id="content" class="app-content" role="main">
<div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
<h1 class="m-n font-thin h3">Edit Booklet Gallery</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtr5">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
      @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('updategallery')}}" >
        @csrf
        <input type="hidden" name="code" value="{{$booklet[0]->code}}">
        <div class="panel-body">
              <div class="col-md-12 ">
              <div class="col-md-8 form-group">
              <label>Gallery : </label>
                                        <select  name="booklet_gallery" class="form-control" >
                                            <option value="">Select Gallery</option>
                                            @foreach($gallery as $g)
                                            @foreach($booklet as $b)
                                            <option value="{{$g[0]->g_id}}" {{($g[0]->g_id==$b->booklet_gallery?'selected':'')}}>{{$g[0]->gallery_title}}</option>
                                            @endforeach
                                            @endforeach
                                            </select>
                                            </div>
                                            </div>
                                            <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>
                                            </div>
          </form>
          </div>
          </div>
          </div>


 
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script>
$(".abc").chosen();
$('button').click(function(){
        $(".abc").trigger("chosen:updated");
});
</script>
@endsection
                   