<!doctype html>
<html>
<head>
<title>{{ __('message.title') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">




<!-- Fav Icon -->
<link rel="icon" type="image/x-icon" href="img/fvicon.ico">

<!-- Bootstrap CSS -->
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
    <div class="col-md-4">
              
            </div>
<header>
  <div class="container branding">
    <div class="row">
      <div class="nevigationBar col-md-12 col-sm-12 col-xs-12">
        <!-- navigation bar -->
        <nav class="navbar navbar-light"><!-- Toggle Button -->

          <div class="mainLogo"> <a href="{{URL::to('/')}}"><img src="/public/user/img/H_Logo.png" class="logo img-responsive"></a> </div>
          <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#nav-content"> ☰ </button>
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





<main class="py-4">
      @yield('content')
    </main>







    <footer class="footer-section">
    <section class="footer-sub-section">
      <div class="container">
      <div class="row footerSubBottom">
      <div class="col-md-4">
        <img src="/public/user/img/H_Logo.png">
      </div>
      <div class="col-md-4">
        <ul class="footSubList">
          <li><a href="{{URL::to('about-us')}}">{{ __('message.about_us') }}</a></li>
          <li><a href="#">{{ __('message.fpo_resources') }}</a></li>
          <li><a href="{{URL::to('fpo-map')}}">{{ __('message.fpo_map_of_india') }}</a></li>
          <li><a href="{{URL::to('capacity-assessment')}}">{{ __('message.capacity_assessment_tool') }}</a></li>
          <li><a href="#">{{ __('message.connect') }}</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 style="color: #282828; font-size: 1.2em; font-weight: 500;">{{ __('message.online_training_courses') }}</h4>

              <div class="trainingCorseFooter">
                <div class="TimgBox">
                  <img src="/public/user/img/businessmodelimage3.png">
                </div>
                <div class="TdetailBox">
                    <h4><a href="#">{{ __('message.indian_cashewnut_industry') }}</a></h4>
                      <p>{{ __('message.the_institute_for_natural_resources_kolhapur_india') }}</p>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="trainingCorseFooter mt-3">
                <div class="TimgBox">
                  <img src="/public/user/img/businessmodelimage4.png">
                </div>
                <div class="TdetailBox">
                    <h4><a href="#">{{ __('message.indian_cashewnut_industry') }}</a></h4>
                      <p>{{ __('message.the_institute_for_natural_resources_kolhapur_india') }}</p>
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
  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up" aria-hidden="true"></i>
  </a>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{URL::to('public/user/js/jquery.newstape.js')}}"></script>
<script src="{{URL::to('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('public/user/css/owlcarousel/owl.carousel.js')}}"></script>
<link rel="stylesheet" href="{{URL::to('public/user/css/animate.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src=" {{URL::to('public/user/js/main.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBelrNFluGB0NdYXf6pb0oDhRcvMBnWK5Y&callback=initMap"></script>

<script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>

  </body>

  </html>

