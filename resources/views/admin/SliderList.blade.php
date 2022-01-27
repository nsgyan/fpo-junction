@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Slider</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('Slider')}}"> Add Slider</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Slider </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th style="width:20%">SI No.</th>
                                        <th style="width:20%">Title</th>
                                        <th style="width:20%">Language</th>
                                        <th style="width:25%">Category</th>
                                        <th style="width:25%">Image</th>
                                        <th style="width:15%">Slider Active</th>
                                        <th style="width:15%">Status</th>
                                        <th style="width:15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($slider as $s)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$s->title}}</td>
                                        <td>{{$s->lang}}</td>
                                        <td>{{$s->category}}</td>
                                        <td><img src="{{asset('/storage/app/public/'.$s->image)}}"  style="height:100px;width:100px;"/></td>
                                        <td>{{$s->slider_active}}</td>
                                        <td>{{$s->status}}</td>

                                        <td>
                                        <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a href="{{URL::to('/edit_slider/'.$s->slider_id)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li>   <a class="dropdown-item"  class="deletebtn"  onclick="is_delete(`{{URL::to('/s_delete/'.$s->slider_id)}}`)"><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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