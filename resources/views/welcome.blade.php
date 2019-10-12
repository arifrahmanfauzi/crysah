<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Crysa</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('asset/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('asset/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('asset/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ ('asset/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('asset/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('asset/css/fullcalendar.css') }}">
  <link href="{{ asset('asset/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/asset/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('asset/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('asset/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body style="background-image: url(img/brown  .jpg)">
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">Crysa <span class="lite"></span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">


          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">4</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/icon1.png"></span>
                                    <span class="subject">
                                    <span class="from">Crysa</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        Welcome To Our System, Enjoy
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/icon1.png"></span>
                                    <span class="subject">
                                    <span class="from">Crysa</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Lets Start With Top Up
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/icon1.png"></span>
                                    <span class="subject">
                                    <span class="from">Crysa</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        Your Transaction Is Success
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/icon1.png"></span>
                                    <span class="subject">
                                    <span class="from">Crysa</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Your Transaction Is Secure
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">4</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Now You Are Member Of Crysa
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                   Your Location In Indonesia
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    History Have Been Printed
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Thank For Your Assesment
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="">
                            </span>
                            <span class="username">Pras</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Transaction</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="topup.html">Deposit</a></li>
              <li><a class="" href="withdraw.html">Withdraw</a></li>
              <li><a class="" href="change.html">Change BTC</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Market</span>


                      </a>
                      <ul class="sub">
              <li><a class="" href="market.html">Market Place</a></li>
              </ul>

          </li>
          <li>


          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Table BTC</span>

                      </a>
                      <ul class="sub">
              <li><a class="" href="nextstep.html">Activity Maket</a></li>
              </ul>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Information</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="404.html">Help</a></li>
              <li><a class="" href="404.html"><span>How To Start</span></a></li>
              <li><a class="" href="404.html"><span>Terms and Conditions</span></a></li>

            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content"style="background-image: url(img/brown2.jpg)">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row"style="background-image: url(img/brown.jpg)">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">Top Up</div>
               <td><a class="btn btn-primary" href="topup.html" title="Bootstrap 3 themes generator"></a></td>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box yellow-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">Withdraw</div>
              <td><a class="btn btn-success" href="withdraw.html" title="Bootstrap 3 themes generator"></a></td>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">Change BTC</div>
              <td><a class="btn btn-warning" href="" title="Bootstrap 3 themes generator"></a></td>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box purple-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">Market</div>
              <td><a class="btn btn-danger" href="market.html" title="Bootstrap 3 themes generator"></a></td>
              <div class="title"></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
        <div class="col-lg-50 col-md-50 col-sm-50 col-xs-50"style="background-image: url(img/brown.jpg)">
            <div class="info-box dark-bg">
              <div class="count">Beli / Jual Bitcoin
dan Digital Asset lainnya</div>
            </div>
            <div class="col-lg-50 col-md-50 col-sm-50 col-xs-50">
            <div class="info-box dark-bg">
              <div class="count">Pusat jual beli digital asset terpercaya di Indonesia seperti trading Bitcoin, Ethereum, Ripple & lainya berbasis Rupiah paling cepat dan mudah. Login sekarang!</div>
            </div>


        <div class="row">
          <div class="col-lg-9 col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>

            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li>
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text">11,500 visitors/day</div>
              </li>
              <li>
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text">15,000 Pageviews</div>
              </li>
              <li>
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text">30.55% Bounce Rate</div>
              </li>
              <li>
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text">$16,00 Revenue/Day</div>
              </li>
              <li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">12,000000 visitors every Month</div>
              </li>
            </ul>
          </div>
        </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        <!-- Today status end -->

  <!-- javascripts -->
  <script src="{{ asset('asset/js/jquery.js') }}"></script>
  <script src="{{ asset('asset/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('asset/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('asset/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.nicescroll.js"') }}"></script>
  <!-- charts scripts -->
  <script src="{{ asset('asset/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('asset/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <script src="{{ asset('asset/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('asset/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('asset/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('asset/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('asset/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('asset/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('asset/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('asset/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('asset/js/gdp-data.js') }}"></script>
    <script src="{{ asset('asset/js/morris.min.js') }}"></script>
    <script src="{{ asset('asset/js/sparklines.js') }}"></script>
    <script src="{{ asset('asset/js/charts.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
