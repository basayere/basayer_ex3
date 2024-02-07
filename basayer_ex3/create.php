<?php 

$name ="";
$email ="";
$phone ="";
$address ="";

$errorMessag ="";
$succesSMassage ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessag = "Ali the fields are required" ;
            break;

        }
        $errorMessag="clientv added correctly ";

    } while (false);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php require_once "setHead.php" ?>
    <?php require_once "connect.php" ?>
</head>
<body>
    <div clas="container my-5">
        <h2>เพิ่มสมาชิก</h2>
        <?php
        if ( !empty($error)) {

        }
        ?>
        <from method="post">
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control"name="name" value="<?php echo $name; ?>">
</div>
<div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control"name="name" value="<?php echo $email; ?>">
</div>
<div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"name="name" value="<?php echo $phone; ?>">
</div>
<div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
            <input type="text" class="form-control"name="name" value="<?php echo $address; ?>">
</div>

<?php

if( !empty($succesSMassag)) {
    echo "
    <div class = 'offset-sm-3 cl-sm-6'>
    <div class= 'alert alert-success alert-dismissible fade show' role='alert'>
    <strong>$successMassag</strong>
    <button type= 'button' class='btn-close' data-bs-diamiss='alert' aria->"
}
?>
<!-- Button -->
<div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary">บันทึก</button>
</div>
<div class="offset-sm-3 col-sm-3 d-grid">
        <a class="btn btn-outline-primary" href="/basayer_ex3/index.php" role="button">ยกเลิก</a>
</div>


</from>
</div>
</body>
</html>