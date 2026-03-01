

<?php 
require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/signupnav.php';
 
 ?>

<!doctype html>
<html lang="en">
<head>
<title>nb store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">
  


  <section class="container">
            <div class="form">
                <div class="form-content">
           
               
                   <form action="signup.php" method="POST"   onsubmit="return validataform()">
                   <h4>Sign up with email</h4>
                  
                    <div class="form-link">
                        <span>Already have an account? <a href="login.php" class="link signup-link">Sign in</a></span>
                    </div>
                </br>
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert-register">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                      
                       
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <div class="alert-register">

                                    <?php echo $showerror; ?>
                                    
                            </div>
                                <?php
                            }
                            ?>
                     
                        <?php
                    }
                    ?>
                    </br>
                    
                    <div class="field input-field">

                    
                    <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Username</label>
                    <input type="name" name="name" id="username"class="spectrum-Textfield spectrum-Textfield--quiet " 
                      onkeyup="validataform()" >
                      <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="errorI_name"></i>
                    <div class="error" id="username-error"></div>
                   </div>

                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Email address</label>
                        <input type="email" name="email" id="email" class="spectrum-Textfield spectrum-Textfield--quiet "
                          value="<?php echo $email ?>" onkeyup="validataform()">
                          <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="errorI_email"></i>
                        <div class="error" id="email-error"></div>
                        </div>

                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Password</label>
                        <input type="password" name="password" id="password"  
                        class="spectrum-Textfield spectrum-Textfield--quiet "  onkeyup="validataform()">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="errorI_pass"></i>
                        <div class="error" id="pass-error"></div>
                        </div>
                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Confirm password</label>
                        <input type="password" name="cpassword"  id="password2" 
                        class="spectrum-Textfield spectrum-Textfield--quiet "  onkeyup="validataform()">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="errorI_pass2"></i>
                        <div class="error" id="pass2-error"></div>
                        </div>
                        
                        <div class="field button-field">
                            <button  type="submit" name="signup"  class="btn btn-dark">Sign Up</button> 
                           
                        </div>
                        
  
                    </form>




                </div>
            </div>
        </section>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>

    




           
       