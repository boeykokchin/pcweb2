<?php

// if (!empty($_POST)) {
//     echo "We received results!\n";
//     echo "Here they are: " . json_encode($_POST);
// }

$height = $_POST["height"];
$weight = $_POST["weight"];

if (empty($height) && empty($weight)) {
    echo "Error: We did not get a weight and a height!";
} elseif (!empty($height) && empty($weight)) {
    echo "Error: We did not get a weight!";
} elseif (empty($height) && !empty($weight)) {
    echo "Error: We did not get a height!";
} else {
    // echo "We got the data needed!";
    $result = round($weight / ($height ** 2));
    if ($result > 25) {
        $message = "You are over-weight!\n";
    } elseif ($result < 18.5) {
        $message = "You are under-weight!\n";
    } else {
        $message = "You are at a healthy weight!\n";
    }
    // echo "Your BMI is {$result}";
}
?>
<?php include("header.php") ?>

<div class="jumbotron jumbotron-fluid shadow">
    <h2 class="display-12 text-center">Hello <?php echo ($_POST["name"]); ?> </h2>
    <p class="text-center">Your weight is: <?php echo $weight; ?> kg</p>
    <p class="text-center">Your height is: <?php echo $height; ?> cm</p>
    <p class="text-center">Your address is: <?php echo ($_POST["address"]); ?> </p>
    <p class="text-center">Your mobile is: <?php echo ($_POST["mobile"]); ?> </p>
    <p class="text-center">Your comment is: <?php echo ($_POST["comment"]); ?></p>
</div>

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
    <div class="text-center">
        <a type="button" class="btn btn-primary" href="index.php">Calculate BMI!</a>
    </div>
    <div>
        <?php include("footer.php"); ?>