<?php
// Include config file
require_once "config.php";
if (isset($_POST['username']) && $_POST['username'] != null) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM nanny WHERE username = '$username'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
}



unset($pdo);

?>
<?php $page_title = "Edit Nanny";
include_once 'header.php'; ?>
 

<div >
    <div>
        <div >


            <h2>Edit Nanny</h2>
            <p >Please fill this form to edit an nanny.</p>
            <form action="update-nanny.php" method="post">
                <input type="hidden" name="username" value="<?php echo $row['username'] ?>">
                <div >
                    <label>Username</label>
                    <input type="text" name="username"  readonly value="<?php echo $row['username'] ?>">
                </div>

                <div >
                    <label>Password</label>
                    <input type="password" name="password"  value="<?php echo $row['password'] ?>">

                </div>

                <div>
                    <label>Full Name</label>
                    <input type="text" name="fullName"  value="<?php echo $row['fullName'] ?>">
                </div>
                <div>
                    <label>Address</label>
                    <input type="text" name="address"  value="<?php echo $row['address'] ?>">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="text" name="phoneNo"  value="<?php echo $row['phoneNo'] ?>">
                </div>
                <div>
                    <label>Registered By</label>
                    <input type="text" name="registeredBy"  value="<?php echo $row['registeredBy'] ?>" >

                </div>


                <div >
                    <input type="submit"   value="Update">
                    <input type="reset" value="Reset">
                </div>
                <p>Go to my posts <a href="nanies.php">My nanny</a></p>
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>