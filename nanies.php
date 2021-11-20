
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Posts</title>
 

</head>

<body>

 

    <div  >
        <div  >
            <div  >


                <?php
                // Include config file
                require_once "config.php";

                // Attempt select query execution
                try {
                    $sql = "SELECT * FROM nanny ";
                    $result = $pdo->query($sql);
                    if ($result->rowCount() > 0) {
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<tr>";
                        echo "<th>username</th>";
                        echo "<th>password</th>";
                        echo "<th>fullname</th>";
                        echo "<th>address</th>";
                        echo "<th>phonno</th>";
                        echo "<th>registeredby</th>";
                    
                        echo "<th>Delete</th>";
                        echo "<th>Edit</th>";
                        echo "</tr>";
                        while ($row = $result->fetch()) {
                            echo "<tr>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['fullName'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['phoneNo'] . "</td>";
                            echo "<td>" . $row['registeredBy'] . "</td>";
                           
                            echo '<td>
                                    <form action="delete-nanny.php" method="post">
                                        <input type="hidden" name="username" value="' . $row["username"] . '">
                                        <input class=" alert alert-danger" type="submit" name="submit" value="Delete">
                                    </form>   
                                        </td>';
                                                            echo '<td >
                                            <form action="edit-nanny.php" method="post">
                                                <input type="hidden" name="username" value="' . $row["username"] . '">
                                                <input class=" alert alert-info" type="submit" name="submit" value="Edit">
                                            </form>
                                        </td>';
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</div>";
                        // Free result set
                        unset($result);
                    } else {
                        echo "<div class='alert alert-info' >No records matching your query were found.</div>";
                    }
                } catch (PDOException $e) {
                    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                }

                // Close connection
                unset($pdo);

                ?>

            </div>
        </div>
        <div  >
            <div >
                <div  >
                    <a   href="create-nany.php">Create Nanny</a>

                </div>
            </div>
        </div>



    </div>
 
</body>

</html>