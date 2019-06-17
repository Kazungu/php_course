<?php include 'header.php'?>
<div class="container">
    <h3>Login page</h3>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <form action="login_handler.php">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include 'footer.php'?>
