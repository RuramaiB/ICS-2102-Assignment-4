function validateForm() {
    let nom = document.forms["myForm"]["name"].value;
    let num = document.forms["myForm"]["number"].value;
    let email = document.forms["myForm"]["email"].value;
    let enquiry = document.forms["myForm"]["enquiry"].value;
    if (nom == "") {
      alert("Name must be filled out");
      return false;
    }
    if(num == ""){
        alert("number is required");
        return false;
    }
    if(isNaN(num) == true ){
        alert("The value entered is not a number");
        return false;
    }
    if(email == ""){
        alert("Email must be filled out");
        return false;
    }
    if(enquiry == "" || enquiry == NULL){
        alert("Enquiry is required");
        return false;
    }
  }