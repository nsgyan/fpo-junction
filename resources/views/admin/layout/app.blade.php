<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8" />
  <title>FPO</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/animate.css/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('public/admin/libs/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{URL::to('public/admin/css/font.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('public/admin/css/app.css')}}" type=" text/css" />

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="app app-header-fixed ">


    <!-- header -->
    <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <!-- <i class="fa fa-btc"></i>
          <img src="admin/img/logo.png" alt="." class="hide"> -->
          <span class="hidden-folded m-l-xs">FPO</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>

        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc">

            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="admin/img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="admin/img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">Hii</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">

              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
              <a class="nav-link" href="{{ url('logout') }}"> Logout </a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
    </header>
    <!-- / header -->


    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Navigation</span>
              </li>
              <li>
                <a href="{{URL::to('/index')}}" class="auto">
                  <span class="pull-right text-muted">
                  </span>
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>

              </li>

              <li class="line dk"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Components</span>
              </li>
              <!-- <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>

                  <i class="glyphicon glyphicon-th"></i>
                  <span>Layout</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Layout</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span>Application</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span>Full width</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span>Boxed layout</span>
                    </a>
                  </li>
                </ul>
              </li> -->

              <li>
                <a href="{{URL::to('/Slider-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span> Slider</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/Sub-Slider-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Sub Slider</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/Video-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Video</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/Success-Stories-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Success Stories</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/Scheme-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Scheme</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/FAQ-List')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>FAQ</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/view-newsletter')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Newsletter</span>
                </a>
              </li>

              
              <li>
                <a href="{{URL::to('/business-model-view')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Business Model</span>
                </a>
              </li>



              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>

                  <i class="glyphicon glyphicon-th"></i>
                  <span>Booklet</span>
                </a>
                <ul class="nav nav-sub dk">
                 
                  <li>
                    <a href="{{URL::to('/booklet-list')}}">
                      <span>Booklet</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/BookletGallery_list')}}">
                      <span>Gallery</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('unit_booklet_list')}}">
                      <span>Unit</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/chapter-list')}}">
                      <span>Chapter</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{URL::to('subchapter-booklet-list')}}">
                      <span>Sub Chapter</span>
                    </a>
                  </li> 
                </ul>
              </li>

              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>

                  <i class="glyphicon glyphicon-th"></i>
                  <span>Guide Book</span>
                </a>
                <ul class="nav nav-sub dk">
                 
                  <li>
                    <a href="{{URL::to('/guideBook-list')}}">
                      <span>Guide Book</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/guideBook-gallery')}}">
                      <span>Gallery</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('guideBook-unit')}}">
                      <span>Unit</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/guideBook-chapter')}}">
                      <span>Chapter</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{URL::to('guideBook-subchapter')}}">
                      <span>Sub Chapter</span>
                    </a>
                  </li>
                </ul>
              </li>  

                <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>

                  <i class="glyphicon glyphicon-th"></i>
                  <span>Thematic </span>
                </a>
                <ul class="nav nav-sub dk">
                 
                  <li>
                    <a href="{{URL::to('/thematic')}}">
                      <span>Thematic</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/thematic-gallery')}}">
                      <span>Gallery</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('guideBook-unit')}}">
                      <span>Unit</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{URL::to('/guideBook-chapter')}}">
                      <span>Chapter</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{URL::to('guideBook-subchapter')}}">
                      <span>Sub Chapter</span>
                    </a>
                  </li>
                </ul>
              </li>       

              <li>
                <a href="{{URL::to('/map-list')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Map</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('/fpoknowledgelist')}}">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Knowledge Series</span>
                </a>
              </li>

            </ul>
          </nav>
          <!-- nav -->


        </div>
      </div>
    </aside>
    <!-- / aside -->




    <main class="py-4">
      @yield('content')
    </main>






    <!-----------------------------FOOTER----------------------->

    <!-- footer -->
    <footer id="footer" class="app-footer" role="footer">
      <div class="wrapper b-t bg-light">

        &copy; 2021 Copyright.
      </div>
    </footer>
    <!-- / footer -->



  </div>

  <script src="{{URL::to('public/admin/libs/jquery/jquery/dist/jquery.js')}}"></script>
  <script src="{{URL::to('public/admin/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="public/admin/js/ui-load.js"></script>
  <script src="public/admin/js/ui-jp.config.js"></script>
  <script src="public/admin/js/ui-jp.js"></script>
  <script src="public/admin/js/ui-nav.js"></script>
  <script src="public/admin/js/ui-toggle.js"></script>
  <script src="public/admin/js/ui-client.js"></script>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session()->has('message'))
<script>
  Swal.fire({
    title: 'Your data have been saved successfully',
    showDenyButton: false,
    showCancelButton: false,
    confirmButtonText: `Save`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
      // Swal.fire('Changes are not saved', '', 'info')
    }
  })
</script>
        
@endif



@if(session()->has('messages'))
<script>
  Swal.fire({
    title: 'Your data have been updated successfully',
    showDenyButton: false,
    showCancelButton: false,
    confirmButtonText: `Update`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Updated!', '', 'success')
    } else if (result.isDenied) {
      // Swal.fire('Changes are not Updated', '', 'info')
    }
  })
</script>
        
@endif



@if(session()->has('deleted'))
<script>
 Swal.fire('Data deleted successfully')
</script>
        
@endif
<script>
function is_delete(url){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
      setTimeout(() => {
        window.location.href=url;
      }, 2000);
    }
  })
}
</script>

</body>

</html>