<?php
//$email = $_POST['email'];
//$password = $_POST['password'];
//echo $email."<br>";
//echo $password."<br>";
//Form Validation
//proper form validation inhibits hackers and spammers from getting access to your form data.
$firstname = $lastname = $email = $password="";
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$FirstName = val_data($_POST['firstName']);
    //$LastName = val_data($_POST['lastName']);
    //$email = val_data($_POST['email']);
    //$password = $_POST['password'];

    #check firstname
    if(empty($_POST['firstName'])){
        $firstnameErr = "First name is required..";
    }else{
        $firstname = $_POST['firstName'];
    }
    #check last name
    if(empty($_POST['lastName'])){
        $lastnameErr = "Last name is required..";
    }else{
        $lastname = $_POST['lastName'];
    }
    #check email
    if(empty($_POST['email'])){
        $emailErr = "email name is required..";
    }else{
        $email = $_POST['email'];
    }
    #check password
    if(empty($_POST['password'])){
        $passwordErr = "password name is required..";
    }else{
        $password = $_POST['password'];
    }
}
function val_data($data){
    $data = trim($data);
    $data = str_replace("/","",$data);
    $data = str_replace("\\","",$data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>php forms</title>
</head>
<body>
<div class="container">
    <h2>Welcome</h2>
    <form action="<? echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <div class="form-group">
            <label for="FirstName">First Name: </label>
            <input type="text" class="form-control" id="Firstname" name="firstName">
            <span class="text-danger">*<?php echo $firstnameErr?></span>
        </div>
        <div class="form-group">
            <label for="LastName">Last Name:</label>
            <input type="text" class="form-control" id="Lastname" name="lastName" >
            <span class="text-danger">*<?php echo $lastnameErr?></span>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
            <span class="text-danger">*<?php echo $emailErr?></span>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
            <span class="text-danger">*<?php echo $passwordErr?></span>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<p>Welcome <?php echo $_POST['firstName']." ".$_POST['lastName']?> to Jitters Cafe</p>
<p>Your Email is <?php echo $_POST['email']?></p>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

