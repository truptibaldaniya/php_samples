<head>
<style>
body{
	font-family: Zawgyi-One,"Segoe UI",Arial,Verdana,Geneva,sans-serif;
	
}
.select-selected {
  color: #58595b;
  padding: 8px 16px;
  border: none;
  border-bottom: 1px solid #a94442;
  cursor: pointer;
  background-color: #fff;
  font-weight:400;
  font-size: 14px;
  height:34px;
  width: 500px;
}
input:focus{
	border-bottom:1px solid #ff7900;
	outline:none;
}
select:focus{
	border-bottom:1px solid #ff7900;
	outline:none;
}
.content{
	box-sizing:border-box;
	width:800px;
	margin:25px;
	padding:20px;
	align:center;
	box-shadow:0 0 2px 3px rgba(0,0,0,.1);
	left:350px;
	top:50px;
	position:relative;
	background-color:#ffffff;
}
.row{
	margin-top:25px;
}
.col-3{
	width:25%;
	float:left;
	padding:0px;
}
.text{
	font-weight:100;
}
.button{
	padding:5px;
	background-color:#ff7900;
	font-weight:bold;
	font-size:18px;
	border-style:none;
	color:#ffffff;
}
</style>
</head>
<body>
<form method="post" action="control2.php">
<div class="content" align="center">
	<div class="row">
		<div class="col-3">Enter Employee ID: </div>
		<div class="custom-select">
			<input type="text" name="eid" class="select-selected" placeholder="Enter ID..." required>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Enter Employee Name: </div>
		<div class="custom-select">
			<input type="text" name="ename" class="select-selected" placeholder="Enter Name..." required>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Enter Employee Salary: </div>
		<div class="custom-select">
			<input type="number" name="sal" class="select-selected" placeholder="Enter Salary..." required>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Select Your Designation: </div>
		<div class="custom-select" class="text">
			<select class="select-selected" name="des">
				<option>Select...</option>
				<option>Manager</option>
				<option>Admin</option>
				<option>Employee</option>
				<option>Worker</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Enter Date Of Birth: </div>
		<div class="custom-select">
			<input type="date" name="dob" class="select-selected" placeholder="Enter date..." required>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Choose Your Table Color: </div>
		<div class="custom-select">
			<input type="color" name="fcol" class="select-selected" value="#ffffff" class="select-selected" required>
		</div>
	</div>
	<div class="row">
		<div class="col-3">Choose Background Color: </div>
		<div class="custom-select">
			<input type="color" name="bcol" class="select-selected" value="#ffffff" class="select-selected" required>
		</div>
	</div>
	<div class="row">
		<div><input type="submit" value="Submit" name="submit" class="button"></div>
	</div>
</div>
</form>
</body>
