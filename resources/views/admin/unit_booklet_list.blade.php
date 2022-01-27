@extends('admin.layout.app')

@section('content')


@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Unit Booklet</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('unitbooklet')}}"> Add Unit Booklet</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Unit Booklet </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th>Title</th>
                                        <th>Language</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                  @foreach($unitbooklet as $p)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{ $p[0]->unit_title }}</td>
                                            <td>{{ $p[0]->lang }}</td>
                                            <td> {!!html_entity_decode($p[0]->unit_description)!!}</td>
                                            <td>{{ $p[0]->type }}</td>
                                        
                                            <td>

                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>  <a href="#" class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li> <a class="dropdown-item" onclick="is_delete(`{{URL::to('/unit-booklet-delete/'.$p[0]->code)}}`)" class="deletebtn"  ><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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