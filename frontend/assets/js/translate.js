  
  
  // custom language select from google translate:
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({//pageLanguage: 'en', 
  includedLanguages: 'en,ko,km,fr,zh-CN,ja,th,vi', 
  layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-35158556-1',
   autoDisplay: false},
    'google_translate_element');
  }
  


      // class lang select get value:
      function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
          event = document.createEvent('HTMLEvents');
          event.initEvent(eventName, true, true);
          element.dispatchEvent(event);
        } else {
          event = document.createEventObject();
          event.eventType = eventName;
          element.fireEvent('on' + event.eventType, event);
        }
      }
  
      jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);
  
        //alert(jQuery(this).attr('href'));
        window.location = jQuery(this).attr('href');
        location.reload();
      
      

        //The currently selected language is stored in a cookie named googtrans.
        
       function readCookie(name) {
    var c = document.cookie.split('; '),
    cookies = {}, i, C;

    for (i = c.length - 1; i >= 0; i--) {
        C = c[i].split('=');
        cookies[C[0]] = C[1];
     }

     return cookies[name];
}
console.log(readCookie('googtrans'));


    // get the name of last selected language every time.
   
    
    $(document).ready(function(){
      checkChange();
  });
  var currentLang = "";
  function checkChange()
  {
      setTimeout(function(){
          readCookie('googtrans');
      },2000);
  }
  
  function readCookie(name) {
      var c = document.cookie.split('; '),
      cookies = {}, i, C;
  
      for (i = c.length - 1; i >= 0; i--) {
          C = c[i].split('=');
          cookies[C[0]] = C[1];
       }
  
       currentLang = cookies[name];
       console.log(currentLang);
       checkChange();
  }


  function setCookie(key, value, expiry) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
  }
  
  
  //setCookies googtrans
  function googleTranslateElementInit() {
    setCookie('googtrans', '/en/pt',1);
    new google.translate.TranslateElement({
       pageLanguage: 'en'
    }, 'google_translate_element');
}



//get language in menu choose language 





      });