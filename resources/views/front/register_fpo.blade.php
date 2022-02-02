@extends('front.layout.app')

@section('content')

<style type="text/css">
#message {
  display:block;
  color: #000;
  position: relative;
}

#message p {
    padding-bottom: 2px;
    padding-left: 2rem;
    font-size: 13px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -16px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: black;
}

.invalid:before {
  position: relative;
  left: -16px;
  content: "✖";
}






/****************************Add User CSS Start********************/

.main_heading
  {
    font-size: 19px;
    font-weight: 600;
    color: black;
  }
  .body_part
  {
    background-color: #ebebeb;
    border: 1px solid #8080805c;
    border-radius: 7px 7px 7px 7px;
  }
  /* .label_heading
  {
    font-weight: 600;
    color: black;
  } */
  .text_box_css, .form-control
  {
    border-radius: 5px 5px 5px 5px;
  }
  .password_part_design
  {
    border: 2px dotted #8080807a;
    border-radius: 6px 6px 6px 6px;
    padding-top: 2rem;
  }
  .password_suggestion
  {
    height: 120px;
    background-color: #fdff91;
    margin-top: 2.5rem;
    border-radius: 6px;
    padding-left: 3rem;
    padding-top: 1rem;
  }
  .password_suggestion p
  {
    margin: 0px 0px -1px;
  }
  .pass_sugg_head
  {
    font-size: 14px;
    font-weight: 600;
    color: black;
  }
    .footer_css
  {
    margin-left: -16rem;
    margin-top: 2rem;
  }
  .btn_reset
  {
    background: #eeeeee;
    color: black;
    border: 1px solid #80808082;
    border-radius: 5px;
  }
  .btn_submit
  {
    background: #ed1f21;
    color: white;
    border-radius: 5px;
  }

/****************************Add User CSS End********************/
</style>



<div class="container-fluid" id="pagecontent">
    <div class="clearfix"></div>
        <section>
        <div class="container branding ">
            <div class="row">
            
            <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
      

        <div class="wrapper-md" ng-controller="FormDemoCtrl">

          <p class="main_heading">{{ __('message.register_fpo') }}</p>
        <div class="">
            <div class="panel-body">
                <form action="{{URL::to('save-register-fpo')}}" method="post" id="form" class="text_box_css">
                @csrf
                    <div class="col-md-12">
                        <div class="col-sm-6"></div>
                        <div class="form-layout">
                            <div class="row mg-b-25">
                              <div class="col-lg-4">
                               
                              </div><!-- col-4 -->
                              <div class="col-lg-12">
                                <div class="row">
                                <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.fpo_type') }} : <span class="text-danger">*</span> </label>
                                  <select class="form-control" name="fpo_type">
                                    <option value="Farmer Producer Company">{{ __('message.farmer_producer_company') }}</option>
                                    <option value="Farmer Cooperative">{{ __('message.farmer_cooperative') }}</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.fpo_code') }} : <span class="text-danger">*</span> </label>
                                  <input class="form-control" type="text" name="fpo_code" value="{{rand(1000,9999)}}" placeholder="Enter FPO Code" autocomplete="off" readonly required/>
                                </div>
                              </div>
                              </div>
                              </div><!-- col-4 -->
                              <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.fpo_name') }} : <span class="text-danger">*</span></label>
                                  <input class="form-control" type="text" name="fpo_name" value="" placeholder="{{ __('message.fpo_name') }} " autocomplete="none" required/>
                                </div>
                              </div><!-- col-4 -->
                             <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.ceo_name') }} : <span class="text-danger">*</span></label>
                                  <input class="form-control" type="text" name="ceo_name" value="" placeholder="{{ __('message.ceo_name') }} " autocomplete="off" required/>
                                  
                                </div>
                              </div><!-- col-4 -->
        
                              <div class="col-lg-5">
                                      <label class="form-control-label label_heading">{{ __('message.email_address') }} : <span class="text-danger">*</span><span class="text-danger error-email"></span></label>
                                          <div class="input-group m-b">
                                             
                                            <!--<span class="input-group-addon">+91</span>-->
                                            <input class="form-control" type="email" name="email" value="" placeholder="{{ __('message.enter_your_email_here') }}" autocomplete="none" onblur="checkemailvalidation()" required/>
                                            <span class="input-group-addon"><i class="fa fa-envelope" style="font-size: 16px;"></i></span>
                                            
                                          </div>
                                          
                                    </div><!-- col-4 -->
                              
                            <div class="col-lg-5">
                                      <label class="form-control-label label_heading">{{ __('message.mobile_no') }} : <span class="text-danger">*</span> <span class="text-danger error-mobile"></span> </label>
                                          <div class="input-group m-b">
                                             
                                            <span class="input-group-addon">+91</span>
                                            <input class="form-control" type="text" name="mobile" onblur="checkmobilevalidation()" value="" placeholder="{{ __('message.enter_your_10_digit_mobile_number_here') }}" maxlength="10" minlength="10" size="10" autocomplete="none" required/>
                                            <span class="input-group-addon"><i class="fa fa-mobile-phone" style="    font-size: 20px;"></i></span>
                                          </div>
                                    </div><!-- col-4 -->

                             <div class="col-lg-10">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.address') }} : <span class="text-danger">*</span></label>
                                  <textarea class="form-control" placeholder="{{ __('message.enter_street_address') }}" name="street_address" style="height: 65px;"></textarea>
                                  <label class="form-control-label">{{ __('message.street_address') }} : </label>
                                </div>
                              </div>

                              <div class="col-lg-10">
                                
                              </div>
                              <div class="col-lg-10">
                                <div class="form-group">
                                 
                                 
                                  <textarea class="form-control" placeholder="{{ __('message.enter_address_line2') }}" name="address" style="height: 65px;"></textarea>
                                  <label class="form-control-label ">{{ __('message.address_line_2') }} </label>
                                </div>
                              </div>

                             
                              <div class="col-lg-5">
                                <div class="form-group">
                                 
                                <select name="state" id="status" class="form-control">
                                    <option value="">{{ __('message.select_state_region_province') }}</option>
                                    @foreach($jsonstate as $s)
                                        <option value="{{$s}}">{{$s}}</option>
                                    @endforeach
                                </select>
                                  <label class="form-control-label">{{ __('message.state_region_province') }} </label>
                                  
                                </div>
                              </div><!-- col-4 -->

                              <div class="col-lg-5">
                                <div class="form-group">
                                 
                                  <select class="form-control"  name="city" required>
                                    <option value="">{{ __('message.select_city_district') }} </option>
                                    <option value="Lucknow">Lucknow</option>
                                    <option value="Delhi">Delhi</option>
                                  </select>
                                  <label class="form-control-label">{{ __('message.city_district') }} </label>
                                </div>
                              </div><!-- col-4 -->


                            <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-5">
                                  <div class="form-group">
                                
                                    <input class="form-control" type="text" name="zip_code" value="" maxlength="6" minlength="6"
                                      placeholder="{{ __('message.enter_postal_zip_code') }}" autocomplete="off" required />
                                    <label class="form-control-label">{{ __('message.postal_zip_code') }} </label>
                                  </div>
                                </div>
                                <div class="col-lg-5">
                                <div class="form-group">
                                  
                                 <select class="form-control"  name="country"required>
                                    <option value="" >{{ __('message.country') }}</option>
                                    <option value="India" > India</option>
                                  </select>
                                  <label class="form-control-label">{{ __('message.country') }} </label>
                                </div>
                              </div> 
                             
                            </div> 
                            </div> 

                          <div class="col-md-12">
                              <div class="col-lg-10  password_part_design">
                                
                                <div class="col-lg-6">
                                <label class="form-control-label label_heading">{{ __('message.fpo_username') }}  <span class="text-danger">*</span> </label>
                                            <div class="input-group m-b">
                                               
                                              <span class="input-group-addon"><img src="public/admin/img/user.png" height="20px"></span>
                                            <input class="form-control" type="text" name="user_name" value="" placeholder="{{ __('message.enter_user_name') }}" autocomplete="off" required/>
                                            </div>
                                    </div>

                              <div class="col-lg-6" style="height: 75px;">
                                 
                              </div>

                              <div class="col-lg-6">
                                <label class="form-control-label label_heading">{{ __('message.fpo_password') }}  <span class="text-danger">*</span> </label>
                                            <div class="input-group m-b">
                                               
                                              <span class="input-group-addon"><img src="public/admin/img/lock.png" height="20px"></span>
                                             <input class="form-control" type="password" name="c_password" value="" placeholder="{{ __('message.enter_password') }} " autocomplete="off" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required/>
                                             <span id='message'></span>
                                            </div>
                                    </div>

                              <div class="col-lg-6 password_suggestion">
                                 <span class="pass_sugg_head">
                                  <img src="public/admin/img/akert.png" height="20px"> &nbsp;
                                  {{ __('message.password_suggeation') }}</span>
                                 <div id="message">
                                  <p id="length" class="invalid">{{ __('message.should_be_minimum_8_characters') }}</p>
                                  
                                  <p id="capital" class="invalid">{{ __('message.should_contain_atleast_one_uppercase_alphabet') }}

                                </p>
                                  <p id="number" class="invalid">{{ __('message.should_contain_atleast_one_number') }}</p>
                                  <p id="letter" class="invalid">{{ __('message.a_lowercase_letter') }}</p>
                                </div>
                              </div>       

                              <div class="col-lg-6" style="margin-top: -6rem;">
                               <label class="form-control-label label_heading">{{ __('message.fpo_confirm_password') }} : <span class="text-danger">*</span> </label>
                                            <div class="input-group m-b">
                                               
                                              <span class="input-group-addon"><img src="public/admin/img/lock.png" height="20px"></span>
                                             <input class="form-control" type="password" id="confirm_password" name="con_password" value="" placeholder=" {{ __('message.confirm_password') }} " autocomplete="off"  required/>
                                             
                                            </div>
                                    </div>





                              </div>
                              <div class="col-lg-2"></div>
                          </div>


                          <div class="col-lg-5" style="margin-top: 2rem;">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">
                                  {{ __('message.promotion_institute') }} : <span class="text-danger">*</span></label>
                                  <input class="form-control" type="text" name="p_institute" value="" placeholder="{{ __('message.enter_promotion_institute_here') }}"
                                    autocomplete="off" required />
                                </div>
                              </div>

                              <div class="col-lg-5" style="margin-top: 2rem;">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.resource_institute') }} : <span class="text-danger">*</span> </label>
                                  <input class="form-control" type="text" id="" name="resource_institute" value=""
                                    placeholder="{{ __('message.enter_resource_institute_here') }} "  />
                                  <span id='message'></span>
                                </div>
                              </div> 


                              <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.programme') }} : <span class="text-danger">*</span> </label>
                                  <input class="form-control" type="text" id="" name="programme" value="" placeholder="{{ __('message.ex_central_sector_state_government') }}" />
                                  <span id='message'></span>
                                </div>
                              </div>                             

                              <div class="col-lg-5">
                                <div class="form-group">
                                  <label class="form-control-label label_heading">{{ __('message.ri_popi') }}<span class="text-danger">*</span></label>
                                  <select class="form-control"  name="ri_popi"required>
                                    <option value="" >{{ __('message.select') }}</option>
                                    <option value="RI">RI</option>
                                    <option value="POPI">POPI</option>
                                  </select>
                                </div>
                              </div>
                             
                              <div class="col-lg-10"></div>
                              <!-- col-4 -->
                             <div class="col-lg-2"> 
                                <div class="form-layout-footer footer_css ">
                                 
                                  <button class="btn  bg-grn  userAlert btn_submit" type="submit">{{ __('message.submit') }}</button>
                                  
                                </div>
                              </div>
                            <!-- form-layout-footer -->
                          </div>
                    </div>
                </form>
            </div>
          </div>
     </div>
  </div>
</div>

            </div>
        </div>
        </section>
    <div class="clearfix"></div>
 

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>




<script>


$("#form").submit(function(){
     if($("#psw").val()!=$("#confirm_password").val())
     {
         alert("password should be same");
         return false;
     }
    var ch = $('#chk').val();
    if(ch!=0){
      return false;
    }
 })
</script>

<script>
  // $(document).click('.userAlert', function () {
  //    var ch = $('#chk').val();
  //    if(ch==0){
  //      $('#form').submit()
  //      swal("Your Data Saved Successfully!")
  //    }
  //    else{
  //     alert('Please fill correct value. ')
  //    }

      
  // })

  $(document).on('change','select[name=state]',function(){
    $.ajax({
      "type": "get", "url": "http://districts.gov.in/doi_service/rest.php/district/"+ $(this).val()+"/json",
      success: function (res) {
        console.log(res)
        let str='<option value="" >Select City/District</option>';
          for (let index = 2; index < (((res.categories).length)-1); index++) {
            var element = res.categories[index];
            str += '<option value = "' + element.category.district_name + '" >' + element.category.district_name + '</option>';
          }
        $('select[name=district]').html(str)
      }
    })
  })


  function checkemailvalidation(){
    if ($('input[name=email]').val() == "") {
      $('.error-email').html('Email Id is mandatory.')
      $('.btn_submit').css('display', 'none')
      $('#chk').val(1)
    }
    else{
      $.ajax({
      "type": "post",
      "url": "/user/checkvalidation",
      "data": { email: $('input[name=email]').val() },
      success: function (res) {
        console.log(res.length);
        if(res.length!=0){
          $('.error-email').html('Email Id Already Exist.')
          $('.btn_submit').css('display','none')
          $('#chk').val(1)
        }
        else{
          $('.error-email').html(' ')
          $('.btn_submit').css('display', 'block')
           $('#chk').val(0)
        }
      }
    })
    }
    
  }

  function checkmobilevalidation() {
    if ($('input[name=email]').val() == "") {
      $('.error-mobile').html('Mobile No. is mandatory.')
      $('.btn_submit').css('display', 'none')
      $('#chk').val(1)
    }
    else{
       $.ajax({
        "type": "post",
        "url": "/user/checkvalidation",
        "data": { mobile: $('input[name=mobile]').val() },
        success: function (res1) {
          console.log(res1.length);
          if (res1.length != 0) {
            $('.error-mobile').html('Mobile No. Already Exist.')
             $('.btn_submit').css('display', 'none')
              $('#chk').val(1)
          } 
          else {
            $('.error-mobile').html(' ')
            $('.btn_submit').css('display', 'block')
             $('#chk').val(0)
          }
        }
      })
    }
     
    }
    

    $('input[name=user_name]').keypress(function (e) {
        if (!/[0-9a-zA-Z-]/.test(String.fromCharCode(e.which)))
          return false;
      });
</script>
<input type="hidden" id="chk" value="" />

@endsection