
<?php 

require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/verifynav.php';
 
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

  <link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">

  <body oncontextmenu="return false;">


<section class="container">
            <div class="form">
                <div class="form-content">
               
                    <form action="verification.php" method="POST"  onsubmit="return formverify()">
                    <h1>Verification</h1>

                    <?php 

          if(isset($_SESSION['info'])){
                ?>
              <div class="alert-success">
        <?php echo $_SESSION['info']; ?>
          </div>
                  <?php
            }
       ?>
           
                 
                   <?php 

          if(isset($_SESSION['info'])){
             ?>
   
    
               <?php
         }
            ?>


                <?php
           if(count($errors) > 0){
        ?>
              <div class="alert-verify">

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
                           
                           for="EmailPage-EmailField">Enter code</label>
                        <input  type="number" id="number-verify" name="otp"
                        class="spectrum-Textfield spectrum-Textfield--quiet "   onkeyup ="formverify()">

                        <i class="fa fa-exclamation-triangle" aria-hidden="true" id="errorI-verify"></i>
                        <div class="error" id="numberVerify-error"></div>
                        </div>

                       
                        <div class="field button-field">
                            
                            <button  type="submit" name="check"  class="btn btn-dark">Confirm</button>
                          
                  
                        </div>
                    </form>

                 
                </div>

              

            </div>
        </section>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>







