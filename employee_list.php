<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee_List</li>
    </ol>
    <a href="#"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Employee_ID</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Joining Date</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_employees');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->ID ?></td>
            <td><?= $d->First_name ?></td>
            <td><?= $d->Last_name ?></td>
            <td><?= $d->User_name ?></td>
            <td><?= $d->Email ?></td>
            <td><?= $d->Password ?></td>
            <td><?= $d->Phone ?></td>
            <td><?= $d->Employee_ID ?></td>
            <td><?= $d->Department ?></td>
            <td><?= $d->Designation ?></td>
            <td><?= $d->Joining_Date ?></td>
            <td><?= $d->Picture ?></td>
            <td>
                <a title="Update" href="user_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="user_delete.php?id=<?= $d->id ?>">
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
                