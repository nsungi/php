<?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
		<h1><span>Add Employee:</span></h1>
        <div id="data">To view list of employees <a style="text-decoration:none" href="viewlist.php?list=employee">Click Here</a><br /><br />
	<?php
	   if(isset($_GET['third'])&&isset($_POST['user'])){
		   $user_result=mysqli_query($connect,"INSERT INTO login VALUES('{$_POST['user']}',md5('{$_POST['password']}'),NULL,{$_POST['admin']})");
		   if(!$user_result){
		   echo "Addition not successful".mysqli_error($connect);
		   //header("Location:addemp.php");
	   		}
	   		else echo"Addition of employee user data successful";
	   }
	   else if(isset($_GET['third'])) echo "You are not supposed to visit this page. Please go <a href='addemp.php'>back</a>";
	   //second page
	   if(isset($_GET['second'])&&isset($_POST['fname'])){
		   
	   		// $result = mysqli_query($connect,"INSERT INTO employee VALUES('{$_POST['fname']}','{$_POST['lname']}',NULL,'{$_POST['dept_id']}',{$_POST['salary']},{$_POST['pnum']},'{$_POST['address']}',{$_POST['uid']},'{$_POST['jdate']}','{$_POST['bdate']}','{$_POST['edate']}',{$_POST['perks']},{$_POST['admin']})"); 
	   			$firstname = $_POST['fname'];
	   			$lname = $_POST['admin'];
	   			$depId = $_POST['dept_id'];
	   			$salary = $_POST['salary'];
	   			$pnum = $_POST['pnum'];
	   			$address = $_POST['address'];
	   			$uid = $_POST['uid'];
	   			$jdate = $_POST['jdate'];
	   			$bdate = $_POST['bdate'];
	   			$edate = $_POST['edate'];
	   			$perks = $_POST['perks'];
	   			$admin = $_POST['admin'];
	   		$result = mysqli_query($connect, "INSERT INTO employee(first_name,last_name,id,dept_id,salary,phone_number,address,uid,join_date,dob,end_date,perks,admin) VALUES
	   			('$firstname', '$lname', NULL, 
	   			'$depId', 
	   			'$salary', 
	   			'$pnum', 
	   			'$address', 
	   			'$uid', 
	   			'$jdate', 
	   			'$bdate', 
	   			'$edate', 
	   			$perks, 
	   			$admin");

	   //page 2 form
	   $empidset = mysqli_query($connect,"SELECT id FROM employee where uid='{$_POST['uid']}'");
	   $empid=mysqli_fetch_array($empidset);
	   echo"<form method='post' action='addemp.php?third=1'>
	   		<table>
	   		<tr><td style='padding:5px'>Username:</td>
			<td><input type='text' name='user' /></td></tr>
			<tr><td style='padding:5px'>Password:</td>
			<td><input type='password' name='password' /></td></tr>
			<input type='hidden' name='admin' value='{$_POST['admin']}' />
			<input type='hidden' name='id' value='{$empid[0]}' />
			<tr><td colspan='2' style='padding:5px'><input type='submit' value='submit' /></td></tr>
			</table>
			</form>";
	   if(!$result)echo "Addition not successful";
	   else echo"Addition of employee data successful";
	
	   }
	   
	   else if(isset($_GET['second'])) echo "You are not supposed to visit this page. Please go <a href='addemp.php'>back</a>";
	   else {
		   $time = date("Y-m-d");
		echo"<form method='post' action='addemp.php?second=1'>
        	<table>
            	<tr><td style='padding:5px'>First Name:</td>
                    <td><input type='text' name='fname' /></td></tr>               
                <tr><td style='padding:5px'>Last Name:</td>
                    <td><input type='text' name='lname' /></td></tr>
					<tr><td style='padding:5px'>Dept: </td>
						<td><input list='depts' name='dept_id' placeholder='0' value='NULL'><datalist id='depts'>";
						
						$dept_set = mysqli_query($connect,"select dept_id, dept_name from department where manager_id='0'");
				while($row = mysqli_fetch_array($dept_set))
					echo "<option value='{$row['dept_id']}'>{$row['dept_name']}</option>";
																	
					echo"</datalist>
						</td></tr> 
                 <tr><td style='padding:5px'>Salary</td>
                 <td><input type='text' name='salary' /></td></tr>
                 <tr><td style='padding:5px'>Phone No.</td>
                 <td><input type='text' placeholder='+255..' name='pnum' /></td></tr>
                 <tr><td style='padding:5px'>Address</td>
                 <td><input type='text' name='address' /></td></tr>
                 <tr><td style='padding:5px'>Uid</td>
                 <td><input type='text' name='uid' /></td></tr>
                 <tr><td style='padding:5px'>Dob</td>
                 <td><input type='text' name='bdate' placeholder='YYYY-MM-DD' /></td></tr>
                 
				 <input type='hidden' name='jdate' value='{$time}' />
				 
                 <input type='hidden' name='edate' value='0000-00-00' />
				           
                 <input type='hidden' name='perks' value='0'/>
				 <tr><td style='padding:5px'>Admin</td><td><select name='admin'>
				 	<option value='1'>Admin</option>
					<option value='0'>Not Admin</option>
					</select></td></tr>
                 <tr><td colspan='2'><input type='submit' name='submit' value='Submit' /></td></tr>
        </table></form>";
	   }
		?>
       
         </div>
    </div>
</div>

<!-- body ends -->
<?php 
	require_once("include/footer.php");
?>