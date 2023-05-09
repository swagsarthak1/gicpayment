function getFileNumber() {
  return document.getElementById("index_verify_file_id").value;
}
function getUserInfo() {
  var userInfo = sessionStorage.getItem("userInfo");
  if (userInfo == null || userInfo == undefined || userInfo == {}) {
    location.href = location.origin + CONSTANTS.SIGN_IN_PAGE;
    return;
  }
  return JSON.parse(userInfo);
}

function saveUserInfo() {
  var userInfo = sessionStorage.getItem("userInfo");
  if (userInfo == null || userInfo == undefined || userInfo == {}) {
    location.href = location.origin + CONSTANTS.SIGN_IN_PAGE;
    return;
  }
  return JSON.parse(userInfo);
}

function onFileIdSubmit(event) {
  event.preventDefault();
  console.log(event);
  if (
    document.getElementById("index_verify_file_btn").innerText ==
    "Generate New Certificate"
  ) {
    customAlertWithCallBack(MESSAGES.GENERATE_NEW_PDF_WARNING, () => logout());
  } else {
    validateFileNumberBySOACert();
  }
}