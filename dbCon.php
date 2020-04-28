<?php
//mysql
function myConnect()
{
    $servername = "xxx";
    $username = "xxx";
    $password = "xxx";
    $dbname = "xxx";
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");
    return $con;
}
function random_p1_stt($rand)
{
    $qr = "
        SELECT * FROM part1
        WHERE stt =$rand
    ";
    $con = myConnect();
    return mysqli_query($con, $qr);
}
function random_p2_stt($rand)
{
    $qr = "
        SELECT * FROM part2
        WHERE stt =$rand
    ";
    $con = myConnect();
    return mysqli_query($con, $qr);
}
function random_p5_stt($rand)
{
    $qr = "
        SELECT * FROM part5
        WHERE stt =$rand
    ";
    $con = myConnect();
    return mysqli_query($con, $qr);
}
?>