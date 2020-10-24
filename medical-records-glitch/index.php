<?php

$servername = "localhost";
$username = "root";
$password = "3193B03yk0kch1n";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

?>







<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!~~ CSS only ~~>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <!~~ import the webpage's stylesheet ~~>
  <!~~ <link rel="stylesheet" href="/style.css" /> ~~>

  <title>BMI Form</title>
</head>

<body>
  <div class="container">
    <h1>Medical Records</h1>

    <p>Please submit name, height and weight.</p>

    <form action="" method="GET">
      <div class="form-group">
        <label for="name">Name: </label>
        <input class="form-control" type="text" id="name" name="name" />
      </div>

      <div class="form-inline">
        <label class="mr-sm-3" for="weight">Weight: </label>
        <input class="form-control mr-sm-3" type="text" id="weight" name="weight" placeholder="kg" />

        <label class="mr-sm-3" for="height">Height: </label>
        <input class="form-control mr-sm-3" type="text" id="height" name="height" placeholder="cm" />
      </div>

      <div class="form-group">
        <label class="mt-3" for="comments">Comments: </label>
        <textarea rows="8" cols="40" id="comment" name="comment" placeholder="give me your honest comment lah!" class="form-control"></textarea>
      </div>

      <input class="btn btn-primary" type="submit" id="submit" value="Submit" />
    </form>

    <!~~ JS, Popper.js, and jQuery ~~>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!~~ import the webpage's javascript file ~~>
    <script src="/script.js" defer></script>
  </div>
</body>

</html> -->