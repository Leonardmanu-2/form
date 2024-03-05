<?php require "config.php"; ?>

<?php

if (isset($_POST['submit'])) {

    if($_POST['name'] == '' OR $_POST['email'] == '' OR $_POST['age'] == '') {
      echo "Please fill in all the fields";
    } else {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];

      $insert = $conn->prepare("INSERT INTO users (name, email, age)
      VALUES (:name, :email, :age)");

      $insert->execute([
        ':name' => $name,
        ':email' => $email,
        ':age' => $age, 
      ]);
    }

    echo "Registered Successfully!!";
  }

?>


<main class="form-signin w-50 m-auto">
  <form method="POST" action="index.php">
   
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

    <div class="form-floating">
      <label for="floatingInput">Name</label>
      <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name">
    </div>

    <div class="form-floating">
      <label for="floatingInput">Email</label>
      <input name="email" type="text" class="form-control" id="floatingInput" placeholder="Email">
    </div>

    <div class="form-floating">
      <label for="floatingPassword">Age</label>
      <input name="age" type="age" class="form-control" id="floatingPassword" placeholder="Age">
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Register</button>