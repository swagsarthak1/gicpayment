<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIC PAYMENT</title>
</head>
<body>
    <label for="id">Enter 15 Digit File no.:</label>
    <input type="text" id="id" name="id">
    <button type="submit" onclick="makeApiCall()">Submit</button>

    <div id="response"></div>

    <script>
        function makeApiCall() {
            // Get the user input from the form
            var id = document.getElementById("id").value;

            // Make the API call using the user input
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "https://freedomv2web.gichf.com:107/getAccDt/" + id);
            xhr.setRequestHeader("SecurityToken", "DFA083645C094FA89A56BF6DAD3894EC");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display the API response to the user
                    document.getElementById("response").innerHTML = xhr.responseText;
                } else {
                    // Handle any errors that occur
                    document.getElementById("response").innerHTML = "Error: " + xhr.statusText;
                }
            };
            xhr.onerror = function() {
                document.getElementById("response").innerHTML = "Error: " + xhr.statusText;
            };
            xhr.send();
        }
    </script>
</body>
</html>