<?php
header('Content-Type: application/json');

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "testdb";
$port = 3307;

$conn = new mysqli($server, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

$action = $_REQUEST['action'];

if ($action == 'add') {
    $name = htmlspecialchars($_POST["name"]);
    $price = htmlspecialchars($_POST["price"]);

    $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $price);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Product added successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
} elseif ($action == 'get') {
    $sql = "SELECT id, name, price FROM products";
    $result = $conn->query($sql);

    $products = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    echo json_encode($products);
}

$conn->close();
?>
