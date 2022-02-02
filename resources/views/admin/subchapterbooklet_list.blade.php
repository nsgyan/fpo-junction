@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Sub Chapter Booklet</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('subchapterbooklet')}}"> Add Sub Chapter Booklet</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Sub Chapter Booklet </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th>Title</th>
                                        <th>Language</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                  @foreach($subchapterbooklet as $p)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{ $p->subchapter_title }}</td>
                                            <td>{{ $p->lang }}</td>
                                            <td>{!!html_entity_decode($p->subchapter_des )!!}</td>
                                            <td>{{ $p->type }}</td>
                                            <td>{{ $p->status }}</td>
                                            <td>


                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li> <a href="{{URL::to('/subchapter_booklet_edit/'.$p->subid)}}" class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li> <a class="dropdown-item" onclick="is_delete(`{{URL::to('/subchapterbookletdelete/'.$p->subid )}}`)" class="deletebtn" ><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a</li>
                                                </div>
                                         </div>
                                                      
                                            
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