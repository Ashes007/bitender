@extends('layouts.app')
@section('title','Product')
@section('content')
<div class="page_heading">
  <h2>Fashion</h2>
  <span>Home<img src="{{ asset('images/heading_bg.png') }}" alt="heading_bg" />&nbsp; Fashion</span> 
</div>
<div class="body_content">
<div class="container">
    <div class="products_show">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="product_show_left">
          <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
            <div class='carousel-outer'> 
              <!-- me art lab slider -->
              <div class='carousel-inner '>
                <div class='item active'> <img src="{{ asset('images/pro_list_img.jpg') }}" alt='' id="zoom_05"  data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg"/> </div>
                <div class='item'  id="zoom_05"> <img src="{{ asset('images/pro_list_img.jpg') }}" alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg" /> </div>
                <div class='item'> <img src="{{ asset('images/pro_list_img.jpg') }}" alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg" /> </div>
                <div class='item'> <img src="{{ asset('images/pro_list_img.jpg') }}" alt='' data-zoom-image="http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg" id="zoom_05"/> </div>
                <div class='item'> <img src="{{ asset('images/pro_list_img.jpg') }}" alt='' data-zoom-image="http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg" id="zoom_04"/> </div>
                <script>
			  $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
			</script> 
              </div>
              
              <!-- sag sol --> 
              <a class='left carousel-control' href='#carousel-custom' data-slide='prev'> <span class='glyphicon glyphicon-chevron-left'></span> </a> <a class='right carousel-control' href='#carousel-custom' data-slide='next'> <span class='glyphicon glyphicon-chevron-right'></span> </a> </div>
            
            <!-- thumb -->
            <ol class='carousel-indicators mCustomScrollbar meartlab products_img'>
              <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src="{{ asset('images/products_img1.jpg') }}" alt='' /></li>
              <li data-target='#carousel-custom' data-slide-to='1'><img src="{{ asset('images/products_img2.jpg') }}" alt='products_img2' /></li>
              <li data-target='#carousel-custom' data-slide-to='2'><img src="{{ asset('images/products_img3.jpg') }}" alt='/products_img3' /></li>
              <li data-target='#carousel-custom' data-slide-to='3'><img src="{{ asset('images/products_img4.jpg') }}" alt='products_img4' /></li>
              <li data-target='#carousel-custom' data-slide-to='4'><img src="{{ asset('images/products_img5.jpg') }}" alt='products_img5' /></li>
            </ol>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="product_show_details">
          <h2>Coach Signature Edie 28 Ladies Medium Multi Shoulder Bag 57934</h2>
          <span>Availability: <b>In stock </b><i>(40 available )</i></span> <span>Seller ID: <em>Robert25</em></span> <span>Feedback: <img src="{{ asset('images/star_icon.jpg') }}" alt="star_icon" /></span>
          <div class="clr"></div>
          <div class="item_condition">
            <h3>Item condition: <b>New with tags</b></h3>
          </div>
          <div class="price_hours">
            <div class="price_hours_left">
              <h3>Price: &nbsp;<span>$248.99</span></h3>
            </div>
            <div class="price_hours_mid"> <span>btc: 0.12</span> </div>
            <div class="price_hours_right"> 16h:03m:56s </div>
            <div class="clr"></div>
            <div class="quick_view">
              <h2>Quick Overview</h2>
              <p>A brand-new, unused, and unworn item. Possible cosmetic imperfections range from natural color variations to scuffs, cuts or nicks, hanging threads or missing buttons that occasionally occur during the manufacturing or delivery process. The apparel may contain irregular or mismarked size tags. The item may be missing the original packaging materials (such as original box or tag).  New factory seconds and/or new irregular items may fall into this category. The original tags may or may not be attached. See the seller’s listing for full details and description of any imperfections.</p>
            </div>
            <div class="qty">
              <div class="qty_left"> <span>QTY :</span> </div>
              <div class="qty_mid"> 
                <!--<img src="images/minus_plus.jpg" alt="minus_plus" />-->
                <input type="button" onclick="dicValue()" value="-" class="plus"/>
                <input type="text" id="number" value="0" class="input_text_price"/>
                <input type="button" onclick="incrementValue()" value="+"  class="plus"/>
                <div class="clr"></div>
              </div>
              <div class="qty_right"> <span>piece (327 pieces available)</span> </div>
              <div class="clr"></div>
            </div>
            <div class="cart_button_panel">
              <input type="submit" class="buynow" value="BUY NOW" />
              <input type="submit" class="add_cart" value="ADD TO CART" />
            </div>
          </div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="products_info">
      <div class="col-md-3 col-sm-12 col-sx-12">
        <div class="sold_by">
          <p>Sold By:<br>
            Preself Official Store<br>
            China</p>
          <div class="star_feedback">
            <p><img src="{{ asset('images/star_icon.jpg') }}" alt="star_icon" /><span>6786</span>
            <div class="clr"></div>
            </p>
            <p><span>92.5%</span> Poseive Feedback
            <div class="clr"></div>
            </p>
            <select>
              <option selected>Detail Seller Rating</option>
            </select>
          </div>
          <p>Open <span>4 Year(s)</span></p>
          <div class="visit_store"> <a href="">Visit Store</a> <a href="">Follow</a>
            <div class="clr"></div>
          </div>
          <div class="contact_seller">
            <h3>Contact Seller</h3>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="">Contact Now</a></p>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="col-md-9 col-sm-12 col-sx-12">
        <ul class="tabs">
          <li class="tab-link current" data-tab="tab-1">PRODUCT DESCRIPTION</li>
          <li class="tab-link" data-tab="tab-2">Shipping & Payments</li>
        </ul>
        <div id="tab-1" class="tab-content current">
          <h3>Item specifics</h3>
          <div class="col-md-8 col-sm-8 col-xs-12  tab_text">
            <div class="col-xs-12 tab_text tab_text1">
              <div class="col-md-2 col-sm-6 col-xs-6  tab_text">
                <p>Condition:</p>
              </div>
              <div class="col-md-8 col-sm-6 col-xs-6  tab_text">
                <p>New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging (such as the original box or bag) and/or with the original tags attached. See all condition definitions</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Gender: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>Ladies</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Hardware Color: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>Silver</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Material: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>Multi</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Measurements: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>9in (H) x 12in (L) x 4in (W)</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Model Number: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>57934</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Retail Price: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>275</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Series: </p>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8  tab_text">
                <p>Signature Edie 28</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-3 col-sm-6 col-xs-6  tab_text">
                <p>Size Name: </p>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-6  tab_text">
                <p>Medium</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 tab_text">
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Brand: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Coach</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>MPN: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>57934-SVDK6</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>UPC: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>889532702428</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Manufacturer: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>UnAssigned</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Color: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Black</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Feature 1: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Magnetic Closure</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Feature 2: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Detachable Strap</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Feature 3: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Fabric Lining</p>
              </div>
            </div>
            <div class="col-xs-12 tab_text">
              <div class="col-md-4 col-sm-6 col-xs-6  tab_text">
                <p>Feature 4: </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6  tab_text">
                <p>Inside Zip Pocket</p>
              </div>
            </div>
          </div>
          <div class="clr"></div>
        </div>
        <div id="tab-2" class="tab-content">
          <h3>Shipping & Payments</h3>
          <div class="clr"></div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="featured_products">
      <div class="container">
        <div class="col-md-12">
          <div class="featured_products_inner">
            <h2>RELATED PRODUCTS</h2>
            <div id="product-carousel1" class="owl-carousel">
              <div class="item">
                <div class="product_box">
                  <div class="products_img_box"> <img src="{{ asset('images/products1.png') }}" alt="products1" /> </div>
                  <h3>Linksys WRT1900AC AC1900 V2 Dual Band Smart WiFi Router</h3>
                  <p>Ships FREE directly from Linksys!</p>
                  <a href="">DETAILS</a> </div>
              </div>
              <div class="item">
                <div class="product_box"> <img src="{{ asset('images/products2.png') }}" alt="products2" />
                  <h3>Samsonite Outline Sphere 2 Hardside 21" Spinner - Luggage</h3>
                  <p>Limited quantity available / 269 sold</p>
                  <a href="">DETAILS</a> </div>
              </div>
              <div class="item">
                <div class="product_box"> <img src="{{ asset('images/products3.png') }}" alt="products3" />
                  <h3>Samsung Galaxy S7 32GB SM-G930T Unlocked GSM</h3>
                  <p>Limited quantity available</p>
                  <a href="">DETAILS</a> </div>
              </div>
              <div class="item">
                <div class="product_box"> <img src="{{ asset('images/products4.png') }}" alt="products4" />
                  <h3>Fitbit Charge 2 Heart Rate + Fitness Wristband</h3>
                  <p> Limited quantity available </p>
                  <a href="">DETAILS</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection