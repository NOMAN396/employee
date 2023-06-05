<?php
require_once('include/header.php');
require_once('include/sidebar.php');


if ($_GET['id']) {
   
    $id = $_GET['id'];
    
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
        $newStatus = $_POST['status'];
        
       
        header("Location:attendance_show.php");
      
    }
    
   
    $data = $mysqli->common_select_query("SELECT tbl_attendance.*,tbl_employees.first_name,tbl_employees.last_name, tbl_employees.employee_id
        FROM `tbl_attendance` 
        JOIN tbl_employees ON tbl_employees.id = tbl_attendance.employee_id
        WHERE tbl_attendance.id = $id");
    
    
    if (!$data['error'] && !empty($data['data'])) {
        $att_record = $data['data'][0];
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Attendance</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Attendance Edit - ID: <?= $att_record->id ?></li>
    </ol>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="employee">Employee:</label>
            <input type="text" class="form-control" id="employee" name="employee" value="<?= $att_record->employee_id ?> - <?= $att_record->first_name ?> <?= $att_record->last_name ?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="1" <?= $att_record->att_status == 1 ? 'selected' : '' ?>>Present</option>
                <option value="0" <?= $att_record->att_status == 0 ? 'selected' : '' ?>>Absent</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


<?php
    } else {
       
        echo "<div class='container-fluid px-4'>Attendance record not found.</div>";
    }
} else {
  
    echo "<div class='container-fluid px-4'>Invalid request. Attendance ID is missing.</div>";
}

require_once('include/footer.php');
?>
