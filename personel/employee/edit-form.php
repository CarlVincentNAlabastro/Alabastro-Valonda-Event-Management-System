<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body >
 <?php
include "../../database/db.php";
	
	$id = $_GET['id'];
  if(isset($_POST['cancel'])){ header("Location: edit.php");}
	if(isset($_POST['submit'])){
	 
    $fn = mysqli_real_escape_string($conn, $_POST['fn']);
  	$ln = mysqli_real_escape_string($conn, $_POST['ln']);
	$jo = mysqli_real_escape_string($conn, $_POST['jo']);
	$em = mysqli_real_escape_string($conn, $_POST['em']);
	$mn = mysqli_real_escape_string($conn, $_POST['mn']);
	$ad = mysqli_real_escape_string($conn, $_POST['ad']);
	$ci = mysqli_real_escape_string($conn, $_POST['ci']);
	$po = mysqli_real_escape_string($conn, $_POST['po']);
    $query = "UPDATE `final`.`employee` SET `first_name` = '$fn', `last_name` = '$ln', `job_title` = '$jo', `email` = '$em', `mobile_number` = '$mn', `address` = '$ad', `city` = '$ci', `postal_code` = '$po' WHERE (`id` = '$id');
";
 
 		

   
 if (mysqli_query($conn,$query)) {
	 header("Location: edit.php");
    # code...
   
}
else{

    echo 'ERROR: '.mysqli_error($conn);
}
 }

 
?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-2">
                <a href="../../index.php" class="logo d-flex align-items-center w-auto">
                
                  <span class="d-none d-lg-block">EVENT Manager</span>
                </a>
              </div>

              <div class="card mb-5">

                <div style="width: 500px" class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edit Employee</h5>
                    <p class="text-center small">Edit Employee data </p>
                  </div>
				<?php	
					 include('../../database/db.php');
					$id = $_GET['id'];
    $query = "SELECT * FROM manager WHERE id=".$id;//
    $result = mysqli_query($conn, $query);

    

        $event1 = mysqli_fetch_array($result);
        $fn = $event1['first_name'];
        $ln = $event1['last_name'];
        
        $em = $event1['email'];
		$mn = $event1['mobile_number'];
    	
		$ci = $event1['city'];
		$po = $event1['postal_code'];
    mysqli_free_result($result);

    mysqli_close($conn);?>
					<form method ="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
				<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "fn"class="form-control" id="floatingInput" value="<?php echo $fn ?>">
                      <label for="floatingInput">First Name</label>
                    </div>
      
                  </div></div>
						<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "ln"class="form-control" id="floatingInput" value="<?php echo $ln ?>" >
                      <label for="floatingInput">Last Name</label>
                    </div>
      			</div>
                  </div>
						<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "em"class="form-control" id="floatingInput" value="<?php echo $em?>">
                      <label for="floatingInput">Email</label>
                    </div>
      
                  </div></div>
						<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "mn"class="form-control" id="floatingInput"  value="<?php echo $mn ?>">
                      <label for="floatingInput">Mobile Number</label>
                    </div>
      
                  </div></div>
						
						<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "ci"class="form-control" id="floatingInput" value="<?php echo $ci?>" >
                      <label for="floatingInput">City</label>
                    </div>
      
                  </div></div>
						<div class="row mb-6">
                  
                  <div class="col-sm-12">
                    <div class="form-floating mb-3">
                      <input type="text" name= "po"class="form-control" id="floatingInput" value="<?php echo $po ?>">
                      <label for="floatingInput">Postal</label>
                    </div>
      
                  </div></div>
						
						
					<div class="text-center">
						
                  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
                 	<button type="reset" class="btn btn-secondary">RESET</button>
						<button type="submit" name ="cancel" class="btn btn-secondary">Cancel</button>
				
						</form>
                </div>
                </div>
                  

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>