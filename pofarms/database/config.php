<?php

include 'server.php';


if(isset($_POST['register'])){
	$name = $_POST['name'];
	$u_name = $_POST['u_name'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$address = $_POST['address'];
	$type = $_POST['type'];
	$query = "INSERT INTO `accounts`(name, u_name, telephone, email, password, address, type)
	VALUES('$name', '$u_name', '$telephone', '$email', '$password', '$address', '$type')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Account created sucessfully';
	} else {
		$error = 'Error occurred. Kindly review your details';
	}
}

if(isset($_POST['purchase-chick'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$b_no = $_POST['b_no'];
	$l_no = $_POST['l_no'];
	$supplier = $_POST['supplier'];
	$qty = $_POST['qty'];
	$u_price = $_POST['u_price'];
	$t_amount = $u_price*$qty;
	$query = "INSERT INTO `chick_purchase`(name_idd, date, b_no, l_no, supplier, qty, u_price, t_amount)
	VALUES('$name_idd', '$date', '$b_no', '$l_no', '$supplier', '$qty', '$u_price', '$t_amount')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['purchase-feed'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$type = $_POST['type'];
	$u_price = $_POST['u_price'];
	$supplier = $_POST['supplier'];
	$qty = $_POST['qty'];
	$t_amount = $u_price*$qty;
	$query = "INSERT INTO `feed_purchase`(name_idd, date, type, u_price, supplier, qty, t_amount)
	VALUES('$name_idd', '$date', '$type', '$u_price', '$supplier', '$qty', '$t_amount')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['add-supplier'])){
	$name_idd = $_POST['name_idd'];
	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$address = $_POST['address'];
	$query = "INSERT INTO `suppliers`(name_idd, name, telephone, city, state, country, address)
	VALUES('$name_idd', '$name', '$telephone', '$city', '$state', '$country', '$address')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Supplier added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if (isset($_POST['feed-type'])) {
	$name_idd = $_POST['name_idd'];
	$type = $_POST['type'];
	$query = "INSERT INTO `feed_type` (name_idd, type) VALUES('$name_idd', '$type')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Feed type added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['purchase-medicine'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$rate = $_POST['rate'];
	$qty = $_POST['qty'];
	$t_amount = $_POST['t_amount'];
	$supplier = $_POST['supplier'];
	$query = "INSERT INTO `medicine_puchase`(name_idd, date, name, rate, qty, t_amount, supplier)
	VALUES('$name_idd', '$date', '$name', '$rate', '$qty', '$t_amount', '$supplier')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if (isset($_POST['add-medicine-name'])) {
	$name_idd = $_POST['name_idd'];
	$name = $_POST['name'];
	$query = "INSERT INTO `medicine_name` (name_idd, name) VALUES('$name_idd', '$name')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Medicine added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if (isset($_POST['add-expense'])) {
	$name_idd = $_POST['name_idd'];
	$type = $_POST['type'];
	$query = "INSERT INTO `expense` (name_idd, type) VALUES('$name_idd', '$type')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Expense type added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['expense-entry'])){
	$name_idd = $_POST['name_idd'];
	$type = $_POST['type'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	$comments = $_POST['comments'];
	$query = "INSERT INTO `expense_entry`(name_idd, type, amount, date, comments)
	VALUES('$name_idd', '$type', '$amount', '$date', '$comments')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['add-client'])){
	$name_idd = $_POST['name_idd'];
	$customer = $_POST['customer'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	$query = "INSERT INTO `client`(name_idd, customer, telephone, address)
	VALUES('$name_idd', '$customer', '$telephone', '$address')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Client added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['chicken-sale'])){
	$name_idd = $_POST['name_idd'];
	$customer = $_POST['customer'];
	$paid = $_POST['paid'];
	$l_no = $_POST['l_no'];
	$u_price = $_POST['u_price'];
	$no_chickens = $_POST['no_chickens'];
	$t_amount = $u_price*$no_chickens;
	$date = $_POST['date'];
	$query = "INSERT INTO `chicken_sale`(name_idd, customer, paid, l_no, u_price, no_chickens, t_amount, date)
	VALUES('$name_idd', '$customer', '$paid', '$l_no', '$u_price', '$no_chickens', '$t_amount', '$date')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if (isset($_POST['add-tray'])) {
	$name_idd = $_POST['name_idd'];
	$tray = $_POST['tray'];
	$query = "INSERT INTO `egg_tray` (name_idd, tray) VALUES('$name_idd', '$tray')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['tray-sale'])){
	$name_idd = $_POST['name_idd'];
	$customer = $_POST['customer'];
	$l_no = $_POST['l_no'];
	$paid = $_POST['paid'];
	$u_price = $_POST['u_price'];
	$t_trays = $_POST['t_trays'];
	$t_amount = $u_price*$t_trays;
	$date = $_POST['date'];
	$query = "INSERT INTO `egg_sale`(name_idd, customer, l_no, paid, u_price, t_trays, t_amount, date)
	VALUES('$name_idd', '$customer', '$l_no', '$paid', '$u_price', '$t_trays', '$t_amount', '$date')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['add-balance'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$customer = $_POST['customer'];
	$amount = $_POST['amount'];
	$comments = $_POST['comments'];
	$query = "INSERT INTO `client_balance`(name_idd, date, customer, amount, comments)
	VALUES('$name_idd', '$date', '$customer', '$amount', '$comments')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Payment added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['feed-cons'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$no_bags = $_POST['no_bags'];
	$type = $_POST['type'];
	$query = "INSERT INTO `feed_consumption`(name_idd, date, no_bags, type)
	VALUES('$name_idd', '$date', '$no_bags', '$type')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Record added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['add-acc'])){
	$name_idd = $_POST['name_idd'];
	$bank = $_POST['bank'];
	$no = $_POST['no'];
	$query = "INSERT INTO `bank_acc`(name_idd, bank, no)
	VALUES('$name_idd', '$bank', '$no')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Account added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}

if(isset($_POST['add-bank-balance'])){
	$name_idd = $_POST['name_idd'];
	$date = $_POST['date'];
	$no = $_POST['no'];
	$type =$_POST['type'];
	$amount = $_POST['amount'];
	$comments = $_POST['comments'];
	$query = "INSERT INTO `bank_bal`(name_idd, date, no, type, amount, comments)
	VALUES('$name_idd', '$date', '$no', '$type', '$amount', '$comments')";
	$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($insert_row){
		$msg = 'Added sucessfully';
	} else {
		$error = 'Error occurred. Please try again';
	}
}
?>