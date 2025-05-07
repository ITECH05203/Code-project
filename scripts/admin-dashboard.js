const users = [
  {
    username: 'john_doe',
    email: 'john@example.com',
    membership: {
      type: 'Premium',
      startDate: '2023-01-15',
      endDate: '2024-01-14'
    },
    program: {
      name: 'Muscle Gain',
      startDate: '2023-01-16'
    }
  },
  {
    username: 'jane_smith',
    email: 'jane@example.com',
    membership: {
      type: 'Basic',
      startDate: '2023-06-10',
      endDate: '2024-06-09'
    },
    program: {
      name: 'Fat Loss',
      startDate: '2023-06-11'
    }
  },
  {
    username: 'michael_lee',
    email: 'michael@example.com',
    membership: {
      type: 'Gold',
      startDate: '2023-03-05',
      endDate: '2024-03-04'
    },
    program: {
      name: 'Strength Training',
      startDate: '2023-03-06'
    }
  }
];


function populateUserTable() {
  const userTableBody = document.querySelector('#userTable tbody');
  userTableBody.innerHTML = ''; 

  users.forEach(user => {
    const row = document.createElement('tr');

    row.innerHTML = `
      <td>${user.username}</td>
      <td>${user.membership.type}</td>
      <td>${user.membership.startDate}</td>
      <td>${user.membership.endDate}</td>
      <td>${user.program.name}</td>
      <td>${user.program.startDate}</td>
    `;

    userTableBody.appendChild(row);
  });
}


populateUserTable();


document.querySelector('#logout').addEventListener('click', () => {
  alert('You have logged out!');

});