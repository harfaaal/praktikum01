  //# sourceURL=pen.js
  function login() {
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if (username == "" || password == "") {
        alert("Username / Password Tidak Boleh Kosong");
        return false;
    }
    else if (password.length < 8) {
        alert("Password Kurang dari 8");
        return false;
    }
    else if (username == "niceprogram" && password == "Sista022") {
        window.location = "jadwal.html";
        return false;
    }
else if (username == "NovalIlham" && password == "noval123") {
        window.location = "jadwal.html";
        return false;
    }
else if (username == "AuliaHarfa" && password == "aulia123") {
        window.location = "jadwal.html";
        return false;
    }
    else if (username == "RendraRidho" && password == "danda123") {
        window.location = "jadwal.html";
  return false;
}
else if (username == "Nurhalimah" && password == "nur12345") {
        window.location = "jadwal.html";
        return false;
    }
else if (username == "MerriUtami" && password == "merri123") {
        window.location = "jadwal.html";
        return false;

    }else{
  alert("Username / Password anda salah");
}
  function load() {
    alert("username : niceprogram & password : Sista022");
}

}
