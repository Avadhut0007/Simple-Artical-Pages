<?php
    include('header.php');
    include('config.php');
?>
<style>
    body{
          
        @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

        /* background-color: #ff8af3; */
        background-image: url("signup.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        font-family: "Montserrat", sans-serif;
    }
    
    </style>
    <section class="container">
    <div class="col-7 p-5 mx-auto onsubmit="return false;">
                <div class="card h-500" >
                <div class="card-body">
    <h1 class="pt-5"><center>Sign Up</h1></center></br>
    <form action="./userSignUp.php" method="post">

        <div class="mb-3 mx-auto">
           <center> <label for="user"  class="form-label">Username</center></label>
            <input type="text" name="username" class="form-control" id="Username" placeholder="Username">
            <div id="userError" class="form-text" style="color: red;"></div>
        </div>
        <div class="mb-3">
           <center> <label for="email"  class="form-label">Email address</center></label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
            <div id="emailError" class="form-text" style="color: red;"></div>
        </div>
        <div class="mb-3">
           <center> <label for="password"  class="form-label">Password</center></label>
            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
            <div id="passwordError" class="form-text" style="color: red;"></div>
        </div>
        <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
        <!-- <form action="./userSignUp.php" method="post"> -->
</div>
                    </div>
                    </div>
    </form>
    </section>

    <!-- <script>
        document.getElementById('submitbtn').addEventListener('click', function() {
            let user = document.getElementById('Username').value;
            let email = document.getElementById('Email').value;
            let password = document.getElementById('Password').value;

            document.getElementById('userError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';

            if(user == '') {
                document.getElementById('userError').innerText = 'Username is required';
            }  else if(email == '') {
                document.getElementById('emailError').innerText = 'Email is required';
            } else if(password == '') {
                document.getElementById('passwordError').innerText = 'Password is required';
            } else {
                 alert('hii');
                // <form action="./userSignUp.php" method="post">
                // echo 'User Created <a href="./signin.php">Click Here To Login</a>';
            }
        });
    </script> -->
<?php
    // include('./inc/footer.php');
?>