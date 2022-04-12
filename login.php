    <h3>Maze000 -0- Sign up</h3>

    <?php

            include 'connection.php';
            $msg='';
            if(isset($_POST['mail']) AND isset($_POST['password'])){
                $mail = $_POST['mail'];
                $password = $_POST['password'];
                             
                $search = mysqli_query($connection,"SELECT mail, password, active FROM user WHERE mail='".$mail."' AND password='".$password."' AND active='1'") or die(mysql_error()); 
                $match  = mysqli_num_rows($search);
                if($match > 0){
                    $msg = 'Login Complete! Thanks<br/>';
                }else{
                    $msg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
                }        
            
            }     
             
        ?>
         
        <?php 
            if($msg){ 
                echo $msg; 
            } ?> 
        <form action="login.php" method="post">
            <input type="text" name="mail" placeholder="mail" />
            <input type="password" name="password" placeholder="password" />
            <input type="submit"  value="Sign up" />
        </form>
        