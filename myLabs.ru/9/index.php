<!DOCTYPE html>
<html>
<head>
  <title>JavaScript Event Handling</title>
</head>
<body>
  <button id="generateNumberBtn">Generate Random Number</button>
  <p id="randomNumber"></p>
  
  <button id="generatePasswordBtn">Generate Random Password</button>
  <p id="randomPassword"></p>
  
  <p id="timer"></p>

  <script>
    document.getElementById('generateNumberBtn').addEventListener('click', function() {
      var randomNumber = Math.floor(Math.random() * 100) + 1;
      document.getElementById('randomNumber').innerText = 'Random Number: ' + randomNumber;
    });

    function generateRandomPassword(length) {
      var charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      var password = '';
      for (var i = 0; i < length; i++) {
        password += charset.charAt(Math.floor(Math.random() * charset.length));
      }
      return password;
    }

    document.getElementById('generatePasswordBtn').addEventListener('click', function() {
      var randomPassword = generateRandomPassword(8);
      document.getElementById('randomPassword').innerText = 'Random Password: ' + randomPassword;
    });
    
    
    var countdown = 60;
    var timer = setInterval(function() {
      document.getElementById('timer').innerText = 'Time left: ' + countdown + ' seconds';
      countdown--;
      if (countdown < 0) {
        clearInterval(timer);
        document.getElementById('timer').innerText = 'Time is up!';
      }
    }, 1000);
  </script>
</body>
</html>
