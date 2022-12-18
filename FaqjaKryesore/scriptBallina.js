const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");


      //js kodi per me shfaq edhe me fsheh passwordin
      pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwfield =>{
                if(pwfield.type === "password"){
                    pwfield.type = "text";
                }else{
                    pwfield.type = "password";
                }
            })
        })
      })

      //JS me shfaq login edhe singup 
      signUp.addEventListener("click", ()=> {
        container.classList.add("active");
      });
      login.addEventListener("click", ()=> {
        container.classList.remove("active");
      });



    //JS kodi me shfaq signup dhe login form
    signUp.addEventListener("click", () => {
        registration.classList.add("active");
    });

    login.addEventListener("click", () => {
        registration.classList.remove("active");
    });



    // Validimi i fushave
   var emailError = document.getElementById("email_error");
   var passwordError = document.getElementById("pass_error");

   function validateEmail(){
    var email = document.getElementById('email').value;

    if(email.length == 0){
      emailError.innerHTML =  "<span style='color: red'>Gjatësia e email nuk mund të jetë zero !</span>";
        return false;
    }
    if(!email.match('@')){
      emailError.innerHTML =  "<span style='color: red'>Email duhet të përmbaje @ !</span>";
        return false;
    }
    if(!email.endsWith('.net')){
      emailError.innerHTML = "<span style='color: red'>Email duhet të përfundoj me .net</span>"
        return false;
    }
    emailError.innerHTML = "<span style='color: green'>Email është në rregull!</span>";
    return true;
}


function validatePassword(){
  var password = document.getElementById('pass').value;
  
  if(password.length < 8){
    pass_error.innerHTML =  "<span style='color: red'>Fjalëkalimi duhet të jetë minimum 8 karaktere</span>";
      return false;
  }
  

  if(!password.match(/[0-9]/)){
    pass_error.innerHTML = "<span style='color: red'>Fjalëkalimi duhet të përmbajë një numer!</span>";
      return false;
  }

  pass_error.innerHTML = "<span style='color: green'>Fjalëkalimi është në rregull!</span>";
  return true;
}




//Validimi i regjistrimit
var RnameError = document.getElementById("Rname_error");
var RemailError = document.getElementById("Remail_error");
var passwordError = document.getElementById("RPass_error");
var CpasswordError = document.getElementById("CRPass_error");

function validateNameR(){
  var name = document.getElementById('nameR').value;


  if(name.length == 0){
    RnameError.innerHTML = "<span style='color: red'>Emri duhet të plotësohet !</span>";
      return false;
  }
  if(name.match(' ')){
    RnameError.innerHTML = "<span style='color: red'>Emri duhet të jetë i plotë !</span>";
      return false;
  }
  RnameError.innerHTML= "<span style='color: green'>Emri është në rregull!</span>";
  return true;
}



function validateEmailR(){
    var emailR = document.getElementById('emailR').value;
  
    if(emailR.length == 0){
      RemailError.innerHTML =  "<span style='color: red'>Gjatësia e email nuk mund të jetë zero !</span>";
        return false;
    }
    if(!emailR.match('@')){
      RemailError.innerHTML =  "<span style='color: red'>Email duhet të përmbaje @ !</span>";
        return false;
    }
    if(!emailR.endsWith('.net')){
      RemailError.innerHTML = "<span style='color: red'>Email duhet të përfundoj me .net</span>"
        return false;
    }
    RemailError.innerHTML = "<span style='color: green'>Email është në rregull!</span>";
    return true;
}
  
  
  function validatePasswordR(){
    var passwordR = document.getElementById('passwordR').value;
    
    if(passwordR.length < 8){
      RPass_error.innerHTML =  "<span style='color: red'>Fjalëkalimi duhet të jetë minimum 8 karaktere</span>";
        return false;
    }
    
    if(!passwordR.match(/[0-9]/)){
      RPass_error.innerHTML = "<span style='color: red'>Fjalëkalimi duhet të përmbajë një numer!</span>";
        return false;
    }
  
    RPass_error.innerHTML = "<span style='color: green'>Fjalëkalimi është në rregull!</span>";
    return true;
  }


  

function validateCPasswordR(){
    var passwordR = document.getElementById('passwordR').value;
    var passwordCR = document.getElementById('passwordC').value;
    
    if(passwordCR.length < 8){
      CpasswordError.innerHTML =  "<span style='color: red'>Fjalëkalimi duhet të jetë minimum 8 karaktere</span>";
        return false;
    }
    
    if(!passwordCR.match(/[0-9]/)){
      CpasswordError.innerHTML = "<span style='color: red'>Fjalëkalimi duhet të përmbajë një numer!</span>";
        return false;
    }
  
    if(passwordCR != passwordR){
      CpasswordError.innerHTML = "<span style='color: red'>Fjalëkalimi nuk përputhet!</span>";
      return false;
    }
  
    CpasswordError.innerHTML = "<span style='color: green'>Fjalëkalimi është në rregull!</span>";
    return true;
  }
  
  
  function validateButtonL(){
    if(!validateEmail() || !validatePassword()){
      alert("Ju nuk keni plotësuar si duhet fushat e Login Form. Ju lutem rishikoni të dhënat !");
    }else{
      location.href = ("..//LoginSuccess/login.html");
    }
  }
  
  
  
  function validateButtonR(){
    if(!validateNameR() || !validateEmailR() || !validatePasswordR() || !validateCPasswordR()){
      alert("Ju nuk keni plotësuar si duhet fushat e Regjistrimit. Ju lutem rishikoni të dhënat !");
    }else{
      location.href = ("..//LoginSuccess/login.html");
    }
  }