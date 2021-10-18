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
    <div class="col-7 p-5 mx-auto">
                <div class="card h-500" >
                <div class="card-body">
    <h1 class="pt-5"><center>Contact Us</h1></center>
    <form action="./contactRes.php" method="post">

        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label text-center">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <div id="emailError" class="form-text" style="color: red;"></div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Any Query or Suggestion</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            <div id="messageError" class="form-text" style="color: red;"></div>
        </div>
        
        <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
        <!-- <form action="./contactRes.php" method="post"> -->

    </form>
</div>
</div>
</div>
    </section>

    <!-- <script>
        document.getElementById('submitbtn').addEventListener('click', function() {
            let user = document.getElementById('email').value;
            let email = document.getElementById('message').value;
            

            document.getElementById('emailError').innerText = '';
            document.getElementById('messageError').innerText = '';
           

            if(user == '') 
            {
                document.getElementById('emailError').innerText = 'Email is required';
            }  else if(email == '') 
            {
                document.getElementById('messageError').innerText = 'Message is required';
            } 
            else 
            {
                alert(''submitted sucessfully <a href="./contactRes.php">ok</a>';');
                // echo 'submitted sucessfully <a href="./contactRes.php">Click Here To Login</a>';
            }
        });
    </script> -->

<?php
    // include('./inc/footer.php');
?>