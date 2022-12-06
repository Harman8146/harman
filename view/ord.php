<?php
$conn= mysqli_connect("localhost","root","","add");
    if(isset($_POST['sub']))
        {   

            $a=$_POST['t1'];
            $b=$_POST['t2'];
            $c=$_POST['t3'];
            $d=$_POST['t4'];
            $e=$_POST['t5'];
            $f=$_POST['t6'];
            $g=$_POST['t7'];
            $h=$_POST['t8'];
            $i=$_POST['t9'];
            $j=$_POST['t10'];
    
    
                    $query =  "INSERT INTO `order`( `first name`, `last name`, `username`, `city`, `state`, `zip`, `phone no`, `address`, `payment`, `quantity`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$i','$j','$h')";
                    $query_run = mysqli_query($conn,$query);
    
                    if($query_run)
                    {
                        //echo"working";
                        $_SESSION['sucesss']="contact  Added";
                        header("Location:buy.php");
                    }
                    else{
                           // echo"notworking";
                            $_SESSION['status']="contact is not added";
                            header("Location: buy.php");
                        }
        }
       ?>