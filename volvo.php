
    <?php
    require_once __DIR__ . '/conn.php';


  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Indian Ticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="admin/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
    
            <div class="main-content-inner">
                <div class="row">
               
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body" id="exampl">
                                        <?php
 $vid=$_GET['viewid'];
$ret=mysqli_query($conn,"select * from volunteer where volunteer_id='$vid'");
$cnt=1;
$row=mysqli_fetch_array($ret)

?>


<!-- <!?php  echo $row['TicketID'];?>
<!?php  echo $row['TicketID'];?>
<!?php  echo $row['TicketID'];?> -->




















</body>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ID Card</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .id-card-container {
    width: 300px;
    background: linear-gradient(45deg, #33691e, #33691e); /* Green gradient color */
    border-radius: 10px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.4); /* 3D effect shadow */
    padding: 20px;
    text-align: center;
    position: relative;
    overflow: hidden; /* Hide overflowing shadows */
  }
  
  .logo-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
  }

  .square-logo {
    width: 70px; /* Adjust size as needed */
    border-radius: 10px;
    border: 5px solid #8bc34a; /* Light green border */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .full-logo {
    width: 150px; /* Adjust size as needed */
    border-radius: 10px;
    border: 5px solid #8bc34a; /* Light green border */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .profile-pic-container {
    position: relative;
    width: 150px;
    height: 150px;
    margin: 0 auto 20px;
    overflow: hidden;
    border-radius: 50%;
    border: 5px solid #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .profile-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .id-card .info {
    text-align: left;
    padding: 0 20px;
  }
  
  .id-card .info p {
    margin: 5px 0;
    font-size: 14px;
    color: #fff; /* White text color for better contrast */
  }

  .id-card .ngo-name {
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    color: #fff; /* White text color for better contrast */
  }
</style>
</head>
<body>

<div class="id-card-container">
  <div class="logo-container">
    <img src="images/mix01.jpg" alt="Square Logo" class="square-logo">
  </div>
  <div class="profile-pic-container">
    <img src="admin/images/<?php echo htmlentities($row['images']);?>" alt="Profile Picture" class="profile-pic">
  </div>
  <div class="id-card">
    <div class="ngo-name">Junglebook</div>
    <div class="info">
      <p><strong>ID:</strong> <?php echo htmlentities($row['volunteer_id']);?> </p>
      <p><strong>Full Name:</strong> <?php echo htmlentities($row['name']);?></p>
      <p><strong>Mobile:</strong> <?php echo htmlentities($row['phone_no']);?></p>
      <p><strong>Address:</strong> <?php echo htmlentities($row['address']);?></p>
    </div>
    <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
  </div>
</div>



<script src="admin/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="admin/assets/js/popper.min.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/owl.carousel.min.js"></script>
    <script src="admin/assets/js/metisMenu.min.js"></script>
    <script src="admin/assets/js/jquery.slimscroll.min.js"></script>
    <script src="admin/assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="admin/assets/js/plugins.js"></script>
    <script src="admin/assets/js/scripts.js"></script>

     <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}

</script>






</body>
</html>