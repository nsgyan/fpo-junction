@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Booklet Gallery</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('Booklet-Gallery')}}">Add Booklet Gallery</a></div>
 
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading">  List of Booklet Gallery</div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th> Title</th>
                                        <th> Description</th>
                                        <th> Type</th>
                                        <th> Language</th>
                                        <!-- <th> Image</th> -->
                                        <th>Action</th>
                                        
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                    @foreach ($users as $data)
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ $data[0]->gallery_title}}</td>
                                    <td>{{ $data[0]->gallery_desc}}</td>
                                    <td>{{ $data[0]->type}}</td>
                                    <td>{{ $data[0]->lang}}</td>
                                    <!-- <td>
                                        <img height="70px" width="70px"; src="{{asset('/public/BookletGallery/'.$data[0]->file_upload)}}" >
                                    </td> -->
                                    
                                    <td style="width:15%">

                                    <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a href="{{URL::to('/Edit-Booklet-Gallery')}}/{{ $data[0]->code }}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                    <li>  <a class="dropdown-item"  class="deletebtn"  onclick="is_delete(`{{URL::to('/bookletgallerydelete')}}/{{ $data[0]->code }}`)"><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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