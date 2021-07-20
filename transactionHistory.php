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
        <p class="noselect" style="cursor: pointer;">$park Bank</p>
        </div>
        <div>
            <ul class="item">
                <li><a href="index.php">Home</a></li>
                <li><a href="customers.php">View Customers</a></li>
            </ul>
        </div>
    </nav>
    <h1>Transactions Record</h1>
    <div >
        <table class="main-table">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $server = "sql208.epizy.com";
                $username = "epiz_29174813";
                $password = "kSAbKi0tyQM";
                $db = "epiz_29174813_sparkbank";

                //to establish connection
                $con = mysqli_connect($server, $username, $password,$db);

                //to check
                if(!$con){
                    die("Connection to this database failed due to " . mysqli_connect_error());
                }
                // else{
                //     echo "Coonnection successful";
                // }

                $selectquery = "select * from transactions";
                $query = mysqli_query($con, $selectquery);
                $rownum = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $res['Sender'] ?></td>
                        <td><?php echo $res['Receiver'] ?></td>
                        <td><?php echo $res['Amount'] ?></td>
                        <td><?php echo $res['DateTime'] ?></td>
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
    <footer> &copy; Spark Bank || Site is designed by Abhishek Kumar</footer>
</body>
</html>