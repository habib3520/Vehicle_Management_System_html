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
        <a style=" text-align:center; display:flex-basis; float:left; margin:10px; text-decoration:none" href="delete.php"> Delete Vehicle Information </a>
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
			<h1> Rgister a new vehicle</h1>
            <h3> Input Hare</h3>
            
            <p style="text-align:center;">
                   
                    <?php
					
					if(isset($_POST['submit']))
					{
						
						$type = $_POST['type'];
						$c_name =$_POST['c_name']; 
						$model=$_POST['model'];
						$origin=$_POST['origin'];
						$capasity=$_POST['capasity'];
						$color=$_POST['color'];
						$name=$_POST['name'];
						$reg=$_POST['reg'];
						$m_date=$_POST['m_date'];
						$e_num=$_POST['e_num'];
						$c_num=$_POST['c_num'];
						$weight=$_POST['weight'];
						$r_date=$_POST['r_date'];
						$b_from=$_POST['b_from'];
						$price=$_POST['price'];
						
						$con = new mysqli ("localhost","root","","vms");
						
						$sql= "INSERT INTO vms_info VALUES ('".$type."','".$c_name."','".$model."','".$origin."','".$capasity."',
						'".$color."','".$name."','".$reg."','".$m_date."','".$e_num."','".$c_num."','".$weight."',
						'".$r_date."','".$b_from."','".$price."')";
						
						if(mysqli_query($con,$sql))
						{
							echo "Information Stored Successfully";
						}
						else
						{
							echo ".....Error.....";
						}
						
						
					}
					
					
					
					?>
                    
                    
                    
                    
                    
                    
             </p>
            <div >
            		<form action="input.php" method="post" target="_self">
                    	
                    <table width="100%" >
                    	<tr>
                        	<th width="40%"> Info Type </th>
                            <th width="60%"> Value</th>
                        </tr>
                        <tr>
                        	<td> <label>Enter Vehicle Type</label> </td>
                            <td style="padding:5px"> <input name="type" type="text" size="20" /> </td>
                            
                        </tr>
                    	<tr>
                        	<td> <label>Company Name</label> </td>
                            <td style="padding:5px"> <input name="c_name" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Vehicle Model</label> </td>
                            <td style="padding:5px"> <input name="model" type="text" size="40" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Brand Origin</label></td>
                            <td style="padding:5px"> <input name="origin" type="text" size="20" /></td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Seat Capasity</label></td>
                            <td style="padding:5px"> <input name="capasity" type="text" size="40" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label> Vehicle Color</label> </td>
                            <td style="padding:5px"> <input name="color" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Vehicle Owner Name</label> </td>
                            <td style="padding:5px"> <input name="name" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Vehicle Registration Number</label></td>
                            <td style="padding:5px"> <input name="reg" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td><label>Vehicle Manufacturer Date</label> </td>
                            <td style="padding:5px"> <input name="m_date" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Engine Number</label> </td>
                            <td style="padding:5px"> <input name="e_num" type="text" size="20" /> </td>
                            
                        </tr>
                  		<tr>
                        	<td> <label>Chassis Number</label> </td>
                            <td style="padding:5px"><input name="c_num" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td><label>Vehicle Weight</label> </td>
                            <td style="padding:5px"> <input name="weight" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td> <label>Date Of Registration</label></td>
                            <td style="padding:5px"> <input name="r_date" type="text" size="20" /></td>
                            
                        </tr>
                        <tr>
                        	<td><label>Buy From</label> </td>
                            <td style="padding:5px"><input name="b_from" type="text" size="20" /> </td>
                            
                        </tr>
                        <tr>
                        	<td><label>Vehicle Price</label> </td>
                            <td style="padding:5px"><input name="price" type="text" size="40" /> </td>
                            
                        </tr>
                         <tr>
                        	<td>  </td>
                            <td style="padding:5px"> <input name="submit" type="submit" value="Submit" /></td>
                            
                        </tr>
                    
                    
                    
                    
                    
                    
                    
                    </table>
                    
                    </form>
                    
                    
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
