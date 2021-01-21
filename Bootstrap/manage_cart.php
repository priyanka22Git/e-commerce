<?php

session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
         $myitems=array_column($_SESSION['cart'],'Item_Name');
         if(in_array($_POST['Item_Name'],$myitems))
         {
             echo"<script>
             alert('Item already added');
             window.location.href='products.php';
             </script>";
         }else{
         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price']);
         echo"<script>
             alert('Item Added');
             window.location.href='products.php';
             </script>";
         }
        
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price']);
            echo"<script>
             alert('Item Added');
             window.location.href='products.php';
             </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key=> $value)
        {   if($value['Item_Name']==$_POST['Item_Name'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
            alert('Item Removed');
            window.location.href='cart.php';
            
            </script>";
            }
        }
    
    }
}
?>
