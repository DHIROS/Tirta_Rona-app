{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

<!DOCTYPE html">
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Tirta Rona</title>
    <!-- add icon link -->
    <link rel="shortcut icon" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/favicon-16.png') }}" type="image/png">
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/css/lightbox.css') }}">

    </head>

    <body">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/LOGO.png') }}"style="width: 80px; height: 80px" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Facility</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Maps</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Tirta Rona</h4>
                            <h6>Taman Perubahan Iklim</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Header-1.jpg') }}"style="width: 1000px; height: 700px" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Header-2.jpeg') }}" style="width: 1000px; height: 700px" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About </h6>
                            <h2>Wisata Peduli Perubahan Iklim Tirta Rona</h2>
                        </div>
                        <p>Kampung tirta rona adalah kampung edukasi yang dibuat oleh masyarakat rw 7 tlogomas. Wisata  edukasi kampung lingkungan tirta rona ini memiliki lahan IPAL komunal yang sering dikunjungi masyarakat dari berbagai kepnetingan dan wilayah sampai skala internasional. IPAL komunal ini dikelola oleh Yayasan IPLt Tirta Rona Tologomas Tirta Rona yang diketuai oleh Drs. Agus Gunarto, Mm. Kondisi saat ini, taman wisata lingkungan tirta rona telah dilengkapi oleh beberapa sarana yang dapat mendukung kegiatan wisata edukasi kampung iklim </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Mck.jpg') }}" style="width: 180px; height: 180px"alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Papan.jpg') }}" style="width: 180px; height: 180px" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Monumen.jpg') }}" style="width: 180px; height: 180px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Saung.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Facility Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h6>Facility</h6>
                        <h2>Fasilitas atau program yang ada di wisata peduli perubahan iklim tirta rona</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>

                            <div class='info'>
                              <h1 class='title'>Kolam Ikan</h1>
                              <p class='description'>Penggunaan air hasil pengolahan IPAL untuk kolam ikan.</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>

                            <div class='info'>
                              <h1 class='title'>Gas Methan</h1>
                              <p class='description'>Pengelolaan air limbah dengan IPAL Komunal dengan penangkap gas methan.</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>

                            <div class='info'>
                              <h1 class='title'>Pertanian Menggunakan Pupuk Ipal</h1>
                              <p class='description'>Pertanian terpadu dengan tanaman jati mas, sengon, bambu, tanaman produktif dengan pupuk dari sludge IPAL dan kolam ikan dari air hasil pengolahan IPAL.</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>

                            <div class='info'>
                              <h1 class='title'>Pemanen Air Hujan</h1>
                              <p class='description'>Pemanenan air hujan dengan bak penampung air, embung, PAH .</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>

                            <div class='info'>
                              <h1 class='title'>Sumur Resapan Biopori</h1>
                              <p class='description'>Kegiatan peresapan air dengan sumur resapan, biopori, banguna terjuan air, rorak .</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>

                            <div class='info'>
                              <h1 class='title'>Ombrometer</h1>
                              <p class='description'>Mengukur curah hujan.</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card7'>

                            <div class='info'>
                              <h1 class='title'>Komposter</h1>
                              <p class='description'>Pengelolaan sampah dengan fasilitas pewadahan, pengumpulan, pengomposan .</p>
                              <div class="main-text-button">

                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Map Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Location </h6>
                            <h2>Wisata Peduli Perubahan Iklim Tirta Rona</h2>
                        </div>
                        <p> Wisata Peduli Perubahan Iklim Tirta Rona terletak di Jalan Tirta Rona Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang  Provinsi Jawa Timur.</p>
                        {{--  <div class="row">
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Mck.jpg') }}" style="width: 180px; height: 180px"alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Papan.jpg') }}" style="width: 180px; height: 180px" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/Monumen.jpg') }}" style="width: 180px; height: 180px" alt="">
                            </div>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7135459942965!2d112.59843431477906!3d-7.924958894291301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78821ef53d903d%3A0x43572b4c9c2aa5e7!2sJl.%20Tirta%20Rona%2C%20Tlogomas%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065144%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1623045902376!5m2!1sen!2sus"
                            width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Map Area Ends ***** -->

    {{-- <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/chefs-01.jpg') }}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Randy Walker</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/chefs-02.jpg') }}" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>Cookie Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/chefs-03.jpg') }}" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>Pancake Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Number Of Guests</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time">Time</option>
                                    <option name="Breakfast" id="Breakfast">Breakfast</option>
                                    <option name="Lunch" id="Lunch">Lunch</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-icon-01.png') }}" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-icon-02.png') }}" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-icon-03.png') }}" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-01.png') }}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-02.png') }}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-03.png') }}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9.90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-04.png') }}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$6.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-05.png') }}" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$5.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-06.png') }}" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$4.10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-04.png') }}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-05.png') }}" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-06.png') }}" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$22</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-01.png') }}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-02.png') }}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-03.png') }}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$30</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-05.png') }}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-03.png') }}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-02.png') }}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-06.png') }}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-01.png') }}" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/images/tab-item-04.png') }}" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$11</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->--}}

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        {{-- <ahref="index.html"><imgsrc="URL::asset('User/templatemo_558_klassy_cafe/assets/images/LOGO.png') "style="width: 100px; height: 100px" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    {{-- <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                        <br>Design: TemplateMo</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/popper.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/accordions.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/datepicker.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/slick.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/lightbox.js') }}"></script>
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ URL::asset('User/templatemo_558_klassy_cafe/assets/js/custom.js') }}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
