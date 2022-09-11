<?php
include_once './config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $coronasym = $_POST['coronasym'];
    $message = $_POST['message'];

    $check = "";

    foreach ($coronasym as $check1) {
        $check .= $check1 . ", ";
    }

    $query = "INSERT INTO coronacase (username, email, phone, symtom, message) VALUES ('$username', '$email', '$mobile', '$check', '$message')";

    $result = $conn->query($query) or die("Query Failed!");

    if ($result) {
        
        ?>
<script>
    alert("Data Successfully Submitted.");
    window.location = 'index.php';
</script>

<?php
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
    <?php include_once('sections/links.tpl'); ?>
</head>

<body>

    <!-- ////////////// navbar start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/navbar.tpl'); ?>

    <!-- ////////////// header start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/header.tpl'); ?>

    <!-- ////////////// corona latest update start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/corona_update.tpl'); ?>


    <!-- ////////////// about section start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/about.tpl'); ?>

    <!-- ////////////// corona symptoms start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/symptoms.tpl'); ?>

    <!-- ////////////// prevention section  start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/prevention.tpl'); ?>

    <!-- ////////////// contact us  start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/contact.tpl'); ?>

    <!-- ////////////// top cursor \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/top_cursor.tpl'); ?>

    <!-- ////////////// footer \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/footer.tpl'); ?>


    <!-- bootstrap links  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- top btn script  -->
    <script type="text/javascript" src="javascript/script.js"></script>
</body>

</html>