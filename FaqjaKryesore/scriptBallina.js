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

