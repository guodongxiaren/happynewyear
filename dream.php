<?php
    require('util.php');
	$mysqli = DBHelper::getConnect();
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: ".$mysqli->connect_error;
		return;
	}

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $time = $_POST['time'];

    $sql = "insert into dream(email, phone, message, province, city, time) value(?,?,?,?,?,?)";
	$result = $mysqli->prepare($sql);
    $result->bind_param("ssssss", $email, $phone, $message, $province, $city, $time);
    if (!$result->execute()) {
        echo "error";
        return;
   }

    echo "ok";
    $result->close();
?>
