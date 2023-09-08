<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $ingoing_id = mysqli_real_escape_string($conn, $_POST['ingoing_id']);
        $output = "";

        $sql = "SELECT * FROM messages
                LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (ingoing_msg_id = {$ingoing_id} AND outgoing_msg_id = {$outgoing_id})
                OR (ingoing_msg_id = {$outgoing_id} AND outgoing_msg_id = {$ingoing_id}) ORDER BY msg_id";

        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){ //if equal he is a msg sender 
                    $output .= '<div class="outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{//he is a msg receiver
                    $output .= '<div class="ingoing">
                                <img src="php/images/'.$row['image'].' " alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>'; 
                }
            }
            echo $output;
        }
        
    }else{
        header("../login.php");
    }
    
    
    
    

?>