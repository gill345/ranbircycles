function emailNotFound(){
    alert("Email Not Found. Sign Up Instead");
    window.location.href = "signup.php";
}

function emailAlreadyExists(){
    alert("Account with this email already exists! Login Instead");
    window.location.href = "index.php";
}

function incorrectPassword(){
    alert("Incorrect Password");
    window.location.href = "index.php";
}

function successfulRegistration(){
    alert('Registration successful!');
    window.location.href = 'index.php';
}

function logout() {
    alert('Successfully Logged Out!');
    setTimeout(function() {
    window.location.href = 'index.php';
    },      20); 
  }


function validateDates() {
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    const currentDate = new Date().toISOString().split('T')[0];

    if (startDate < currentDate || endDate < currentDate) {
        alert('Dates cannot be before the current date.');
            return false;
            }

    if (startDate > endDate) {
        alert('End date cannot be before start date.');
        return false;
            }

            return true;
        }
