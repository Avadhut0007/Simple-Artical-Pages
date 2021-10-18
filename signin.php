<?php
    include('header.php');
    include('config.php');
?>
<style>
    body{
          
        @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

        /* background-color: #ff8af3; */
        background-image: url("signin.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        /* font-family: "Montserrat", sans-serif; */
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
    

    <section class="container">
    <div class="col-7 p-5 mx-auto">
                <div class="card h-500" >
                <div class="card-body">
    <h1 class="pt-5"><center>Sign In</h1></center></br>
    <form action="./userSignIn.php" method="post">
        <div class="mb-3 " >
           <center> <label for="exampleFormControlInput1" class="form-label">Username</center></label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
        <div class="mb-3 " >
            <center><label for="exampleFormControlInput1" class="form-label">Password</center></label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <center> <button>Submit</center></button>
</div>
                </div>
                </div>
    </form>
    </section>
<?php
    // include('./inc/footer.php');
?>