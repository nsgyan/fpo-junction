@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Business Model</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('business-model')}}">Add Business Model</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Business Model </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th>State</th>
                                        <th>Title</th>
                                         <th> Language</th>
                                        <th>Description</th>
                                        <th>Banner Image</th>
                                        <th>Attachment</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($business_model as $b)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$b->state}}</td>
                                        <td>{{$b->b_title}}</td>
                                        <td>{{$b->lang}}</td>
                                        <td>{{$b->b_description}}</td>
                                       
                                        <td><img src="{{asset('/storage/app/public/'.$b->banner_image)}}"  style="height:100px;width:100px;"/></td>
                                        <td><img src="{{asset('/storage/app/public/'.$b->attachment)}}"  style="height:100px;width:100px;"/></td>
                                        <td>{{$b->link}}</td>

                                        <td>
                                        <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a href="{{URL::to('/business-model-edit/'.$b->code)}}" class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li>   <a class="dropdown-item"  class="deletebtn"  onclick="is_delete(`{{URL::to('/business_delete/'.$b->business_id)}}`)"><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
                                                </div>
                                         </div>
                                        </td>
                                    </tr>
                                @endforeach 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection