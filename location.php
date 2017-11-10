<?php require_once "layout/header.php";?>
	<?php require_once "layout/navbar.php"; ?>

		<meta name="viewport" content="width=device-width, initial-scale=1">

<style >
    .icon-bar {
    width: 50px;
    background-color: #555;
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 10px;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;

}

.icon-bar a:hover {
    background-color: #000;
}

.active {
    background-color: #4CAF50 !important;
}

.topright {  position: relative;
    position: absolute;
   top:10%;
    right: 1px;
    font-size: 10px; 
}
</style>
          <div class="container">
            <div class="topright">
          <!--     <br><br><br><br><br><br> -->
               <div class="icon-bar">
                <a href="#"><i class="fa fa-search"></i></a> 
                <a href="#"><i class="fa fa-plus-square-o"></i></a> 
                
                <a href="#"><i class="glyphicon glyphicon-refresh w3-spin "></i></a> 
               </div> 
              </div>
          </div>

				<div class="col-sm-5" >
					<div class="col-sm-4">
						<div class="row" >

							<ul class="nav nav-pills nav-stacked" style="border">
								<li><a href="#" data-toggle="modal" data-target="#myModal" >เพิ่มแผนที่ </a><li>
							
                <li><a href="#" data-toggle="modal" data-target="#listModal" >แก้ไขตำแหน่งอุปกรณ์ </a><li>

								
							</ul>

<div id="listModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">

        <div class="modal-header">   
           <h4 class="modal-title">กรุณาเลืกแผนที่เพื่อแก้ไข</h4>
        </div>

        <div class="modal-body">
            <h1>เก็กคนหัวฆวยยยย!!!!</h1>
         


        </div>

      </div>

    </div>
  </div>  

<!-- addMap -->
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
