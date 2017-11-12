
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
                         <li class="active">
                        <a href="user.php">
                            <i class="material-icons">person</i>
                            <p>จัดการผู้ใช้งาน</p>
                        </a>
                    </li>
                    <li>
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
                  
                  
                </ul>
            </div>
        </div>
        </div>
              <div class="col-sm-10" >
                    <div class="col-sm-2">
                        <div class="row" >
                            <ul class="nav nav-pills nav-stacked" style="border">
            <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#myModal">เพิ่มสมาชิก</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="card">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" class="btn btn-warning">&times;</button>
                    <div class="card-header" data-background-color="purple">
                        <h5 class="title">กรอกข้อมูลผู้ใช้</h5>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="form-group">
                            <form>
                                <div class="form-group label-floating">
                                    <label class="control-label">กรุณากรอกชื่อ</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">กรุณากรอกอีเมล์</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">กรุณากรอกรหัส</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">กรุณากรอกอาเอฟไอดี</label>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
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
        </div>
    </div>

</body>
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