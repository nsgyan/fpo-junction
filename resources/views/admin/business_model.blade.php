@extends('admin.layout.app')

@section('content')




  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Business Model</h1>
</div>

<div class="col-md-12 text-right"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Photo Gallery
</button></div>
<div class="wrapper-md" ng-controller="FormDemoCtrl">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">Business Model</div>
        <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('save-business-model')}}" >
          @csrf
              
              <div class="panel-body">
              @if($errors->any())
              <h4 class="text-danger">No. of Duplicate : {{$errors->first()}}</h4>
              @endif
              
              <div class="col-md-6 form-group">
                      <label>  Language : <span class="text-danger">*</span></label>
                      <select name="lang" id="lang" class="form-control" required>
                        <option value="">Select Language</option>
                        <option value="en">English</option>
                        <option value="hi">Hindi</option>
                        <option value="kn">Kannada</option>
                        <option value="te">Telugu</option>
                        <option value="or">Oriya</option>
                      </select> 
                    </div>
                    <div class="col-md-6 form-group">
                      <label>state : </label>
                      <select name="state" id="status" class="form-control">
                      <option value="">Select</option>
                      @foreach($jsonstate as $s)
                        <option value="{{$s}}">{{$s}}</option>
                        @endforeach
                      </select>
                      
                    </div>
                    <input type="hidden" name="type" value="Business" />
                    
                    

                    <div class="col-md-6 form-group">
                      <label>  Title : <span class="text-danger">*</span></label>
                      <input type="text" style="height:30px" class="form-control" placeholder="Enter Title" name="booklet_title" required>
                    </div> 
                    
 
                    <div class="col-md-6 form-group">
                    <label>Document (attachments) :  </label>
                    <input type="file" class="form-control"  name="attachment"/>
                    </div> 

                    <div class="col-md-12 form-group">
                    <label>Banner Image :  <span class="text-danger" >*</span></label>
                    <input type="file" class="form-control"  name="banner_image" required/>
                    </div>
                    <div class="col-md-6 form-group">
                      <label>Unit : <span class="text-danger" >*</span></label></r><br/>
                      <select id="first" data-placeholder="Select Unit" class="abc" name="booklet_unit[]"  style=" width:506px; box-shadow:none; text-shadow:none;" multiple="multiple">
                        @foreach($booklet['abc'] as $unit)
                        <option value="{{$unit[0]->uid}}">{{$unit[0]->unit_title}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Gallery : </label></r>
                      <select  name="booklet_gallery" class="form-control" >
                        <option value="">Select Gallery</option>
                      @foreach($booklet['gallerybooklet'] as $b)
                        <option value="{{$b[0]->g_id}}">{{$b[0]->gallery_title}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                    <label>Booklet Active : </label><br/>
                    Yes :  <input type="radio" name="booklet_active" value="Yes" checked>
                    No : <input type="radio" name="booklet_active" value="No">
                    </div>

                    <div class="col-md-9 form-group">
                      <label>  description : </label>
                
                      <div> <textarea class="ckeditor" name="booklet_description"></textarea></div>
                    </div>
                   &nbsp;&nbsp;   <button style="margin-bottom:10px;" type="submit" class="btn btn-sm btn-primary" >Submit</button>
                
                  </div>
<!---------------------------ROI Analysisi------------------------------------------>


             <div class="panel ">
                  <div class="panel-heading font-bold">ROI Analysis
                 
                  </div>
                          &nbsp;&nbsp;&nbsp;<i class="fa fa-plus text-center" id="Add1"></i>
                    &nbsp;&nbsp;<i class="fa fa-minus text-center" id="Remove1"></i> 

                
                    <div class="panel-body">

                          <div class="col-md-4 form-group">
                            <label>Title : </label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title[]">
                          </div>

                          <div class="col-md-4 form-group">
                            <label>Value : </label>
                            <input type="text" class="form-control" placeholder="Enter Value" name="value[]">
                          </div>
              

                          <div class="col-md-4 form-group">
                            <label>Color : </label>
                            <select name="color[]" id="color" class="form-control">
                            <option value="">Select</option>
                              <option value="Red" name="color" >Red</option>
                              <option value="Green" name="color">Green</option>
                            </select>
                            
                          </div>

                           <!-- <div class="col-md-3 form-group">
                              <label> </label><br/>
                              Status : <input type="checkbox" name="status[]" value="Yes">
                           
                            </div> -->
                            <div id="textboxDiv1" class="col-md-12"></div>
                    </div>
                     <button type="submit" class="btn btn-sm btn-primary">Submit</button>
             </div>

<!---------------------------------Tab Chapter------------------------------------->


             {{--  <div class="panel ">
                  <div class="panel-heading font-bold">Chapter Tab
                  
                  </div>
                  &nbsp;&nbsp;&nbsp;<i class="fa fa-plus  add_field_button" ></i>
                 
                  <!-- &nbsp;&nbsp;<i class="fa fa-minus text-center" id="Remove"></i>  -->

                  <!-- <button class="add_field_button">Add More Fields</button> -->
                    <div class="panel-body input_fields_wrap">
              
                    <div class='col-md-4 form-group '>
                        <label>Chapter Name : </label>
                        <input type='text' class='form-control ckeditor' placeholder='Enter Chapter Name' name='cname[]'>
                    </div>
                    <div class="col-md-8 form-group ">
                    <label>Description : </label>
                   
                    <div> <textarea class="ckeditor" name="c_description[]"></textarea></div>
                    <!-- <textarea class='ckeditor' name='c_description[]'></textarea> -->
                     <!-- <input id="editor" type='text' class='form-control' placeholder='Enter Description' name='c_description[]'> -->
                     </div>
                        
                     <div id="textboxDiv" class="col-md-12"></div> 

                  </div>
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>

                 
             </div>  --}}


            


            
          </form>
       
      </div>
    </div>
    
  </div>
  
  
</div>



	</div>
  </div>


<!---------------------------------Photo Gallery--------------------------------------->

@php 
  $users=DB::table('business_model')->get();
@endphp

             <!-----------Add Photo Gallery Modal ----------->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Photo Gallery</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="{{URL::to('save-gallery')}}" method="post" enctype="multipart/form-data">
                @csrf()
                
                      <div class="form-group">
                          <label>Business Model : <span class="text-danger">*</span></label>
                          <select name="p_title" id="p_title" class="form-control" required>
                          
                              <option value=""> Select</option>
                            @foreach($business as $row)
                                  <option value="{{$row->b_title}}">{{$row->b_title}}</option>
                                @endforeach

                                </select>
                          
                      </div>

                      <div class="form-group">
                         <label>Image : <span class="text-danger">*</span></label>
                            <input type="file" id="files" name="filenames[]" multiple="mutliple" required>
                      </div>

                      <div class="form-group">
                          <label> Photo Active : </label><br/>
                              Yes : <input type="radio" name="p_active" value="Yes">
                              No : <input type="radio" name="p_active" value="No">
                      </div>

                      <hr/>


                      <div class="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="alert('Add Gallery Successfully !')">Save</button>
                </div>
                 </form>
                </div>
                
              </div>
            </div>
          </div>
  <!-- /content -->

  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  

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
                $("#textboxDiv1").append("<div class='row'><div class='col-md-4 form-group'><label>Title : </label><input type='text' class='form-control' placeholder='Enter Title' name='title[]'></div><div class='col-md-4 form-group'><label>Value : </label><input type='text' class='form-control' placeholder='Enter Value' name='value[]'></div><div class='col-md-4 form-group'><label>Color : </label><select name='color[]' id='color' class='form-control'><option value=''>Select</option><option value='Red' name='color[]'>Red</option><option value='Green' name='color'>Green</option></select></div></div></div>");  
            });  
            $("#Remove1").on("click", function() {  
                $("#textboxDiv1").children().last().remove();  
            }); 

            $('select[name=sub_chapter]').change(function(){
           $("input[name=cid]").val($(this).val())
            });

           
            
        });  


    </script>  






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
                          $(wrapper).append('<div class="col-md-12"> <br/><div class="col-md-4 form-group"><label>Chapter Name : </label><input type="text"  class="form-control" placeholder="Enter Chapter Name" name="cname[]"><a href="#" class="remove_field"></a></div> <div class="col-md-8 form-group"><label>Description : </label><textarea id="'+editorId+'" class="ckeditor" name="c_description[]"></textarea></div><a href="#" class="btn btn-info remove_field ">Remove</a></div></div>'); //add input box
                          
                          CKEDITOR.replace(editorId, { height: 200 });
                      }
                  });
                  
                  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                      e.preventDefault(); $(this).parent('div').remove(); x--;
                  })
              });
           
$(".abc").chosen();

</script>

@endsection