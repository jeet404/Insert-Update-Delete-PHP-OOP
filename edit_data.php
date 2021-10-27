<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";
// data insert code starts here.
if (isset($_GET['edit_id'])) {
    $sql = mysql_query("SELECT * FROM users WHERE user_id=" . $_GET['edit_id']);
    $result = mysql_fetch_array($sql);
}
// data update code starts here.
if (isset($_POST['btn-update'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $city = $_POST['city_name'];

    $id = $_GET['edit_id'];
    $res = $con->update($table, $id, $fname, $lname, $city);
    if ($res) {
?>
        <script>
            alert('Record updated...');
            window.location = 'index.php'
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('error updating record...');
            window.location = 'index.php'
        </script>
<?php
    }
}
// data update code ends here.

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Data Insert and Select Data Using OOP</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> Registration Form in PHP</h3>
                    </div>

                    <div class="card-body">
                        <form method="post">
                            <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name" value="<?php echo $result['first_name']; ?>" />
                            <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name" value="<?php echo $result['last_name']; ?>" />
                            <input type="text" class="form-control mb-2" name="city_name" placeholder="City" value="<?php echo $result['user_city']; ?>" />
                            <input type="submit" class="btn btn-primary" name="btn-update" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>