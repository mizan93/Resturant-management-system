
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>TasteiT</title>
<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" /> --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
       /* @foreach($sliders as $key=>$slider)
        .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
        {
             background: url({{ asset('storage/slider/'.$slider->image) }});
             background-size: cover;
        }
        @endforeach */
    </style>
    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand display-1" href="#" style="font-family: 'Beth Ellen'; font-size: 22px; color: white;" >
                <h1 class="">TasteiT</h1>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu-list">Featured menu</a></li>
                        <li><a href="#reserve">Reservation</a></li>

                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
            @foreach ($sliders as $key=>$slider)
			<div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">{{ $slider->title }}</h1>
                        <p class="header-sub-title">{{ $slider->sub_title }}</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            @endforeach

        </section>



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="{{ asset('frontend/images/icons/about_color.png') }}" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">About us</h2>
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="menu-list" class="menu-list">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Affordable Pricing</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            @foreach ($categories as $category)
                                            <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge badge-info">{{ $category->items->count() }}</span></li>
                                            @endforeach
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                @foreach ($items as $item)
                                <li class="item dinner" id="{{ $item->category->slug }}">
                                    <a href="#">
                                        <img src="{{ url('storage/item/'.$item->image) }}" class="img-responsive" alt="Item" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ $item->name }}</h3>
                                               {!! $item->description !!}
                                            </span>
                                        </div>
                                    </a>
                                    <h2 class="white">$ {{ $item->price }}</h2>
                                </li>
                                @endforeach
                            </ul>
                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend/images/icons/reserve_black.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend/images/icons/reserve_color.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                                                       placeholder="  &#xf007;  Name">
                                                       @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                                          @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  Phone">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                           @error('dateandtime')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    @foreach ($restaurantinfo as $restaurantinfo)

                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>{{ $restaurantinfo->address }}</p>
                            <p>{{ $restaurantinfo->phone }}</p>
                            <p>{{ $restaurantinfo->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="{{ $restaurantinfo->fb_link }}" target="_blank" class="fb"></a></li>
                                <li><a href="{{ $restaurantinfo->tw_link }}" target="_blank" class="twit"></a></li>
                                <li><a href="{{ $restaurantinfo->gplus_link }}"  target="_blank" class="g-plus"></a></li>
                                <li><a href="{{ $restaurantinfo->ln_link }}"  target="_blank" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>
        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="text-center mt-5 pt-5">
                            <h2>Make a review</h2>
                            </div>
                             <form class="contact-form" method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">

                                        @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror</div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="Message"></textarea>
                                    @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <a href="#">TasteiT</a> 2019-@php
                                    echo date('Y');
                                @endphp  <P>Developed by <a href="http://themewagon.com/"  target="_blank">M R Mizan</a></P>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> --}}
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>

<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/toastr.min.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   @if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

    <script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    });
</script>
{!! Toastr::message() !!}
	</body>
</html>
