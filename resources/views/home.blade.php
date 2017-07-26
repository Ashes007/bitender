@extends('layouts.app')
@section('title','Online Shopping')
@section('content')
<section class="banner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators --> 
    <!--<ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>    
                    
                </ol>--> 
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="images/banner1.jpg" alt="banner1">
        <div class="carousel-caption">
          <h2>SUN’S OUT. DEALS ARE IN</h2>
          <p>Big savings and Free Shipping on Dyson <br>
            Ray-Ban, and more </p>
          <span class="btn"><a href="#">SHOP NOW</a></span> </div>
      </div>
      <div class="item"> <img src="images/banner2.jpg" alt="banner3">
        <div class="carousel-caption">
          <h2>SUN’S OUT. DEALS ARE IN</h2>
          <p>Big savings and Free Shipping on Dyson <br>
            Ray-Ban, and more </p>
          <span class="btn"><a href="#">SHOP NOW</a></span> </div>
      </div>
    </div>
    <!-- Controls --> 
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span><i class="fa fa-angle-left" aria-hidden="true"></i></span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </div>
</section>

<div class="body_content">
  <div class="container">
    <div class="col-md-9 col-sm-8 col-xs-12 process_left_panel">
      <div class="process_left">
        <div class="process_box col-md-4 col-sm-4 col-xs-12">
          <div class="process_box_icon"> <img src="images/process_icon1.png" alt="process_icon1" /> </div>
          <h3>SELL</h3>
          <p>List your items for FREE and earn <br>
            Bitcoin. Only 2.5% fee on sold items!</p>
        </div>
        <div class="process_box col-md-4 col-sm-4 col-xs-12">
          <div class="process_box_icon blue"> <img src="images/process_icon2.png" alt="process_icon2" /> </div>
          <h3>BUY</h3>
          <p>Buy online with Bitcoin or Litecoin <br>
            and get great deals.</p>
        </div>
        <div class="process_box col-md-4 col-sm-4 col-xs-12">
          <div class="process_box_icon red"> <img src="images/process_icon3.png" alt="process_icon3" /> </div>
          <h3>ESCROW</h3>
          <p>Our trusted bitcoin escrow service lets <br>
            you buy and sell with peace of mind.</p>
        </div>
        <div class="clr"></div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12">
      <div class="discount_box">
        <h3>GET 20% OFF</h3>
        <h4>WITH 24 EASY PAYMENTS</h4>
        <p>Ends June 15 | Min purchase required. Subject to credit approval. See terms</p>
        <a href="">SHOP NOW</a> </div>
    </div>
    <div class="clr"></div>
    <div class="shop_now">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shop_now_box">
          <div class="shop_box_left ball"> <img src="images/ball.png" alt="ball" /> </div>
          <div class="shop_box_right ball_text">
            <h2>Aaron Judge</h2>
            <a href="">SHOP NOW</a> </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shop_now_box">
          <div class="shop_box_left"> <img src="images/tshirt.png" alt="tshirt" /> </div>
          <div class="shop_box_right">
            <h2>Pittsburgh <br>
              Penguins</h2>
            <a href="">SHOP NOW</a> </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shop_now_box">
          <div class="shop_box_left"> <img src="images/ac.png" alt="ac" /> </div>
          <div class="shop_box_right">
            <h2>Portable <br>
              AC</h2>
            <a href="">SHOP NOW</a> </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>

<div class="featured_products">
  <div class="container">
    <div class="col-md-12">
      <div class="featured_products_inner">
        <h2>FEATURED PRODUCT</h2>
        <div id="product-carousel" class="owl-carousel">
          <div class="item">
            <div class="product_box">
              <div class="products_img_box"> <img src="images/products1.png" alt="products1" /> </div>
              <h3>Linksys WRT1900AC AC1900 V2 Dual Band Smart WiFi Router</h3>
              <p>Ships FREE directly from Linksys!</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products2.png" alt="products2" />
              <h3>Samsonite Outline Sphere 2 Hardside 21" Spinner - Luggage</h3>
              <p>Limited quantity available / 269 sold</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products3.png" alt="products3" />
              <h3>Samsung Galaxy S7 32GB SM-G930T Unlocked GSM</h3>
              <p>Limited quantity available</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products4.png" alt="products4" />
              <h3>Fitbit Charge 2 Heart Rate + Fitness Wristband</h3>
              <p> Limited quantity available </p>
              <a href="">DETAILS</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="featured_products">
  <div class="container">
    <div class="col-md-12">
      <div class="featured_products_inner">
        <h2>Ending Soon Products</h2>
        <div id="product-carousel1" class="owl-carousel">
          <div class="item">
            <div class="product_box">
              <div class="products_img_box"> <img src="images/products1.png" alt="products1" /> </div>
              <h3>Linksys WRT1900AC AC1900 V2 Dual Band Smart WiFi Router</h3>
              <p>Ships FREE directly from Linksys!</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products2.png" alt="products2" />
              <h3>Samsonite Outline Sphere 2 Hardside 21" Spinner - Luggage</h3>
              <p>Limited quantity available / 269 sold</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products3.png" alt="products3" />
              <h3>Samsung Galaxy S7 32GB SM-G930T Unlocked GSM</h3>
              <p>Limited quantity available</p>
              <a href="">DETAILS</a> </div>
          </div>
          <div class="item">
            <div class="product_box"> <img src="images/products4.png" alt="products4" />
              <h3>Fitbit Charge 2 Heart Rate + Fitness Wristband</h3>
              <p> Limited quantity available </p>
              <a href="">DETAILS</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection