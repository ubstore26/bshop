
<?php 

 require_once 'backend/shared/header.php';
 require_once 'admin/inc/config.php';

?>
<?php 

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";


    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: resetpassword.php');
            }
        }else{
            header('Location: verification.php');
        }
    }
}else{
    header('Location: login.php');
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Fontawesome Link for Icons -->
 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>


<div class="nb_logged_out_nav--nav--Td2RG">
    <div
      class="cx_colorBorder--vB66g">
    </div>
    <div class="cx_flex--uQqQ4 cx_flexRow--MkU5a cx_mr4--RBvoe">
      <div class="nb_logged_out_nav--logoLinkWrapper--IGOwO">
         
      
      <div class="menu-btn">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>


      </div>
      
      <a href="index.php" class="nb_logged_out_nav--navCommunityText--7OdGN 
        text--fontPos13--5OfL8 text--_fontBase--VaHfk">
            <img src="frontend/assets/images/logo/nbstore.png" class="shop-logo" type="image">
      </a>

    </div>
    
    <!--  form search-->
 
   
       

    

        <!--close  form search-->
    
    <div class="nb_logged_out_nav--navbarCategorySearchContainer--NlAEM">

<div class="cart_count">
<a href="cart_count" translate="no" >Cart</a>

</div>

    <div>
      
     
    
    </div>
    <div class="nb_logged_out_nav--authButtonContainer--jQ6lW">

      <a href="login.php">Sign in</a>
  </div>
    </div>
    
   
</div>


     
        <ul class="nav-menu">
        <li><a href="#">HOME</a></li>
        <li><a href="#">SHOP</a></li>

  <!--  on mobile-->
   <ul class="btn-categoryMobile">
  <li><a href="#">CATEGORY</a>
   <i class="fa fa-chevron-down" aria-hidden="true"></i></li>
   <div class="categoryMobile">
        <li><a href="#">Smart Phone</a></li>
        <li><a href="#">Smart Watch</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Accessories PC</a></li>
        <li><a href="#">Accessories Apple</a></li>
        <li><a href="#">Ipad / Tablet</a></li>
        
        </div>

  
</ul><!--close-->

 <ul class="btn-productsMobile">
 <li><a href="#">PRODUCTS</a>
 <i class="fa fa-chevron-down" aria-hidden="true"></i></li>

 <div class="productsMobile">
  <li><a href="#">Collection</a> </li>
  <li><a href="#">Discount Product</a></li>
  <li><a href="#">Last Product</a> </li>
  <li><a href="#">Featured Product</a> </li>
  <li><a href="#">Trending Product</a></li>
  
  </div>

</uL><!--close on mobile-->





        <ul class="btn-category">
        <li><a href="#" class="btn-category">CATEGORY 
        <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
       
      </li>
      
      <div class="category">
        <li><a href="#">Smart Phone</a></li>
        <li><a href="#">Smart Watch</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Accessories PC</a></li>
        <li><a href="#">Accessories Apple</a></li>
        <li><a href="#">Ipad / Tablet</a></li>
        
        </div>
</ul><!---close category-->
    

<ul class="btn-products">
        <li><a href="#" class="btn-products">PRODUCTS 
        <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
        
      </li>
      <div class="products">
  <li><a href="#">Collection</a> </li>
  <li><a href="#">Discount Product</a></li>
  <li><a href="#">Last Product</a> </li>
  <li><a href="#">Featured Product</a> </li>
  <li><a href="#">Trending Product</a></li>
  
  </div>
</ul><!--close products--->
 
<div class="dropdownlanguage nb_logged_out_nav--navCommunityText--7OdGN">
         <a href="#"> <i class="fa fa-language" aria-hidden="true"></i></a> 
          </div>
     
    <div class="Language">

         <li><a href="#googtrans(en)" class="lang-en lang-select" data-lang="en" translate="no" alt="USA">English</a></li>
          <li><a href="#googtrans(km)" class="lang-kh lang-select" data-lang="km" translate="no"  alt="km">Khmer</a></li>

          </div>


        
</ul><!--close menu navbar-->

<!--==Slider============================================-->

</br></br></br>
<div class="container swiper">
    <div class="card-wrapper">
      
      <!-- Navigation Buttons -->
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>

      <!-- Card slides container -->
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="./frontend/assets/images/products_images/blue.png" alt="Card Image" class="card-image">
            <p class="badge badge-designer">Designer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
            <button class="card-button material-symbols-rounded">arrow_forward</button>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="./frontend/assets/images/products_images/pink.png" alt="Card Image" class="card-image">
            <p class="badge badge-developer">Developer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
            <button class="card-button material-symbols-rounded">arrow_forward</button>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="./frontend/assets/images/products_images/yellow.png" alt="Card Image" class="card-image">
            <p class="badge badge-marketer">Marketer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
            <button class="card-button material-symbols-rounded">arrow_forward</button>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="images/gamer.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-gamer">Gamer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
            <button class="card-button material-symbols-rounded">arrow_forward</button>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="images/editor.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-editor">Editor</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
            <button class="card-button material-symbols-rounded">arrow_forward</button>
          </a>
        </li>
      </ul>

       <!-- Pagination -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
  <div class="container swiper">
  <div class="card-wrapper">
   <!-- Navigation Buttons -->
   <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>

  
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

   <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    
        <div class="mt-4 flex justify-between">
         
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
      
      </li>
      <li class="card-item swiper-slide">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    
        <div class="mt-4 flex justify-between">
         
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
      
      </li><li class="card-item swiper-slide">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    
        <div class="mt-4 flex justify-between">
         
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
      
      </li><li class="card-item swiper-slide">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    
        <div class="mt-4 flex justify-between">
         
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
      
      </li><li class="card-item swiper-slide">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    
        <div class="mt-4 flex justify-between">
         
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
      
      </li>


      </ul>
      
      
      <!-- More products... -->


       <!-- Pagination -->
       <div class="swiper-pagination"></div>

    </div>
  </div>



<!-- Linking SwiperJS script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="./frontend/assets/js/script.js"></script>
  <script src="./frontend/assets/js/slider.js"></script>
  <script src="./frontend/assets/js/navOpen.js"></script>
  <script src="./frontend/assets/js/jquery.min.js"></script>
  <script src="./frontend/assets/js/bootstrap.min.js"></script>
  <script src="./frontend/assets/js/google-element.js"></script>
  <script src="./frontend/assets/js/translate.js"></script>


 

</body>

</html>