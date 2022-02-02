<!doctype html>
<html>

<head>
<title>{{ __('message.title') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Fav Icon -->
  <link rel="stylesheet" href="{{URL::to('public/user/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{URL::to('public/user/css/bootstrap.min.css')}}">
<!-- Owl Carousel Assets -->
<link rel="stylesheet" href="{{URL::to('public/user/css/owlcarousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{URL::to('public/user/css/owlcarousel/assets/owl.theme.default.min.css')}}">
<!-- My CSS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHgOnXoiyJAbfVHIcpFunpirQ2Rjytltw"></script>
<link rel="stylesheet" href="{{URL::to('public/user/css/main.css')}}">

<style>
   #map_canvas {
    height: 500px;
    width: 500px;
    margin: 0px;
    padding: 0px
}
</style>

</head>

<body id="mainbody">
  <header>
    <div id="navbar_top" class="container branding">
      <div class="row">
        <div class="nevigationBar col-md-12 col-sm-12 col-xs-12">
          <!-- navigation bar -->
          <nav class="navbar navbar-light">
            <!-- Toggle Button -->
 
            <div class="mainLogo"> <a href="{{URL::to('/')}}"><img src="public/user/img/H_Logo.png" class="logo img-responsive"></a> </div>
            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#nav-content">
              ☰ </button>
            <div class="collapse navbar-toggleable-xs container" id="nav-content">
              <ul class="nav navbar-nav">
                <!-----First Menu----->
                <li class="nav-item mLt"> <a href="{{URL::to('/')}}" class="nav-link">{{ __('message.home') }}</a></li>
                <!-------End First Menu----->
                <!-----Second Menu----->
                <li class="nav-item dropdown mFt"> 
                <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('message.fpo_map') }}</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a href="{{URL::to('fpo-map')}}" class="dropdown-item">{{ __('message.fpo_map_of_india') }}</a>
                              <a href="{{URL::to('fpo-map')}}" class="dropdown-item">{{ __('message.search_fpo') }}</a> 
                              <a href="{{URL::to('register-fpo')}}" class="dropdown-item">{{ __('message.register_your_fpo') }}</a>
                        </div>
              </li>
                <!-------End Second Menu----->

                <!-----Third Menu----->
                <li class="nav-item dropdown mFt">
                <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('message.resources') }}</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a href="{{URL::to('success-stories')}}" class="dropdown-item">{{ __('message.success_stories') }}</a>
                              <a href="{{URL::to('/business-model-list')}}" class="dropdown-item">{{ __('message.business_models') }}</a>
                              <a href="{{URL::to('government-scheme')}}" class="dropdown-item">Government Schemes</a>
                             <!-- <a href="{{URL::to('/booklet-view')}}" class="dropdown-item">Booklet Model</a> -->
                             <a href="{{URL::to('/thematic-view')}}" class="dropdown-item">{{ __('message.thematic_studies') }}</a>
                              <a href="{{URL::to('policy-strategy')}}" class="dropdown-item">{{ __('message.policy_strategy_documents') }}</a>
                              <a href="{{URL::to('/guidebook-list')}}" class="dropdown-item">{{ __('message.guidebooks') }}</a>

                              <a href="{{URL::to('/trainer-manual')}}" class="dropdown-item">{{ __('message.trainers_manual') }}</a>

                              <a href="{{URL::to('/knowledge-series')}}" class="dropdown-item">FPO Knowledge Series </a>
                              
                        </div>
              </li>
                <!-------End Third Menu----->

                <!-------Fourth Menu----->
                <li class="nav-item mLt"> <a href="http://117.240.248.206/moodle/" class="nav-link">{{ __('message.mooc') }}</a></li>
                <!-------End Fourth Menu----->
                <!-----Fifth Menu----->
                <li class="nav-item mLt"> <a href="{{URL::to('capacity-assessment')}}" class="nav-link">{{ __('message.fpo_capacity_assessment') }}</a></li>
                <!-------End Fifth Menu----->

                <!-------Sixth Menu----->
                <li class="nav-item dropdown mFt">
                <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('message.connect') }}</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a href="{{URL::to('about-us')}}" class="dropdown-item">{{ __('message.about_us') }}</a>
                              <a href="{{URL::to('help-center')}}" class="dropdown-item">{{ __('message.help_center') }}</a>
                              <a href="{{URL::to('/faq')}}" class="dropdown-item">{{ __('message.faqs') }}</a>
                              <a href="{{URL::to('disclaimer')}}" class="dropdown-item">{{ __('message.disclaimer_&_privacy_policy') }}</a>
                              <a class="dropdown-item dropAction" href="#">{{ __('message.external_links') }} &raquo; </a>
                              <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                  <a class="dropdown-item" href="#">NABARD</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">SFAC</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">BIRD</a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">GIZ</a>
                                </li>
                              </ul>
                        </div>
              </li>
                <!-------End Sixth Menu----->

                <!-------Search Menu----->
                <li id="searchForm" class="nav-item">
                  <form action=" ">
                    <input type="search">
                    <i class="fa fa-search"></i>
                  </form>
                </li>
                <!-------End Search Menu----->

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid" id="pagecontent">
    <section id="demos" class="homeBanner text-xs-center">
      <div id="owl-example" class="fadeOut owl-carousel owl-theme">
      @foreach($slider as $s)
        <div>
          <div class="owl-text-overlay hidden-xs">
          </div>
          <img src="{{asset('/storage/app/public/'.$s->image)}}" alt="">
        </div>
        @endforeach
    </section>

    <div class="clearfix"></div>
    <section id="bottomBannerSection" class="container">
      <div class="row">
        <div class="slider owl-carousel">
        @foreach($sub_slider as $b)
          <div>
            <div class="col-md-5 btmBannerSlidebox1">
              <p>{{$b->category}}</p>
              <h4>{{$b->title}}</h4>
            </div> 
            <div class="col-md-4 btmBannerSlidebox2"> <img src="{{asset('/storage/app/public/'.$b->image)}}" width="100%"> </div>
            <div class="col-md-3 btmBannerSlidebox3">
              <p>{{$b->sub_category}}</p>
              <h4>{{$b->sub_title}}</h4>
              <p>{{$b->description}}.</p>
              <a href="{{$b->link}}" class="pull-right" target="_blank">Read More ></a>
            </div>
          </div>
          @endforeach
        </div>
        <!--------------Slider Count------------------->
        <div class="slider-counter"></div>
        <!----------End Slider Count------------------->
      </div>
    </section>
    <section id="onlineCourseSec" class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-9">
              <h4 class="hpageTitle">{{ __('message.online_courses_for_fpo_functionaries') }}</h4>
              <h5 class="tGreen fw-700">{{ __('message.massive_open_online_courses_mooc') }}</h5>
              <p>{{ __('message.this_course_seeks_to_build_a_perspective_of_key_functionaries_of_fpcs_on_concept_and_governance_of_their_capacities_related_to_planning_and_management_of_agri_business_activities') }}</p>
            </div>
            <div class="col-md-3">
              <div>
                <img src="public/user/img/onlnecourse-nabard-logo.png" class="nbcourseLogo">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_1') }}</span>
                  <img src="public/user/img/troocourseimage01.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">{{ __('message.concept_and_governance_of_fpos') }}</a>
                </div>
                <p>{{ __('message.learn_overview_of_agriculture_based_livelihoods_and_roles_responsibilities_of_fpos_for_promotion_of_livelihoods_of_the_farmers') }}</p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 1h 3m 48s</strong> </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_2') }}</span>
                  <img src="public/user/img/troocourseimage02.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">F{{ __('message.fpo_statutory_provisions_and_forms_of_legal_compliance') }}</a>
                </div>
                <p>{{ __('message.learn_the_about_the_fpo_legal_status_compliances_and_other_regulations_as_per_indian_government_laws') }}
                </p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 37m 15s</strong> 
               </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_3') }}</span>
                  <img src="public/user/img/troocourseimage03.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">{{ __('message.market_marketing_and_market_linkages_for_fpcs') }}</a>
                </div>
                <p>{{ __('message.learn_the_about_the_fpo_legal_status_compliances_and_other_regulations_as_per_indian_government_laws') }}
                </p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 47m 5s</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_4') }}</span>
                  <img src="public/user/img/troocourseimage04.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">{{ __('message.resource_planning_for_business_development_of_fpcs') }}</a>
                </div>
                <p>{{ __('message.learn_overview_of_agriculture_based_livelihoods_and_roles_&_responsibilities_of_fpos_for_promotion_of_livelihoods_of_the_farmers') }}</p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 39m 2s</strong>  </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_5') }}</span>
                  <img src="public/user/img/troocourseimage05.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">{{ __('message.access_to_finance') }}</a>
                </div>
                <p>{{ __('message.learn_the_about_the_fpo_legal_status_compliances_and_other_regulations_as_per_indian_government_laws') }}
                </p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 38m 3s</strong>
              </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">{{ __('message.module_6') }}</span>
                  <img src="public/user/img/troocourseimage06.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">{{ __('message.business_development_planning_for_fpcs') }}</a>
                </div>
                <p>{{ __('message.learn_the_about_the_fpo_legal_status_compliances_and_other_regulations_as_per_indian_government_laws') }}
                </p>
                <p class="courseTime mt-2 mb-1"><strong>{{ __('message.duration') }} | 46m 21s</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-xs-center mt-2 mb-2">
          <div class="col-md-12">
            <h6><span><img src="public/user/img/information.png"></span> {{ __('message.designed_for_professionals_working_with_fpcs') }}</h6>
          </div>
        </div>
      </div>
    </section>

    <div class="clearfix"></div>
  <section id="fpoTrainingModule" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="hpageTitle mt-5">Master Trainer Programme </h4>
        <h6 class="fontR fw-400">Session plans, Resources and teaching notes for Master Trainers engaged in capacity building of key functionaries and stakeholders related to FPOs.</h6>
        <h6 class="fontR fw-400">This material could be used for online as well as classroom-based training.</h6>
      </div>
    </div>
  </div>
  <div class="row mb-3 mt-2" style="padding-left: 20rem;">
    <div id="owl-demo711" class="owl-carousel  owl-theme">
      <div class="item"> <a href="#" class="fpobusinessIMG"> <span class="fpobusinessCat">Resource Material</span> <img src="public/user/img/training_modules_image1.png"> </a>
        <div class="clearfix"></div>
        <div class="fpoBusinessDetail">
          <div class="fpobusinessBox"> <a href="#" class="fpobusinessTitle"> Capacity Building of Accountants of FPOs </a>
            <p>To equip the accountants of FPOs in systematic record keeping, preparation of account statements..</p>
          </div>
        </div>
      </div>
      <div class="item"> <a href="#" class="fpobusinessIMG"> <span class="fpobusinessCat">Resource Material</span> <img src="public/user/img/training_modules_image2.png"> </a>
        <div class="clearfix"></div>
        <div class="fpoBusinessDetail">
          <div class="fpobusinessBox"> <a href="#" class="fpobusinessTitle"> Capacity Building of Board of Directors (BODs) of FPOs </a>
            <p>Orientation of Board of Directors of FPO to understand opportunity and scope for FPOs and imbibing..</p>
          </div>
        </div>
      </div>
      <div class="item"> <a href="#" class="fpobusinessIMG"> <span class="fpobusinessCat">Resource Material</span> <img src="public/user/img/training_modules_image3.png"> </a>
        <div class="clearfix"></div>
        <div class="fpoBusinessDetail">
          <div class="fpobusinessBox"> <a href="#" class="fpobusinessTitle"> Capacity Building of Chief Executive Officers of FPOs </a>
            <p>To equip the Chief Executive Officers (CEOs) to effectively play their role and undertake ..</p>
          </div>
        </div>
      </div>
      <div class="item"> <a href="#" class="fpobusinessIMG"> <span class="fpobusinessCat">Resource Material</span> <img src="public/user/img/training_modules_image4.png"> </a>
        <div class="clearfix"></div>
        <div class="fpoBusinessDetail">
          <div class="fpobusinessBox"> <a href="#" class="fpobusinessTitle"> Basic Capacity Building Programme For Stakeholders</a>
            <p>Sensitizing Implementing Agencies, State Government officials and other stakeholders ..</p>
          </div>
        </div>
      </div>
      <div class="item"> <a href="#" class="fpobusinessIMG"> <span class="fpobusinessCat">Resource Material</span> <img src="public/user/img/training_modules_image5.png"> </a>
        <div class="clearfix"></div>
        <div class="fpoBusinessDetail">
          <div class="fpobusinessBox"> <a href="#" class="fpobusinessTitle"> Capacity building of Cluster Based Business Organisations </a>
            <p>To equip Cluster Based Business Organisations (CBBOs) to understand, appreciate ..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div class="clearfix"></div>

    <section class="container-fluid">
      <div id="fpoPerformancesec">
        <div class="fpoPerformance">
          <div class="fpoPerformanceBox">
            <h4>{{ __('message.fpo_performance_assessment') }}</h4>
            <p>A simple tool to assess the performance of your FPO based on parameters such as Membership, Governance &
              Business Operations. Get recommendations to improve the performance of your FPO.</p>
            <a class="btn btn-fpo" href="http://15.207.45.236:3000/" target="_blank">ASSESS YOUR FPO NOW</a>
          </div>
          <img src="public/user/img/fpoperformance.png">
        </div>
      </div>
    </section>



    <section id="videoBoxSection" class="container">
      <div id="owl-demo-video" class="owl-carousel  owl-theme">
        @foreach($video as $v)
        <div class="item">
                <div class="fpoPerformance">
                  <h4 class="hpageTitle"><span><img src="public/user/img/icon1.png" style="width: auto;display: inline-block;"></span> {{$v->title}}</h4>
                  <div id="heritageBox" class="row">
                    <div class="col-md-5">
                      <p><span class="heritageBoxsubHeading">{{$v->category}}</span></p>
                      <p>{{$v->description}} </p>
                      
                    </div>
                    <div class="col-md-7">
                      <button type="button" class="video-btn pull-left" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/{{(explode('v=',$v->video_url))[1]}}" data-target="#myModal"> <i class="fa fa-play"></i>
                      </button>
                    </div>
                  </div>
                  <img src="{{asset('/storage/app/public/'.$v->thumbnail_image)}}" width="1248px" height="525px">
                </div>
        </div>
        @endforeach
      </div>
    </section>
    <div class="clearfix"></div>


    <section id="fpoBusinessModel" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h4 class="hpageTitle mt-5">{{ __('message.fpo_business_models') }}</h4>
              <h6 class="fontR fw-400">{{ __('message.successful_business_models_from_various_parts_of_the_country') }}</h6>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <div class="col-md-2">
              <select class="form-control">
                <option value="">{{ __('message.sort_new') }}</option>
                <option value="">{{ __('message.old') }}</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-control">
              <option value="">{{ __('message.category_all') }}</option>
              <option value="">{{ __('message.category_1') }}</option>
              <option value="">{{ __('message.category_2') }}</option>
              </select>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="{{ __('message.search') }}" style="border-right: none;">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm searchIcon"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
            <div class="col-md-3">
              <a href="listing.html" class="btn btnViewAllbm">{{ __('message.view_all_business_models') }}</a>
            </div>
            <div class="col-md-1">
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3" style="padding-left: 20rem;">
        <div id="owl-demo71" class="owl-carousel  owl-theme">
          <div class="item">
            <a href="#" class="fpobusinessIMG">
              <span class="fpobusinessCat">Assam</span>
              <img src="public/user/img/businessmodelimage1.png">
            </a>
            <div class="clearfix"></div>
            <div class="fpoBusinessDetail">
              <div class="fpobusinessBox">
                <a href="#" class="fpobusinessTitle">
                  Agar based agro-forestry
                </a>
                <p>Agar based agro-forestry practices in Assam are yielding excellent returns for farmers and have the
                  potential to be taken up by FPO's</p>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="#" class="fpobusinessIMG">
              <span class="fpobusinessCat">Uttar Pradesh</span>
              <img src="public/user/img/businessmodelimage4.png">
            </a>
            <div class="fpoBusinessDetail">
              <div class="fpobusinessBox">
                <a href="#" class="fpobusinessTitle">
                  Eucalyptus with paddy
                </a>
                <p>Agro-forestry practices involving cultivation of eucalyptus along with paddy in Uttar Pradesh a
                  viable business model for FPO's</p>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="#" class="fpobusinessIMG">
              <span class="fpobusinessCat">Maharashtra</span>
              <img src="public/user/img/businessmodelimage3.png">
            </a>
            <div class="fpoBusinessDetail">
              <div class="fpobusinessBox">
                <a href="#" class="fpobusinessTitle">
                  Drip in Cotton (BCI)
                </a>
                <p>Drip irrigation in cotton has enhanced the profitability for farmers in Wardha district of
                  Maharashtra</p>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="#" class="fpobusinessIMG">
              <span class="fpobusinessCat">Bihar</span>
              <img src="public/user/img/businessmodelimage2.png">
            </a>
            <div class="fpoBusinessDetail">
              <div class="fpobusinessBox">
                <a href="#" class="fpobusinessTitle">
                  Sugar initiative in Bihar
                </a>
                <p>Sustainable Sugarcane Initiative leading production enhancement and improved sugar recovery in Bihar
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <div class="clearfix"></div>

  <section>
    <div id="map_canvas" style="width:100%; height:600px; border: 2px solid #3872ac;"></div>
  </section>
  <div class="clearfix"></div>

  <!-- <section id="successStorySec">
    <div class="container">
      <div class="row">
        <h4><span><img src="public/user/img/icon5.png"></span> {{ __('message.success_stories_of_fpo') }}</h4>
        <p>{{ __('message.a_rich_compendium_of_success_stories_of_some_well_performing') }}</p>
      </div>
    </div>
  </section>
  <section id="whatsonBoxSection" class="container" style="margin-top: -8%;">
    <div class="row">
      <div class="whatsOnSlide owl-carousel">
        @foreach($stories as $story)
        <div>
          <div class="whatsBannerSlidebox">
            <div class="col-md-12">
              <p>{{$story->category}}</p>
            </div>
            <div class="col-md-5">
              <h4>{{$story->title}}</h4>
            </div>
            <div class="col-md-7">
              <p>{{$story->description}}</p>
            </div>
          </div>
          <div class="imgWdetail">
            <img src="{{asset('/storage/app/public/'.$story->image)}}">
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section> -->
  <!---------------------------------------heritageBoxSection section------------------------------>
  <section id="schemeSection" class="mt-2">
    <div class="container">
      <div class="row">
      
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <a data-toggle="tab" href="#allscheme">
              <li class="active"><img src="{{asset('/public/user/img/gov-scheme.png')}}"> All India Scheme</li>
            </a>
            <a data-toggle="tab" href="#govscheme">
              <li><img src="{{asset('/public/user/img/gov-scheme.png')}}"> State Government Scheme</li>
            </a>
            <a data-toggle="tab" href="#fponews">
              <li><img src="{{asset('/public/user/img/fponews.png')}}"> FPO News</li>
            </a>
          </ul>
          
          <div class="tab-content">
            <div id="allscheme" class="tab-pane fade in active">
            @if(count($scheme_ais)!=0)
             @foreach($scheme_ais as $a)
              <div class="schemeItem">
                <p>{{$a->category}}</p>
                <h4>{{$a->title}}</h4>
                <p>{{$a->description}} </p>
              </div>
              @endforeach
              @else
              <div>No Record Found!</div>
              @endif
           

             
        
            </div>
            <div id="govscheme" class="tab-pane fade">
            @if(count($scheme_sgs)!=0)
             @foreach($scheme_sgs as $s)
              <div class="schemeItem">
                <p>{{$s->category}}</p>
                <h4>{{$s->title}}</h4>
                <p>{{$s->description}} </p>
              </div>
              @endforeach
              @else
              <div>No Record Found!</div>
              @endif
              
           
            </div>
            <div id="fponews" class="tab-pane fade">
            @if(count($scheme_fn)!=0)
             @foreach($scheme_fn as $f)
              <div class="schemeItem">
                <p>{{$f->category}}</p>
                <h4>{{$f->title}}</h4>
                <p>{{$f->description}} </p>
              </div>
              @endforeach
              @else
              <div class="schemeItem">
                <p>No Data found</p>
              </div>
              @endif
          
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </section>
  <div class="clearfix"></div>
<!-- TESTIMONIALS -->
<section class="testimonials mt-3">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="hpageTitle mt-5">Key Message</h4>
          <h6 class="fontR fw-400">Explore business models across multiple agro sectors for a sustainable and healthy livelihood</h6>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="customers-testimonials" class="owl-carousel"> 
          
          <!--TESTIMONIAL 1 -->
          <div class="item">
            <div class="shadow-effect"> <img src="https://www.datamatics.com/hs-fs/hubfs/Neeraj-Basur-1-1.png?width=900&name=Neeraj-Basur-1-1.png" alt="">
              <h4 class="mt-2">"We look to partners like Datamatics to operate as continued extension of our organisation"</h4>
              <div class="testimonial-name">Neeraj Basur, Group Chief Financial Officer, Blue Star</div>
            </div>
          </div>
          <!--END OF TESTIMONIAL 1 --> 
          <!--TESTIMONIAL 2 -->
          <div class="item">
            <div class="shadow-effect"> <img src="https://www.datamatics.com/hs-fs/hubfs/Neeraj-Basur-1-1.png?width=900&name=Neeraj-Basur-1-1.png" alt="">
              <h4 class="mt-2">"We look to partners like Datamatics to operate as continued extension of our organisation"</h4>
              <div class="testimonial-name">Neeraj Basur, Group Chief Financial Officer, Blue Star</div>
            </div>
          </div>
          <!--END OF TESTIMONIAL 2 --> 
          <!--TESTIMONIAL 3 -->
          <div class="item">
            <div class="shadow-effect"> <img src="https://www.datamatics.com/hs-fs/hubfs/Neeraj-Basur-1-1.png?width=900&name=Neeraj-Basur-1-1.png" alt="">
              <h4 class="mt-2">"We look to partners like Datamatics to operate as continued extension of our organisation"</h4>
              <div class="testimonial-name">Neeraj Basur, Group Chief Financial Officer, Blue Star</div>
            </div>
          </div>
          <!--END OF TESTIMONIAL 3 --> 
          <!--TESTIMONIAL 4 -->
          <div class="item">
            <div class="shadow-effect"> <img src="https://www.datamatics.com/hs-fs/hubfs/Neeraj-Basur-1-1.png?width=900&name=Neeraj-Basur-1-1.png" alt="">
              <h4 class="mt-2">"We look to partners like Datamatics to operate as continued extension of our organisation"</h4>
              <div class="testimonial-name">Neeraj Basur, Group Chief Financial Officer, Blue Star</div>
            </div>
          </div>
          <!--END OF TESTIMONIAL 4 --> 
          <!--TESTIMONIAL 5 -->
          <div class="item">
            <div class="shadow-effect"> <img src="https://www.datamatics.com/hs-fs/hubfs/Neeraj-Basur-1-1.png?width=900&name=Neeraj-Basur-1-1.png" alt="">
              <h4 class="mt-2">"We look to partners like Datamatics to operate as continued extension of our organisation"</h4>
              <div class="testimonial-name">Neeraj Basur, Group Chief Financial Officer, Blue Star</div>
            </div>
          </div>
          <!--END OF TESTIMONIAL 5 --> 
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END OF TESTIMONIALS -->
<div class="clearfix"></div>


  <section id="bottomLogoScroll">
    <div class="container mb-3">
      <div class="row">
        <h4><span><img src="public/user/img/icon3.png"></span>  {{ __('message.external_links') }}</h4>
      </div>
    </div>
    <div class="container-fluid">
      <div id="demo" class="row" style="padding-left: 15rem;">
        <div class="col-sm-12">
          <div id="owl-demo" class="owl-carousel">
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo1.png"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo2.png"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo3.png"></div>
            </a>
            <!-- <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="img/logo4.png"></div>
            </a>  -->
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo1.png"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo2.png"></div>
            </a>
            <a href="#" target="_blank" title="fpo">
              <div class="item"><img src="public/user/img/logo3.png"></div>
            </a>
            <!-- <a href="#" target="_blank" title="fpo">
            <div class="item"><img src="img/logo4.png"></div>
            </a>  -->
          </div>
        </div>
      </div>
  </section>


  </div>
  <footer class="footer-section">
    <section class="footer-sub-section">
      <div class="container mb-2">
        <div class="newsletterBox">
        <h2>{{ __('message.subscribe_to_our_newsletter') }}</h2>
      <h5>{{ __('message.enter_your_email_to_receive_our_newsletter') }}</h5>

          <form class="form-inline" action="{{URL::to('save-newsletter')}}" method="post">
          @csrf()
            <div class="form-group col-md-8 mb-2">
            <input type="email" name="email" class="form-control" placeholder="{{ __('message.enter_your_email_here') }}" required>
            </div>
            <button type="submit" class="btn suscribeBtn" onclick="alert('Add Newsletter Successfully !')">{{ __('message.subscribe') }}</button>
          </form>

        </div>
      </div>

      <div class="container">
        <div class="row footerSubBottom">
          <div class="col-md-4"> <img src="public/user/img/H_Logo.png"> </div>
          <div class="col-md-4">
            <ul class="footSubList">
              <li><a href="{{URL::to('/')}}">{{ __('message.home') }}</a></li>
              <li><a href="{{URL::to('fpo-map')}}">{{ __('message.fpo_map') }}</a></li>
            <li><a href="#">{{ __('message.resources') }}</a></li>
              <li><a href="http://117.240.248.206/moodle/" target="_blank">MOOC</a></li>
              <li><a href="{{URL::to('capacity-assessment')}}">{{ __('message.fpo_capacity_assessment') }}</a></li>
            <li><a href="#">{{ __('message.connect') }}</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 style="color: #282828; font-size: 1.2em; font-weight: 500;">{{ __('message.online_training_courses') }}</h4>
            <div class="trainingCorseFooter">
              <div class="TimgBox"> <img src="public/user/img/troocourseimage01.png"> </div>
              <div class="TdetailBox">
                <h4><a href="http://117.240.248.206/moodle/" target="_blank">{{ __('message.concept_and_governance_of_fpo') }}</a></h4>
              <p>{{ __('message.learn_overview_of_agriculture_based_livelihoods_and_roles_&_responsibilities_of_fpo_for') }}</p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="trainingCorseFooter mt-3">
              <div class="TimgBox"> <img src="public/user/img/troocourseimage06.png"> </div>
              <div class="TdetailBox">
                <h4><a href="http://117.240.248.206/moodle/" target="_blank">Business {{ __('message.business_development_planning_for_fpc') }}</a></h4>
              <p>{{ __('message.learn_the_about_the_fpo_legal_status_compliances_and_other_regulations_as_per') }}</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="conatiner-fluid footerBottomsupported text-xs-center mt-2">
        <div class="container">
          <div class="row">
            <div class="col-md-4"> 
            <span style="font-size:.9rem;">Language </span>
            <select class="Langchange dropdown_css mt-2">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                    <option value="kn" {{ session()->get('locale') == 'kn' ? 'selected' : '' }}>Kannada</option>
                    <option value="or" {{ session()->get('locale') == 'or' ? 'selected' : '' }}>Odia</option>
                    <option value="te" {{ session()->get('locale') == 'te' ? 'selected' : '' }}>Telugu</option>
                </select>  
            </div>
            <div class="col-md-4">
            <p>{{ __('message.©_copyright_2021') }}</p>
            </div>
            <div class="col-md-4">
            <p><small>{{ __('message.powered_by') }}</small> <a class="companyTag" href="#" target="_blank">{{ __('message.troology_technologies') }}</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button"
      title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"
        aria-hidden="true"></i> </a>
  </footer>

  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry,places&key=AIzaSyDsRnGux3AL6mNTuTF-2Yq9QuPXQb6l4tI"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{URL::to('public/user/js/jquery.newstape.js')}}"></script>
<script src="{{URL::to('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('public/user/css/owlcarousel/owl.carousel.js')}}"></script>
<link rel="stylesheet" href="{{URL::to('public/user/css/animate.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src=" {{URL::to('public/user/js/main.js')}}"></script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBelrNFluGB0NdYXf6pb0oDhRcvMBnWK5Y&callback=initMap"></script> -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">


        <div class="modal-body">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
              allow="autoplay"></iframe>
          </div>


        </div>

      </div>
    </div>
  </div>



  <script>
    $(document).ready(function () {
      // Gets the video src from the data-src on each button
      var $videoSrc;
      $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
      });
      console.log($videoSrc);
      // when the modal is opened autoplay it  
      $('#myModal').on('shown.bs.modal', function (e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
      })

      // stop playing the youtube video when I close the modal
      $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
      })

      // document ready  
    });

  </script>

<script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>




<script>
    var geocoder;
    var map;
    var bounds = new google.maps.LatLngBounds();

    function initialize() {
      map = new google.maps.Map(
        document.getElementById("map_canvas"), {
        center: new google.maps.LatLng(23.4233146, 76.9203847),
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      geocoder = new google.maps.Geocoder();
       $.ajax({
        "type": "get", "url": "/api/map-list",
        success: function (res) {
         
          let locations= JSON.parse(res);
          console.log(locations)
          for (i = 0; i < locations.length; i++) {
                geocodeAddress(locations, i);
          }
         }
        })
      
    }
    google.maps.event.addDomListener(window, "load", initialize);

    function geocodeAddress(locations, i) {
      var title = locations[i].fpo_name;
      console.log(title);
      var address = locations[i].address + ', ' +locations[i].district + ', ' + locations[i].state + ', India';
      var url = locations[i].fpo_type;
      geocoder.geocode({
        'address': locations[i].address + ', ' + locations[i].district + ', ' + locations[i].state + ', India'
        },function (results, status) {
        console.log(results)
          if (status == google.maps.GeocoderStatus.OK) {
            var marker = new google.maps.Marker({
              icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
              map: map,
              position: results[0].geometry.location,
              title: title,
              animation: google.maps.Animation.DROP,
              address: address,
              url: url
            })
            infoWindow(marker, map, title, address, url);
            bounds.extend(marker.getPosition());
            map.fitBounds(bounds);
          } else {
            console.log("geocode of " + address + " failed:" + status);
          }
        });
    }

    function infoWindow(marker, map, title, address, url) {
      google.maps.event.addListener(marker, 'click', function () {
        var html = "<div><h3>" + title + "</h3><p>" + address + "<br></div><a href='#'>" + url + "</a></p></div>";
        iw = new google.maps.InfoWindow({
          content: html,
          maxWidth: 350
        });
        iw.open(map, marker);
      });
    }

    function createMarker(results) {
      var marker = new google.maps.Marker({
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
        map: map,
        position: results[0].geometry.location,
        title: title,
        animation: google.maps.Animation.DROP,
        address: address,
        url: url
      })
      bounds.extend(marker.getPosition());
      map.fitBounds(bounds);
      infoWindow(marker, map, title, address, url);
      return marker;
    }
  

</script>
</body>

</html>