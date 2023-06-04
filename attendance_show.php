<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Attendance</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Attendance list For <?= $_GET['id'] ?></li>
    </ol>
    
    <table class="table">
        <tr>
            <th>#SL</th>
            <th>Employee</th>
            <th>Status</th>
            <th>Update</th>
        </tr>
        <?php
                  $data=$mysqli->common_select_query("SELECT tbl_attendance.*,tbl_employees.first_name,tbl_employees.last_name, tbl_employees.employee_id
                  FROM `tbl_attendance` 
                  join tbl_employees on tbl_employees.id=tbl_attendance.employee_id
                  where `att_date`='".$_GET['id']."'");
               if(!$data['error']){
                    foreach($data['data'] as $i=>$d){
                ?>
        <tr>
            <td><?= ++$i ?></td>
            <td><?= $d->employee_id ?> - <?= $d->first_name ?> <?= $d->last_name ?></td>
            <td>
                <?= $d->att_status==1?"Present":"Absent" ?>
            </td>
            <td>
                <a title="Update" href="<?= $base_url?>attendance_edit.php?id=<?= $d->id ?>">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php
        }
                  }
                  ?>
    </table>
</div>
<?php require_once('include/footer.php') ?>
                