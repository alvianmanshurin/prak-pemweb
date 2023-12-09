function validateForm() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var telepon = document.getElementById("telepon").value;
  
    // Validasi nama
    if (nama == "") {
      alert("Nama harus diisi");
      return false;
    }
  
    // Validasi email
    if (!email.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/)) {
      alert("Email tidak valid");
      return false;
    }
  
    // Validasi telepon
    if (!telepon.match(/^[0-9]{11,13}$/)) {
      alert("Telepon tidak valid");
      return false;
    }
  
    return true;
  }