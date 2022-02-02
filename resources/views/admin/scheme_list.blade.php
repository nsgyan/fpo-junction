@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Scheme</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('Scheme')}}"> Add Scheme</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Scheme </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th style="width:20%">SI No.</th>
                                        <th style="width:20%">Main Category</th>
                                        <th style="width:25%">Category</th>
                                        <th style="width:20%">Title</th>
                                        <th style="width:20%">Language</th>
                                        <th style="width:20%">Description</th>
                                        <th style="width:20%">Link/URL</th>
                                        <th style="width:25%">Document (attachments)</th>
                                        <th style="width:15%">Slider Active</th>
                                        <th style="width:15%">Status</th>
                                        <th style="width:15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($scheme as $s)
                                    <tr>
                                        <td style="width:20%">{{++$i}}</td>
                                        <td style="width:20%">{{$s->main_category}}</td>
                                        <td style="width:25%">{{$s->category}}</td>
                                        <td style="width:25%">{{$s->title}}</td>
                                        <td style="width:25%">{{$s->lang}}</td>
                                        <td style="width:25%">{{$s->description}}</td>
                                        <td style="width:25%">{{$s->url}}</td>
                                        <td style="width:25%">
                                        
                                        @if($s->document!="")
                                        <img src="{{asset('/storage/app/public/'.$s->document)}}"  style="height:100px;width:100px;"/>
                                        @else
                                        <img src="{{asset('/public/admin/img/no-image.png')}}" height="100px" width="100px"/>
                                        @endif

                                        </td>

                                        <td style="width:15%">{{$s->scheme_active}}</td>
                                        <td style="width:15%">{{$s->status}}</td>
                                        <td style="width:15%">  <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a href="{{URL::to('/edit_scheme/'.$s->id)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li>   <a class="dropdown-item"  class="deletebtn"  onclick="is_delete(`{{URL::to('/scheme_delete/'.$s->id)}}`)"><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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