<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ucAdminP.php'); // Redirect to login page if not logged in
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';

    // Prepare SQL statement for property insertion
    $stmt = $conn->prepare("INSERT INTO property (title, description, price, address_l1, address_l2, city, town, postcode, details, bedroom, bathroom, type, b_r_c, available, keywords, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    // Get form input values
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $address_l1 = $_POST['address_l1'];
    $address_l2 = $_POST['address_l2'];
    $city = $_POST['city'];
    $town = $_POST['town'];
    $postcode = $_POST['postcode'];
    $details = $_POST['details'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $type = $_POST['type'];
    $b_r_c = $_POST['b_r_c'];
    $available = $_POST['available'];
    $keywords = $_POST['keywords'];

    $uploadDir = 'assets/img/';

    foreach ($_FILES['images']['name'] as $key => $name) {
        // Check for errors
        if ($_FILES['images']['error'][$key] == UPLOAD_ERR_OK) {
            // Get the file's temporary location
            $tmpName = $_FILES['images']['tmp_name'][$key];

            $imagePath =  $uploadDir . basename($name);

            // Move the file to the upload directory
            if (move_uploaded_file($tmpName, "../" . $imagePath)) {
                echo "File {$name} uploaded successfully.";
            } else {
                echo "Failed to upload file {$name}.";
            }
        } else {
            echo "Error uploading file {$name}.";
        }
    }

    // Bind parameters for property insertion
    $stmt->bind_param("ssissssssiisssss", 
        $title, 
        $description, 
        $price, 
        $address_l1, 
        $address_l2, 
        $city, 
        $town, 
        $postcode, 
        $details, 
        $bedroom, 
        $bathroom, 
        $type, 
        $b_r_c, 
        $available, 
        $keywords, 
        $imagePath
    );

    //Execute SQL statement for property insertion
    if ($stmt->execute()) {
        // Get the ID of the inserted property
        $property_id = $stmt->insert_id;

        // Loop through uploaded images
        foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
            if (!empty($tmpName)) {
                $additionalImagePath = $uploadDir . basename($_FILES['images']['name'][$key]);

                // Prepare SQL statement for inserting image into property_images
                $stmt_image = $conn->prepare("INSERT INTO property_images (property_id, image_url) VALUES (?, ?)");
                
                // Bind parameters for image insertion
                $stmt_image->bind_param("is", $property_id, $additionalImagePath);

                // Execute SQL statement to insert image
                $stmt_image->execute();

                // Move uploaded image to desired location
                move_uploaded_file($tmpName, $additionalImagePath);
            }
        }

        http_response_code(200); // OK
        echo json_encode(["message" => "Property uploaded successfully!"]);
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(["message" => "Error uploading property: " . $stmt->error]);
    }

    // Close statements and connection
    $stmt->close();
    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["message" => "Invalid request method."]);
}
?>
