<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $email=$_POST['emailid'];
    $phno=$_POST['phno'];
    $id=$_POST['uname'];
    $pass=$_POST['pass'];
	
    $sql="insert into tz_users(Name,Email,Phone_Number,Username,Password)
            values('$name','$email','$phno','$id','$pass')";
            if(mysqli_query($con,$sql))
            {
                echo "<script>alert('User Added Successfully.');window.location ='http://localhost/DSW_Project/signin.html';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
elseif(isset($_POST['submit1']))
{
    $eid=$_POST['uname'];
    $epass=$_POST['pass'];
    $sql1= "SELECT * FROM tz_users WHERE Username = '$eid' AND Password = '$epass'";
    $result = mysqli_query($con,$sql1);
    $check = mysqli_fetch_array($result);
    if(isset($check))
    { 
        echo "<script>alert('Signed in Successfully.');window.location ='http://localhost/DSW_Project/aftersignin.html';</script>";
        $sql2="insert into signed_in(Username)
        values('$eid')";
        mysqli_query($con,$sql2);
    }
    else
    {
        echo "<script>alert('Wrong Credentials . Please Try Again.');window.location ='http://localhost/DSW_Project/signin.html';</script>";
        
    }
    mysqli_close($con); 
}
elseif(isset($_POST['hira']))
{
    $res_name='Hira Sweets';
    $getid="SELECT Username from signed_in order by id desc";
    $result=$con->query($getid);
    $row=$result->fetch_assoc();
    $signinid=$row["Username"];
    $q1=(int)$_POST['first'];
    $q2=(int)$_POST['second'];
    $q3=(int)$_POST['third'];
    $q4=(int)$_POST['fourth'];
    $q5=(int)$_POST['fifth'];
    $d1='Veg Aloo Tikki';
    $d2='Chole Bhature';
    $d3='Veg Noodles';
    $d4='Choco Lava Cakes';
    $d5='Chocolate Oreo Shake';
    $p1=85;
    $p2=119;
    $p3=136;
    $p4=55;
    $p5=75;
    $a1=$q1*$p1;
    $a2=$q2*$p2;
    $a3=$q3*$p3;
    $a4=$q4*$p4;
    $a5=$q5*$p5;
    $sum=$a1+$a2+$a3+$a4+$a5;
    $sql2="insert into billing_data(User_ID,res_name,d1,d2,d3,d4,d5,q1,q2,q3,q4,q5,p1,p2,p3,p4,p5,a1,a2,a3,a4,a5,sum)
            values('$signinid','$res_name','$d1','$d2','$d3','$d4','$d5','$q1','$q2','$q3','$q4','$q5','$p1','$p2','$p3','$p4','$p5','$a1','$a2','$a3','$a4','$a5','$sum')";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('Items added to cart.');window.location='http://localhost/DSW_Project/cart.php';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
elseif(isset($_POST['lapino']))
{
    $res_name='La Pino';
    $getid="SELECT Username from signed_in order by id desc";
    $result=$con->query($getid);
    $row=$result->fetch_assoc();
    $signinid=$row["Username"];
    $q1=(int)$_POST['first'];
    $q2=(int)$_POST['second'];
    $q3=(int)$_POST['third'];
    $q4=(int)$_POST['fourth'];
    $q5=(int)$_POST['fifth'];
    $p1=445;
    $p2=400;
    $p3=480;
    $p4=355;
    $p5=75;
    $d1='Veggie Supreme Pizza';
    $d2='Peppy Panner Pizza';
    $d3='Farmhouse Pizza';
    $d4='Margherita Pizza';
    $d5='Pepsi';
    $a1=$q1*$p1;
    $a2=$q2*$p2;
    $a3=$q3*$p3;
    $a4=$q4*$p4;
    $a5=$q5*$p5;
    $sum=$a1+$a2+$a3+$a4+$a5;
    $sql2="insert into billing_data(User_ID,res_name,d1,d2,d3,d4,d5,q1,q2,q3,q4,q5,p1,p2,p3,p4,p5,a1,a2,a3,a4,a5,sum)
    values('$signinid','$res_name','$d1','$d2','$d3','$d4','$d5','$q1','$q2','$q3','$q4','$q5','$p1','$p2','$p3','$p4','$p5','$a1','$a2','$a3','$a4','$a5','$sum')";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('Items added to cart.');window.location='http://localhost/DSW_Project/cart.php';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
elseif(isset($_POST['kaleva']))
{
    $res_name='Kaleva';
    $getid="SELECT Username from signed_in order by id desc";
    $result=$con->query($getid);
    $row=$result->fetch_assoc();
    $signinid=$row["Username"];
    $q1=(int)$_POST['first'];
    $q2=(int)$_POST['second'];
    $q3=(int)$_POST['third'];
    $q4=(int)$_POST['fourth'];
    $q5=(int)$_POST['fifth'];
    $p1=245;
    $p2=400;
    $p3=180;
    $p4=280;
    $p5=185;
    $d1='Tandoori Chicken';
    $d2='Deluxe Thali';
    $d3='Kaleva special Chowmein';
    $d4='Mix Veg Sizzler';
    $d5='Virgin Mojito';

    $a1=$q1*$p1;
    $a2=$q2*$p2;
    $a3=$q3*$p3;
    $a4=$q4*$p4;
    $a5=$q5*$p5;
    $sum=$a1+$a2+$a3+$a4+$a5;
    $sql2="insert into billing_data(User_ID,res_name,d1,d2,d3,d4,d5,q1,q2,q3,q4,q5,p1,p2,p3,p4,p5,a1,a2,a3,a4,a5,sum)
            values('$signinid','$res_name','$d1','$d2','$d3','$d4','$d5','$q1','$q2','$q3','$q4','$q5','$p1','$p2','$p3','$p4','$p5','$a1','$a2','$a3','$a4','$a5','$sum')";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('Items added to cart.');window.location='http://localhost/DSW_Project/cart.php';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
elseif(isset($_POST['yellowchilli']))
{
    $res_name='Yellow Chilli';
    $getid="SELECT Username from signed_in order by id desc";
    $result=$con->query($getid);
    $row=$result->fetch_assoc();
    $signinid=$row["Username"];
    $q1=(int)$_POST['first'];
    $q2=(int)$_POST['second'];
    $q3=(int)$_POST['third'];
    $q4=(int)$_POST['fourth'];
    $q5=(int)$_POST['fifth'];
    $p1=130;
    $p2=120;
    $p3=170;
    $p4=55;
    $p5=45;
    $d1='Sweet corn soup';
    $d2='Pav Bhaji';
    $d3='Shahi Paneer';
    $d4='Butter Naan';
    $d5='Rasmalai';
    $a1=$q1*$p1;
    $a2=$q2*$p2;
    $a3=$q3*$p3;
    $a4=$q4*$p4;
    $a5=$q5*$p5;
    $sum=$a1+$a2+$a3+$a4+$a5;
    $sql2="insert into billing_data(User_ID,res_name,d1,d2,d3,d4,d5,q1,q2,q3,q4,q5,p1,p2,p3,p4,p5,a1,a2,a3,a4,a5,sum)
            values('$signinid','$res_name','$d1','$d2','$d3','$d4','$d5','$q1','$q2','$q3','$q4','$q5','$p1','$p2','$p3','$p4','$p5','$a1','$a2','$a3','$a4','$a5','$sum')";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('Items added to cart.');window.location='http://localhost/DSW_Project/cart.php';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
elseif(isset($_POST['burgerking']))
{
    $res_name='Burger King';
   $getid="SELECT Username from signed_in order by id desc";
    $result=$con->query($getid);
    $row=$result->fetch_assoc();
    $signinid=$row["Username"];
    $q1=(int)$_POST['first'];
    $q2=(int)$_POST['second'];
    $q3=(int)$_POST['third'];
    $q4=(int)$_POST['fourth'];
    $q5=(int)$_POST['fifth'];
    $p1=55;
    $p2=87;
    $p3=86;
    $p4=49;
    $p5=75;
    $d1='Crispy Veg Burger';
    $d2='Crispy chicken Burger';
    $d3='Fries';
    $d4='Veggie Strips';
    $d5='Pepsi';
    $a1=$q1*$p1;
    $a2=$q2*$p2;
    $a3=$q3*$p3;
    $a4=$q4*$p4;
    $a5=$q5*$p5;
    $sum=$a1+$a2+$a3+$a4+$a5;
    $sql2="insert into billing_data(User_ID,res_name,d1,d2,d3,d4,d5,q1,q2,q3,q4,q5,p1,p2,p3,p4,p5,a1,a2,a3,a4,a5,sum)
    values('$signinid','$res_name','$d1','$d2','$d3','$d4','$d5','$q1','$q2','$q3','$q4','$q5','$p1','$p2','$p3','$p4','$p5','$a1','$a2','$a3','$a4','$a5','$sum')";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('Items added to cart.');window.location='http://localhost/DSW_Project/cart.php';
                </script>";
            }
            else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);           
}
?>