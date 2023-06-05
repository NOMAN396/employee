<?php
require_once('include/header.php');
require_once('include/sidebar.php');

if (isset($_GET['employee_id']) && isset($_GET['month']) && isset($_GET['year'])) {
    
    $employeeId = $_GET['employee_id'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    
  
    $data = $mysqli->common_select_query("SELECT * FROM tbl_attendance WHERE employee_id = $employeeId AND MONTH(att_date) = $month AND YEAR(att_date) = $year");
    
    
    if (!$data['error'] && !empty($data['data'])) {
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Monthly Attendance</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee ID: <?= $employeeId ?> | Month: <?= $month ?> | Year: <?= $year ?></li>
    </ol>
    
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($data['data'] as $attendanceRecord) {
        ?>
        <tr>
            <td><?= $attendanceRecord->att_date ?></td>
            <td><?= $attendanceRecord->att_status == 1 ? 'Present' : 'Absent' ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php
    } else {
      
        echo "<div class='container-fluid px-4'>No attendance records found for the selected employee and month/year.</div>";
    }
} else {
   
    echo "<div class='container-fluid px-4'>Invalid request. Required parameters are missing.</div>";
}

require_once('include/footer.php');
?>
