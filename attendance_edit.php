<?php
require_once('include/header.php');
require_once('include/sidebar.php');


if ($_GET['id']) {
    $id = $_GET['id'];
    
    $data = $mysqli->common_select_query("SELECT tbl_attendance.*,tbl_employees.first_name,tbl_employees.last_name, tbl_employees.employee_id
        FROM `tbl_attendance` 
        JOIN tbl_employees ON tbl_employees.id = tbl_attendance.employee_id
        WHERE tbl_attendance.id = $id");
    
    
    if (!$data['error'] && !empty($data['data'])) {
        $att_record = $data['data'][0];
?>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
    <h1 class="mt-4">Attendance</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Attendance Edit - </li>
        <li class="breadcrumb-item active">Date: <?= $att_record->att_date ?></li>
    </ol>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="employee">Employee:</label>
            <input type="text" class="form-control" value="<?= $att_record->employee_id ?> - <?= $att_record->first_name ?> <?= $att_record->last_name ?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="att_status">Status:</label>
            <select class="form-control" id="att_status" name="att_status">
                <option value="1" <?= $att_record->att_status == 1 ? 'selected' : '' ?>>Present</option>
                <option value="0" <?= $att_record->att_status == 0 ? 'selected' : '' ?>>Absent</option>
            </select>
        </div>
        
                 <button type="submit" class="btn btn-primary px-5 my-2">Update</button>
             </form>
        </div>
    </div>
    </div>

<?php
    } else {
       
        echo "<div class='container-fluid px-4'>Attendance record not found.</div>";
    }
} else {
  
    echo "<div class='container-fluid px-4'>Invalid request. Attendance ID is missing.</div>";
}
if($_POST){
    $where['id']=$id;
    $rs=$mysqli->common_update('tbl_attendance',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='attendance_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
require_once('include/footer.php');
?>
