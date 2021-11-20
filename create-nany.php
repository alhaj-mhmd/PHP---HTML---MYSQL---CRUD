<?php





// Include config file
require_once "config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST["username"];
    $password = $_POST['password'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $phoneNo = $_POST['phoneNo'];
    $registeredBy = $_POST['registeredBy'];

    // Prepare an insert statement
    $sql = "INSERT INTO nanny
     (username,password, fullName,  address, phoneNo,registeredBy)     
      VALUES ( '$username','$password','$fullName','$address','$phoneNo','$registeredBy'  )";

    $stmt = $pdo->prepare($sql);



    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to login page
        header("location: nanies.php");
    } else {
        echo "Something went wrong. Please try again.";
    }

    // Close statement
    unset($stmt);



    // Close connection
    unset($pdo);
}
?>
<?php $page_title = "Create Nanny";   include_once 'header.php'; ?>



<div >
    <div>
        <div >
            <h2>Create Nany</h2>
            <p>Please fill this form to create Nanny.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div >
                    <label>Username</label>
                    <input type="text" name="username">
                </div>

                <div >
                    <label>Password</label>
                    <input type="password" name="password">

                </div>

                <div >
                    <label>Full Name</label>
                    <input type="text" name="fullName">
                </div>
                <div >
                    <label>Address</label>
                    <input type="text" name="address" >
                </div>
                <div >
                    <label>Phone</label>
                    <input type="text" name="phoneNo" >
                </div>
                <div >
                    <label>Registered By</label>
                    <select name="registeredBy"  required>
                        <option value="adminsmiles">adminsmiles</option>

                    </select>

                </div>
                <div class="form-group">
                    <input type="submit"  value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
    <div>
        <dic >
            <p>Go to <a href="nanies.php">Nanny List</a></p>
        </dic>
    </div>
</div>

<?php include_once 'footer.php'; ?>