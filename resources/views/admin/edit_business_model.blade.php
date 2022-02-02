@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Update Business Model</h1>
</div>


<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Business Model</div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('business-model-update')}}" >
          @csrf
          <input type="hidden" name="code" value="{{$userData[0]->code}}">

              <div class="panel-body">
             
                    <div class="col-md-6 form-group">
                      <label>state : </label>
                     
                      <select name="state" id="state" class="form-control">
                       
                        @foreach($allstates as $s)
                        <option value="{{$s}}" {{($s==$userData[0]->state?'selected':'')}}>{{$s}}</option>
                        @endforeach
                
                      </select>
                      
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Title : </label>
                      <input type="text" class="form-control" placeholder="Enter Title" name="b_title" value="{{$userData[0]->b_title}}">
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Description : </label>
                      <input type="text" class="form-control" placeholder="Enter Categry" name="description"  value="{{$userData[0]->b_description}}">
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Banner Image :</label>
                      <input type="file" class="form-control"  name="file" value=""/>
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Attachment: </label>
                      <input type="file" class="form-control"  name="attachment" />
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Link : </label>
                      <input type="text" class="form-control" placeholder="Enter Link" name="link" value="{{$userData[0]->link}}">
                    </div>

             </div>

<!---------------------------ROI Analysisi------------------------------------------>


             <div class="panel ">
                  <div class="panel-heading font-bold">ROI Analysis
                 
                  </div>
                          &nbsp;&nbsp;&nbsp;<i class="fa fa-plus text-center" id="Add1"></i>
                          &nbsp;&nbsp;&nbsp;<i class="fa fa-minus text-center" id="Remove1"></i>
                    <div class="panel-body">
                    @foreach($userData as $roi)
                          <div class="col-md-4 form-group">
                            <label>Title : </label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title[]" value="{{$roi->title}}">
                          </div>

                          <div class="col-md-4 form-group">
                            <label>Value : </label>
                            <input type="text" class="form-control" placeholder="Enter Value" name="value[]" value="{{$roi->value}}">
                          </div>
              
                          <div class="col-md-3 form-group">
                            <label>Color : </label>
                            <select name="color[]" id="color" class="form-control">
                              
                                 <option value="Green" {{$roi->color=='Green'?'selected':''}} > Green</option>
                                 <option value="Red" {{$roi->color=='Red'?'selected':''}} > Red</option>
                              
                            </select>
                          
                          </div>

                          <div class="col-md-1 form-group">
                           
                          <a class="dropdown-item" href="{{URL::to('/roi_delete/'.$roi->id)}}" class="deletebtn"  onclick="return confirm('Are your sure want to delete this record ?')"><i class="fa fa-minus text-center remove_icon" id="Remove1"></i></a>
                            &nbsp;&nbsp;
                          </div>

                          @endforeach
                          <div id="textboxDiv1" class="col-md-12"></div>
                    </div>

                   
                    
             </div>

<!---------------------------------Tab Chapter------------------------------------->


             <div class="panel ">
                  <div class="panel-heading font-bold">Chapter Tab
                  
                  </div>
                  &nbsp;&nbsp;&nbsp;<i class="fa fa-plus  add_field_button" ></i>
               
                    
                    <div class="panel-body input_fields_wrap">
                         @foreach($chapter as $c)
                            <div class='col-md-3 form-group '>
                                <label>Chapter Name : </label>
                                <input type='text' class='form-control ckeditor' placeholder='Enter Chapter Name' name='cname[]' value="{{$c->chapter_name}}">
                            </div>
                            <div class="col-md-8 form-group ">
                            <label>Description : </label>
                           
                            <div> <textarea class="ckeditor" name="c_description[]" value="">{{$c->c_description}}</textarea></div>
                            </div>
                            <div class="col-md-1 form-group">
                           
                           <a class="dropdown-item" href="{{URL::to('/chapter_delete/'.$c->id)}}" class="deletebtn"  onclick="return confirm('Are your sure want to delete this record ?')"><i class="fa fa-minus text-center remove_icon" id="Remove1"></i></a>
                           </div>
                            <div id="textboxDiv" class="col-md-12"></div> 
                        @endforeach
                    </div>
                  


                  <button type="submit" class="btn btn-sm btn-primary" >Submit</button>

                 
             </div>


          </form>
       
      </div>
    </div>
    
  </div>
  
  
</div>



	</div>
  </div>



  <!-- /content -->

  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 



<!---------Chapter-------->
  <script>  
        $(document).ready(function() { 

          $('select[name=p_title]').change(function(){
           $("input[name=code]").val($(this).val())
         });

        });  
    </script>  


 <!--------------ROI Analysis-------------->   

 <script>  
        $(document).ready(function() {  
            $("#Add1").on("click", function() {  
                $("#textboxDiv1").append("<div class='row'><div class='col-md-4 form-group'><label>Title : </label><input type='text' class='form-control' placeholder='Enter Title' name='title[]'></div><div class='col-md-4 form-group'><label>Value : </label><input type='text' class='form-control' placeholder='Enter Value' name='value[]'></div><div class='col-md-3 form-group'><label>Color : </label><select name='color[]' id='color' class='form-control'><option value=''>Select</option><option value='Red' name='color[]'>Red</option><option value='Green' name='color'>Green</option></select></div></div> </div>");  
            });  
            $("#Remove1").on("click", function() {  
                $("#textboxDiv1").children().last().remove();  
            });  
        });  
    </script>  


  <!-------------------CKEditor--------------------->  



<script>
               $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            var editorId = 'editor_' +x;
            $(wrapper).append("<div class='col-md-12'> <br/><div class='row'><div class='col-md-3 form-group'><label>Chapter Name : </label><input type='text'  class='form-control' placeholder='Enter Chapter Name' name='cname[]'><a href='#' class='remove_field '></a></div> <div class='col-md-8 form-group'><label>Description : </label><textarea id='"+editorId+"' class='ckeditor' name='c_description[]'></textarea></div><a href='#' class=' remove_field '><i class='fa fa-minus text-center remove_icon'></i></a></div></div></div>"); //add input box
            
            CKEDITOR.replace(editorId, { height: 200 });
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
            </script>

@endsection