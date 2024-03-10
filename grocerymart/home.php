<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocery</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <!--custom css file  link-->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
   <style>
        #currentDateTime {
            position:absolute;
    font-size: 18px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    bottom: 5px;
    left: 20px;
}
    .table {
  width: 100%;
  border: none;
  font-size:30px;
  
  text-align: center;
  background-color: #666;
  
}
table{
    border-spacing: 35px;
    color: #fffefe;
    font-size: 19px;
    padding-left: 80px;
    
}
table td,th,tr{
text-align:left;
padding-bottom: 0%;
padding-top: 0%;
        }
    </style>
</head>
<body>
<!--header section starts--->
<header class="header">
    
    <a href="#" class="logo"><i class="fas fa-shopping-basket">GROCERY Mart</a></i>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#review">Reviews</a></li>
            
        </ul>
    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <a href="/nf1/images/shoppingCart.html" class="a"><div class="fas fa-shopping-cart" id="cart-btn"></div>
        <a href="/nf1/images/contact.html" class="a"><div class="fas fa-user" id="login-btn"></div></a>
    </div>
  <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here....">
    <label for="search-box" class="fas fa search"></label>
  </form>



</header>

<!--header section ends--->
<!--home section starts--->



<section class="home" id="home">

<div class="content">
<h3>Buy <span>organic </span>and fresh products <br></h3>
<p>
<div style="position: absolute; font-size: 18px; color: white; background-color: rgba(0, 0, 0, 0.4); padding: 10px; bottom: 20px; left: 20px;">
<?php
            date_default_timezone_set('Asia/Kolkata'); // Set the time zone to India (IST)
            $formattedDateTime = date('Y-m-d H:i:s');
            echo "Current date and time in India:$formattedDateTime";
            ?>
            </div>
</p>
<a href="#" class="btn">shop now</a>
</div>

</section>











<!--home section ends--->


<!--product section starts--->

<section class="products" id="products">

<h1 class="heading"> our <span>products</span></h1>

<div class="swiper product-slider">

    <div class="swiper-wrapper">
    
       <div class="swiper-slide box">

       <a href="/nf1/images/loafbread.html" class="a"><img src="images/product-1.jpg" alt="" class="product-image"></a>
     <h3>loaf bread</h3>
     <div class="price"> Rs100/- </div>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
     <a href="#" class="btn">Buy now</a>
    </div>

    <div class="swiper-slide box">
     <img src="images/product-2.jpg" alt="" class="product-image">
     <h3>Cardamon</h3>
     <div class="price"> Rs800/- </div>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
     <a href="#" class="btn">Buy now</a>
    </div>

    <div class="swiper-slide box">
    <a href="/nf1/images/coffee.html" class="a"><img src="images/product-3.jpg" alt="" class="product-image"></a>
     <h3>Coffee</h3>
     <div class="price"> Rs300/- </div>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
     <a href="#" class="btn">Buy now</a>
    </div>

    <div class="swiper-slide box">
    <img src="images/product-4.jpg" alt="" class="product-image">
    <h3>watermelon</h3>
    <div class="price"> Rs90/- </div>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
     </div>
    <a href="#" class="btn">Buy now</a>
   
   </div>

  </div>
</div>
 

 <div class="swiper product-slider">

  <div class="swiper-wrapper">
  
  <div class="swiper-slide box">
   <img src="images/product-5.jpg" alt="" class="product-image">
   <h3>ketchup</h3>
   <div class="price"> Rs300/- </div>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
   <a href="#" class="btn">Buy now</a>
  </div>

  <div class="swiper-slide box">
   <img src="images/product-6.jpg" alt="" class="product-image">
   <h3>fresh mint leaves</h3>
   <div class="price"> Rs30/- </div>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
   <a href="#" class="btn">Buy now</a>
  </div>

  <div class="swiper-slide box">
  <a href="/nf1/images/strawaberry.html" class="a"><img src="images/strawberry.png" alt="" class="product-image"></a>
   <h3>strawberry</h3>
   <div class="price"> Rs200 per dozen/- </div>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
   <a href="#" class="btn">Buy now</a>
  </div>

  <div class="swiper-slide box">
  <img src="images/cart4.jpg" alt="" class="product-image">
  <h3>pineapple</h3>
  <div class="price"> Rs80/- </div>
  <div class="stars">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star-half-alt"></i>
   </div>
  <a href="#" class="btn">Buy now</a>
 
 </div>

</div>

</div>
</section>






    
</div>

<!--category section starts--->
<section class="categories" id="categories">
<h1 class="heading"> product <span> categories </span></h1>
<div class="box-container">

 <div class="box">
  <div> <figure id="fig"><a href="/nf1/images/typesvegetable.html" class="a"><img src="/nf1/images/vegetables.jpg" alt=""></div></a>
  <h3>vegetables</h3>
  <p>upto 45% off</p>
  <a href="#" class="btn">shop now</a>
</div>

<div class="box">
  <div> <figure id="fig"><a href="/nf1/images/typesfruit.html" class="a"><img src="/nf1/images/fruits.png" alt=""></div></a>
  <h3>fresh fruits</h3>
  <p>upto 30% off</p>
  <a href="#" class="btn">shop now</a>
 </div>
 
 
 <div class="box">
  <div> <figure id="fig"><a href="/nf1/images/typesherb.html" class="a"><img src="/nf1/images/allherbs.jpg" alt=""></div></a>
  <h3>fresh herbs</h3>
  <p>upto 10% off</p>
  <a href="#" class="btn">shop now</a>
 </div>

 <div class="box">
  <div> <figure id="fig"><a href="/nf1/images/dailye.html" class="a"><img src="/nf1/images/coffee.png" alt=""></div></a>
  <h3>daily essentials</h3>
  <p>upto 20% off</p>
  <a href="#" class="btn">shop now</a>
 </div>


</div>

</section>

<!--features section starts--->

<section class="features" id="features">

    <h1 class="heading"> our <span> features </span></h1>
    <div class="box-container">
    
     
    
    
     <div class="box">
        <img src="images/delivery.jpg" alt="">
        <h3>free delivery</h3>
        
        <a href="#" class="btn">read more</a>
     </div>

     <div class="box">
        <img src="images/fresh.jpg" alt="">
        <h3>fresh and organic</h3>
        
        <a href="#" class="btn">read more</a>
     </div>

     <div class="box">
        <img src="images/payment.jpg" alt="">
        <h3>easy payements</h3>
        
        <a href="#" class="btn">read more</a>
     </div>
    
    </div>
    </section>
    
    
    
    
    
    <!--features section ends--->

<!--review section starts--->
<section class="review" id="review">
  <h1 class="heading">Customer's <span>Reviews</span></h1>

  <div class="swiper review-slider">
      <div class="swiper-wrapper">
          <!-- Review 1 -->
          <div class="swiper-slide box">
              <img src="images/review-1.png" alt="Customer 1">
              <p>Great service and high-quality products. I've been a loyal customer for a long time, and I highly recommend Grocery</p>
              <h3>John Doe</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
          </div>

          <!-- Review 2 -->
          <div class="swiper-slide box">
              <img src="images/review-2.png" alt="Customer 2">
              <p>Impressive variety of products and fast delivery. I'm a satisfied customer and will continue shopping with Groco.</p>
              <h3>Jane Smith</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
          </div>

          <!-- Review 3 -->
          <div class="swiper-slide box">
              <img src="images/review-3.png" alt="Customer 3">
              <p>Excellent customer service. I had a query, and they resolved it quickly.The quality of products is up to date. Great job, Groco!</p>
              <h3>Alice Johnson</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
          </div>

          <!-- Review 4 -->
          <div class="swiper-slide box">
              <img src="images/review-4.png" alt="Customer 4">
              <p>Top-notch quality and best prices.The products are delivered freshed as promised.Groco is go-to place for all my grocery needs.</p>
              <h3>Michael Brown</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
          </div>
      </div>
  </div>
</section>









<!--review section ends--->















<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!--custom js file  link-->
 <script src="script.js">



 </script>
    
    <div class="table">
    <table>
    <tr>
        <th><h3>Grocerymart</h3></th>
        <th></th>
        <th></th>
        <th></th>
        <th><h3>Help</h3></th>
        <th></th>
        <th></th>
        <th></th>
        <th><h3>Contact us</h3></th>
      </tr>
      <tr>
        <td>About us</td>
        <td></td>
        <td></td>
        <td></td>
        
        <td>FAQs</td>
        <td></td>
        <td></td>
        <td></td>
        <td>WhatsApp us : 70003 70003</td>
        <br>
      </tr>
      <tr>
        <td>In news</td>
        <td></td>
        <td></td>
        <td></td>

        <td>Contact us</td>
        <td></td>
        <td></td>
        <td></td>
        <td>Call Us : 1800 890 1222<br>
            8:00 AM to 8:00 PM, 365 days</td>
      </tr>
      <tr>
          <td>Privacy Policy</td>
          <td></td>
        <td></td>
        <td></td>

          <td>Vendor connect</td>
          <td></td>
        <td></td>
        <td></td>
        <td>You are accessing the BETA Version of www.grocerymart.com</td>
        </tr>
        <tr>
          <td>Affiliate</td>
          <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td>E-waste Policy</td>
            <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
        <td></td>
        <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        
    </table>
    </div>
    <hr>
























</body>
</html>