<?php 

require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/forgotnav.php';
 
 ?>


<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

 

<link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">


 


  
<section class="container">
            <div class="form">
                <div class="form-content">
               
                    <form action="forgotpassword.php" method="POST"  onsubmit="return formforgot()">
                    <h4> Forgot password</h4>
                   
                   <div class="form-link">
                        <span>New user?   <a href="signup.php" class="link signup-link"> Create an account </a></span>
                    </div>
                </br>
                    
                <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert-forgot">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    </br>
                   
                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Email address</label>

                        <input type="email" id="forgotemail" name="email" class="spectrum-Textfield spectrum-Textfield--quiet " 
                           onkeyup ="formforgot()">
                           <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="forgotI"></i>
                        <div class="error" id="forgotemail-error"></div>
                    </div>
                   
                        
                        <div class="field button-field">
                            
                            <button type="submit"  name="check-email"  class="btn btn-dark">Next</button>
                          
                        </div>

                      
                    </form>

                  
                </div>

              

            </div>
        </section>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>