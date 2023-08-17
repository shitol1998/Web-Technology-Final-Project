function validation() {

    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let Address = document.getElementById("Address").value;
    let roomN = document.getElementById("roomN").value;
  
  
    if (name == "") {
      document.getElementById("nameErr").innerHTML =
        "Name must be filled out";
      return false;
    } else if (phone == "") {
      document.getElementById("phoneErr").innerHTML =
        "Phone Number must be filled out";
      return false;
    }else if (Address == "") {
        document.getElementById("AddressErr").innerHTML =
          "Address must be filled out";
        return false;
    }else if (roomN == "") {
        document.getElementById("roomNErr").innerHTML =
          "Room number must be filled out";
        return false;
    }
    return true;
  }
  