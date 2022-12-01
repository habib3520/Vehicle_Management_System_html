<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-weight, initia; -scale=1.0"/>
<meta name="description" content=" it is a vehicle registration process" />



<title>vms</title>

</head>
<!--top-->
<body style="background-color:#fffbf0">
<div style="width:100%; height:100px; background-color:#CDE9D6 "> 


<h1 style="text-align:center; text-shadow:inherit; font-family:Verdana, Geneva, sans-serif;background-color:#e6e6e6; ">'Welcome To Khulna BRTA'</h1>
<h4 style="text-align: center; font-family:Verdana; ">
Way Of Vehicle Registration 
</h4>

 
</div>
<!--midle-->
<div style=" width:100%; display:flex; background-color:#A3BCB6;">

<!--links-->
		<div style=" width:15%; display:flex
        -basis; float:left; background-color:#cce6ff; text-align:center; text-decoration:none; ">
			<h2>Important links</h2>
            <br />
            <a href="http://www.khulna.gov.bd/" style="text-decoration:none">
            Khulna
            </a>
            <br />
            <br />
            <a href="http://www.dhakadiv.gov.bd/" style="text-decoration:none">
            Dhaka
            </a> 
            <br />
            <br />
            <a href="http:https://mail.google.com/" style="text-decoration:none">
            Gmail
            </a> 
            <br />
            <br />
             <a href="https://www.instagram.com/?hl=en" style="text-decoration:none">
            Instagram
            </a>                      
            <br />
            <br />
            <a href="https://www.facebook.com/" style="text-decoration:none">
            Facebook
            </a>
            <br />
            <br />
		</div>
<!--content-->
		<div style=" width:70%; display:flex-basis; float:left; background-color:FFF1CB;">
        <!--navi bar-->
        <div  style="background-color:#9494b8">
       <div>
      
       <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="index.html"> Home </a>
       </div>
       
       <div>
       <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="dgn.html"> Designers </a>
       
       </div>
 
        </div>
        <!--main content-->
        <br />
        <br />
        <div style=" margin-right:20%; background-color: #9494b8; text-align:center; margin-top:20%; margin-left:20%; margin-bottom:20%;">
			
            <form action="log_in.php" method="post" target="_self">
            
            <table width="100%">
            <tr>
           		<th colspan="2" style="padding:10px;"> Employee Log In </th>
				<th>  </th>            
            </tr>
            <tr>
            <td style="padding:5px;"> <label>Enter Your Id</label></td>
            <td> <input name="id" type="text" size="20" /></td>
            </tr>
            <tr>
            <td style="padding:5px;"><label>Enter Your Password</label> </td>
            <td> <input name="password" type="password" size="20" /></td>
            </tr>
             <tr>
            <td style="padding:5px;"> </td>
            <td style=" padding:10px;" ><input name="submit" type="submit" value="Log In" /> </td>
            </tr>
            </table>
            </form>
         
         </div> 
         <div>
        
          <!--PHP Start-->         
      <?php      
          
            
        if(isset($_POST['submit']))
		{
			$id = $_POST['id'];
			$pass = $_POST['password' ];
			
			echo $id;
			echo $pass;
			
			$con = new mysqli ("localhost","root","","vms");
			
			$sql = "SELECT * FROM `log_in` WHERE id= '".$id."'  and pass = '".$pass."'";
			
		$result= mysqli_query ($con,$sql);	 
		$found = mysqli_num_rows($result);
		
		if($found ==1 )
		{
			header("Location:main.php");
		}
		else
		{
			header("Location:incm.html");
		}	 		
		}        
            
    ?>
         <!--php end-->
         
         </div>
        
		</div>
<!--About-->
		<div style=" width:15%; display:flex-basis; float:left; background-color:#D2E4FD ;text-align:center;">
			<h4>About BRTA</h4>
            <p>
            Bangladesh Road Transport Authority was established under section 2A of the Motor Vehicle Ordinance of 1983 and the subsequent 1987 amendment. It has functioned since January 1988. BRTA is a regulatory body to control, manage and ensure discipline in the road transport sector of Bangladesh, as well as to maintain road safety.
            </p>
		</div>
  
<!--Bottom-->	
</div>
<div  style=" width:100%; height:100px; background-color:#F8D3CF">
<br />
<p style="text-align:center">
©2022 Khulna,BRTA.
Government Organization 

 All Rights Reserved.

</p>


</div>

</body>
</html>
