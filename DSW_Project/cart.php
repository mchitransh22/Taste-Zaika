<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Taste Zaika</title>
    <style type="text/css">
        h1{
            margin:2%;
            text-align:center;
            color:white;
            font-family:cursive;
        }
        body{  
            padding: 0;  
            font-family: sans-serif; 
            background-image: url(bgwall.jpg); 
            background-size: cover;
            background-position:center; 
           }
        .content-table{
            border-collapse: collapse;
            margin:50px auto;
            font-size: 20px;
            min-width:400px;
            color:#ffffff;
            border-radius:5px 5px 0 0;
            overflow:hidden;
            box-shadow:0 0 20px rgba(0,0,0,0.15);
        }
        .content-table thead tr{
            background-color:hotpink;
            color:#ffffff;
            text-align:left;
            font-weight:bold;
        }
        .content-table th,
        .content-table td{
            padding:12px 15px;
            text-align:center;
        }
        .content-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(odd){
            background-color:#FFB6C1;
        }
        .content-table tbody tr:nth-of-type(even){
            background-color:#F3CFC6;
        }
        .content-table tbody tr:last-of-type{
            border-bottom:2px solid hotpink;
        }
        p{
            margin:0;
            padding:2px;
            font-family:cursive;
            font-size:20px;
            color:palevioletred;
            text-align:right;
            font-weight:bold;
            width:950px;   
        }
        h6{
            color:white;
            font-size:30px;
            text-align:center;
        }
        h5{
            color:white;
            font-size:15px;
            text-align:left;
            padding:1px;
            margin:0px;
            margin-left:100px;
        }
        .home
        {
        position:absolute;
        top: 45px;
        left: 125px;
        z-index: 2;
        }
        .paytm
        {
        position:absolute;
        top: 550px;
        left: 1125px;
        z-index: 2;
        }
        .gpay
        {
        position:absolute;
        top: 550px;
        left: 1200px;
        z-index: 2;
        }
        .pp
        {
        position:absolute;
        top: 550px;
        left: 1275px;
        z-index: 2;
        }
        .upi
        {
        position:absolute;
        top: 550px;
        left: 1350px;
        z-index: 2;
        }
        </style>
</head>
<body>
<a href="tastezaika_main.html">
        <img src="squarelogo.jpg" class="home"/ height="100" width="100"></a>
    <?php
    include 'database.php';
    $sql="SELECT Username from signed_in order by id desc";
    $result = $con->query ($sql);
    $row=$result->fetch_assoc();
    echo "<h1>"."Hello , ".$row["Username"]."</h1>";
    $con->close();
    ?>
    <table class="content-table">
        <thead>
        <tr>
            <th>Dish</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
</thead>
<tbody>
        <?php
        include 'database.php';
        $sql="SELECT q1 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        $checkq=$row["q1"];
        if($checkq>0)
        {
        $sql="SELECT d1,p1,q1,a1 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<tr><td>".$row["d1"]."</td><td>".$row["p1"]."</td><td>".$row["q1"]."</td><td>".$row["a1"]."</td></tr>";
        }
        $sql="SELECT q2 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        $checkq=$row["q2"];
        if($checkq>0)
        {
        $sql="SELECT d2,p2,q2,a2 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<tr><td>".$row["d2"]."</td><td>".$row["p2"]."</td><td>".$row["q2"]."</td><td>".$row["a2"]."</td></tr>";
        }
        $sql="SELECT q3 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        $checkq=$row["q3"];
        if($checkq>0)
        {
        $sql="SELECT d3,p3,q3,a3 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<tr><td>".$row["d3"]."</td><td>".$row["p3"]."</td><td>".$row["q3"]."</td><td>".$row["a3"]."</td></tr>";
        }
        $sql="SELECT q4 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        $checkq=$row["q4"];
        if($checkq>0)
        {
        $sql="SELECT d4,p4,q4,a4 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<tr><td>".$row["d4"]."</td><td>".$row["p4"]."</td><td>".$row["q4"]."</td><td>".$row["a4"]."</td></tr>";
        }
        $sql="SELECT q5 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        $checkq=$row["q5"];
        if($checkq>0)
        {
        $sql="SELECT d5,p5,q5,a5 from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<tr><td>".$row["d5"]."</td><td>".$row["p5"]."</td><td>".$row["q5"]."</td><td>".$row["a5"]."</td></tr>";
        }
        echo "</table>";
        $sql="SELECT sum from billing_data order by id DESC";
        $result = $con->query ($sql);
        $row=$result->fetch_assoc();
        echo "<p>"."Item Total :".$row["sum"]."</p>";
        $gtotal=$row["sum"];
        $tax=0.18*$gtotal;
        $gtotal=($gtotal*1.18)+50;
        echo "<p>"."Delivery charges : 50"."</p>";
        echo "<p>"."Tax and charges: ".$tax."</p>";
        echo "<p>"."Grand Total : "."₹".$gtotal."</p>";
        $con->close();
        ?>
        </tbody>
    </table>
    <footer>
    <h6>Thanks for Ordering.</h6>
        <a href="payqr.jpeg">
        <img src="paytm.png" class="paytm"/ height="45" width="45"></a>
        <a href="payqr.jpeg">
        <img src="gpay.png" class="gpay"/ height="45" width="45"></a>
        <a href="payqr.jpeg">
        <img src="pp.jpg" class="pp"/ height="45" width="45"></a>
        <a href="payqr.jpeg">
        <img src="upi.jpg" class="upi"/ height="45" width="45"></a>
    <h5> © Copyright TasteZaika Pvt. Ltd. 2021</h5>
    <h5>All rights Reserved.</h5>
    </footer>
</body>
</html>