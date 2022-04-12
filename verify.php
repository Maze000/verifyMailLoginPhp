    
     <h3>Maze000 -0- Confirm</h3>
     
     <?php
      
      include 'connection.php';
                   
      if(isset($_GET['mail']) AND isset($_GET['hash'])){
          
          $mail = ($_GET['mail']); 
          $hash = ($_GET['hash']); 
                       
          $select = "SELECT mail, hash, active FROM user WHERE mail='".$mail."' AND hash='".$hash."' AND active='0'" or die(mysql_error());
          $search = mysqli_query($connection,$select); 
          
          $match  = mysqli_num_rows($search);
                       
          if($match > 0){
              $update = "UPDATE user SET active='1' WHERE mail='".$mail."' AND hash='".$hash."' AND active='0'" or die(mysql_error());
              mysqli_query($connection, $update);
              echo "Your account has been activated, you can now <a style='font-weight:bold;color:#2BA6CB;' target='_blank' href='https://yourWebSite/login.php'> Login </a>";
          }else{
              echo 'The url is invalid or you already have activated your account.';
          }
                       
      }else{
          echo 'Access denied, please use the link that has been send to your email.';
      }
          
     ?>
        
