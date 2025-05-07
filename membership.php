<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Membership Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link  rel="stylesheet" href="styles/membership.css"/>
 </head>
 <body>
  <header class="dashboard-header text-center">
   <h1>Membership Dashboard</h1>
   <div class="text-end pe-4">
     <a href="handlers/logout.php" class="btn btn-outline-warning">Logout</a>
   </div>
  </header>
  <main class="container my-4">
   <section class="profile-section">
    <img alt="User profile picture" class="profile-pic" height="96" loading="lazy" src="assets/mukhangewan.jpg" width="96" />
    <div class="profile-info">
     <h2>Geronvale Cabanizas</h2>
     <p>Premium Member</p>
    </div>
   </section>
   <section aria-label="User statistics" class="stats-cards">
    <div aria-label="Workouts Completed" class="stat-card" role="region" tabindex="0">
     <h3>Workouts Completed</h3>
     <p>42</p>
    </div>
    <div aria-label="Active Days" class="stat-card" role="region" tabindex="0">
     <h3>Active Days</h3>
     <p>35</p>
    </div>
    <div aria-label="Calories Burned" class="stat-card" role="region" tabindex="0">
     <h3>Calories Burned</h3>
     <p>12,500</p>
    </div>
    <div aria-label="Membership Validity" class="stat-card" role="region" tabindex="0">
     <h3>Membership Validity</h3>
     <p>6 Months</p>
    </div>
   </section>
   <section aria-label="Workout calendar">
    <div class="calendar-header">
     <button aria-label="Previous month" id="prevMonth">&lt; Prev</button>
     <span aria-atomic="true" aria-live="polite" id="monthYear"></span>
     <button aria-label="Next month" id="nextMonth">Next &gt;</button>
    </div>
    <div aria-label="Workout calendar days" aria-readonly="true" class="calendar" id="calendar" role="grid">

     <div class="calendar-day-name" role="columnheader">Sun</div>
     <div class="calendar-day-name" role="columnheader">Mon</div>
     <div class="calendar-day-name" role="columnheader">Tue</div>
     <div class="calendar-day-name" role="columnheader">Wed</div>
     <div class="calendar-day-name" role="columnheader">Thu</div>
     <div class="calendar-day-name" role="columnheader">Fri</div>
     <div class="calendar-day-name" role="columnheader">Sat</div>
    </div>
   </section>
  </main>

  <div aria-hidden="true" aria-labelledby="workoutModalLabel" class="modal fade" id="workoutModal" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content workout-modal-content">
     <div class="modal-header border-0">
      <h5 class="modal-title" id="workoutModalLabel">Select Workout Type</h5>
      <button aria-label="Close" class="btn-close btn-close-white" data-bs-dismiss="modal" type="button"></button>
     </div>
     <div class="modal-body">
      <div class="workout-type-selection">
       <select aria-label="Workout type selection" class="form-select" id="workoutType">
        <option value="Muscle Day">Muscle Day</option>
        <option value="Cardio Day">Cardio Day</option>
        <option value="Rest Day">Rest Day</option>
        <option value="Flexibility Day">Flexibility Day</option>
        <option value="HIIT Day">HIIT Day</option>
       </select>
      </div>
     </div>
     <div class="modal-footer border-0">
      <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
      <button class="btn btn-primary" id="saveWorkoutBtn" type="button">Save Workout</button>
     </div>
    </div>
   </div>
  </div>
  <footer>© 2025 Barracks Gym. All rights reserved.</footer>
  
  <script src="scripts/membership.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>