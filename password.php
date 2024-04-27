<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Strength Indicator CSS</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    #password-input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    #password-strength {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        font-weight: bold;
        text-align: center;
    }
    .weak {
        background-color: #ffcccc;
        color: #cc0000;
    }
    .medium {
        background-color: #ffffcc;
        color: #666600;
    }
    .strong {
        background-color: #ccffcc;
        color: #006600;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Password Strength Indicator</h2>
        <input type="password" id="password-input" oninput="checkPasswordStrength(this.value)" placeholder="Enter password...">
        <div id="password-strength"></div>
    </div>

    <script>
        function checkPasswordStrength(password) {
            var strength = 0;

            if (password.length >= 8) {
                strength += 1;
            }
            if (password.match(/[a-z]+/)) {
                strength += 1;
            }
            if (password.match(/[A-Z]+/)) {
                strength += 1;
            }
            if (password.match(/[0-9]+/)) {
                strength += 1;
            }
            if (password.match(/[$&+,:;=?@#|'<>.^*()%!-]+/)) {
                strength += 1;
            }

            var indicator = document.getElementById("password-strength");
            if (strength <= 2) {
                indicator.textContent = "Weak";
                indicator.className = "weak";
            } else if (strength <= 4) {
                indicator.textContent = "Medium";
                indicator.className = "medium";
            } else {
                indicator.textContent = "Strong";
                indicator.className = "strong";
            }
        }
    </script>
</body>
</html>