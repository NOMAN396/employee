<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>

                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label>Select Staff</label>
                            <select class="form-control" id="department_id" name="name">
                                  <?php
                                      $data=$mysqli->common_select('tbl_employees');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->first_name." ".$dt->last_name ?></option>
                                  <?php } } ?>
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
                    <button type="submit" class="btn btn-primary px-5 my-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php
  if($_POST){
    $rs=$mysqli->common_create('employee_salary',$_POST);
    if(!$rs['error']){
      echo "<script>window.location='employee_salary_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>


</div>
<?php require_once('include/footer.php') ?>
                