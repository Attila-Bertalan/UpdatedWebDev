function validateForm() {
  //initialise all required values from form
  let name1 = document.forms["frmRegister"]["firstname"].value;

  //validation for ensure only letters are inputted
  let regex0 = /^[a-z,.''-]{2,}$/;

  if (name1 == "") {
    alert("Please enter your Forename.");
    return false;
  } else {
      if (!regex0.test(name1)) {
        alert("You have entered invalid characters, please check your 'First name' and try again.");
        return false;
    }
  }
}