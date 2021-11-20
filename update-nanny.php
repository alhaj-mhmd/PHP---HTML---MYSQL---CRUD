<?php 

require_once "config.php";

  include_once 'header.php';  
     // Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $username = $_POST["username"];
    $password = $_POST['password'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $phoneNo = $_POST['phoneNo'];
    $registeredBy = $_POST['registeredBy'];
 
    // Prepare an insert statement
    $sql_update = "UPDATE  nanny SET  password = '".$password."', fullName = '".$fullName."', 
     address = '".$address."' ,phoneNo = '".$phoneNo."'  ,registeredBy = '".$registeredBy."'   WHERE username = '".$username."' ";

    if ($stmt_update = $pdo->prepare($sql_update)) {
        

        // Attempt to execute the prepared statement
        if ($stmt_update->execute()) {
            ?>
            <div  >
            <div  >Updated Successfully</div>
            <div  >
                    <a   href="nanies.php">All Nanny</a>

                </div>
            </div>
             
     <?php   } else {
            echo "Something went wrong. Please try again.";
        }

        // Close statement
        unset($stmt_update);
    }


   
 
}
?>
 