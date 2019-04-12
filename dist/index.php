<?php
// TODO: add flash

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.min.css">
    <title>Rejuvin8</title>
  </head>
  <body>
    <div class="wrapper">
      <form action="admin/insert.php" method="post">
        <input class="form-control" type="name" name="name" id="inputName" placeholder="Your Name" pattern="[a-zA-Zs]{4,}" required autofocus>
        <input class="form-control" type="email" name="email" id="inputEmail" placeholder="Email Address" pattern="[a-zA-Z0-9.-_]{3,}@{1}[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}.{0,}" required>
        <button type="submit" value="Submit">Submit</button>
      </form>
      <div class="header">
        <div class="header__inner">
          <div class="header__logo"><a href="#">
              <h1 class="header__logo">Rejuvin8</h1></a></div>
          <div class="header__menu">
            <ul>
              <li><a href="#services">Service</a></li>
              <li><a href="#benefits">Benefits</a></li>
              <li><a href="#team">Doctors</a></li>
              <li><a href="#access">Access</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/main.min.js"></script>
  </body>
</html>