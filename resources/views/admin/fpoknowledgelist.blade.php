@extends('admin.layout.app')

@section('content')

 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                <h1 class="m-n font-thin h3">List FPO Knowledge</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('fpoknowledge')}}">Add  FPO Knowledge</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                
                        <div class="panel-heading"> List FPO Knowledge</div>
                        <div class="table-responsive table_min_height">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr> 
                                        <th>SI No.</th>
                                        <th> Title</th>
                                      
                                        <th> Description</th>
                                        <th> Image</th>
                                        <th> Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                            @foreach($fpo as $f)
                                    <tr>
                                        <td style="width:20%">{{++$i}}</td>
                                    
                                        <td>{{$f->serice_title}}</td>
                                        <td>{!!html_entity_decode($f->serice_desc)!!}</td>
                                        
                                        <td><img src="{{asset('/storage/app/public/'.$f->serice_image)}}" style="height:70px;width:70px;"/></td>
                                        <td>
                                            

                                                <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a href="{{URL::to('/editfpoknowledge/'.$f->serice_id)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Edit</i></a></li>
                                                <li><a class="dropdown-item" onclick="is_delete(`{{URL::to('/fpoknowledge_delete/'.$f->serice_id)}}`)" class="deletebtn" ><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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