<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header('Location: ucAdminP.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylesUC.css">
    <link rel="stylesheet" href="assets/css/stylesUC.css">
    <title>Buy Upload</title>
</head>
<body>
<h1>Buy - Upload Property</h1>
<form action="process_upload.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label><br>
    <input type="text" style="text-transform: capitalize" id="title" name="title" required><br><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>
    
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" required><br><br>
    
    <label for="address_l1">Address Line 1:</label><br>
    <input type="text" id="address_l1" name="address_l1" required><br><br>
    
    <label for="address_l2">Address Line 2:</label><br>
    <input type="text" id="address_l2" name="address_l2"><br><br>
    
    <label for="city">City:</label><br>
    <input type="text" style="text-transform: capitalize" id="city" name="city" required><br><br>
    
    <label for="town">Town:</label><br>
    <input type="text" style="text-transform: capitalize" id="town" name="town" required><br><br>
    
    <label for="postcode">Postcode:</label><br>
    <input type="text" id="postcode" name="postcode" required><br><br>
    
    <label for="details">Details:</label><br>
    <textarea id="details" name="details" required></textarea><br><br>
    
    <label for="bedroom">Bedrooms:</label><br>
    <input type="number" id="bedroom" name="bedroom" required><br><br>
    
    <label for="bathroom">Bathrooms:</label><br>
    <input type="number" id="bathroom" name="bathroom" required><br><br>
    
    <label for="type">Type:</label><br>
    <select id="type" name="type" required>
        <option value="House">House</option>
        <option value="Apartment">Apartment</option>
    </select><br><br>
    
    <label for="b_r_c">Buying/Renting/Commercial:</label><br>
    <select id="b_r_c" name="b_r_c" required>
        <option value="Buy">Buy</option>
    </select><br><br>
    
    <label for="available">Available:</label><br>
    <select id="available" name="available" required>
        <option value="A">Available</option>
        <option value="N">Not Available</option>
    </select><br><br>
    
    <label for="keywords">Keywords (comma-separated) Garden, Pool, Garage, etc:</label><br>
    <input type="text" style="text-transform: capitalize" id="keywords" name="keywords" required><br><br>
    
    <label for="image">Upload Featured Image:</label><br>
    <input type="file" class="button" id="image" name="image" accept="image/*" required><br><br>

    <div id="additional-images">
        <label for="images">Upload Additional Images: (No Blank Fields)</label><br>
    </div>
    <button type="button" onclick="addImageUpload()">Add Another Image</button>
    <button type="button" onclick="removeLastImageUpload()">Remove Last Image</button><br><br>
    
    <input type="submit" value="Upload Property">
</form>

<script>
    var imageCount = 0;
    var maxImages = 12; // Set maximum number of images

    function addImageUpload() {
        if (imageCount < maxImages) {
            var input = document.createElement('input');
            input.type = 'file';
            input.name = 'images[]';
            input.accept = 'image/*';
            document.getElementById('additional-images').appendChild(input);
            imageCount++;
        } else {
            alert('Maximum images reached.');
        }
    }

    function removeLastImageUpload() {
        var additionalImagesContainer = document.getElementById('additional-images');
        var lastInput = additionalImagesContainer.lastElementChild;
        
        if (lastInput) {
            additionalImagesContainer.removeChild(lastInput);
            imageCount--;
        }
    }
</script>

</body>
</html>
