CREATE DATABASE barracksgymdb;
USE barracksgymdb;

CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'member') DEFAULT 'member',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE memberships (
  membership_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  type ENUM('Basic', 'Premium', 'Gold', 'Elite') NOT NULL,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE programs (
  program_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  name VARCHAR(50),
  start_date DATE,
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE attendance_calendar (
  calendar_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  date DATE,
  workout_type ENUM('Muscle Day', 'Cardio Day', 'Rest Day', 'Flexibility Day', 'HIIT Day'),
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);