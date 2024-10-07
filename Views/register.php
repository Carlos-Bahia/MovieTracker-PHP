<?php/** @var string|null $email */if(isset($_SESSION['errorMessage'])) {    $errorToast = $_SESSION['errorMessage'];    unset($_SESSION['errorMessage']);}?><!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>The Movie Tracker - Register</title>    <link rel="stylesheet" href="/assets/css/register.css">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css"></head><body><div class="register-container">    <img src="/assets/img/logo.svg" alt="The Movie Tracker Logo" class="logo">    <form class="register-form" method="post">        <input type="email" placeholder="Email Address" name="email" value="<?php if ($email) { echo htmlspecialchars($email); } ?>" required>        <input type="password" placeholder="Password" name="password" required>        <input type="password" placeholder="Confirm Password" name="password-confirmation" required>        <button type="submit">Register</button>    </form>    <p>Already have an account? <a href="/login">Login</a></p></div><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script src="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.js"></script><script>    <?php if (isset($errorToast)): ?>    toastr.error('<?php echo addslashes($errorToast); ?>', 'Erro');    <?php endif; ?></script></body></html>