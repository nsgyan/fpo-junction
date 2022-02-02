<!doctype html>
<html>

<head>
  <title>Farmer Producer Organisation</title>
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
</head>

<body id="mainbody">
<select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                    <option value="kn" {{ session()->get('locale') == 'kn' ? 'selected' : '' }}>Kannada</option>
                    <option value="or" {{ session()->get('locale') == 'or' ? 'selected' : '' }}>Odia</option>
                    <option value="te" {{ session()->get('locale') == 'te' ? 'selected' : '' }}>Telugu</option>
                </select>
  <header>
    <div id="navbar_top" class="container branding">
      <div class="row">
        <div class="nevigationBar col-md-12 col-sm-12 col-xs-12">
          <!-- navigation bar -->
          <nav class="navbar navbar-light">
            <!-- Toggle Button -->
 
            <div class="mainLogo"> <a href="#"><img src="public/user/img/H_Logo.png" class="logo img-responsive"></a> </div>
            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#nav-content">
              ☰ </button>
            <div class="collapse navbar-toggleable-xs container" id="nav-content">
              <ul class="nav navbar-nav">
                <!-----First Menu----->
                <li class="nav-item mLt"> <a href="{{URL::to('/')}}" class="nav-link">Home</a></li>
                <!-------End First Menu----->
                <!-----Second Menu----->
                <li class="nav-item dropdown mFt"> <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FPO Map</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2"> <a href="fpo-map.html"
                      class="dropdown-item">FPO Map of India</a> <a href="fpo-map.html" class="dropdown-item">Search
                      FPO</a> <a href="{{URL::to('register-fpo')}}" class="dropdown-item">Register your FPO</a> </div>
                </li>
                <!-------End Second Menu----->

                <!-----Third Menu----->
                <li class="nav-item dropdown mFt"> <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2"> <a href="#" class="dropdown-item">Success
                      Stories</a> <a href="{{URL::to('/Business_Model')}}" class="dropdown-item">Business Models</a> <a href="#"
                      class="dropdown-item">Government Schemes</a> <a href="{{URL::to('/Booklet_Model')}}"
                      class="dropdown-item">Thematic Studies</a> <a href="#" class="dropdown-item">Policy & Strategy
                      Documents</a> <a href="{{URL::to('/guidebook')}}" class="dropdown-item">Guidebooks</a> <a href="#"
                      class="dropdown-item">Trainer’s Manual</a> </div>
                </li>
                <!-------End Third Menu----->

                <!-------Fourth Menu----->
                <li class="nav-item mLt"> <a href="http://117.240.248.206/moodle/" class="nav-link">MOOC</a></li>
                <!-------End Fourth Menu----->
                <!-----Fifth Menu----->
                <li class="nav-item mLt"> <a href="FPO_Assessesment.html" class="nav-link">FPO Capacity Assessment</a>
                </li>
                <!-------End Fifth Menu----->

                <!-------Sixth Menu----->
                <li class="nav-item dropdown mFt"> <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connect</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2"> <a href="FPO_Booklet.html"
                      class="dropdown-item">About Us</a> <a href="#" class="dropdown-item">Help Centre</a> <a href="{{URL::to('/faq')}}"
                      class="dropdown-item">FAQs</a> <a href="#" class="dropdown-item">Disclaimer & Privacy Policy</a>
                    <!-- <a href="#" class="dropdown-item">NABARD</a> <a href="#" class="dropdown-item">SFAC</a> <a href="#" class="dropdown-item">BIRD</a> <a href="#" class="dropdown-item">GIZ</a>  -->
                    <a class="dropdown-item dropAction" href="#">External Links &raquo; </a>
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
          <!-- <h4 class="owl-caption">{{$s->category}}</h4>
          <p class="bannerSubTitle">{{$s->title}}</p> -->
          </div>
          <img src="{{asset('/storage/app/public/'.$s->image)}}" alt="">
        </div>
        @endforeach
        <!-- <div>
          <div class="owl-text-overlay hidden-xs">
          <h4 class="owl-caption">FARMER PRODUCER COMPANIES</h4>
          <p class="bannerSubTitle">A study was conducted to assess the performance of FPCs in Karnataka where 90 FPCs were selected across different districts.</p>
        </div>
          <img src="public/user/img/TROO_Banner02.png" alt="">
        </div> -->
        <!-- <div>
          <div class="owl-text-overlay hidden-xs">
          <h4 class="owl-caption">FARMER PRODUCER COMPANIES</h4>
          <p class="bannerSubTitle">A study was conducted to assess the performance of FPCs in Karnataka where 90 FPCs were selected across different districts.</p>
        </div>
          <img src="public/user/img/TROO_Banner03.png" alt="">
        </div> -->
    </section>
    <!-- alert success -->

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
          <!-- <div>
            <div class="col-md-5 btmBannerSlidebox1">
              <p>Business Model</p>
              <h4>AGAR-BASED AGROFORESTRY</h4>
            </div>
            <div class="col-md-4 btmBannerSlidebox2"> <img src="public/user/img/businessmodel.png" width="100%"> </div>
            <div class="col-md-3 btmBannerSlidebox3">
              <p>AGARWOOD</p>
              <h4>Economic analysis of Agar agroforestry cultivation in India</h4>
              <p>Agar is a tropical tree belonging to Aquilaria genus of Thymelaeaceae family. Aquilaria genus has 15
                species and the most common species found in the North Eastern India are....</p>
              <a href="#" class="pull-right">Read More ></a>
            </div>
          </div> -->
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
              <h4 class="hpageTitle">Online Courses for FPO functionaries</h4>
              <h5 class="tGreen fw-700">Massive Open Online Courses (MOOC)</h5>
              <p>This course seeks to build a perspective of key functionaries of FPCs on concept and governance of
                their FPCs. It also assists in building their capacities related to planning and management of
                agri-business activities.</p>
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
                  <span class="courseCat">Module 1</span>
                  <img src="public/user/img/troocourseimage01.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">Concept and Governance of
                    FPOs</a>
                </div>
                <p>Learn overview of agriculture based livelihoods and roles & responsibilities of FPOs for promotion of
                  livelihoods of the farmers</p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 1h 3m 48s</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">Module 2</span>
                  <img src="public/user/img/troocourseimage02.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">FPO Statutory Provisions
                    and Forms of Legal Compliance</a>
                </div>
                <p>Learn the about the FPO Legal Status, Compliances and other Regulations as per Indian Government Laws
                </p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 37m 15s</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">Module 3</span>
                  <img src="public/user/img/troocourseimage03.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">Market, Marketing and
                    Market Linkages for FPCs</a>
                </div>
                <p>Learn the about the FPO Legal Status, Compliances and other Regulations as per Indian Government Laws
                </p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 47m 5s</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">Module 4</span>
                  <img src="public/user/img/troocourseimage04.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">Resource Planning for
                    Business Development of FPCs</a>
                </div>
                <p>Learn overview of agriculture based livelihoods and roles & responsibilities of FPOs for promotion of
                  livelihoods of the farmers</p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 39m 2s</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">Module 5</span>
                  <img src="public/user/img/troocourseimage05.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">Access to Finance</a>
                </div>
                <p>Learn the about the FPO Legal Status, Compliances and other Regulations as per Indian Government Laws
                </p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 38m 3s</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="corseBox">
                <a href="http://117.240.248.206/moodle/" target="_blank" class="courseIMG">
                  <span class="courseCat">Module 6</span>
                  <img src="public/user/img/troocourseimage06.png">
                </a>
                <div class="clearfix"></div>
                <div class="mt-3 mb-3">
                  <a href="http://117.240.248.206/moodle/" target="_blank" class="courseTitle">Business Development
                    Planning for FPCs</a>
                </div>
                <p>Learn the about the FPO Legal Status, Compliances and other Regulations as per Indian Government Laws
                </p>
                <p class="courseTime mt-2 mb-1"><strong>Session</strong> | 46m 21s</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-xs-center mt-2 mb-2">
          <div class="col-md-12">
            <h6><span><img src="public/user/img/information.png"></span> Designed for CEOs of FPCs & other Professionals working
              with FPCs</h6>
          </div>
        </div>
      </div>
      <!-- <div class="container-fluid"> <img src="img/page-cut/0g.png" style="width: 100%;"> </div> -->
    </section>

    <div class="clearfix"></div>

    <section class="container-fluid">
      <div id="fpoPerformancesec">
        <div class="fpoPerformance">
          <div class="fpoPerformanceBox">
            <h4>FPO Performance Assessment</h4>
            <p>A simple tool to assess the performance of your FPO based on parameters such as Membership, Governance &
              Business Operations. Get recommendations to improve the performance of your FPO.</p>
            <a class="btn btn-fpo" href="http://15.207.45.236:3000/" target="_blank">ASSESS YOUR FPO NOW</a>
          </div>
          <img src="public/user/img/fpoperformance.png">
        </div>
      </div>
      <!-- <div class="container-fluid"> <img src="img/page-cut/1g.png" style="width: 100%;"> </div> -->
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
                      <p>{{$v->description}}</p>
                      
                    </div>
                    <div class="col-md-7">
                      <button type="button" class="video-btn pull-left" data-toggle="modal"
                        data-src="{{$v->video_url}}" data-target="#myModal"> <i class="fa fa-play"></i>
                      </button>
                    </div>
                  </div>
                  <img src="{{asset('/storage/app/public/'.$v->thumbnail_image)}}" width="100%">
                </div>
        </div>
        @endforeach
        <!-- <div class="item">
                <div class="fpoPerformance">
                  <h4 class="hpageTitle"><span><img src="public/user/img/icon1.png" style="width: auto;display: inline-block;"></span> The Wadi Warriors of Gujarat</h4>
                  <div id="heritageBox" class="row">
                    <div class="col-md-5">
                      <p><span class="heritageBoxsubHeading">GUJARAT</span></p>
                      <p>A film about how the tribal families of Umarpada in Surat District of Gujarat were supported by NABARD'S
                        Tribal Development Project. 1000 wadis and 20 villages were selected to ensure sustainable development of
                        the area.</p>
                    </div>
                    <div class="col-md-7">
                      <button type="button" class="video-btn pull-left" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/fSUmej4tbnw" data-target="#myModal"> <i class="fa fa-play"></i>
                      </button>
                    </div>
                  </div>
                  <img src="public/user/img/video.png" width="100%">
                </div>
        </div> -->
      </div>
    </section>
    <div class="clearfix"></div>


    <section id="fpoBusinessModel" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-9">
              <h4 class="hpageTitle mt-5">FPO Business Models</h4>
              <h6 class="fontR fw-400">Explore business models across multiple agro sectors for a sustainable and
                healthy livelihood</h6>
            </div>
            <div class="col-md-3">
              <div>
                <img src="public/user/img/onlnecourse-nabard-logo.png" class="fpobmLogo">
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <div class="col-md-2">
              <select class="form-control">
                <option value="">Sort: New</option>
                <option value="">Old</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-control">
                <option value="">Category: All</option>
                <option value="">Category 1</option>
                <option value="">Category 2</option>
              </select>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="Search" style="border-right: none;">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm searchIcon"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
            <div class="col-md-3">
              <a href="listing.html" class="btn btnViewAllbm">VIEW ALL BUSINESS MODELS</a>
            </div>
            <div class="col-md-1">
              <!-- <a href="#" class="btn btn-primary">gyan</a> -->
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

  <!-- <div class="container-fluid"> <img src="img/page-cut/2g.png" style="width: 100%;"> </div> -->
  </section>
  <div class="clearfix"></div>

  <section>
    <div class="container-fluid mt-5"> <img src="public/user/img/page-cut/3g.png" style="width: 100%;"> </div>
  </section>
  <div class="clearfix"></div>

  <section id="successStorySec">
    <div class="container">
      <div class="row">
        <h4><span><img src="public/user/img/icon5.png"></span> Success Stories of FPO</h4>
        <p>This section highlights some of the FPCs from Karnataka as well as from other states who have shown good
          performance on business activities and overall management. The success stories of such FPCs have been
          presented in this section as case studies.</p>
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
        <!-- <div>
          <div class="whatsBannerSlidebox">
            <div class="col-md-12">
              <p>Sahyadri FPC Ltd., Nashik, Maharastra</p>
            </div>
            <div class="col-md-5">
              <h4>The Sahyadri Farms, the FPC was set up in the year 2011</h4>
            </div>
            <div class="col-md-7">
              <p>Sahyadri FPC Ltd., Nashik, Maharastra Sahyadri FPC Ltd., Nashik, MaharastraSahyadri FPC Ltd., Nashik,
                MaharastraSahyadri FPC Ltd., Nashik, MaharastraSahyadri FPC Ltd., Nashik, MaharastraSahyadri FPC Ltd.,
                Nashik, Maharastra</p>
            </div>
          </div>
          <div class="imgWdetail">
            <img src="public/user/img/troosuccessstorylimage02.png">
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!---------------------------------------heritageBoxSection section------------------------------>
  <section id="schemeSection">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <ul class="nav nav-tabs">

            <li clsas="active"><a data-toggle="tab" href="#allscheme"><img src="{{asset('/public/user/img/gov-scheme.png')}}">All India Scheme</a></li>
            <li><a data-toggle="tab" href="#govscheme"><img src="{{asset('/public/user/img/gov-scheme.png')}}"> State Government Scheme</a></li>
            <li><a data-toggle="tab" href="#fponews"><img src="{{asset('/public/user/img/fponews.png')}}"> FPO News</a></li>

          </ul>

          <div class="tab-content">
            <div id="allscheme" class="tab-pane fade in active">
             @foreach($scheme as $a)
             @if($a->main_category =="All India Scheme")
              <div class="schemeItem">
                <p>{{$a->category}}</p>
                <h4>{{$a->title}}</h4>
                <p>{{$a->description}} </p>
              </div>
              @else
              <div></div>
              @endif
              @endforeach
              <!-- <div class="schemeItem">
                <p>India</p>
                <h4>Financing of FPOs by NABKISAN</h4>
                <p>NABKISAN provides working capital and term loan for creation of infrastructure to FPOs that are eligible or non-eligible for assistance from SFAC, loans to promoting institutions for on lending to FPOs and also support for nascent FPOs. Also provision for loan to start up FPOs without any collateral. </p>
              </div> -->
              <!-- <div class="schemeItem">
                <p>India</p>
                <h4>Formation and Promotion of 10000 FPOs</h4>
                <p>Department of agriculture is providing support for formation and strengthening of 10000 new FPOs. Under this scheme handholding support would be provided to new FPOs for inputs, production, processing and value addition, market linkages etc. This scheme is to be implemented till 2023-24 with budgetary support of Rs. 6865 crores. FPOs will be provided financial assistance upto Rs 18.00 lakh per FPO for a period of 03 years, matching equity grant upto Rs. 2,000 per farmer member of FPO with a limit of Rs. 15.00 lakh per FPO and a credit guarantee facility upto Rs. 2 crore of project loan per FPO.</p>
              </div> -->
            </div>
            <div id="govscheme" class="tab-pane fade">
            @foreach($scheme as $s)
            @if($s->main_category =="State Government Scheme")
              <div class="schemeItem">
                <p>{{$s->category}}</p>
                <h4>{{$s->title}}</h4>
                <p>{{$s->description}} </p>
              </div>
              @else
              <div></div>
              @endif
              @endforeach
              <!-- <div class="schemeItem">
                <p>Odisha</p>
                <h4>Agriculture Entrepreneurship Promotion Scheme – 2018</h4>
                <p>Support for 1000 rural Agriculture Entrepreneurs (AEs) to provide quality agricultural inputs and technological services including modern farm equipment and marketing assurances to farmers of the state. FPOs at the cluster level can supply the requisite inputs to AEs and also act as a support centre.</p>
              </div>
              <div class="schemeItem">
                <p>Karnataka</p>
                <h4>Policy and Process Guidelines for Farmer Producer Organisations</h4>
                <p>A reference manual for central and state government agencies which seek to promote and support Farmer Producer Organisations and to link them with the various schemes and programmes of Central and State governments.</p>
              </div>
              <div class="schemeItem">
                <p>Assam</p>
                <h4>Equity Grant Fund for FPCs</h4>
                <p>Eligible Farmer Producer Companies (FPCs) can receive a grant equivalent to the amount to equity contribution of their shareholder members in the FPC. This scheme is for nascent and emerging FPCs, which have paid up capital not exceeding Rs. 30 lakhs.</p>
              </div> -->
              <!-- <div class="schemeItem">
                <h4>Venture Capital Assistance Scheme</h4>
                <p>Small Farmers' Agri-Business Consortium (SFAC) would provide venture capital to projects at the recommendations of the bank/financial institution financing the project. This venture capital will be repayable back to SFAC after the repayment of term loan of lending bank/financial institution.</p>
              </div>
              <div class="schemeItem">
                <h4>Mission organic value chain development</h4>
                <p>Mission for building certified organic value chains in North east (Assam, Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Tripura and Sikkim). Support for development of entire value chain, upto 50,000 farmers to be empowered through creation of about 100 FPCs.</p>
              </div> -->
            </div>
            <div id="fponews" class="tab-pane fade">
            @foreach($scheme as $f)
            @if($f->main_category =="FPO News")
              <div class="schemeItem">
                <p>{{$f->category}}</p>
                <h4>{{$f->title}}</h4>
                <p>{{$f->description}} </p>
              </div>
              @else
              <div></div>
              @endif
              @endforeach
              <!-- <div class="schemeItem">
                <p>FPO</p>
                <h4>FPO News 1</h4>
              </div>
              <div class="schemeItem">
                <p>FPO</p>
                <h4>FPO News 2</h4>
              </div>
              <div class="schemeItem">
                <p>FPO</p>
                <h4>FPO News 3</h4>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- <div class="container-fluid"> <img src="{{asset('/public/user/img/page-cut/4g.png')}}" style="width: 100%;"> </div> -->
  </section>
  <section id="bottomLogoScroll" class="mt-2">
    <div class="container mb-3">
      <div class="row">
        <h4><span><img src="public/user/img/icon3.png"></span> External Links</h4>
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
      <!-- <img src="img/page-cut/5g.png" style="width: 100%;"> </div> -->
  </section>

  <!--------------------------------------Homepage newsletter Section------------------------------------>
  <!-- <section class="container">
  <div class="newsletterBox">
    <h2>Subscribe to our Newsletter</h2>
    <h5>Enter your email to receive our newsletter</h5>

    <form class="form-inline">
      <div class="form-group col-md-8 mb-2">
        <input type="password" class="form-control" placeholder="Enter your email here...">
      </div>
      <button type="submit" class="btn suscribeBtn">Subscribe</button>
    </form>

  </div>
</section> -->
  <!------------------------------------------End Home page newsletter Section--------------------------->

  </div>
  <footer class="footer-section">
    <section class="footer-sub-section">
      <div class="container mb-2">
        <div class="newsletterBox">
          <h2>Subscribe to our Newsletter</h2>
          <h5>Enter your email to receive our newsletter</h5>

          <form class="form-inline" action="{{URL::to('save-newsletter')}}" method="post">
          @csrf()
            <div class="form-group col-md-8 mb-2">
            <input type="email" name="email" class="form-control" placeholder="Enter your email here..." required>
            </div>
            <button type="submit" class="btn suscribeBtn" onclick="alert('Add Newsletter Successfully !')">Subscribe</button>
          </form>

        </div>
      </div>

      <div class="container">
        <div class="row footerSubBottom">
          <div class="col-md-4"> <img src="public/user/img/H_Logo.png"> </div>
          <div class="col-md-4">
            <ul class="footSubList">
              <li><a href="{{URL::to('/')}}">Home</a></li>
              <li><a href="#">FPO Map</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="http://117.240.248.206/moodle/" target="_blank">MOOC</a></li>
              <li><a href="#">FPO Capacity Assessment</a></li>
              <li><a href="#">Connect</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 style="color: #282828; font-size: 1.2em; font-weight: 500;">Online Training Courses</h4>
            <div class="trainingCorseFooter">
              <div class="TimgBox"> <img src="public/user/img/troocourseimage01.png"> </div>
              <div class="TdetailBox">
                <h4><a href="http://117.240.248.206/moodle/" target="_blank">Concept and Governance of FPO</a></h4>
                <p>Learn overview of agriculture based livelihoods and roles & responsibilities of FPO for..</p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="trainingCorseFooter mt-3">
              <div class="TimgBox"> <img src="public/user/img/troocourseimage06.png"> </div>
              <div class="TdetailBox">
                <h4><a href="http://117.240.248.206/moodle/" target="_blank">Business Development Planning for FPC</a>
                </h4>
                <p>Learn the about the FPO Legal Status, Compliances and other Regulations as per..</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="conatiner-fluid footerBottomsupported text-xs-center mt-2">
        <div class="container">
          <div class="row">
            <div class="col-md-4"> &nbsp; </div>
            <div class="col-md-4">
              <p>© Copyright 2021</p>
            </div>
            <div class="col-md-4">
              <p><small>Powered By</small> <a class="companyTag" href="#" target="_blank">TROOLOGY Technologies</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button"
      title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"
        aria-hidden="true"></i> </a>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{URL::to('public/user/js/jquery.newstape.js')}}"></script>
<script src="{{URL::to('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('public/user/css/owlcarousel/owl.carousel.js')}}"></script>
<link rel="stylesheet" href="{{URL::to('public/user/css/animate.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src=" {{URL::to('public/user/js/main.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBelrNFluGB0NdYXf6pb0oDhRcvMBnWK5Y&callback=initMap"></script>

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
</body>

</html>