<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = 'John Doe'; // Static for simplicity
    $customer_phone = '1234567890'; // Static for simplicity
    $customer_address = '123 Main St'; // Static for simplicity
    $order_details = implode(', ', $_POST['items']);
    $order_status = 'Pending';

    $sql = "INSERT INTO orders (customer_name, customer_phone, customer_address, order_details, order_status)
            VALUES ('$customer_name', '$customer_phone', '$customer_address', '$order_details', '$order_status')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
