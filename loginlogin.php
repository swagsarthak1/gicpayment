<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>GIC Payment</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #E0FFFF;
            background: url("banner 05.jpg") center/cover no-repeat fixed;
        }

        .background {
            width: 430px;
            height: auto;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        form {
            height: 500px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.73);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 80%;
            border-radius: 10px;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            /* padding: 50px 35px; */
            color: blue;
            padding-top: 40px;
            letter-spacing: 1px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #2e3192;
            outline: none;
            border: none;
        }

        input {
            background-color: rgba(255, 255, 255, 0.77);
            border-radius: 15px;
            font-weight: 300;
            margin-top: 50px;
            margin-left: 30px;
            letter-spacing: 2px;
        }

        #customOption {
            height: 40px;
            padding-left: 10px;
            margin-top: -29px;
            width: 150px;
            margin-left: 190px;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            position: fixed;
            margin-top: 50px;
            width: 40%;
            background-color: #ffffff;
            color: #2e3192;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 15px;
            cursor: pointer;
            margin-left: 30px;
            bottom: 100px;
        }
    </style>
    <script>
        function toggleCustomOption() {
            var customOption = document.getElementById("customOption");
            if (document.getElementById("option3").checked) {
                customOption.style.display = "block";
            } else {
                customOption.style.display = "none";
            }
        }
    </script>
    <style>
        #customOption {
            display: none;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <!-- class="VISUALLY HIDDEN" -->
    <div class="borris">
        <form method="post" action="result.php">
            <h3><span style="padding-left:35px">Select Payment Option</span></h3>
            <input type="radio" id="option1" name="options" value="₹ 10,000" onclick="toggleCustomOption()">
            <label for="option1">₹ 10,000</label><br>
            <input type="radio" id="option2" name="options" value="₹ 1000" onclick="toggleCustomOption()">
            <label for="option2">₹ 1000</label><br>
            <input type="radio" id="option3" name="options" value="Other" onclick="toggleCustomOption()">
            <label for="option3">Custom Amount</label>
            <input type="number" id="customOption" name="customOption" min="1" max="10000">
            <span id="input-error" style="color: red;"></span>
            <br>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>