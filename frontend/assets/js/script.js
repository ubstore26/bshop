

"users"

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
 
 

     
 // Toggle dropdown function open translate
 


 
 const OpenLanguage = () => {

  const btnLanguage = document.querySelector(".btnlanguage");
  const OpenLanguage = document.querySelector(".Language-menu");
  const LanguageLink = document.querySelectorAll(".Language-menu a");

  const minicaret = document.querySelector(".minicaret");

   btnLanguage.addEventListener("click", () => {

     OpenLanguage.classList.toggle("active");
     
      minicaret.classList.toggle("change");
      
     btnLanguage.classList.toggle("toggle");
  
    
     LanguageLink.addEventListener("click", () => {
       
       
       LanguageLink.classList.add("isactive");
       
     });
       
     
  });
   
   
  
  };
  
  OpenLanguage();






 




//close form nav on mobile 






 //function invalid input for sign up form
 function validataform(){
 
 
   const username = document.getElementById('username').value;
   const email = document.getElementById('email').value;
   const password = document.getElementById('password').value;
   const password2 = document.getElementById('password2').value;
 
  
   document.getElementById('username-error').innerHTML ="";
   document.getElementById('email-error').innerHTML ="";
   document.getElementById('pass-error').innerHTML = "";
   document.getElementById('pass2-error').innerHTML = "";
  
   
   let isvalid = true;
   
 
 
 
   if (username === ""){
     document.getElementById('username-error').innerHTML ="Please  enter your name.";
     document.getElementById('username').classList.add('error');
     document.getElementById('errorI_name').classList.add('active');
     
     isvalid = false;
 
   }
   else{
     document.getElementById('username-error').innerHTML ="";
     document.getElementById('username').classList.add('success');
     document.getElementById('username').classList.remove('error');
     document.getElementById('errorI_name').classList.remove('active');
     
     isvalid = true
   }
 
 
 
   if (email === ""){
     document.getElementById('email-error').innerHTML ="Please  enter your email address.";
     document.getElementById('email').classList.add('error');
    
     document.getElementById('errorI_email').classList.add('active');
     isvalid = false;
 
   }
   else{
     document.getElementById('email-error').innerHTML ="";
     document.getElementById('email').classList.add('success');
     document.getElementById('email').classList.remove('error');
     document.getElementById('errorI_email').classList.remove('active');
    
     isvalid = true
   }
 
   if (password === ""){
     document.getElementById('pass-error').innerHTML ="Please enter your password.";
     document.getElementById('password').classList.add('error');
     
     document.getElementById('errorI_pass').classList.add('active');
     isvalid = false;
   }
   else{
     document.getElementById('pass-error').innerHTML ="";
     document.getElementById('password').classList.add('success');
     document.getElementById('password').classList.remove('error');

     document.getElementById('errorI_pass').classList.remove('active');

     isvalid = true
   }
 
 
   if (password2 === ""){
     document.getElementById('pass2-error').innerHTML ="Please confirm your password.";
     document.getElementById('password2').classList.add('error');
    
     document.getElementById('errorI_pass2').classList.add('active');
     isvalid = false;
   }
   else{
     document.getElementById('pass2-error').innerHTML ="";
     document.getElementById('password2').classList.add('success');
     document.getElementById('password2').classList.remove('error');
     document.getElementById('errorI_pass2').classList.remove('active');

     isvalid = true
   }
 
 
 
 
 
   return isvalid;
   
   }//close form sign up 
 
 
 
 
 
 
 
   // invalidate form login
function validataformLogin() {
  
  const logemail = document.getElementById('logemail').value;
     
  const logpassword = document.getElementById('logpassword').value;


  const btn = document.getElementById('disable');
  
  document.getElementById('errorI');
 document.getElementById('error-i');
 document.getElementById("ErrorLabel").insertAdjacentText;
  
  document.getElementById('logemail-error').innerHTML = "";
     
  document.getElementById('logPass-error').innerHTML = "";
  
 
  let isvalid = true;




  if (logemail ===""){
     document.getElementById('logemail-error').innerHTML ="Please enter your email address.";
    document.getElementById('logemail').classList.add('error');
   
     document.getElementById('errorI').classList.add('active');
    

     isvalid = false;
   }else{
     document.getElementById('logemail-error').innerHTML = "";
     
     document.getElementById('logemail').classList.add('success');
 
     document.getElementById('logemail').classList.remove('error');
    document.getElementById('errorI').classList.remove('active');
    
    isvalid = true;
   }
 
 
   if (logpassword ===""){
     document.getElementById('logPass-error').innerHTML = "Please enter your password.";
     document.getElementById('error-i').classList.add('active');
     document.getElementById('logpassword').classList.add('error');
     isvalid = false;
   }
   else{
     document.getElementById('logPass-error').innerHTML = "";
     
     document.getElementById('logpassword').classList.add('success');
 
     document.getElementById('logpassword').classList.remove('error');
     document.getElementById('error-i').classList.remove('active');
     
     isvalid = true;
   }
    return isvalid;
   }
 
 
 
   //invalidata form forgot password
   function formforgot(){
 
     const forgotemail = document.getElementById('forgotemail').value;
     
   
     document.getElementById('forgotemail-error').innerHTML ="";
     
    
   let isvalid = true;
 
   if(forgotemail ===""){
 
     document.getElementById('forgotemail-error').innerHTML = "Please enter your email address.";
     
     document.getElementById('forgotemail').classList.add('error');
     document.getElementById('forgotI').classList.add('active');

      isvalid = false;
   }
   else{
     document.getElementById('forgotemail-error').innerHTML = "";
     
     document.getElementById('forgotemail').classList.remove('error');
 
     document.getElementById('forgotemail').classList.add('success');
     document.getElementById('forgotI').classList.remove('active'),
     isvalid = true;
   }
     return isvalid;
 
   }//close formforgot
 
 
   // open form verify invalid 
   function formverify(){
 
      const numberVerify = document.getElementById('number-verify').value;
 
      document.getElementById('numberVerify-error').innerHTML ="";
 
 
 let isvalid = true;
 
 
 if(numberVerify ===""){
 
   document.getElementById('numberVerify-error').innerHTML = "Please enter your  code.";
   
   document.getElementById('number-verify').classList.add('error');
   document.getElementById('errorI-verify').classList.add('active');
    isvalid = false;
 
 }else{
   document.getElementById('number-verify').classList.add('success');
 
   document.getElementById('number-verify').classList.remove('error');
   document.getElementById('errorI-verify').classList.remove('active');
 
   isvalid = true;
 
 
 }
 
   return isvalid;
 
   }//CLOSE
 
 
 
   // open form valid reset password
   function formverifyReset(){
 
    const numberVerify2 = document.getElementById('numberVerify2').value;
 
     const numberVerify2Error = document.getElementById('numberVerify2-error').innerHTML = "";
     
 
    let isvalid = true;
 
 
 
  if(numberVerify2 ===""){
 
   document.getElementById('numberVerify2-error').innerHTML = "Please enter your code.";
    document.getElementById('numberVerify2').classList.add('error');
    document.getElementById('errorI-resetPass').classList.add('active');
   isvalid = false;
 
 
  } else {
   
    document.getElementById('numberVerify2').classList.remove('error');
    document.getElementById('errorI-resetPass').classList.remove('active');
    isvalid = true;
  }
     
 
 
   return isvalid;
   
   }//close form reset password
 
 
   //form change password valid
   function formChangepass(){
 
   
     const changePass = document.getElementById('changePass').value;
 
     const changePass2 = document.getElementById('changePass2').value;
 
      //if input have value hide error
     document.getElementById('changePass-error').innerHTML = "";
 
     document.getElementById('changePass2-error').innerHTML = "";
    
     let isvalid = true;
 
 
     if(changePass ===""){
 
       document.getElementById('changePass-error').innerHTML = "Please enter your new password.";
 
       document.getElementById('changePass').classList.add('error');
       document.getElementById('error-iChangepass').classList.add('active');
       isvalid = false;
 
     }else{
       document.getElementById('changePass').classList.add('success');
 
       document.getElementById('changePass').classList.remove('error');
       document.getElementById('error-iChangepass').classList.remove('active');
       isvalid = true
     }
 
     if(changePass2 ===""){
 
       document.getElementById('changePass2-error').innerHTML = "Please confirm your new password.";
 
       document.getElementById('changePass2').classList.add('error');

       document.getElementById('error-iChangepass2').classList.add('active');

       isvalid = false;
 
     }else{
       document.getElementById('changePass2').classList.add('success');
 
       document.getElementById('changePass2').classList.remove('error');
       document.getElementById('error-iChangepass2').classList.remove('active');
       isvalid = true
     }
     
     
     return isvalid;
 
   }//close form change password
  

//form search
 
 
function formSearch() {
   
  let btnClearText = document.getElementById('btnClearText');
  let formSearch = document.getElementById('formSearch').value;
  
  let invalid = true;
  
  if (formSearch === "") {
  
    document.getElementById('btnClearText').classList.remove('active');

    invalid = false;

  } else {
    document.getElementById('btnClearText').classList.add('active');
    invalid = true;
}

  return invalid;
}//close
 

// form search clear text
function Cleartext() {
  // access input field
  let formSearch = document.getElementById('formSearch');
  let btnClearText = document.getElementById('btnClearText');
   
  let Cleartext = true;

  if (formSearch.value = "") {
    document.getElementById('btnClearText').classList.add('active');
    Cleartext = false;

  } else {
    document.getElementById('btnClearText').classList.remove('active');
    Cleartext = true;
  }
  return Cleartext;
}//close



