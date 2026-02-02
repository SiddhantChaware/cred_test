<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login Page</title>
</head>

<body>

<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if(isset($_POST['login'])) {
    if($username == 'Robin' && $password == '1234') {
        session_start();
        $_SESSION['activeUser'] = $username;
        header('Location:dashboard.php');
        exit();
    } else {
        echo "<script>alert('Wrong')</script>";
    }
}
?>

<div class="container mt-4">
    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>

        <!-- Updated password field -->
        <div class="mb-3">
            <label class="form-label">Password:</label>

            <div class="input-group">
                <input type="password" name="password" id="password" class="form-control">

                <button type="button"
                        class="btn btn-outline-secondary"
                        onclick="togglePassword(this)">
                        Show
                </button>
            </div>
        </div>

        <div class="mb-4 float-end">
            Don't have an account?
            <a href="registration.php">Register Here</a>
        </div>

        <button type="submit" name="login" class="btn btn-primary mt-4">
            Submit
        </button>

    </form>
</div>

<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200" class="card-img-top">

        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Password toggle script -->
<script>
function togglePassword(button) {
    const pass = document.getElementById("password");

    if (pass.type === "password") {
        pass.type = "text";
        button.innerText = "Hide";
    } else {
        pass.type = "password";
        button.innerText = "Show";
    }
}
</script>

</body>
</html>
