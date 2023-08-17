function validation() {

    let firstname= document.getElementById("firstname").value;
    let lastname = document.getElementById("lastname").value;
    let dob = document.getElementById("dob").value;
    let Address = document.getElementById("Address").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    
  
  
    if (firstname == "") {
      document.getElementById("firstnameErr").innerHTML =
        "Firstname must be filled out";
      return false;
    } else if (lastname == "") {
      document.getElementById("lastnameErr").innerHTML =
        "Lastname must be filled out";
      return false;
    }else if (dob == "") {
        document.getElementById("dobErr").innerHTML =
          "Date of birth must be filled out";
        return false;
      }else if (Address == "") {
        document.getElementById("AddressErr").innerHTML =
          "address must be filled out";
        return false;
      }else if (phone == "") {
        document.getElementById("phoneErr").innerHTML =
          "Phone number must be filled out";
        return false;
      }else if (email == "") {
        document.getElementById("emialErr").innerHTML =
          "Email must be filled out";
        return false;
      }else if (username == "") {
        document.getElementById("usernameErr").innerHTML =
          "Username must be filled out";
        return false;
      }else if (password == "") {
        document.getElementById("passwordErr").innerHTML =
          "Password must be filled out";
        return false;
      }
    return true;
  }
  