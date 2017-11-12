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

.topright {  position: relative;
    position: absolute;
   top:20%;
    right: 1px;
    font-size: 10px; 
}
</style>
    <div class="wrapper"> 
    	<?php require_once "../layout/header.php" ?>
        <div class="col-md-6">
            <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-3.jpg">
            <div class="logo">
                <div class="container-fluid">
                  <h3>C.P.M.S</h3>
               
                </div>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                   <li>
                        <a href="home.php">
                            <i  class="material-icons">dashboard</i>
                            <p>หน้าหลัก</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.php">
                            <i class="material-icons">person</i>
                            <p>จัดการผู้ใช้งาน</p>
                        </a>
                    </li>
                    <li>
                    	 <li class="active">
                        <a href="localtion.php">
                            <i class="material-icons">content_paste</i>
                            <p>จัดการแผนที่</p>
                        </a>
                    </li>
                    <li>
                        <a href="map.php">
                            <i class="material-icons">library_books</i>
                            <p>จัดการอาเอฟไอดี</p>
                        </a>
                    </li>
              
                    <li>
                        <a href="maps.html">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
              
              </div>
       		 </div>
          </div>
       </div>
        
 <div class="container">
            <div class="topright">
          
               <div class="icon-bar">
                <a href="#"><i class="fa fa-search"></i></a> 
                <a href="#"><i class="fa fa-plus-square-o"></i></a> 
                
                <a href="#"><i class="glyphicon glyphicon-refresh w3-spin "></i></a> 
               </div> 
              </div>
          </div>

	<div class="col-sm-0" >
		<div class="col-sm-4">
		<div class="row" >
			<ul class="nav nav-pills nav-stacked">
				 <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">เพิ่มสมาชิก</button >			
              	 <button data-toggle="modal" class="btn btn-info " data-target="#listModal" >แก้ไขตำแหน่งอุปกรณ์ </a><li>		
		
			</ul>
<div id="listModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">
      	<div class="card">
        	<div class="modal-header">  
      		  <div class="card-header" data-background-color="purple">
           		 <h5 class="title">กรุณาเลืกแผนที่เพื่อแก้ไข</h5> 
       		  </div>
    		</div>
		
        <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body"><img src="//placehold.it/256x256" width="100%" alt=""></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body"><img src="//placehold.it/256x256" width="100%" alt=""></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body"><img src="//placehold.it/256x256" width="100%" alt=""></div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body"><img src="//placehold.it/256x256" width="100%" alt="">
                  </div>
                </div>
              </div>

            </div>
        </div>

      </div>
</div>
</div>
    </div>
  </div>  
</div>
<!-- addMap -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<div class="modal-content">
			<div class="card">
        	<div class="modal-header">  
      		  <div class="card-header" data-background-color="purple">
           		 <h5 class="title">เพิ่มแผนที่</h5> 
       		  </div>
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
              			<br>
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
  </div>  
 </div>


         
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
