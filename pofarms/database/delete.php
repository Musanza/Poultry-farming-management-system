<?php

include 'server.php';


if (isset($_GET['delete_chick_record'])) {
	$delete_id = $_GET['delete_chick_record'];
	$query = "DELETE FROM `chick_purchase` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../chicken.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_feed_record'])) {
	$delete_id = $_GET['delete_feed_record'];
	$query = "DELETE FROM `feed_purchase` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../feed.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_medicine_record'])) {
	$delete_id = $_GET['delete_medicine_record'];
	$query = "DELETE FROM `medicine_puchase` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../medicine.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_supplier'])) {
	$delete_id = $_GET['delete_supplier'];
	$query = "DELETE FROM `suppliers` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../distributor.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_expense_record'])) {
	$delete_id = $_GET['delete_expense_record'];
	$query = "DELETE FROM `expense_entry` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../expense.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_user'])) {
	$delete_id = $_GET['delete_user'];
	$query = "DELETE FROM `accounts` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../users.php");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_client'])) {
	$delete_id = $_GET['delete_client'];
	$query = "DELETE FROM `client` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../client.php?#chicken");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_chicken_sale'])) {
	$delete_id = $_GET['delete_chicken_sale'];
	$query = "DELETE FROM `chicken_sale` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../sale_chicken.php?#chicken");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_egg_sale'])) {
	$delete_id = $_GET['delete_egg_sale'];
	$query = "DELETE FROM `egg_sale` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../eggs.php?#chicken");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_payment'])) {
	$delete_id = $_GET['delete_payment'];
	$query = "DELETE FROM `client_balance` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../client.php?#clients");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_cons'])) {
	$delete_id = $_GET['delete_cons'];
	$query = "DELETE FROM `feed_consumption` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../feed.php?#clients");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}

if (isset($_GET['delete_bank_bal'])) {
	$delete_id = $_GET['delete_bank_bal'];
	$query = "DELETE FROM `bank_bal` WHERE id ='$delete_id'";
	$delete_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($delete_row) {
		header("Location: ../bank.php?#chicken");
		$msg = 'Record deleted successfully';
	} else {
		$error = 'Error occured, please try again.';
	}
}
?>