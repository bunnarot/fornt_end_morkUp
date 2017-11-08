<?php require_once "layout/header.php";?>
	<?php require_once "layout/navbar.php"; ?>
		
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

<?php require_once "layout/footer.php"; ?>
