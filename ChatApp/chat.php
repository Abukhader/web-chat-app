<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");//1:38:20 Time in vedio
    }
?>

<?php include_once "header.php"; ?>
<body>
   <div class="wrapper">
       <section class="chat-area">
          <header>
          <?php
          include_once "php/config.php";
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
          }
          ?>          

          
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="php/images/<?php echo $row['image'] ?>" alt="">
            <div class="details">
                <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                <p><?php echo $row['status']  ?></p> 
            </div>
            </header>
            <div class="chat-box">
             
            </div>
            <form action="#" class="typing-area">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="ingoing_id" value="<?php echo  $user_id; ?>" hidden >
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
       </section>
   </div>


   <script src="javascript/chat.js"></script> 
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>