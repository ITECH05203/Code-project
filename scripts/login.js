document.addEventListener('DOMContentLoaded', function() {
    // Get the login form and buttons
    const loginForm = document.getElementById('loginForm');
    const adminLoginBtn = document.getElementById('adminLoginBtn');
    const userLoginBtn = document.getElementById('userLoginBtn');
    const loginMessage = document.getElementById('loginMessage');
    
    // Function to handle login
    function handleLogin(loginType) {
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
        formData.append('loginType', loginType);
        
        // Send AJAX request
        fetch('handlers/login_handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Redirect to the appropriate page
                window.location.href = data.redirect;
            } else {
                // Display error message
                loginMessage.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
            }
        })
        .catch(error => {
            loginMessage.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
            console.error('Error:', error);
        });
    }
    
    // Add event listeners to buttons
    adminLoginBtn.addEventListener('click', function() {
        handleLogin('admin');
    });
    
    userLoginBtn.addEventListener('click', function() {
        handleLogin('user');
    });
});