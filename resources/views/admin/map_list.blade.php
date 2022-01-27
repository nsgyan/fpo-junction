@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Map</h1>
                   
                </div>
                <!-- <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('map')}}"> Add Map</a></div> -->
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Map </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                            <thead>
                                
                                <tr role="row">
                                    <th class="text-center" rowspan="1" colspan="1" aria-label="" ></th>
                                    <th rowspan="1" colspan="1" aria-label="FPO ID" >FPO ID</th>
                                    <th  rowspan="1" colspan="1" aria-label="FPO" >FPO</th>
                                    <th  rowspan="1" colspan="1" aria-label="Location">Location</th>
                                    <th  rowspan="1" colspan="1" aria-label="FPO Details" >FPO Details</th>
                                    <th  rowspan="1" colspan="1" aria-label="Programme" >Programme</th>
                                    <th class="sorting" tabindex="0" aria-controls="vehicle-data" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
                                </tr>
                            </thead>
                                <tbody>
                           @foreach($mapdata as $map)
                              

                                <tr>
                                    <td class=" text-center"> </td>
                                   <td>
                                       <p class="text-danger">{{$map->code}}</p>
                                    </td>
                                    <td>
                                        <p class="text-danger">{{$map->fpo_name}}</p>
                                        <p class="text-muted">FPO Type : <span class="text-dark">{{$map->type}}</span></p>
                                    </td>
                                    <td>
                                        <p class="text-muted">District : <span class="text-dark">{{$map->city}}</span></p>
                                        <p class="text-muted">State : <span class="text-dark">{{$map->state}}</span></p>
                                    </td>
                                    <td>
                                        <p class="text-muted">CEO : <span class="text-dark">{{$map->ceo_name}}</span></p>
                                        <p class="text-muted">Email : <span class="text-dark">{{$map->email}}</span></p
                                        ><p class="text-muted">Mobile : <span class="text-dark">{{$map->mobile}}</span></p>
                                        <p class="text-muted">Username : <span class="text-dark">{{$map->user_name}}</span></p>
                                    </td>
                                    <td>
                                        <p class="text-muted"> <span class="text-dark">{{$map->programm}}</span></p>
                                        <p class="text-muted">Created On: <span class="text-dark">{{date('d-m-Y',strtotime($map->created_at))}}</span></p>
                                    </td>
                                    <td>
                                    <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                   <!-- <li><a href="" class="editbtn"><i class="fa fa-edit" style="color:blue;"> Edit</i> </a></li> -->
                                                <li><a onclick="is_delete(`{{URL::to('/map-delete/'.$map->mapid)}}`)" class="deletebtn"><i class="fa fa-trash-o " style="color:red;"> Delete</i> </a></li>
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