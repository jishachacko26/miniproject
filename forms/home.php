<?php
session_start();
include("userconnection.php");
$usr = $_SESSION['abc'];

?>

<!DOCTYPE html>
<html lang="en">

<?php
include("userconnection.php");
$kid=$_SESSION['r_id'];
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>user profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <script>
function validateForm() {
  var x = document.forms["myform"]["house_no"].value;
  if (x == "" || x == null) {
    alert(" house number must be filled out");
    return false;
  }
  var x = document.forms["myform"]["place"].value;
  if (x == "" || x == null) {
    alert(" place must be filled out");
    return false;
  }
  var x = document.forms["myform"]["panchayathu"].value;
  if (x == "" || x == null) {
    alert("panchayathu must be filled out");
    return false;
  }
  var x = document.forms["myform"]["ward"].value;
  if (x == "" || x == null) {
    alert("ward must be filled out");
    return false;
  }
  var x = document.forms["myform"]["Address"].value;
  if (x == "" || x == null) {
    alert("Address must be filled out");
    return false;
  }

var x = document.forms["myform"]["adhno"].value;
  if (x == "" || x == null) {
    alert("adhno must be filled out");
    return false;
  
  }
  var x = document.forms["myform"]["adhaar"].value;
  if (x == "" || x == null) {
    alert("adhaar document  must be filled out");
    return false;
  }
  var x = document.forms["myform"]["own"].value;
  if (x == "" || x == null) {
    alert("own number must be filled out");
    return false;
  }
  var x = document.forms["myform"]["signature"].value;
  if (x == "" || x == null) {
    alert("signature number must be filled out");
    return false;
  }
</script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
           <!-- <img src="../../../assets/images/logo.svg" alt="logo" /> </a>-->
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
          
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          
           <!-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image"> </a>-->
              <!--<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">-->
                  <!--<img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0" value="<?php echo " ".$fetch['`email`']?>"></p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>-->
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
               <!-- <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>-->
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
          
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/blank-page.php"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/login1.php"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/register1.php"> Register </a>-->
                  </li>
                
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">

          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                 
                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                      <h4 class="card-title">farming</h4>
                       <form class="forms-sample" method="post" action="" name="myform
                       "enctype="multipart/form-data"onsubmit ="return validateForm()">
                           
                            
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">house number</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="house number" name="house_no" required="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">place</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="place" name="place"required="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">panchayathu</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="panchayathu" name="panchayathu" required="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ward</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="ward" name="ward" required="">
                            </div>
                          </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Address" name="Address" required="">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">district</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="idukki" name="district" disabled="">
                            </div>
                            </div>
                            <div class="form-group row">

                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">substation</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="panchayathu" required="">
                            <option>ayyappancoil</option>
                            <option> upputhara</option>
                                
                                     
                            </select>
                            </div>
                          </div>
                         
                          
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Adhaar</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Adhaar number" name="adhno" required="">
                            </div></div>
                            <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Adhar file </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="Adhaar" name="adhaar" required="" pattern="^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ownership document </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="ownership document" name="own" required="">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">signature </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="signature" name="signature" required="">

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">lease document </label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" id="exampleInputPassword2" placeholder="lease document" name="lease">
                            
                            </div>
                          </div>
                           
                           
                          <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button> 
                           
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            
            </div>
          </div>
         
  <?php
   
  require("userconnection.php");
  if(isset($_POST['submit'])){
    $adhaar = $_FILES['adhaar']['name'];
    $own = $_FILES['own']['name'];
    $sig = $_FILES['signature']['name'];
  $sql="INSERT INTO home(house_no,place,panchayathu,ward,Address,adhno,adhaar,own,signature,status,l_id)VALUES ('$_POST[house_no]','$_POST[place]','$_POST[panchayathu]','$_POST[ward]','$_POST[Address]','$_POST[adhno]','$adhaar','$own','$sig','pending',$usr)";
  
if( $conn->query( $sql)===TRUE )
{
  echo "<script>alert('saved')</script>";

}
else{
  echo "error:" . $sql ."<br>" . $conn->error;
}
}
?>
<?php
$uploaddir = '../uploads/';
$uploadfile = $uploaddir . basename($_FILES['adhaar']['name']);

// echo '<pre>';
// if (move_uploaded_file($_FILES['adhaar']['tmp_name'], $uploadfile)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }

// echo 'Here is some more debugging info:';
// print_r($_FILES);

// print "</pre>";

?>


 <!-- partial -->
        <div class="main-panel">
          <form method="post" action="">
          <div class="content-wrapper">
            <div class="row">
             
              <!--<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PROFILE</h4>
                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Date Of Birth </th>
                          <th>Gender </th>
                          <th>Mobile Number</th>
                          <th>Email</th>
                          <th>image </th>
                          
                       
                          
                  <th>Actions</th>
                        </tr>
                      </thead>

                    
            <tbody>
                <?php
                require("userconnection.php");
            $sql = "SELECT `fullname`, `birthday`, `gender`, `ph`, `email`, `img` FROM `register` WHERE`rid`='$kid'";
                          $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {?>
                        <tr class="table-info">
                          <td> <?php echo $row['fullname']; ?>  </td>
                          <td> <?php echo $row['birthday']; ?> </td>
                          <td> <?php echo $row['gender']; ?> </td>
                          <td> <?php echo $row['ph']; ?> </td>
                          <td> <?php echo $row['email']; ?> </td>
                          <td> <?php echo $row['img']; ?> </td>
                          <td>
       <a a href="delete.php?id=<?php echo $row["id"]; ?>"class="del_btn">Delete</a>
      </td>
      <td>
        <a href="profile1.php?del=<?php echo $row['pid']; ?>" class="del_btn">Delete</a>
      </td>
                        </tr>
                      <?php
                    }}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
          </div>
<?php
     require("userconnection.php");
     if(isset($_POST['edit']))
     {
        $sql = "UPDATE `profile` SET `status`='edit' WHERE `pid`='$_POST[pid]'  ";
         
         
        if( $conn->query($sql)===TRUE )
        {
    
        echo "<script>alert('edit')</script>";

        }
      }
                
    ?>
<?php
     require("userconnection.php");
     if(isset($_POST['delete']))
     {
        $sql = "DELETE FROM `profile` WHERE `pid`='$_POST[pid]'  ";
         
         
        if( $conn->query($sql)===TRUE )
        {
    
        echo "<script>alert('update')</script>";

        }
      }
                
    ?>
<?php 
 
include_once 'userconnection.php';
 
$sql = "UPDATE register SET firstname = 'Hello',lastname = 'Test',mobile = '9874561230' WHERE id=1 ";
 
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}
 
   
?>-->

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends    -->   </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>