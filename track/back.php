<?php
$conn = mysqli_connect("localhost", "root", "", "cargo");

session_start();

// $track = $_GET['tNumber'];


// $sql = "SELECT * FROM `form` WHERE `track` = '$track'";
// $result = mysqli_query($conn, $sql);
// $numrows = mysqli_num_rows($result);

// if($numrows !=0){
//     $array = mysqli_fetch_array($result);

//     if($track == $array['track']){
//         $_SESSION['id'] = $array['id'];
//         echo $array['id'];
//     }else{
//         header("location: tracking.html");
//         echo 'Incorrect number';
//     }
// }else{
//     echo 'empty';
//     header('location: tracking.html');

// }


$track = $_GET['track'];


$sql = "SELECT * FROM `form` WHERE `track` = '$track'";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

if($numrows !=0){
    $array = mysqli_fetch_array($result);

    if($track == $array['track']){
        $_SESSION['invoice'] = $array['invoice'];
        $_SESSION['track'] = $array['track'];
        $_SESSION['receivers name'] = $array['receivers name'];
        $_SESSION['receivers phone'] = $array['receivers phone'];
        $_SESSION['receivers email'] = $array['receivers email'];
        $_SESSION['receivers address'] = $array['receivers address'];
        $_SESSION['senders name'] = $array['senders name'];
        $_SESSION['senders phone'] = $array['senders phone'];
        $_SESSION['senders email'] = $array['senders email'];
        $_SESSION['senders address'] = $array['senders address'];
        $_SESSION['item'] = $array['item'];
        $_SESSION['number of item'] = $array['number of item'];
        $_SESSION['destination'] = $array['destination'];
        $_SESSION['date sent'] = $array['date sent'];
        $_SESSION['delivery date'] = $array['delivery date'];
        $_SESSION['first destination'] = $array['first destination'];
        $_SESSION['second destination'] = $array['second destination'];
        $_SESSION['third destination'] = $array['third destination'];
        $_SESSION['status'] = $array['status'];
        echo $array['invoice'];
        header('location: trackingInfo.php');
    }else{
       
        echo 'Incorrect number';
    }
}else{
    echo 'empty';
    

}