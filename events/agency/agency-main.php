<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Manager</title>
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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../../index.php" class="logo d-flex align-items-center">
     
        <span class="d-none d-lg-block">EVENT Manager</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

  

      

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Event</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
         <li>
            <a href="../../events/event/event-main.php" >
              <i class="bi bi-circle"></i><span>Events</span>
            
			 </a>
          </li>
			<li>
            <a href="../../events/agency/agency-main.php" class="active">
              <i class="bi bi-circle"></i><span>Agency</span>
            </a>
          </li>
          
        </ul>
      </li>

		<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Personel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../../personel/employee/employee.php">
                <i class="bi bi-circle"></i><span>Employee</span>
            </a>
          </li>
          <li>
            <a href="../../personel/manager/manager.php">
				<i class="bi bi-circle"></i><span>Manager</span>
            
            </a>
          </li>

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle" >
		
      <h1>Agency</h1> 
		
		  
		</div>
      <nav>
		  
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
          <li class="breadcrumb-item">Event</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             <div style=" display: flex;"> <h5 class="card-title">Agency&nbsp;</h5>
			
				 <div style = "margin-left:auto; margin-top: auto"><button type="submit"  onclick="redirectToNextPage()" class="btn btn-success"><i class="bi bi-person-plus-fill"></i></button>
			<a href="edit.php"><button type="button" class="btn btn-success"><i class="bi bi-pencil-fill"></i></button>	 </div></a>
			<script>
    function redirectToNextPage() {
      window.location.href = "add.php";
    }
  </script>
             </div>
 
      <form method="GET" action="" class="filter-form">
   
</form>



<div class="table-container">
    <table id="event-table" class="table datatable ">
        <thead>
            <tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">agency_name</th>
                    <th scope="col">address</th>
                    <th scope="col">email</th>
                    <th scope="col">hotline</th>
                  </tr>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../../database/db.php');
            $query = 'SELECT * FROM agency';
            
           
            $result = mysqli_query($conn, $query);
            $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
             $count = 0;
            foreach ($events as $event):
            ?>
            <tr>
                <th scope="row"><?php $count++; echo $count; ?></th>
                <td><?php echo $event['agency_name']; ?></td>
                <td><?php echo $event['address']; ?></td>
                <td><?php echo $event['email']; ?></td>
                <td><?php echo $event['hotline']; ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Status filter -->


<script>
    // Status filter
    document.getElementById('status-filter').addEventListener('change', function () {
        var status = this.value.toLowerCase();
        var rows = document.getElementById('event-table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
        
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var rowStatus = row.getElementsByTagName('td')[5].textContent.toLowerCase();
            
            if (status === '' || rowStatus === status) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
</script>


    </div>

     
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

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