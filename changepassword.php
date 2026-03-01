<?php 
require_once 'admin/inc/users.php';

require_once 'backend/shared/header.php';

require_once 'backend/shared/changepassnav.php';
 
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<link rel="stylesheet" type="text/css" href="./frontend/assets/css/login.css">


<body>


<section class="container">
            <div class="form">
                <div class="form-content">
                
                

                    <form action="changepassword.php" method="POST" autocomplete="off"
                       onsubmit="return formChangepass()">
                   
                
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
                    if(count($errors) > 0){
                        ?>
                        <div class="alert-changepass">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                  
                    <br>
                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">New password</label>
                        <input  type="password" name="password" id="changePass"  
                        class="spectrum-Textfield spectrum-Textfield--quiet"   onkeyup ="formChangepass()">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true" id="error-iChangepass"></i>
                        <div class="error" id="changePass-error"></div>
                        </div>

                        <div class="field input-field">
                        <label class="spectrum-FieldLabel" id="react-spectrum-81" 
                           
                           for="EmailPage-EmailField">Confirm password</label>
                        <input type="password" name="cpassword" id="changePass2" 
                        class="spectrum-Textfield spectrum-Textfield--quiet"   onkeyup ="formChangepass()">

                        <i class="fa fa-exclamation-triangle" aria-hidden="true" id="error-iChangepass2"></i>
                        <div class="error" id="changePass2-error"></div>
                        </div>

                        
                       
                        <div class="field button-field">
                           
                            <button  type="submit"  name="change-password"
                             class="btn btn-dark">Change</button> 
                          
                        </div>
                    </form>
                    
                </div>

              

            </div>
        </section>

        <script src="./frontend/assets/js/script.js"></script>
</body>
</html>

