<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar_2.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">ApplyLeave</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">ApplyLeave</li>
    </ol>
    <form method="post" class="form-valide w-75 justify-content-center">
            <div class="form-group">
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave Type:</label>
                            <!-- <input type="text" name="leave_type" class="form-control"> -->
                            <select name="leave_type" id="">
                                <option value="cl">Cl</option>
                                <option value="sl">Sl</option>
                                <option value="others">Others</option>
                            </select>
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave Category:</label>
                            <input type="text" name="leave_category" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Start Date:</label>
                            <input type="date" name="start_date" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>End Date:</label>
                            <input type="date" name="End_date" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave day:</label>
                            <input type="number" name="leave_date" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Description:</label>
                            <input type="text" name="description" class="form-control">
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-primary text-center my-1 px-5 py-1">Save</button>
            </div>       
           
        <?php
            if($_POST){
            $rs=$mysqli->common_create('user_leave_details',$_POST);
            if(!$rs['error']){
              echo "<script>window.location='view_leave.php'</script>";
            }else{
                echo $rs['error'];
            }
                 }


        ?>
    </form>
</div>
<?php require_once('include/footer.php') ?>

                