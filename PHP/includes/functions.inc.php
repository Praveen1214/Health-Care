<?php

function check_login($conn)
{
	if (isset($_SESSION['Patient_ID'])) {
		$id = $_SESSION['Patient_ID'];
		$query = "SELECT * FROM patient WHERE Patient_ID = '$id' LIMIT 1";
		$result = mysqli_query($conn, $query);
		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	} elseif (isset($_SESSION['Admin_ID'])) {
		$id = $_SESSION['Admin_ID'];
		$query = "SELECT * FROM admin WHERE Admin_ID = '$id' LIMIT 1";
		$result = mysqli_query($conn, $query);
		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}elseif (isset($_SESSION['Doctor_ID'])) {
		$id = $_SESSION['Doctor_ID'];
		$query = "SELECT * FROM doctor WHERE Doctor_ID = '$id' LIMIT 1";
		$result = mysqli_query($conn, $query);
		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	// Redirect to login
	header("Location: login.php");
	die;
}

function random_num($length)
{
	$text = "";
	if ($length < 5) {
		$length = 5;
	}

	$len = rand(4, $length);

	for ($i = 0; $i < $len; $i++) {
		$text .= rand(0, 9);
	}

	return $text;
}

