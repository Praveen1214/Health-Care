function deletePatient(id) {
  if (confirm("Are you sure you want to delete this patient?")) {
      window.location.href = "../PHP/manage_patient.php?action=delete&Patient_id=" + id;
  }
}

function editPatient(id) {
  window.location.href = "manage_patient.php?action=edit&Patient_ID=" + id;
}

function updatePatient(Patient_ID) {
  var first_name = document.getElementById("editFirstname" + Patient_ID).value;
  var last_name = document.getElementById("editLastname" + Patient_ID).value;
  var nic_no = document.getElementById("editNic_No" + Patient_ID).value;
  var email = document.getElementById("editEmail" + Patient_ID).value;
  var mobile_no = document.getElementById("editMobile_No" + Patient_ID).value;
  var user_name = document.getElementById("editUser_Name" + Patient_ID).value;
  var password = document.getElementById("editPassword" + Patient_ID).value;
  var address = document.getElementById("editAddress" + Patient_ID).value;
  window.location.href = "manage_patient.php?action=update&Patient_ID=" + Patient_ID + "&Firstname=" + first_name + "&Lastname=" + last_name + "&Nic_No=" + nic_no + "&Email=" + email + "&Mobile_No=" + mobile_no + "&User_Name=" + user_name + "&Password=" + password + "&Address=" + address;
}
function cancelUpdate() {
  showPatients(0);
}



