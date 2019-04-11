<?php
session_start();

if ($_SESSION['login']) {
    header('location: message.php');
}

require './DB.php';

$title = 'Rejuvin8';

require './partials/_header.php';

?>

  <div class="container signin-container">
    
    <form class="form-signin" action="login.php" method=post>
      <div class="text-center mb-4">
        <img class="loginForm__logo mb-4" src="./img/logo.png" alt="brand logo">
        <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Rejuvin8 <?= date('Y'); ?></p>
    </form>
  </div>

<?php

require './partials/_footer.php';