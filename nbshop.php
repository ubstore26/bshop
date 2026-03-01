<?php 

 require_once 'backend/shared/header.php';
 require_once 'admin/inc/config.php';
 require_once 'admin/inc/users.php';

?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $name = $fetch_info['name'];
        $email = $fetch_info['email'];
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

    
    <!--  form search-->
 
   
<div class="tp-header-main tp-header-sticky page_speed_1386181467">
  
<div class="container">
    
    <div class="row align-items-center">
    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
      <div class="logo">
      <a href="">
        <img src="frontend/assets/images/logo/nbstore.png
        " data-bb-lazy="false" class="page_speed_2067126349" loading="eager" alt="Shofy - Multipurpose eCommerce Laravel Script"></a>
      </div></div><div class="col-xl-6 col-lg-7 d-none d-lg-block pl-70">
        <form role="search" action="
        " data-ajax-url="" method="GET" class="bb-form-quick-search tp-header-search" id="bb-form-quick-search">
          <div class="tp-header-search-wrapper d-flex align-items-center">
            <div class="tp-header-search-box">
              <input type="search" name="q" placeholder="Search for Products..." autocomplete="off">
            </div><div class="tp-header-search-category">
                <div class="product-category-label">
                  <span>All Categories</span>
                  <svg class="icon svg-icon-ti-ti-chevron-down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6l6 -6"></path></svg>
                </div><select name="categories[]" data-bb-toggle="init-categories-dropdown" data-url="
                " aria-label="Product categories">
                    <option value="">All Categories</option><option value="1">New Arrivals</option>

                
                        </select>
                      </div><div class="tp-header-search-btn">
                          <button type="submit" title="Search">
                            <svg class="icon svg-icon-ti-ti-search" xmlns="http://www.w3.org/2000/svg"
                           width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                          </button>
                        </div>
                      </div>
                      <div class="bb-quick-search-results">

                      </div>
                    </form></div><div class="col-xl-4 col-lg-3 col-md-8 col-6">
                            <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                              <div class="tp-header-login d-none d-lg-block">
                              <a href="" class="d-flex align-items-center">
                                <div class="tp-header-login-icon">
                                  <span class="page_speed_1640407040">
                                  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                                    </circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 
                                    1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 
                                    14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 
                                    14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 
                                    19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 
                                    20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 
                                    19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" 
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                  </path></svg></span>
                                </div>
                                <div class="tp-header-login-content d-none d-xl-block">
                                    <span class="page_speed_1640407040"> Hello, <?php echo  $name = $fetch_info['name'];
        $email = $fetch_info['email'];  ?> </span>
                                  </div></a></div><div class="tp-header-action d-flex align-items-center ml-50">
                                    <div class="tp-header-action-item tp-header-action-item-compare"><a href=""
                                     class="tp-header-action-btn"><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                                      </path><path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" 
                                      stroke-linejoin="round"></path><path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" 
                                      stroke-linejoin="round"></path><path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" 
                                      stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                      <span class="tp-header-action-badge" data-bb-value="compare-count">0</span>
                                    </a></div><div class="tp-header-action-item d-none d-lg-block tp-header-action-item-wishlist">
                                      <a href="" class="tp-header-action-btn"><svg width="22" height="20" viewBox="0 0 22 20" fill="none" 
                                      xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 
                                      15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804
                                       0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 
                                       1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 
                                       19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg><span class="tp-header-action-badge" data-bb-value="wishlist-count">0</span>
                                    </a></div><div class="tp-header-action-item tp-header-action-item-cart">
                                      <button type="button" class="tp-header-action-btn cartmini-open-btn" data-bb-toggle="open-mini-cart" data-url="
                                      " aria-label="View cart">
                                          <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947
                                             6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" 
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path><path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362
                                             2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                                            </path><path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                                            </path><path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                                            </path></svg><span class="tp-header-action-badge" data-bb-value="cart-count">0</span>
                                          </button></div><div class="tp-header-action-item d-lg-none tp-header-action-item-menu">
                                              <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn" aria-label="Open menu">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                                <rect x="10" width="20" height="2" fill="currentColor"></rect><rect x="5" y="7" width="25" height="2" fill="currentColor">

                                                </rect>
                                                <rect x="10" y="14" width="20" height="2" fill="currentColor">

                                                </rect></svg>
                                              </button>
                                              
                                            </div>
                                          </div>
                                          </div>
                                        </div>
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

        
</ul><!--close menu navbar-->






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