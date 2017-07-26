@extends('layouts.app')
@section('title','Product')
@section('content')

<div class="page_heading">
  <h2>Fashion</h2>
  <span>Home<img src="{{ asset('images/heading_bg.png') }}" alt="heading_bg" />&nbsp; Fashion</span> </div>
<div class="body_content">
  <div class="container">
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="category_panel">
        <h2>CATEGORIES</h2>
        <ul>
          <li><a href="">Women's Clothing</a></li>
          <li><a href="">Men's Clothing</a></li>
          <li><a href="">Shoes</a></li>
          <li><a href="">Jewelry</a></li>
          <li><a href="">Watches, Parts & Accessories</a></li>
          <li><a href="">Handbags & Accessories</a></li>
          <li><a href="">Beauty</a></li>
          <li><a href="">Health</a></li>
          <li><a href="">Vintage</a></li>
          <li><a href="">Kids & Baby</a></li>
        </ul>
      </div>
      <div class="filter_by_price">
        <h2>FILTER BY PRICE</h2>
        <!--<img src="{{ asset('images/filter_price.png') }}" alt="filter_price" />-->
        <div class="range">
          <input type="range" name="points" min="1" max="3000" step="0.10" onchange="$('#price_val').html(this.value)"/>
          <div id="price_val"></div>
          <div class="range_left">
            <select>
              <option selected>Min</option>
              <option></option>
            </select>
          </div>
          <div class="range_mid"><span>to</span></div>
          <div class="range_right">
            <select>
              <option selected>3000</option>
              <option></option>
            </select>
          </div>
          <div class="clr"></div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <div class="products_sort_by_panel">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="sort_by"> <span>Sort By :</span>
            <select>
              <option selected>Price -- High to Low</option>
              <option></option>
              <option></option>
              <option></option>
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="view_by"> <span>View By :</span>
            <select>
              <option selected>Grid -- List</option>
              <option></option>
              <option></option>
              <option></option>
            </select>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      
      <div class="products_listing_panel">
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
           <a href=""><img src="{{ asset('images/pro_list_img1.jpg') }}" alt="pro_list_img1" /></a>
            <h3><a href="">Free People 8933 Womens Emma Embroidered Boho </a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
           <a href=""><img src="{{ asset('images/pro_list_img2.jpg') }}" alt="pro_list_img2" /></a>
			  <h3><a href="">Free People 5807 Womens Dreamland Mixed Media Lace</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
			  <a href=""><img src="{{ asset('images/pro_list_img3.jpg') }}" alt="pro_list_img3" /></a>
			  <a href=""><h3>Free People 2724 Womens Heathered Seamed Cowl Neck</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="products_listing_panel">
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box">
			  <a href=""><img src="{{ asset('images/pro_list_img4.jpg') }}" alt="pro_list_img4" /></a>
			  <h3><a href="">Sleeve Classic Pique Polo Shirt - Mens 8 Black</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
			  <a href=""><img src="{{ asset('images/pro_list_img5.jpg') }}" alt="pro_list_img5" /></a>
			  <h3><a href="">Lacoste Short Sleeve Classic Pique Polo Shirt - Mens 8 Black</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
			  <a href=""><img src="{{ asset('images/pro_list_img6.jpg') }}" alt="pro_list_img6" /></a>
			  <h3><a href="">New Polo Ralph Lauren Big and Tall Poplin Dress Shirt</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="products_listing_panel">
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
			  <a href=""><img src="{{ asset('images/pro_list_img7.jpg') }}" alt="pro_list_img7" /></a>
			  <h3><a href="">Christian Louboutin Black Mercura Metallic </a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
           <a href=""><img src="{{ asset('images/pro_list_img8.jpg') }}" alt="pro_list_img8" /></a>
			   <h3><a href="">Black Leather Platform Ankle Boots Size 37</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 product_box_pricing">
          <div class="products_listing_box"> 
			  <a href=""><img src="{{ asset('images/pro_list_img9.jpg') }}" alt="pro_list_img9" /></a>
			  <h3><a href="">Coach Signature Edie 28 Ladies Medium Multi Shoulder</a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      
      
      
      <div class="product_list_view_panel">
      	
      	<div class="products_listing_panel">
        <div class="col-md-12 col-sm-12 col-xs-12 product_box_pricing">
          <div class="products_listing_box col-md-12 col-ms-12 col-xs-12"> 
           
           	<div class="col-md-3 col-sm-4 col-xs-12"><a href=""><img src="{{ asset('images/pro_list_img1.jpg') }}" alt="pro_list_img1" /></a></div>
           	<div class="col-md-9 col-sm-8 col-xs-12">
				<h3><a href="">Christian Louboutin Black Mercura Metallic</a> </h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
          <div class="clr"></div>
          </div>
        </div>
     <div class="col-md-12 col-sm-12 col-xs-12 product_box_pricing">
          <div class="products_listing_box col-md-12 col-ms-12 col-xs-12"> 
           
           	<div class="col-md-3 col-sm-4 col-xs-12"><a href=""><img src="{{ asset('images/pro_list_img2.jpg') }}" alt="pro_list_img2" /></a></div>
           	<div class="col-md-9 col-sm-8 col-xs-12">
				<h3><a href="">Christian Louboutin Black Mercura Metallic </a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
          <div class="clr"></div>
          </div>
        </div>
       <div class="col-md-12 col-sm-12 col-xs-12 product_box_pricing">
          <div class="products_listing_box col-md-12 col-ms-12 col-xs-12"> 
           
           	<div class="col-md-3 col-sm-4 col-xs-12"><a href=""><img src="{{ asset('images/pro_list_img3.jpg') }}" alt="pro_list_img3" /></a></div>
           	<div class="col-md-9 col-sm-8 col-xs-12">
				<h3><a href="">Christian Louboutin Black Mercura Metallic </a></h3>
            <p>Limited quantity available</p>
            <div class="products_pricing"> <span><a><i class="fa fa-usd" aria-hidden="true"></i></a>248.99</span> <span><a><i class="fa fa-btc" aria-hidden="true"></i></a>0.50123</span>
              <div class="clr"></div>
            </div>
            <div class="feedback"> <b>Seller ID:<em>Robert25</em> </b> <b>Feedback:<em>0  0  0</em></b>
              <div class="clr"></div>
            </div>
          </div>
          <div class="clr"></div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      	
      	
      </div>
     	<div class="load_more_buton"> <a href="">LOAD MORE</a> </div>
    </div>
     
    <div class="clr"></div>
  </div>
</div>

@endsection