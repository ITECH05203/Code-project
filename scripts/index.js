document.getElementById('voucherForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim();
  const membership = document.getElementById('membershipType').value;
  const program = document.getElementById('program').value;

  if (username && password && membership && program) {
   
    localStorage.setItem('barracksUser', JSON.stringify({ username, membership, program }));

    alert(`Welcome, ${username}!\nMembership: ${membership}\nProgram: ${program}`);

   
    window.location.href = 'membership.html';
  } else {
    alert('Please fill in all fields.');
  }
});