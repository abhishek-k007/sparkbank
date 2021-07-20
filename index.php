<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/responsive.css">
    <title>Spark Bank</title>

</head>
<body>
    <nav class="navbar">
        <div class="logo" id="homePage">
            <!-- logo -->
            <p class="noselect" style="cursor: pointer;">$park Bank</p>
        </div>
        <div>
            <ul class="item">
                <li><a href="#home">Home</a></li>
                <li><a href="transactionHistory.php">Transaction Records</a></li>
            </ul>
        </div>
    </nav>
    <section class="main" id="home">
        <div class="content">
            <p>Welcome to Spark Banking System. Click on view customers to transfer money. </p>
            <button class="btn" id="customers">View Customers</button>
        </div>
        <div class="image">

        </div>
    </section>
    <section id="services">
        <div class="card">
           <div class="card_content">
                <img src="./images/users.png" alt="">
                <button id="customersPage" class="btn">View Customers</button>
            </div>
            
            <div class="card_content">
                <img src="./images/history.png" alt="">
                <button class="btn" id="transactionPage">Check transactions</button>
            </div>
        </div>
    </section>
    <footer> &copy; Spark Bank   || Site is designed by Abhishek Kumar</footer>
    <script type="text/javascript">
        document.getElementById("customers").onclick = function () {
            location.href = "customers.php";
        };
        document.getElementById("customersPage").onclick = function () {
            location.href = "customers.php";
        };
        document.getElementById("transactionPage").onclick = function () {
            location.href = "transactionHistory.php";
        };
        document.getElementById("homePage").onclick = function () {
            location.href = "index.php";
        };
    </script>
</body>
</html>