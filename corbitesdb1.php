<?php
$servername="localhost";
$username="root";
$password="";
$database_name="corbitesdb1";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$customer_order = $_POST['order'];
	$full_name = $_POST['name'];
	$contact_number = $_POST['num'];
	$email = $_POST['email'];
	$delivery_addr = $_POST['p_address'];
		
	$sql_query = "INSERT INTO order_details (customer_order,full_name,contact_number,email,delivery_addr)
	VALUES ('$customer_order','$full_name','$contact_number','$email','$delivery_addr')";

	if(mysqli_query($conn, $sql_query))
	{	
		echo "Your order has been received!";
	}

	else
	{
		echo "Error: ". $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>