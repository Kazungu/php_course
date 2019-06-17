<?php include 'header.php'?>
<h3>Signup page</h3>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <form action="signup_handler.php" method="POST">
                <div class="form-group">
                    <label for="FirstName">First Name: </label>
                    <input type="text" class="form-control" id="Firstname" name="firstName">
                </div>
                <div class="form-group">
                    <label for="LastName">Last Name:</label>
                    <input type="text" class="form-control" id="Lastname" name="lastName" >
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">

                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password">

                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include 'footer.php'?>
