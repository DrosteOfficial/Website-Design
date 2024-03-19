<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="cssDlaLogowania.css">

</head>
<body>

<form id="loginForm">
    <h2 style="text-align: center;">Logowanie</h2>
    <input type="text" placeholder="Username" required>
    <input type="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <div class="form-switch">
        <p>Nie masz jeszcze konta? <a href="#" onclick="switchForm('registerForm')">Register</a></p>
    </div>
</form>

<form id="registerForm" style="display: none;">
    <h2 style="text-align: center;">Rejestracja</h2>
    <input type="text" placeholder="Username" required>
    <input type="password" placeholder="Password" required>
    <button type="submit">Register</button>
    <div class="form-switch">
        <p>Zaloguj sie!! <a href="#" onclick="switchForm('loginForm')">Login</a></p>
    </div>
</form>

<script>
    function switchForm(formId) {
        document.getElementById('loginForm').style.display = formId === 'loginForm' ? 'block' : 'none';
        document.getElementById('registerForm').style.display = formId === 'registerForm' ? 'block' : 'none';
    }
</script>

</body>
</html>
