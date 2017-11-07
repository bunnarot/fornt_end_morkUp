
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
		html, body {
		background-color: #FFFFFF;
		color: #000000;
		font-family: 'Raleway', sans-serif;
		font-weight: 0;
		height: 100vh;
		margin: 0;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Car Park Management System</a>
				</div>
					<ul class="nav navbar-nav">
						<li ><a href="home1.php">หน้าหลัก</a></li>
						<li class="active"><a href="user.php">จัดการผู้ใช้งาน</a></li>
						<li><a href="location.php">จัดการแผนที่</a></li>
						<li><a href="rfid.php">จัดการอาเอฟไอดี</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"> <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		
			</div>
		
		<div class="slide-docs-nav">
				<div class="col-sm-5" >
					<div class="col-sm-4">
						<div class="row" >
							<ul class="nav nav-pills nav-stacked" style="border">
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">เพิ่มสมาชิก</button>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" class="btn btn-warning">&times;</button>
			        <h4 class="modal-title">กรอกข้อมูลสมาชิก</h4>
			      </div>
			      <div class="modal-body">
			        	<div class="form-group">
  							<label for="name">ชื่อ:</label>
 							 <input type="text" class="form-control" id="name" placeholder="กรุณากรอกชื่อ" >
 							 <label for="email">อีเมล์:</label>
 							 <input type="text" class="form-control" id="email" placeholder="example@mail.com" >
 							 <label for="pass">ชื่อ:</label>
 							 <input type="text" class="form-control" id="pass" placeholder="กรุณากรอกรหัสผ่าน" >
 							 <label for="rfid">อาเอฟไอดี:</label>
 							 <input type="text" class="form-control" id="rfid" placeholder="กรุณากรอกเลือกอาเอฟไอดี" >
 							 
						</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success" data-dismiss="modal">เพิ่มสมาชิก</button>
			        <button type="reset" class="btn btn-danger" data-dismiss="modal">แก้ไข</button>
			      </div>
			    </div>

			  </div>
			</div>

</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="col-xm-7" >  
			<div class="container">
 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ชื่อ</th>
        <th>อีเมล์</th>
        <th>รหัสผ่าน</th>
        <th>รหัสอาเอฟไอดี</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>john@example.com</td>
        <td>MD5</td>
        <td>12364</td>
        <td><div class="button"> 
                <button type="button" class="btn btn-danger" data-dismiss="modal">ลบ</button>
		 		<button type="reset" class="btn btn-warning" data-dismiss="modal">แก้ไข</button>

			</div></td>
      </tr>
     
    </tbody>
  	</table>
	</div>	
		</div>	

</body>
</html>
