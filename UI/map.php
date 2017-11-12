
    <div class="wrapper"> 
        <?php require_once "../layout/header.php" ?>
        <div class="col-md-6">
             <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-3.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
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
                        <a href="localtion.php">
                            <i class="material-icons">content_paste</i>
                            <p>จัดการแผนที่</p>
                        </a>
                    </li>
                    <li>
                         <li class="active">
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