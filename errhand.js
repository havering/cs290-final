function checkForm(form)
  {
    if(this.name.value == "") {
      alert("Please enter your name in the form");
      this.name.focus();
      return false;
    }
    if(this.username.value == "") {
      alert("Please enter a username in the form");
      this.username.focus();
      return false;
    }
    if(this.password.value == "") {
      alert("Please enter an a password in the form");
      this.password.focus();
      return false;
    }
  }