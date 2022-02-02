@extends('admin.layout.app')
@section('content')
  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Edit Booklet Unit </h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtr5">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
    <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('update-unit')}}" >
      @csrf
      <input type="hidden" name="code" value="{{$booklet[0]->code}}">
      <div class="panel-body">        
              <div class="col-md-12 form-group">
              <label>Unit : </label></r>
                    <select id="second" data-placeholder="Select Unit" class="abc" name="booklet_unit[]"  style=" width:506px; box-shadow:none; text-shadow:none;" multiple="multiple">
                                    
                  @foreach($unitbooklet as $u)
                  @foreach($booklet as $b)
 
                          <option value="{{$u[0]->uid}}"  {{($u[0]->uid==$b->booklet_unit?'selected':'')}}>{{$u[0]->unit_title}}</option> 
        
                  @endforeach
                  @endforeach
                  </select>
                  </div>
                  <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>

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
$(".abc").chosen();
$('button').click(function(){
        $(".abc").trigger("chosen:updated");
});
</script>
@endsection
                   