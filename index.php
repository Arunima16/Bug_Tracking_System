<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="styles.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
    <script defer src="script.js"></script>
</head>

<body>
  <?php
  include "connect.php";
  session_start();
  $_SESSION['counter']=0;
  ?>
    <header>
      <nav>
        <img  src="./bug_new.png" alt="">
        <h1 style="font-family: 'Lobster', cursive; font-size: 60px;">    Bug Tracker</h1>
        <img  src="./bug_new.png" alt="">
      </nav>
    </header>

    <section>
        <div class="container">
          <div class="user signinBx">
            <div class="imgBx"><img src="./bug_new.png" /></div>
            <div class="formBx">
              <form action="Home.php" method="POST">
                <h2>Sign In </h2>
                <input class="details" type="text" name="username" placeholder="Username" />
                <input class="details" type="password" name="password" placeholder="Password" />
                <input class="details" type="submit" name="" value="Login" />
                <p class="signup">
                  Click here to <a href="#" onclick="toggleForm();">
                    Sign Up
                  </a>
                </p>
              </form>
            </div>
          </div>
          <div class="user signupBx">
            <div class="formBx">
              <form action="new_user.php" method="POST">
                <h2>Create an Account</h2>
                <div class="radio">
                  <input type="radio" class="radio-btn" id="type" name="Type" value="ADM">
                  <label for="type">Admin</label><br>
                  <input type="radio" class="radio-btn" id="type" name="Type" value="QA">
                  <label for="type">QA</label><br>
                  <input type="radio" class="radio-btn" id="type" name="Type" value="DEV">
                  <label for="type">Developer</label> 
                </div>

                <input type="text" class="details" name="Name" placeholder="Name" />
                <input type="text" class="details" name="Username" placeholder="Username" />
                <input type="email" class="details" name="Email" placeholder="Email Id" />
                <input type="password" class="details" name="Password" placeholder="Create Password" />
                <input type="submit" class="details" name="" value="Sign Up" />
                <p class="signup">
                  Already have an account ?
                  <a href="#" onclick="toggleForm();"> Sign In </a>
                </p>
              </form>
            </div>
            <div class="imgBx"><img src="./bug_new.png" /></div>
          </div>
        </div>
      </section>
</body>
</html>



