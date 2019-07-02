<?php
function connection(){
    $link = mysqli_connect('localhost','root','','users');
    if(!$link){
        die("connection not successful".mysqli_connect_error($link));
    }
}
