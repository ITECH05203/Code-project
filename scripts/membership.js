let currentDate = new Date();
let selectedDay = null;
const monthNames = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const calendarContainer = document.getElementById("calendar");
const monthYearElement = document.getElementById("monthYear");


function updateCalendar() {
  const month = currentDate.getMonth();
  const year = currentDate.getFullYear();

  monthYearElement.textContent = `${monthNames[month]} ${year}`;


  const firstDayOfMonth = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();


  while (calendarContainer.children.length > 7) {
    calendarContainer.removeChild(calendarContainer.lastChild);
  }


  for (let i = 0; i < firstDayOfMonth; i++) {
    const emptyDiv = document.createElement("div");
    emptyDiv.setAttribute("aria-hidden", "true");
    calendarContainer.appendChild(emptyDiv);
  }

  for (let i = 1; i <= daysInMonth; i++) {
    const dayDiv = document.createElement("div");
    dayDiv.classList.add("day");
    dayDiv.setAttribute("data-day", i);
    dayDiv.setAttribute("role", "gridcell");
    dayDiv.setAttribute("tabindex", "0");
    dayDiv.setAttribute("aria-label", `Day ${i}, no workout assigned`);
    dayDiv.innerHTML = `
      <span class="date-number">${i}</span>
      <div class="workout-type empty" id="workout-type-${i}">Select workout</div>
    `;
    calendarContainer.appendChild(dayDiv);


    dayDiv.addEventListener("click", () => showModal(i));
    dayDiv.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        showModal(i);
      }
    });
  }
}


function showModal(day) {
  selectedDay = day;
  const workoutModal = new bootstrap.Modal(
    document.getElementById("workoutModal")
  );
  workoutModal.show();
}

document.getElementById("saveWorkoutBtn").onclick = function () {
  const workoutType = document.getElementById("workoutType").value;
  const workoutTypeDiv = document.getElementById(`workout-type-${selectedDay}`);
  workoutTypeDiv.innerText = workoutType;
  workoutTypeDiv.classList.remove("empty");
  const dayDiv = workoutTypeDiv.parentElement;
  dayDiv.setAttribute(
    "aria-label",
    `Day ${selectedDay}, workout assigned: ${workoutType}`
  );
  const workoutModal = bootstrap.Modal.getInstance(
    document.getElementById("workoutModal")
  );
  workoutModal.hide();
};


document.getElementById("prevMonth").onclick = function () {
  currentDate.setMonth(currentDate.getMonth() - 1);
  updateCalendar();
};

document.getElementById("nextMonth").onclick = function () {
  currentDate.setMonth(currentDate.getMonth() + 1);
  updateCalendar();
};


window.onload = updateCalendar;