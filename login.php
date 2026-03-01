<?php 
require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/signinnav.php';
 ?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
 
<link rel="stylesheet" type="text/css" href="./frontend/assets/css/nav.css">
   
<link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">

<body oncontextmenu="return false;">


<section class="container">
    
            <div class="form">
                <div class="form-content">
                
                    <form  action="login.php" method="POST"  id="formlogin" onsubmit="return validataformLogin()">
                    <h1>Sign in</h1>
                    
                   
                    
                   
                    <div class="form-link">
                        <span>New user?<a href="signup.php" class="link signup-link"> Create an account </a></span>
                    </div>
                </br>

                <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>


                        
                        <?php
                    }
                    ?>  </br>
                    
                        <div class="field input-field ">
                            <label class="spectrum-FieldLabel" id="ErrorLabel" 
                           
                            for="EmailPage-EmailField">Email address</label>

                            <input type="email"  name="email" id="logemail"
                              class="spectrum-Textfield spectrum-Textfield--quiet " 
                       id="logemail" value="<?php echo  $email ?>" onkeyup="validataformLogin()">
                       <i class="fa fa-exclamation-triangle" aria-hidden="true"  id="errorI"></i>
                         <div class="error" id="logemail-error"></div>

                        </div>

                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Password</label>

                        <input type="password" name="password" id="logpassword"
                           class="spectrum-Textfield spectrum-Textfield--quiet" onkeyup="validataformLogin()">
                           <i class="fa fa-exclamation-triangle" aria-hidden="true" id="error-i"></i>
                        <div class="error" id="logPass-error"></div>
                        </div>

                        
                        <div class="form-link">
                            <a href="forgotpassword.php" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                        <button type="submit" name="login" class="btn btn-dark " id="disable">
                          Sign in</button>
                          
                          
                         
                         
                          
                          
                        </div>
                        
                    </form>


        </form>
</div>
       


            </div>





            

            <script src="./frontend/assets/js/navOpen.js"></script>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>
