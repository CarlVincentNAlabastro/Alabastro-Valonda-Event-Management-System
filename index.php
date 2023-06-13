<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event manager</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --> 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">EVENT Manager</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

</header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Events&nbsp;</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="events/event/event-main.php">
              <i class="bi bi-circle"></i><span>Events</span>
            </a>
          </li>
          <li>
            <a href="events/agency/agency-main.php">
              <i class="bi bi-circle"></i><span>Agency</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Personel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="personel/employee/employee.php">
                <i class="bi bi-circle"></i><span>Employee</span>
            </a>
          </li>
          <li>
            <a href="personel/manager/manager.php">
				<i class="bi bi-circle"></i><span>Manager</span>
            
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<?php

// Database connection details
include('database\db.php');


  
$active = 0;
$pending = 0;
$complete = 0;
$canceled = 0;

  
$sql = "SELECT status, COUNT(*) AS count FROM event_overview GROUP BY status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['status'];
        $count = $row['count'];  
        if ($status == 'active') {
            $active = $count;
        } elseif ($status == 'pending') {
            $pending = $count;
        } elseif ($status == 'complete') {
            $complete = $count;
        } elseif ($status == 'canceled') {
            $canceled = $count;
        }
    }
} else {
    echo "No results found.";
}
$sqlManager = "SELECT COUNT(*) AS total FROM manager";
$resultManager = $conn->query($sqlManager);
$rowManager = $resultManager->fetch_assoc();
$totalManagers = $rowManager["total"];

// Count total rows in the employee table
$sqlEmployee = "SELECT COUNT(*) AS total FROM employee";
$resultEmployee = $conn->query($sqlEmployee);
$rowEmployee = $resultEmployee->fetch_assoc();
$totalEmployees = $rowEmployee["total"];
// Close connection



?>


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Active</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "$active";?></h6>
                      

                    </div>
                  </div>
					
                </div>
				  

              </div>
            </div> 
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Pending</h5>

                  <div class="d-flex align-items-center">
					  
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "$pending";?></h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
<div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Complete&nbsp;</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi-clipboard-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "$complete";?></h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                

                <div class="card-body">
                  <h5 class="card-title">Canceled</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-x-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "$canceled";?></h6>
                   

                    </div>
                  </div>

                </div>
              </div>

            </div>
			  <div class="col-xxl-4 col-xl-12">

              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Employees&nbsp;</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $totalEmployees;?></h6>
                   

                    </div>
                  </div>

                </div>
              </div>

            </div> 
<div class="col-xxl-4 col-xl-12">

              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Managers&nbsp;</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $totalManagers;?></h6>
                   

                    </div>
                  </div>

                </div>
              </div>

            </div>
           
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title">Events</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
						 
                        <th scope="col">#</th>
                        <th scope="col">Project</th>
                        <th scope="col">Project Manager</th>
                        <th scope="col">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
						<?php 
							  
$query = 'SELECT * FROM event_overview';


        $result = mysqli_query($conn,$query);
        $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
					$count=0;
						foreach ($events as $event):			  
							  ?>
                      <tr>
						  
                        <th scope="row"><?php $count++; echo $count ?></th>
                        <td><?php echo $event['project_name'] ?></td>
                        <td><?php echo $event['project_manager'] ?></td>
                        <td><?php 
							if($event['status']=='Active')
								echo "<span class=".'"badge bg-success"'.">active</span>";
							else if($event['status']=='pending')
								echo " <span class=".'"badge bg-warning"'.">Pending</span>";
							else if($event['status']=='complete')
								echo "<span class=".'"badge bg-success"'.">Complete</span>";
							else echo" <span class=".'"badge bg-danger"'.">Canceled</span></td>";
							?></td>
                        
                       <?php endforeach;?>
						</tr>
                    
                    </tbody>
                  </table>
                  
                </div>

              </div>
            </div>  <div class="col-12">
              <div class="card top-selling overflow-auto">

                

                

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            

            <div class="card-body">
              <h5 class="card-title">Event Overview </h5>

              <div class="activity">
<?php
  
$sql = "SELECT status, COUNT(*) AS count FROM event_overview GROUP BY status";
$result = $conn->query($sql);

// Initialize variables
$statusLabels = [];
$statusCounts = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['status'];
        $count = $row['count'];

        // Add status labels and counts to the arrays
        $statusLabels[] = $status;
        $statusCounts[] = $count;
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();

?>
				  
				  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
				
                <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
				   var statusLabels = <?php echo json_encode($statusLabels); ?>;
        var statusCounts = <?php echo json_encode($statusCounts); ?>;

        // Create a new pie chart
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: statusLabels,
                datasets: [{
                    label: 'Status Counts',
                    data: statusCounts,
                    backgroundColor: [
                        'rgba(22, 203, 29, 0.8)',
                        'rgba(64, 255, 0, 0.8)',
                        'rgba(221, 31, 31, 0.8)',
                        'rgba(57, 45, 233, 0.8)'
                    ],
                    borderColor: [
                       'rgba(22, 203, 29, 0.8)',
                        'rgba(64, 255, 0, 0.8)',
                        'rgba(221, 31, 31, 0.8)',
                        'rgba(57, 45, 233, 0.8)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Event Overview Statuses'
                    }
                }
            }
        });
    </script>

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          

      </div>
    </section>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>