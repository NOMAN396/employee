<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Promotion</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Promotion List</li>
    </ol>
    <a href="<?= $base_url?>promotion_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Promoted Employee</th>
            <th>Department</th>
            <th>Promotion Designation From</th>
            <th>Promotion Designation To</th>
            <th>Promotion Date</th>
            <th>Action</th>
        </tr>
        <?php
                 // $data=$mysqli->common_select('tbl_promotion');
               //if(!$data['error']){
                 //   foreach($data['data'] as $d){

                    


                    $data=$mysqli->common_select_query("SELECT tbl_promotion.*, tbl_department.department_name,tbl_employees.first_name,tbl_employees.last_name,tbl_designations.designation as desi_form,
                    (select designation from tbl_designations where tbl_designations.id=tbl_promotion.promoted_designation_to) as desi_to
                     FROM `tbl_promotion`
                     join tbl_employees on tbl_employees.id=tbl_promotion.promoted_employee
                    join tbl_department on tbl_department.id=tbl_promotion.department
                    join tbl_designations on tbl_designations.id=tbl_promotion.promoted_designation_from
                     WHERE tbl_promotion.deleted_at is null");
               if(!$data['error']){
                    foreach($data['data'] as $d){


                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?> <?= $d->last_name ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->desi_form ?></td>
            <td><?= $d->desi_to ?></td>
            <td><?= $d->promotion_date ?></td>
            <td>
                <a title="Update" href="<?= $base_url?>promotion_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="promotion_delete.php?id=<?= $d->id ?>">
                            <i class="fa fa-trash"></i>
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
                