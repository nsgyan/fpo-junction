@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update {{$booklet[0]->type}}</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtr5">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
       
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('update-booklet')}}" >
          @csrf

          <input type="hidden" name="code" value="{{$booklet[0]->code}}">
              <div class="panel-body">
             
                    <div class="col-md-6 form-group">
                      <label>  Type : </label>
                      <input type="text"  value="{{$booklet[0]->type}}" class="form-control" placeholder="Enter Title" name="type" readonly>
                    </div>

                    <div class="col-md-6 form-group">
                      <label>  Title : </label>
                      <input type="text" style="height:30px" value="{{$booklet[0]->booklet_title}}" class="form-control" placeholder="Enter Title" name="booklet_title" >
                    </div>
                   

                    <div class="col-md-12 form-group">
                    <label>Document (attachments) :  </label>
                    <input type="file" class="form-control"  name="attachment"/>
                    </div>

                    <div class="col-md-12 form-group">
                    <label>Banner Image :  </label>
                    <input type="file" class="form-control"    name="banner_image"/>
                    </div>
                    
                    
                    <div class="col-md-3 form-group">
                    <label>Booklet Active : </label><br/>
                    Yes : <input type="radio" name="booklet_active" value="Yes" {{ $booklet[0]->booklet_active == 'Yes'  ? 'checked="checked"' : '' }} >
                    No : <input type="radio" name="booklet_active" value="No" {{ $booklet[0]->booklet_active == 'No'  ? 'checked="checked"' : '' }} >
                    </div>

                    <div class="col-md-9 form-group">
                      <label>  description :  </label>
                      <div> <textarea class="ckeditor" name="booklet_description" rows="1">{{$booklet[0]->booklet_description}}</textarea  ></div>
                    </div>
                  <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary">Submit</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script>

$('select[name=sub_chapter]').change(function(){
           $("input[name=cid]").val($(this).val())
});

$(".abc").chosen();
$('button').click(function(){
        $(".abc").trigger("chosen:updated");
});
</script>
  
@endsection