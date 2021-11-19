<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="first.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container" >
    <div class="title">Yoga Class Registration</div>
    <div class="content">
      <form name = "myForm" action="sql.php" method="POST" onsubmit="return formvalidation()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id = "name" name = "name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" onblur="checkEmail();" placeholder="Enter your email" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="number" name="number" onblur="Validatemobile();" placeholder="Enter your number" >
            <span id="mobileprompt"></span>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" id="age" name = "age" onblur="checkAge();" placeholder="Enter your age" >
          </div>
        </div>
        <div class="gender-details">
          <input type="radio"  value="Male" name="gender" id="dot-1">
          <input type="radio" value="Female" name="gender" id="dot-2">
          <input type="radio" value="Prefer not to say" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
        </div>
          <div class="session-details">
            <span class="session-title">Schedule Preference</span>
            <div class="session-category">
              <input type="checkbox" value="Morning Session - 6:00AM to 7:00AM" id="details" name="details" id="dot-1">
              <span class="details">Morning Session - 6:00AM to 7:00AM</span><br>
              <input type="checkbox" value="Morning Session - 6:00AM to 7:00AM" id="details" name="details" id="dot-1">
              <span class="details">Morning Session - 7:00AM to 8:00AM</span><br>
              <input type="checkbox" value="Morning Session - 6:00AM to 7:00AM" id="details" name="details" id="dot-1">
              <span class="details">Morning Session - 8:00AM to 9:00AM</span><br>
              <input type="checkbox" value="Morning Session - 6:00AM to 7:00AM" id="details" name="details" id="dot-1">
              <span class="details">Evening Session - 5:00PM to 6:00PM</span>
          </div>
        </div><br>
          <div class = "session-charge">
            <span class="session-title">Session Packages</span>
            <div class="session-charge">
              <input type="checkbox" value="Unlimited Monthly(Rs.500 for each month)" id="charge" name="charge" id="dot-1" required>
              <span class="details">Unlimited Monthly(Rs.500 for each month)</span><br>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="insert" value="Register & Pay">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
