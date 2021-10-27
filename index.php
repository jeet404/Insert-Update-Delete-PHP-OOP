<?php
include_once 'dbMySql.php';
$con = new DB_con();
$res = $con->select();
$ins = $con->insert();
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OOP using PHP</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script type="text/javascript">
        function del_id(id) {
            if (confirm('Sure to delete this record ?')) {
                window.location = 'delete_data.php?delete_id=' + id;
            }
        }

        function edit_id(id) {
            if (confirm('Sure to edit this record ?')) {
                window.location = 'edit_data.php?edit_id=' + id;
            }
        }
    </script>
</head>

<body>
    <center>
        <div class="header">
            <div class="content">
                <label>JEET404</label>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Registration Form in PHP</h3>
                        </div>

                        <div class="card-body">
                            <form action="" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" First Name" name="fname">
                                <input type="text" class="form-control mb-2" placeholder=" Last Name " name="lname">
                                <input type="text" class="form-control mb-2" placeholder=" City " name="city">
                                <input type="submit" class="btn btn-primary" name="submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="body">
            <div id="content">
                <table align="center">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th colspan="2">edit/delete</th>
                    </tr>
                    <?php
                    while ($row = mysql_fetch_row($res)) {
                    ?>
                        <tr>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td align="center"><a href="javascript:edit_id(<?php echo $row[0]; ?>)"><img src="b_edit.png" alt="EDIT" /></a></td>
                            <td align="center"><a href="javascript:del_id(<?php echo $row[0]; ?>)"><img src="b_drop.png" alt="DELETE" /></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="footer">
            <div class="content">
                <hr /><br />
                <label>JEET404</label><br>
                <a href="setconn.php">Check DataBase Connection</a>
            </div>
        </div>

    </center>
</body>

</html>