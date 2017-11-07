
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
						<li><a href="user.php">จัดการผู้ใช้งาน</a></li>
						<li class="active" ><a href="location.php">จัดการแผนที่</a></li>
						<li><a href="rfid.php">จัดการอาเอฟไอดี</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"> <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		

				<div class="col-sm-5" >
					<div class="col-sm-4">
						<div class="row" >
							<ul class="nav nav-pills nav-stacked" style="border">
								<li><a href="#" data-toggle="modal" data-target="#myModal" >เพิ่มแผนที่ </a><li>
		
								<li class="dropdown community-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">เลือกแผนที่<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">

								<li><a href="#">map1</a></li>
								<li><a href="#">map2</a></li>
								<li><a href="#">map3</a></li>

							</ul>

	

		<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

	 <!-- Modal content-->
			<div class="modal-content">

			    <div class="modal-header">
						      
					<h4 class="modal-title">เพิ่มข้อมูล</h4>
				</div>
				 <div class="modal-body">
					<div class="container">
  <form action="javascript:void(0)" (submit)="addLocate($event)">
  <div class="col-md-4">
    <div class="form-group">
      <input type="hidden" name="locate_image" #locateImage>
      <input type="file"
             accept="image/*"
             (change)="onChangeImg($event)"
             style="display: none;"
             #fileInput
             name="fileInput">
      <img (click)="onClickUpload()" src="http://americanconstruction.net/wp-content/uploads/2015/10/upload-empty.png"  class="img-thumbnail" #imgView>
    </div>
  </div>
  <div class="col-md-5">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="form-inline">
          <div class="form-group">
          	
            <label for="locate_name">ชื่อแผนที่:</label>
            <input type="text" class="form-control" id="locate_name" placeholder="กรุณาระบุแผนที่" required>
          </div>
          	
          <div class="form-group">
            <label for="locate_floor">&nbsp;ลำดับชั้น:</label>
            <input type="number" class="form-control" id="locate_floor" placeholder="กรุณาระบุลำดับชั้น" required>
          </div></br></br>
          <button type="submit" id="submit" class="btn btn-success">เพิ่มข้อมูล</button>
          <button type="reset" id="reset" (click)="onClear()" class="btn btn-danger">แก้ไขข้อมูล</button>
        </div>
        <br>
        <div id="alert" *ngIf="error.locate_name||error.locate_floor||error.locate_image" class="alert alert-danger">
          Please select image !<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
      </div>
    </div>
			</div>

				<div class="modal-footer">
						      
				</div>				
			</div>
		</div>
	</div>
	
	</div>
</form>
</body>
</html>

