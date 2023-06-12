<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Payroll Additions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    

    
        <div class="row">
            <div class="col-md-12">
            <form>
                <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text">
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label>Category <span class="text-danger">*</span></label>
                    <select class="form-select form-select-md">
                        <option>Select a category</option>
                        <option>Monthly remuneration</option>
                        <option>Additional remuneration</option>
                    </select>
                </div>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_department','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>

                <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label>Unit Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                <div class="form-group my-2">
                    <label class="d-block">Assignee</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_no_emp" value="option1" checked="">
                        <label class="form-check-label" for="addition_no_emp">
                        No assignee
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_all_emp" value="option2">
                        <label class="form-check-label" for="addition_all_emp">
                        All employees
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="addition_assignee" id="addition_single_emp" value="option3">
                        <label class="form-check-label" for="addition_single_emp">
                        Select Employee
                        </label>
                    </div>
                    </div>
                    <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <select class="form-select form-select-lg">
                            <option>-</option>
                            <option>Select All</option>
                            <option>John Doe</option>
                            <option>Richard Miles</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary my-2">Submit</button>
                </div>

                <?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_leaves',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='employee_leave.php'</script>";
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
                