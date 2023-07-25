<!DOCTYPE html>
<html>

<head>
    <title>Lupa Password</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fe/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="EmaPass">
        <div class="container">
            <div class="cardStyle">
                <form action="" method="post" name="signupForm" id="signupForm">
                    <img src="assets/fe/img/Logoo.png" id="signupLogo" />

                    <h2 class="formTitle">
                        Lupa Password?
                        <p>Forgot your password?
                            Email address you use to log in to your account
                            We'll send you an email with instructions to choose a new password.</p>
                    </h2>



                    <div class="inputDiv">
                        <label class="inputLabel" for="password">Masukan Email</label>
                        <input type="password" id="password" name="password" required>
                    </div>


                    <div class="buttonWrapper">
                        <button type="submit" id="submitButton" onclick="validateSignupForm()"
                            class="submitButton pure-button pure-button-primary">
                            <span>Melanjutkan</span>
                            <span id="loader"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirmPassword");

        document.getElementById('signupLogo');
        enableSubmitButton();

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Password tidak sesuai");
                return false;
            } else {
                confirm_password.setCustomValidity('');
                return true;
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        function enableSubmitButton() {
            document.getElementById('submitButton').disabled = false;
            document.getElementById('loader').style.display = 'none';
        }

        function disableSubmitButton() {
            document.getElementById('submitButton').disabled = true;
            document.getElementById('loader').style.display = 'unset';
        }

        function validateSignupForm() {
            var form = document.getElementById('signupForm');

            for (var i = 0; i < form.elements.length; i++) {
                if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                    console.log('There are some required fields!');
                    return false;
                }
            }

            if (!validatePassword()) {
                return false;
            }

            onSignup();
        }

        function onSignup() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                disableSubmitButton();

                if (this.readyState == 4 && this.status == 200) {
                    enableSubmitButton();
                }
                else {
                    console.log('AJAX call failed!');
                    setTimeout(function () {
                        enableSubmitButton();
                    }, 1000);
                }

            };

            xhttp.open("GET", "ajax_info.txt", true);
            xhttp.send();
        }
    </script>
</body>

</html>