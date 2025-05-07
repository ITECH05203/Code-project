<?php
session_start();
require_once '../conn/db-connection.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate inputs
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter both username and password']);
        exit;
    }
    
    try {
        // Check if user exists in database
        $stmt = $conn->prepare("SELECT user_id, username, password, role FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            // User exists, verify password
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $user['password'])) {
                // Password is correct
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                
                // Redirect based on role
                if ($user['role'] === 'admin') {
                    echo json_encode(['status' => 'success', 'redirect' => 'admin_dashboard.php']);
                } else {
                    echo json_encode(['status' => 'success', 'redirect' => 'membership.php']);
                }
            } else {
                // Password is incorrect
                echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
            }
        } else {
            // User doesn't exist
            echo json_encode(['status' => 'error', 'message' => 'Username not found']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
    
    exit;
}
?>