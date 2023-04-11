function validateForm() {
    var inputs = document.getElementsByTagName("input");
    var isFormValid = true;
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].value == "") {
        isFormValid = false;
        break;
      }
    }
    if (!isFormValid) {
      alert("Veuillez remplir tous les champs du formulaire.");
    }
    return isFormValid;
  }
  