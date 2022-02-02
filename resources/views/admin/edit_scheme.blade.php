@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update Scheme</h1>
</div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <!-- <div class="panel-heading font-bold">Add Slider</div> -->
        <div class="panel-body">
          <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('Update-Scheme')}}" >
          @csrf
          <input type="hidden" name="id" value="{{$data['id']}}">
            
          <div class="col-md-6 form-group">
              <label>Main Category : </label>
              <!-- <input type="text" class="form-control" placeholder="Enter Main Category" name="m_category" value="{{$data['main_category']}}"> -->
              <select name="m_category" id="m_category" class="form-control">
                <option value="{{$data['main_category']}}">{{$data['main_category']}}</option>
                <option value="All India Scheme" name="m_category" >All India Scheme</option>
                <option value="State Government Scheme" name="m_category" > State Government Scheme</option>
                <option value="FPO News" name="m_category"> FPO News</option>
              </select>
            </div>

            <div class="col-md-6 form-group">
              <label>Category : </label>
              <input type="text" class="form-control" placeholder="Enter Categry" name="category" value="{{$data['category']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Title : </label>
              <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$data['title']}}">
            </div>

            <div class="col-md-6 form-group">
              <label>Description : </label>
              <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$data['description']}}">
            </div>


            <div class="col-md-6 form-group">
              <label>Document (attachments) :  </label>
              <input type="file" class="form-control"  name="file"/>
            </div>

            <div class="col-md-6 form-group">
              <label>Link/URL : </label>
              <input type="text" class="form-control" placeholder="Enter Link/URL" name="url" value="{{$data['url']}}">
            </div>
            <div class="col-md-6 form-group">
              <label>Status : </label>
              <select name="status" id="status" class="form-control">
                <option value="active" name="status" >active</option>
                <option value="block" name="status">block</option>
              </select>
              
            </div>

            <div class="col-md-6 form-group">
              <label>Scheme Active : </label><br/>
              <!-- Yes :  <input type="radio" name="scheme_active" value="Yes">
              No : <input type="radio" name="scheme_active" value="No"> -->
              <select name="scheme_active" id="scheme_active" class="form-control">
                <option value="Yes" name="scheme_active" >Yes</option>
                <option value="No" name="scheme_active">No</option>
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