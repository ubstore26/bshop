
let nav = document.querySelector(".nav-menu");
let navbar = document.querySelector(".nb_logged_out_nav--nav--Td2RG");

    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
        navbar.classList.add("Hideborder");
        dropLang.classList.add("Hidelanguage");
     
       
      }else {
        nav.classList.remove("sticky");
        navbar.classList.remove("Hideborder");
      
      }
    }
//nav on mobile

const navOpen = () => {
    const openMobilebtn = document.querySelector(".menu-btn");
    const openMobilenav = document.querySelector(".nav-menu");
    const openMobilenavLink = document.querySelectorAll(".nav-menu a");
  
    openMobilebtn.addEventListener("click", () => {
        openMobilenav.classList.toggle("show");
  
      openMobilebtn.classList.toggle('active')
      
      openMobilebtn.classList.toggle("toggle");
    });
    //
  };
  
  navOpen();

//category on mobile


const PCLanguage = () => {

  const btnLanguage = document.querySelector(".dropdownlanguage");
  const OpenLanguage = document.querySelector(".Language");
  const LanguageLink = document.querySelectorAll(".Language a");

  const minicaret = document.querySelector(".minicaret");

   btnLanguage.addEventListener("click", () => {

     OpenLanguage.classList.toggle("show");
     
      minicaret.classList.toggle("change");
      
     btnLanguage.classList.toggle("toggle");
  
    
     LanguageLink.addEventListener("click", () => {
       
       
       LanguageLink.classList.add("isactive");
       
     });
       
     
  });
   
   
  
  };
  
  PCLanguage();

 


//search form js
const dropdownBtn = document.getElementById("btn");
const dropdownMenuOpen = document.getElementById("dropdown");




// Toggle dropdown function
const toggleDropdown = function () {
  dropdownMenuOpen.classList.toggle("show");
  
};


// Toggle dropdown open/close when dropdown button is clicked
dropdownBtn.addEventListener("click", function (e) {
  e.stopPropagation();
  toggleDropdown();
});

// Close dropdown when dom element is clicked
dropdownBtn.documentElement.addEventListener("click", function (e) {
  if (dropdownMenuOpen.classList.contains()) {
    toggleDropdown();
  }
}); //close form search




const contactbtnOpen = () => {
  const contactbtn = document.querySelector(".contact_btn");
  const contactOpen = document.querySelector(".contact");
  const contact = document.querySelectorAll(".contact a");



  contactbtn.addEventListener("click", () => {

    contactOpen.classList.toggle("show");
   
    
    contactbtn.classList.toggle("toggle");


  });
  contactOpen();//close menu products on mobile

};


