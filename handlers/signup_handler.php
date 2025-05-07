<?php
session_start();
require_once '../conn/db-connection.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    // Validate inputs
    if (empty($username) || empty($password) || empty($role)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all fields']);
        exit;
    }
    
    try {
        // Check if username already exists
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo json_encode(['status' => 'error', 'message' => 'Username already exists']);
            exit;
        }
        
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Begin transaction
        $conn->beginTransaction();
        
        // Insert into users table
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);
        $stmt->execute();
        
        $userId = $conn->lastInsertId();
        
        // If it's a member, add default membership
        if ($role === 'member') {
            $membershipType = 'Basic';
            $startDate = date('Y-m-d');
            $endDate = date('Y-m-d', strtotime('+1 month'));
            
            $stmt = $conn->prepare("INSERT INTO memberships (user_id, type, start_date, end_date) VALUES (:user_id, :type, :start_date, :end_date)");
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':type', $membershipType);
            $stmt->bindParam(':start_date', $startDate);
            $stmt->bindParam(':end_date', $endDate);
            $stmt->execute();
        }
        
        // Commit transaction
        $conn->commit();
        
        echo json_encode(['status' => 'success', 'message' => 'Registration successful! Please login.']);
    } catch (PDOException $e) {
        // Rollback transaction if there was an error
        if ($conn->inTransaction()) {
            $conn->rollBack();
        }
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
    
    exit;
}
?>