<?php
    include('header.php');
    include('config.php');
?>

<style>
    body{
          
        @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

        /* background-color: #ff8af3; */
        /* background-image: url("signin.jpg"); */
        /* background-repeat: no-repeat;
        background-size:cover; */
        /* font-family: "Montserrat", sans-serif; */
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>

    <section class="container">
    <?php
        $sql = "SELECT * FROM test where id =".$_GET['id'];
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="col-10 p-10 mx-auto">
                 <div class="card h-500" >
                <div class="card-body">


                <div class="py-5">
                <h1 class="pb-5">'.$row['head'].'</h1>
                    <img src="'.$row['image'].'" style="width: 100%">
                    <p class="pt-5">'.$row['description'].'</p>
                </div>
                </div>
                </div>
                </div>
                ';
            }
        }
    ?>
    </section>
<?php
    // include('./inc/footer.php');
?>
