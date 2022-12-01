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
        <div >
       <div>
      
       <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="index.html"> Home </a>
       </div>
       
       <div>
        <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="main.php"> Main </a>
       </div>
       
       <div>
        <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="show.php"> View Registered vehicle </a>
       </div>
       
       <div>
        <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="update.php"> Change Registered Vehicle Info </a>
       </div>
       
       <div>
        <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="input.php"> Rgister a new vehicle </a>
       </div>
       
       <div>
       <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="dgn.html" > Designers </a>
       
       </div>
       
       <div>
       <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="log_in.php" > Log Out</a>
       
       </div>
 <br />
        </div>
        <!--main content-->
        <br />
        <br />
       		 <div style="text-align:center">
			<h1> View Vehicle Information</h1>
            <div >
            <form action="show.php" method="post" >
            
            <table width="100%">
            <tr>
            <th width="40%"> Information type </th>
            <th width="60%"> Value </th>
            </tr>
            <tr>
            <td> <label>Enter Vehicle Registration Number</label></td>
            <td style="padding:5px"> <input name="reg" type="text" size="20" /> </td>
            </tr>
           <tr>
            <td> </td>
            <td style="padding:5px"> <input name="submit" type="submit" value="Submit" /></td>
            </tr>
            
            
            
            </table>
            
            </form>
            
           
            
          </div>
            <div >
            		
                    <h1>
                    Vehicle Information
                    </h1>
                   
                  
                  
                <?php      
          
            
        if(isset($_POST['submit']))
		{
			$reg=$_POST['reg'];
			
			
			
			
			$con = new mysqli ("localhost","root","","vms");
			
			$sql = "SELECT * FROM vms_info WHERE reg= '".$reg."'";
			
			$result= mysqli_query ($con,$sql);	 
		
		 	while($row=mysqli_fetch_row($result))
			{
				$type = $row[0];
				$c_name =$row[1]; 
				$model=$row[2];
				$origin=$row[3];
				$capasity=$row[4];
				$color=$row[5];
				$name=$row[6];
				$reg=$row[7];
				$m_date=$row[8];
				$e_num=$row[9];
				$c_num=$row[10];
				$weight=$row[11];
				$r_date=$row[12];
				$b_from=$row[13];
				$price=$row[14];
				
				echo "<br/><b>Vehicle Type:</b>".$type;
				echo "<br/><b>Company Name:</b>".$c_name;
				echo "<br/><b>Vehicle Model:</b>".$model;
				echo "<br/><b>Brand Origin:</b>".$origin;
				echo "<br/><b>Seat Capasity:</b>".$capasity;
				echo "<br/><b>Vehicle Color:</b>".$color;
				echo "<br/><b>Owner Name:</b>".$name;
				echo "<br/><b>Registration Number:</b>".$reg;
				echo "<br/><b>Manufacturer Date:</b>".$m_date;
				echo "<br/><b>Engine Number:</b>".$e_num;
				echo "<br/><b>Chassis Number:</b>".$c_num;
				echo "<br/><b>Vehicle Weight:</b>".$weight;
				echo "<br/><b>Registration Date:</b>".$r_date;
				echo "<br/><b>Buy From:</b>".$b_from;
				echo "<br/><b>Vehicle Price:</b>".$price;
				
				
			}
					
		}        
            
    ?>
                    
            </div>
                     
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
