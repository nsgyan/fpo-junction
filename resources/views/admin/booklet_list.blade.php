@extends('admin.layout.app')

@section('content')

<style>
    .dropdown-menu{
        min-width:135px !important;
    }

.chosen-container , .chosen-container-multi
{
    width: 485px !important;
}
</style>
 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Booklet</h1>
                   
                </div>
                <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('booklet')}}">Add Booklet</a></div>
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                    @if($errors->any())
              <h4 class="text-success">{{$errors->first()}}</h4>
              @endif
                        <div class="panel-heading">  List of Booklet</div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th>SI No.</th>
                                        <th> Title</th>
                                        <th> Description</th>
                                        <th> Type</th>
                                        <th> Document </th>
                                        <th> bnner image</th>
                                       
                                        
                                        <th>Booklet Active</th>
                                        <th> Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                  @foreach($booklet as $b)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{ $b[0]->booklet_title }}</td>
                                            <td>{{ $b[0]->booklet_description }}</td>
                                            <td>{{ $b[0]->type }}</td>
                                           
                                            <!-- <td>{{ $b[0]->attachment }}</td> -->
                                            <td><img src="{{asset('/storage/app/public/'.$b[0]->attachment)}}" style="height:70px;width:70px;"/></td>
                                            <td><img src="{{asset('/storage/app/public/'.$b[0]->banner_image)}}" style="height:70px;width:70px;"/></td>
                                            
                                            
                                            <td>{{ $b[0]->booklet_active}}</td>
                                            <td style="width:15%">


                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="fa fa-cog"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a href="{{URL::to('/editbooklet/'.$b[0]->code)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Booklet Edit</i></a></li>
                                                    <li><a href="{{URL::to('/editbookletunit/'.$b[0]->code)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Unit Edit</i></a></li>
                                                    <li><a href="{{URL::to('/editgallerybooklet/'.$b[0]->code)}}"  class="editbtn"><i class="fa fa-pencil-square-o text-info" aria-hidden="true"> Gallery Edit</i></a></li>
                                                    
                                                   
                                                    <li><a class="dropdown-item" onclick="is_delete(`{{URL::to('/booklet-delete/'.$b[0]->code)}}`)" class="deletebtn" ><i class="fa fa-trash" aria-hidden="true" style="color:red;"> Delete</i></a></li>
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


