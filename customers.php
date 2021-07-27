<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/responsive.css">
</head>
<body>
    <nav class="navbar navbar-customer">
        <div class="logo" id="homePage">
            <!-- logo -->
            <p class="noselect"style="cursor: pointer;">$park Bank</p>
        </div>
        <div>
            <ul class="item">
                <li><a href="index.php">Home</a></li>
                <li><a href="transactionHistory.php">Transaction history</a></li>
            </ul>
        </div>
    </nav>
    <h1>Customers List</h1>
    <div >
        <table class="main-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Current Balance</th>
                    <th>Transfer</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $server = "sql104.epizy.com";
                $username = "epiz_29252303";
                $password = "tC4ThVMcmyWK8S";
                $db = "epiz_29252303_spark";

                //establish connection
                $con = mysqli_connect($server, $username, $password,$db);

                //check for error
                if(!$con){
                    die("Connection to this database failed due to " . mysqli_connect_error());
                }
               
                $selectquery = "select * from customers";
                $query = mysqli_query($con, $selectquery);
                $rownum = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $res['Id'] ?></td>
                        <td><?php echo $res['Name'] ?></td>
                        <td><?php echo $res['Email'] ?></td>
                        <td><?php echo $res['Balance'] ?></td>
                        <td><button style="padding: 4px;"><a style="text-decoration: none; color: black;" href="transaction.php?id=<?php echo $res['Id'] ?>"><p>Transact</p></a></button></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <script>
        document.getElementById("homePage").onclick = function () {
            location.href = "index.php";
        };
    </script>
    <footer> &copy; Spark Bank ||  Site is designed by Abhishek Kumar</footer>
</body>
</html>
