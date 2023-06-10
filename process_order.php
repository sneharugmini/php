<?php
$servername = "localhost";
$username = "pizza1";
$password = "p1zz@";
$dbname = "orders";

// new database connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// form data
$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$size = $_POST["size"];
$toppings = $_POST["toppings"];

// Prepare and execute the SQL statement to insert the data into the database
$sql = "INSERT INTO orders (name, phone, address, pizza_size, toppings) VALUES ('$name', '$phone', '$address', '$size', '$toppings')";
if ($conn->query($sql) === TRUE) {
  echo "Order placed successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

/
$conn->close();
?>
