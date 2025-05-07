<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="styles/admin-dashboard.css" rel="stylesheet" />
</head>
<body>
  <div class="dashboard" role="main" aria-label="Admin Dashboard">
    <h1>Admin Dashboard</h1>
    <div class="user-table">
      <h2>User Information</h2>
      <table id="userTable" aria-describedby="userTableDesc" tabindex="0">
        <caption id="userTableDesc" class="visually-hidden">Table showing user membership and program details</caption>
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Membership Type</th>
            <th scope="col">Membership Start Date</th>
            <th scope="col">Membership End Date</th>
            <th scope="col">Assigned Program</th>
            <th scope="col">Program Start Date</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
    <button id="logout" type="button" aria-label="Logout from admin dashboard">Logout</button>
  </div>
  
  <script src="scripts/admin-dashboard.js"></script>
</body>
</html>