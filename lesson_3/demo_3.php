<form action="" method="POST">
    <p>Name</p>
    <input type="text" name="Name" placeholder="Enter name....">
    <p>Email</p>
    <input type="email" name="email" placeholder="Enter email...">
    <p>Phone number</p>
    <input type="number" name="phone_number" placeholder="Phone number please">
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php
/*
// These are just variables that are available in all scope.accessible regardless of the scope.
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION.
*/
/*
 * >>>>>$GLOBALS<<<<<<
 * $GLOBALS is a php super global variable which is used to access global variables
 *  from anywhere in the PHP script(also from within functions or methods)
 * PHP store all global variables in array called $GLOBALS[index]. The index holds the name of the variable
 */
$a = 23;
$b = 65;
function addition(){
    $x = "Php is awesome";#local variable
    $GLOBALS['z'] = $GLOBALS['a'] +$GLOBALS['b'];
}
addition();
echo $z."<br>";

/*
 * >>>>>>>$_SERVER<<<<<<<<
 * PHP superglobal variable which holds information about headers, paths and script location.
 */
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['SERVER_ADMIN']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";

/*
 * $_REQUEST used to collect data after submitting an HTML form.
 */
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_REQUEST['Name'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];

    echo $name."<br>";
    echo $email."<br>";
    echo $phone_number."<br>";

}
/*$_POST
PHP $_POST is a widely used to collect form data after submmiting an HTML form with method="POST".

*/