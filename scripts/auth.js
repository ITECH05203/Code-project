document.addEventListener('DOMContentLoaded', function() {
    // Sign Up Form
    const signupForm = document.getElementById('signupForm');
    const signupBtn = document.getElementById('signupBtn');
    const signupMessage = document.getElementById('signupMessage');
    
    // Login Form
    const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');
    const loginMessage = document.getElementById('loginMessage');
    
    // Handle Sign Up
    if (signupBtn) {
        signupBtn.addEventListener('click', function() {
            // Get form data
            const username = document.getElementById('signupUsername').value.trim();
            const password = document.getElementById('signupPassword').value.trim();
            const role = document.getElementById('signupRole').value.trim();
            
            // Validate inputs
            if (!username || !password || !role) {
                signupMessage.innerHTML = '<div class="alert alert-danger">Please fill all fields</div>';
                return;
            }
            
            // Create form data object
            const formData = new FormData();
            formData.append('username', username);
            formData.append('password', password);
            formData.append('role', role);
            
            // Send AJAX request
            fetch('handlers/signup_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    signupMessage.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                    signupForm.reset();
                    
                    // Automatically switch to login modal after 2 seconds
                    setTimeout(function() {
                        $('#signupModal').modal('hide');
                        $('#loginModal').modal('show');
                    }, 2000);
                } else {
                    signupMessage.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                }
            })
            .catch(error => {
                signupMessage.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
                console.error('Error:', error);
            });
        });
    }
    
    // Handle Login
    if (loginBtn) {
        loginBtn.addEventListener('click', function() {
            // Get form data
            const username = document.getElementById('loginUsername').value.trim();
            const password = document.getElementById('loginPassword').value.trim();
            
            // Validate inputs
            if (!username || !password) {
                loginMessage.innerHTML = '<div class="alert alert-danger">Please enter both username and password</div>';
                return;
            }
            
            // Create form data object
            const formData = new FormData();
            formData.append('username', username);
            formData.append('password', password);
            
            // Send AJAX request
            fetch('handlers/login_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    loginMessage.innerHTML = '<div class="alert alert-success">Login successful! Redirecting...</div>';
                    
                    // Redirect to the appropriate page
                    setTimeout(function() {
                        window.location.href = data.redirect;
                    }, 1000);
                } else {
                    loginMessage.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                }
            })
            .catch(error => {
                loginMessage.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
                console.error('Error:', error);
            });
        });
    }
});