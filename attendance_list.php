<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Attendance</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Attendance list</li>
    </ol>
    <a href="<?= $base_url?>attendance_create.php" class="btn btn-primary">Add New</a>
    <table class="table">
        <tr>
            <th>#SL</th>
            <th>Date</th>
            <th>Present</th>
            <th>Absent</th>
            <th>Show</th>
        </tr>
        <?php
            $data=$mysqli->common_select_query('SELECT att_date, sum(if(`att_status`=1,1,0)) as present,sum(if(`att_status`=0,1,0)) as absent
                  FROM `tbl_attendance` GROUP by `att_date`');
            if(!$data['error']){
                foreach($data['data'] as $i=>$d){
        ?>
        <tr>
            <td><?= ++$i ?></td>
            <td><?= $d->att_date ?></td>
            <td><?= $d->present ?></td>
            <td><?= $d->absent ?></td>
            <td>
                <a title="Show" href="<?= $base_url?>attendance_show.php?id=<?= $d->att_date ?>">
                            <i class="fa fa-eye"></i>
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
                