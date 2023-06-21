<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <div class="content">
            <h5 class="modal-title">Edit Staff Salary</h5>
        <div class="body">
            <form>
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label>Select Staff</label>
                            <select class="select"> 
                                <option>John Doe</option>
                                <option>Richard Miles</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <label>Net Salary</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <h4 class="text-primary">Earnings</h4>
                        <div class="form-group">
                            <label>Basic</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>DA(40%)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>HRA(15%)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Conveyance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Allowance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Medical  Allowance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Others</label>
                            <input class="form-control" type="text">
                        </div>
                        <!-- <div class="add-more">
                            <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                        </div> -->
                    </div>
                    <div class="col-sm-6">  
                        <h4 class="text-primary">Deductions</h4>
                        <div class="form-group">
                            <label>TDS</label>
                            <input class="form-control" type="text">
                        </div> 
                        <div class="form-group">
                            <label>ESI</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>PF</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Leave</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Prof. Tax</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Labour Welfare</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Others</label>
                            <input class="form-control" type="text">
                        </div>
                        <!-- <div class="add-more">
                            <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                        </div> -->
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary">Submit</button>
                </div>


 <?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_salary',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='employee_salary_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
 ?>

            </form>
        </div>
    </div>


</div>
<?php require_once('include/footer.php') ?>
                