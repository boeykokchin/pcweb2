<?php

// $height = $weight = $result = $error = "";

// if (!empty($_GET)) {
//   // echo "We received results!\n";
//   // echo "Here they are: " . json_encode($_GET);
// }

// $height = $_GET["height"];
// $weight = $_GET["weight"];

// if (empty($height) && empty($weight)) {
//   echo "Error: We did not get a weight and a height!";
// } elseif (!empty($height) && empty($weight)) {
//   echo "Error: We did not get a weight!";
// } elseif (empty($height) && !empty($weight)) {
//   echo "Error: We did not get a height!";
// } else {
// echo "We got the data needed!";
// $result = round($weight / ($height ** 2));
// if ($result > 25) {
//   $message = "You are over-weight!\n";
// } elseif ($result < 18.5) {
//   $message = "You are under-weight!\n";
// } else {
//   $message = "You are at a healthy weight!\n";
// }
// echo "Your BMI is {$result}";
// }
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <!-- import the webpage's stylesheet -->
  <!-- <link rel="stylesheet" href="/style.css" /> -->

  <title>BMI Calculator</title>
</head>

<body>
  <div class="container">
    <h1>BMI Calculator</h1>

    <p>Please submit name, weight (kg) and height (cm).</p>


    <form action="welcome_get.php" method="POST">
      <div class="form-group">
        <label for="name">Name: </label>
        <input class="form-control" type="text" id="name" name="name" />
      </div>

      <div class="form-inline">
        <label class="" for="weight">Weight: </label>
        <input class="form-control ml-sm-3" type="text" id="weight" name="weight" placeholder="<?php echo $weight . " kg"; ?>" />

        <label class="" for="height">Height: </label>
        <input class="form-control ml-sm-3" type="text" id="height" name="height" placeholder="<?php echo $height . " cm"; ?>" />
      </div>

      <div class="form-inline">
        <label class="" for="weight">Address: </label>
        <input class="form-control ml-sm-3" type="text" id="weight" name="address" placeholder="<?php echo $address ?>" />

        <label class="" for="height">Mobile: </label>
        <input class="form-control ml-sm-3" type="text" id="height" name="mobile" placeholder="<?php echo $mobile; ?>" />
      </div>

      <div class="form-group">
        <label class="mt-3" for="comments">Comments: </label>
        <textarea rows="2" cols="25" id="comment" name="comment" placeholder="give me your honest comment lah!" class="form-control"></textarea>
      </div>

      <input class="btn btn-primary mt-sm-4" type="submit" id="submit" value="Submit" />

      <div class="output">
        <?php if (!empty($error)) : ?>
          <strong>Error!!</strong>
          <p><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (!empty($result)) : ?>
          <br>
          <h2 class="text-center">Your BMI is <?php echo $result; ?> </h2>
          <br>
          <h3 class="text-center"><?php echo $message; ?></h3>
        <?php endif; ?>
      </div>

      <?php
      include("footer.php");
      ?>
    </form>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </div>
</body>

</html>