<?php require_once "layout/header.php";?>
	<?php require_once "layout/navbar.php"; ?>
		

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

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<div class="modal-content">

	      <div class="modal-header">   
			     <h4 class="modal-title">เพิ่มข้อมูล</h4>
		    </div>

		    <div class="modal-body">

					<div class="container">

            <form action="javascript:void(0)">

              <div class="col-md-3">
                <div class="form-group">
                  <input type="hidden" name="locate_image">
                  <input type="file"
                         accept="image/*"
                         style="display: none;"
                         name="fileInput">
                  <img src="http://americanconstruction.net/wp-content/uploads/2015/10/upload-empty.png"  class="img-thumbnail">
                </div>
              </div>

              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="form-inline">

                      <div class="form-group">
                        <label for="locate_name">ชื่อแผนที่:</label>
                        <input type="text" class="form-control" id="locate_name" placeholder="กรุณาระบุชื่อแผนที่" required><br><br>
                      </div>

                      <div class="form-group">
                        <label for="locate_floor">&nbsp;ชั้น:</label>
                        <input type="number" class="form-control" id="locate_floor" placeholder="กรุณาระบุชั้น" required><br><br>
                      </div>
                       
                      <button type="submit" id="submit" class="btn btn-success">เพิ่ม</button>
                      <button type="reset" id="reset" class="btn btn-danger">ล้าง</button>

                    </div>
                    <br>
                    <div id="alert" class="alert alert-danger">
                        Please select image !<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                  </div>
                </div>
              </div>

            </form>   

          </div>

    		</div>

      </div>

    </div>
  </div>  
<?php require_once "layout/footer.php"; ?>
