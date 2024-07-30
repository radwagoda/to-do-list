

<?php

include 'dp1.php';



// Check if POST data is available
if (isset($_POST['id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['gender'])) {
    // Fetch data from POST request
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, gender = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $first_name, $last_name, $email, $gender, $id);

    // Execute the update query
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Required fields are missing.";
}

// Close the connection
$conn->close();
?>


