<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GIC PAYMENT</title>
</head>
<body>
  <div id="preloader"></div>
  <div class="content">
    <div class="text pt-5">Login</div>
    <form onsubmit="onSendOTPClick(event)">
      <div class="field">
        <input type="text" id="sign_in_customer_id" name="customerId" class="form-control" aria-label="Customer Id" required />
        <span class="fas fa-user"></span>
        <label>Customer ID(Enter 9 digits customer id)</label>
      </div>
      <div class="field">
        <input type="password" id="sign_in_mobile" name="mobile" inputmode="numeric" class="form-control" aria-label="mobile" required />
        <span class="fas fa-lock"></span>
        <label>Mobile Number</label>
      </div>
      <div class="forgot-pass">
        <a href="#">Forgot Password?</a>
      </div>
      <button onclick="location.href='login2.php'" type="submit">Get OTP</button>
      <div class="sign-up">
        New member?
        <a href="https://www.google.com/">Sign Here!</a>
      </div>
    </form>
  </div>
</body>
<style>
  @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

  * {
    margin: 0;
    padding: 0;
    /* user-select: none; */
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  html,
  body {
    height: 100%;
  }

  body {
    display: grid;
    place-items: center;
    background: #dde1e7;
    text-align: center;
  }

  .content {
    width: 478px;
    padding: 40px 30px;
    background: #dde1e7;
    border-radius: 10px;
    box-shadow: -3px -3px 7px #ffffff73, 2px 2px 5px rgba(94, 104, 121, 0.288);
  }

  .content .text {
    font-size: 33px;
    font-weight: 600;
    margin-bottom: 35px;
    color: #595959;
  }

  .field {
    height: 50px;
    width: 100%;
    display: flex;
    position: relative;
  }

  .field:nth-child(2) {
    margin-top: 20px;
  }

  .field input {
    height: 100%;
    width: 90%;
    margin-left: 5%;
    text-indent: 20px;
    outline: none;
    border: none;
    font-size: 18px;
    background: #dde1e7;
    color: #595959;
    border-radius: 25px;
    box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #ffffff73;
  }

  .field input:focus {
    box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #ffffff73;
  }

  .field span {
    position: absolute;
    color: #595959;
    width: 50px;
    line-height: 50px;
  }

  .field label {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 45px;
    pointer-events: none;
    color: #666666;
  }

  .field input:valid~label {
    opacity: 0;
  }

  .forgot-pass {
    text-align: left;
    margin: 10px 0 10px 5px;
  }

  .forgot-pass a {
    font-size: 16px;
    margin-left: 35%;
    color: #3498db;
    text-decoration: none;
  }

  .forgot-pass:hover a {
    text-decoration: underline;
  }

  button {
    margin: 15px 0;
    width: 40%;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    font-weight: 600;
    background: #dde1e7;
    border-radius: 25px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #595959;
    box-shadow: 2px 2px 5px #babecc, -5px -5px 10px #ffffff73;
  }

  button:focus {
    color: #3498db;
    box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #ffffff73;
  }

  .sign-up {
    margin: 10px 0;
    color: #595959;
    font-size: 16px;
  }

  .sign-up a {
    color: #3498db;
    text-decoration: none;
  }

  .sign-up a:hover {
    text-decoration: underline;
  }
</style>
<script src="utility.js"></script>
<script src="sign_in_script.js"></script>
</html>