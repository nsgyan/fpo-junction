@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Chapter Guide Book</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('chapter_booklet')}}"> Add Chapter Guide Book</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                    @if($errors->any())
              <h4 class="text-success">{{$errors->first()}}</h4>
              @endif
                        <div class="panel-heading"> List of Chpater Guide Book</div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th>Title</th>
                                        <th>Language</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <!-- <th>Sub Chapter</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($chapterGuide as $c)
                                <tr>
                                        <td >{{++$i}}</td>
                                        <td>{{$c[0]->chapter_title}}</td>
                                         <td>{{$c[0]->lang}}</td>
                                        <td> {!!html_entity_decode($c[0]->chapter_description)!!}</td>
                                        <td>{{$c[0]->type}}</td>

                                        <td>

                                        <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li> <a class="dropdown-item" href="{{URL::to('/chapter_booklet_edit/'.$c[0]->code)}}"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue;"> Edit</i></a></li>
                                                    <li>  <a class="dropdown-item" onclick="is_delete(`{{URL::to('/chapter-booklet-delete/'.$c[0]->code)}}`)"><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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