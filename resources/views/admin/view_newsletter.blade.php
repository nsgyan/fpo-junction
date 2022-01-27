@extends('admin.layout.app')

@section('content')


 <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
                <div class="bg-light lter b-b wrapper-md">
                    <h1 class="m-n font-thin h3">List of Newsletter</h1>
                   
                </div>
                <!-- <div class="col-md-12 text-right"> <a class="btn btn-info" href="{{URL::to('Video')}}"> Add Video</a></div> -->
                   
                <div class="wrapper-md">
                    <div class="panel panel-default">
                        <div class="panel-heading"> List of Newsletter </div>
                        <div class="table-responsive">
                            <table ui-jq="dataTable" class="table table-striped b-t b-b">
                                <thead>
                                    <tr>
                                        <th style="width:20%">SI No.</th>
                                        <th style="width:20%">Email</th>
                                        <th style="width:25%">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                @foreach($newsletter as $n)
                                    <tr>
                                        <td style="width:20%">{{++$i}}</td>
                                        <td style="width:20%">{{$n->email}}</td>
                                        <td style="width:25%"> {{date('d M Y',strtotime($n->created_at))}}</td>
                                       
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