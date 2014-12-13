  function checkForm(form)
  {
    
    // validation fails if the input is blank
    if(form.username.value == "") {
       username.style.background = "red";
      alert("Error: Username field is empty!");
      form.username.focus();
      return false;
    }
      if (form.password.value ==""){
          password.style.background = "red";
          alert("Error: Password field is empty!");
          form.password.focus();
          return false;          
      }
      
      
      
  }
   

