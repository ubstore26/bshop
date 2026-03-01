<?php 
require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/resetpassnav.php';
 
 ?>


<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>
                    
       
<!doctype html>
<html lang="en">
<head>
<title>nb store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Boxicons CSS -->
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   
<link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">


<body>

<section class="container">
            <div class="form">
                <div class="form-content">
            
                    <form action="resetpassword.php" method="POST"  autocomplete="off"  onsubmit="return formverifyReset()">
                  
                  <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert-success">
                            <?php echo $_SESSION['info']; ?>
                    
                        <?php
                    }
                    ?></div>
                    
                   <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert-reset">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                   </br>
                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Verification code</label>
                        <input  type="number" name="otp" id="numberVerify2"
                        class="spectrum-Textfield spectrum-Textfield--quiet"

                          onkeyup="formverifyReset()">
                          <i class="fa fa-exclamation-triangle" aria-hidden="true" id="errorI-resetPass"></i>
                        <div class="error" id="numberVerify2-error"></div>
                       
                     </div>

                        
                     
                        
                        <div class="field button-field">
                            <button type="submit" name="check-reset-otp"
                             class="btn btn-dark">Next</button> 
                         
                        </div>
                    </form>

                   
                </div>

              

            </div>
        </section>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>
     