<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee List</li>
    </ol>
   
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
            <a href="<?= $base_url?>employee_create.php"class="btn btn-primary mt-3">ADD NEW</a>
                <form action="search.php" method="GET" class="form-inline float-end">
                    <input class="rounded px-3 py-2" type="search" name="query" placeholder="Search...">
                    <button class="btn btn-success py-2 px-3 my-3" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Employee ID</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Basic</th>
                <th>Joining Date</th>
                <th>Yearly Leave</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $data=$mysqli->common_select_query("SELECT tbl_employees.*, tbl_department.department_name, tbl_designations.designation,
                    (select sum(days) from tbl_leaves where tbl_leaves.employee_id=tbl_employees.id) as leaved
                    FROM `tbl_employees`
                                        join tbl_designations on tbl_designations.id=tbl_employees.designation_id
                                        join tbl_department on tbl_department.id=tbl_employees.department_id
                                        WHERE tbl_employees.deleted_at is null");
                if(!$data['error']){
                        foreach($data['data'] as $d){
                    ?>
            <tr>
                <td><?= $d->id ?></td>
                <td><?= $d->first_name ?></td>
                <td><?= $d->last_name ?></td>
                <td><?= $d->email ?></td>
                <td><?= $d->phone ?></td>
                <td><?= $d->employee_id ?></td>
                <td><?= $d->department_name ?></td>
                <td><?= $d->designation ?></td>
                <td><?= $d->basic_salary ?></td>
                <td><?= $d->joining_date ?></td>
                <td>
                    Leave: <?= $d->yearly_leave ?><br>
                    Remain: <?= ($d->yearly_leave - $d->leaved) ?>
                </td>
                <td><img src="upload/users/<?= $d->image ?>" width="50px" alt=""></td>
                <td>
                    <a title="Update" href="<?= $base_url?>employee_edit.php?id=<?= $d->id ?>">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a title="Delete" class="text-danger" href="employee_delete.php?id=<?= $d->id ?>">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php } } ?>
        </tbody>
    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Employee ID</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Basic</th>
            <th>Joining Date</th>
            <th>Yearly Leave</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select_query("SELECT tbl_employees.*, tbl_department.department_name, tbl_designations.designation,
                  (select sum(days) from tbl_leaves where tbl_leaves.employee_id=tbl_employees.id) as leaved
                  FROM `tbl_employees`
                                    join tbl_designations on tbl_designations.id=tbl_employees.designation_id
                                    join tbl_department on tbl_department.id=tbl_employees.department_id
                                    WHERE tbl_employees.deleted_at is null");
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?></td>
            <td><?= $d->last_name ?></td>
            <td><?= $d->email ?></td>
            <td><?= $d->phone ?></td>
            <td><?= $d->employee_id ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->designation ?></td>
            <td><?= $d->basic_salary ?></td>
            <td><?= $d->joining_date ?></td>
            <td>
                Leave: <?= $d->yearly_leave ?><br>
                Remain: <?= ($d->yearly_leave - $d->leaved) ?>
            </td>
            <td><img src="upload/users/<?= $d->image ?>" width="50px" alt=""></td>
            <td>
                <a title="Update" href="<?= $base_url?>employee_edit.php?id=<?= $d->id ?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="employee_delete.php?id=<?= $d->id ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php } } ?>
        
    </table>
</div>
<?php require_once('include/footer.php') ?>
                