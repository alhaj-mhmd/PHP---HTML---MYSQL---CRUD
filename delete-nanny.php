
<?php
// Include config file
require_once "config.php";
$username = $_POST['username'];

 $sql="DELETE FROM nanny WHERE username='$username' LIMIT 1";
 $q = $pdo->prepare($sql);

    $response = $q->execute(array($username));  
    
    ?>
  <?php $page_title = "Delete Nanny"; include_once 'header.php'; ?>

       <div>
          <div >
             <div>
                <div >
                   The Nanny has been deleted!
                </div>
                <a href="nanies.php" >My Nannies</a>
                <a href="create-nany.php" >Create Nanny</a>
             </div>
          </div>
       </div>
   <?php include_once 'footer.php'; ?>