@extends('admin.layout.app')

@section('content')




    <!-- content -->
    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">

    <div class="wrapper-md" ng-controller="FormDemoCtrl">
    <div class="row">
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading font-bold">Add Subchapter</div> 
            
            <form role="form" enctype="multipart/form-data" method="post" action="{{URL::to('subchapterbookletlist')}}" >
            @csrf

<!---------------------------ROI Analysisi------------------------------------------>



<!---------------------------------Tab Chapter------------------------------------->


             <div class="panel ">
                  
                 
                  <!-- &nbsp;&nbsp;<i class="fa fa-minus text-center" id="Remove"></i>  -->

                  <!-- <button class="add_field_button">Add More Fields</button> -->
                    <div class="panel-body input_fields_wrap">
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
                      <label>  Type : <span class="text-danger">*</span></label>
                      <select name="type" id="type" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Booklet">Booklet</option>
                        <option value="Guide Book">Guide Book</option>
                        <option value="Business">Business Modal</option>
                        <option value="Thematic">Thematic Studies</option>
                      </select> 
                    </div>

                    <div class='col-md-4 form-group '>
                        <label>Title : <span class="text-danger">*</span></label>
                        <input type='text' class='form-control ckeditor' placeholder='Enter Chapter Name' name='name' required>
                    </div>
                    <div class="col-md-8 form-group ">
                    <label>Description : </label>
                   
                    <div> <textarea class="ckeditor" name="description"></textarea></div>
                    <!-- <textarea class='ckeditor' name='c_description[]'></textarea> -->
                     <!-- <input id="editor" type='text' class='form-control' placeholder='Enter Description' name='c_description[]'> -->
                     </div>
                        
                     <div id="textboxDiv" class="col-md-12"></div> 
                     <button type="submit" class="btn btn-sm btn-primary">Submit</button>

                  </div>

                 
             </div>


            
          </form>
       
      </div>
    </div>
    
  </div>
  
  
</div>




<!---------------------------------Photo Gallery--------------------------------------->


             
  <!-- /content -->

  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 



<!-- -------Chapter-------->
  <script>  
        $(document).ready(function() { 

          $('select[name=p_title]').change(function(){
           $("input[name=code]").val($(this).val())
         });

            // $("#Add").on("click", function() {  
            //     $("#textboxDiv").append("<div class='row'><br/><div class='col-md-4 form-group'><label>Chapter Name : </label><input type='text' class='form-control' placeholder='Enter Chapter Name' name='cname[]'></div> <div class='col-md-8 form-group'><label>Description : </label><textarea class='editor' name='c_description[]'></textarea></div></div></div>");  
            // });  
            // $("#Remove").on("click", function() {  
            //     $("#textboxDiv").children().last().remove();  
            // });  
        });  
    </script>  


 <!--------------ROI Analysis-------------->   
<!-- 
 <script>  
        $(document).ready(function() {  
            $("#Add1").on("click", function() {  
                $("#textboxDiv1").append("<div class='row'><div class='col-md-4 form-group'><label>Title : </label><input type='text' class='form-control' placeholder='Enter Title' name='title[]'></div><div class='col-md-4 form-group'><label>Value : </label><input type='text' class='form-control' placeholder='Enter Value' name='value[]'></div><div class='col-md-4 form-group'><label>Color : </label><select name='color[]' id='color' class='form-control'><option value=''>Select</option><option value='Red' name='color[]'>Red</option><option value='Green' name='color'>Green</option></select></div></div><br/></div>");  
            });  
            $("#Remove1").on("click", function() {  
                $("#textboxDiv1").children().last().remove();  
            });  
        });  
    </script>   -->


  <!-------------------CKEditor--------------------->  



  <script>
                        ClassicEditor
                                .create( document.querySelector( '.editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
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
            $(wrapper).append("<div class='col-md-12'> <br/><div class='col-md-4 form-group'><label>Chapter Name : </label><input type='text'  class='form-control' placeholder='Enter Chapter Name' name='cname[]'><a href='#' class='remove_field '></a></div> <div class='col-md-8 form-group'><label>Description : </label><textarea id='"+editorId+"' class='ckeditor' name='c_description[]'></textarea></div><a href='#' class='btn btn-info remove_field '>Remove</a></div></div>"); //add input box
            
            CKEDITOR.replace(editorId, { height: 200 });
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
            </script>

@endsection