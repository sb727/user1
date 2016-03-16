<?php

// All interaction goes through the index and is forwarded
// directly to the controller
    $hotel_name=$_REQUEST['where'];
    include_once("controller/Home.php");

    $controller = new Controller();
    $hotels = $controller->send_result();
    $result=array();
    foreach($hotels as $hotel){
        $result[]=array("hotel_id"=>$hotel['id'],"hotel_name"=>$hotel['hotelname'],"description"=>$hotel['description'],
            "imageurl"=>$hotel['imageurl']);
    }
    echo json_encode($result);
    //$controller->invoke();
    //include 'view/hotellist.php';

?>

