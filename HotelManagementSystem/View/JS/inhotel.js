function validation() {

    let hotel = document.getElementById("hotel").value;
    let phone = document.getElementById("phone").value;
    let vacancy= document.getElementById("vacancy").value;
  
  
    if (hotel == "") {
      document.getElementById("hotelErr").innerHTML =
        "Hotelname must be filled out";
      return false;
    } else if (phone == "") {
      document.getElementById("phoneErr").innerHTML =
        "Phone Number must be filled out";
      return false;
    }else if (vacancy == "") {
        document.getElementById("vacancyErr").innerHTML =
          "Room Vacancy must be filled out";
        return false;
    }
    return true;
  }
  