<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<?php
    include_once "header.php";
?>
<body>
   <div class="wrapper">
       <section class="form login">
           <header> Realtime Chat App </header>
           <form action="#">
               <div class="error-txt"></div>
                <div class="filed input">
                    <label>Email Address </label>
                    <input type="text" name="email" placeholder="Enter Your Email ">
                </div>
                <div class="filed input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password ">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="filed button">
                    <input type="submit" value="Continue to chat">
                </div>
               
           </form>
           <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
       </section>
   </div>



   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="javascript/pass-show-hide.js"></script>
   <script src="javascript/login.js"></script>
</body>
</html>