@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of FAQ</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('FAQ')}}"> Add FAQ</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of FAQ </div>
                        <div class="table-responsive table_min_height">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th>Category</th>
                                        <th>Language</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>FAQ Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($faq as $s)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$s->category}}</td>
                                        <td>{{$s->lang}}</td>
                                        <td>{{$s->question}}</td>
                                        <td> {!!html_entity_decode($s->answer)!!}</td>
                                       
                                        <td>{{$s->faq_active}}</td>
                                        <td>
                                        
                                        <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>   <a href="#" class="editbtn"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue;"> Edit</i></a></li>
                                                    <li>    <a class="dropdown-item"  class="deletebtn"  onclick="is_delete(`{{URL::to('/faq_delete/'.$s->id)}}`)"> <i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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