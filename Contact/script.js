
var submitErorr = document.getElementById("submit-error");
var submitErorr2 = document.getElementById("submit-error2");


function validateName(){
    var name = document.getElementById('contact-name').value;


    if(name.length == 0){
        submitErorr.innerHTML = 'Emri duhet të plotësohet !';
        return false;
    }
    if(name.match(' ')){
        submitErorr.innerHTML = 'Emri duhet të jetë i plotë !';
        return false;
    }
    submitErorr.innerHTML= "<span style='color: green'>Emri është në rregull!</span>";
    return true;
}

function validateSurname(){
    var surname = document.getElementById('contact-surname').value;

    if(surname.length == 0){
        submitErorr.innerHTML = 'Mbiemri duhet të plotësohet !';
        return false;
    }
    if(surname.match(' ')){
        submitErorr.innerHTML = 'Mbiemri duhet të jetë i plotë !';
        return false;
    }
    submitErorr.innerHTML = "<span style='color: green'>Mbiemri është në rregull!</span>";
    return true;
}


function validatePhone(){
    var phone = document.getElementById('contact-phone').value;

    if(phone.length == 0){
        submitErorr.innerHTML = 'Nr tel duhet të plotësohet';
        return false
    }
    if(phone.length !== 9){
        submitErorr.innerHTML = 'Nr tel duhet të jetë 9 numra dhe i formes 044...'
        return false;
    }
    if(!phone.match(/^[0-9]{9}$/)){
        submitErorr.innerHTML = 'Shtypni vetëm numra';
        return false;
    }
    submitErorr.innerHTML = "<span style='color: green'>Nr.Tel është në rregull!</span>";
    return true;
}

function validateEmail(){
    var email = document.getElementById('contact-email').value;

    if(email.length == 0){
        submitErorr.innerHTML = 'Email duhet të plotësohet !';
        return false;
    }
    if(!email.match('[a-z]+@([a-z]+\.)+(net|com)')){
        submitErorr.innerHTML = 'Email nuk është valid ! ';
        return false;
    }
    // if(!email.endsWith('.net')){
    //     submitErorr.innerHTML = 'Email duhet të përfundoj me .net';
    //     return false;
    // }
    submitErorr.innerHTML = "<span style='color: green'>Email është në rregull!</span>";
    return true;
}

function validateMessage(){
    var message = document.getElementById('contact-message').value;
    var required = 30;
    var left = required - message.length;

    if(left > 0){
        submitErorr.innerHTML = "Minimumi i karaktereve duhet të jetë 30, ju deri tash keni shtypur: " + message.length;
        return false;
    }

    submitErorr.innerHTML = "<span style='color: green'>Mesazhi është në rregull!</span>";
    return true;
}


function validateForm(){
    if(!validateName() || !validateSurname() ||  !validatePhone() || !validateEmail() || !validateMessage()){
        // submitErorr2.innerHTML = 'Rishikoni të dhënat më lartë ! ';
        alert("Ju nuk keni plotësuar si duhet fushat e kontaktit. Ju lutem rishikoni të dhënat !");
        return false;
    }else{
        location.href = ("..//LoginSuccess/contactValidation.html");
        return true;
    }


}