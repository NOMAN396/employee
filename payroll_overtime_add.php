<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Payroll Overtime</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    
    <div class="row">
        <div class="col-md-12">
        <form method="post">
            <div class="col-md-6">
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name">
            </div>
            </div>
            <!-- <div class="col-md-6 my-3">
            <div class="form-group">
                <label>Rate Type <span class="text-danger">*</span></label>
                <select class="form-select form-select-md" name="">
                    <option>-</option>
                    <option>Daily Rate</option>
                    <option>Hourly Rate</option>
                </select>
            </div>
            </div> -->
            <div class="col-md-6">
            <div class="form-group">
                <label>Rate <span class="text-danger">*</span></label>
                <input class="form-control" name="rate" type="text">
            </div>
            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </div>
        </form>
        <?php
        if($_POST){
            $rs=$mysqli->common_create('tbl_payroll_overtime',$_POST);
            if(!$rs['error']){
            echo "<script>window.location='payroll_overtime.php'</script>";
            }else{
                echo $rs['error'];
            }
        }
    ?>
       </div>
    </div>
</div>
<?php require_once('include/footer.php') ?>
                