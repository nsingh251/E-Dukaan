<?php
    session_start();
    
error_reporting(0);
    echo $_SESSION['email'];
    $email =  $_SESSION['email'];

    if(isset($_GET['id'])){
        $pid=$_GET['id'];
        echo $pid;
    }

    $pid_ar=array($pid);
        $qid_ar=array(1);

        $conn=mysqli_connect("localhost","root","","retaildatabase");
        if(!$conn)
       {
           echo "not connected";
        }
       else echo "success";
       $q="SELECT * FROM `add_to_cart` WHERE `email` = '$email' ";
        $r=mysqli_query($conn,$q);
       
        $row = mysqli_fetch_assoc($r);
        
        $p_ar=$row["products"];
        $p_unsr=unserialize(base64_decode($p_ar));
        $q_ar=$row["quantity"];
        $q_unsr=unserialize(base64_decode($q_ar));

        if(!empty($p_unsr)){
            $i=0;
            
            foreach($p_unsr as $pvalue){
                //echo $pvalue;
               // echo "inside for $pid $pvalue";
                if($pid == $pvalue){
                    
                    //echo "inside if";
                    $a1=array_slice($p_unsr, 0, $i);
                    $q1=array_slice($q_unsr, 0, $i);
                    //print_r($q1);
                    $a2=array_slice($p_unsr, ($i+1));
                    //print_r($a2);
                    $q2=array_slice($q_unsr, ($i+1));
                    //print_r($q2);
                    
                    $p_unsr=array_merge($a1,$a2);
                    //print_r($p_unsr);
                    $q_unsr=array_merge($q1,$q2);
                    //print_r($q_unsr);
                    
                   
                    
                    $p_sr=base64_encode(serialize($p_unsr));
                     $q_sr=base64_encode(serialize($q_unsr));
                   
                    $q="UPDATE `add_to_cart` SET `products`= '$p_sr',`quantity`= '$q_sr' WHERE `email` ='$email' ";
                    $r=mysqli_query($conn,$q);
                    
                    if($r){
                        // echo "<script>alert('product deleted $pid $pvalue');</script>";
                        echo '<script> window.location="ecart.php"</script>';         
                        }
                    else{
                        //echo "<script>alert('failed from1');</script>";
                       echo '<script> window.location="view_details.php"</script>';
                    }
                     break;
                }
                $i++;
                
            }
           
        }
        
    
?>
     