<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Payroll Overtime</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    
    <div class="row">
        <div class="col-md-12">
        <form>
            <div class="col-md-6">
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text">
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

           
            <div class="col-md-6 my-3">
            <div class="form-group">
                <label>Rate Type <span class="text-danger">*</span></label>
                <select class="form-select form-select-md">
                    <option>-</option>
                    <option>Daily Rate</option>
                    <option>Hourly Rate</option>
                </select>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Rate <span class="text-danger">*</span></label>
                <input class="form-control" type="text">
            </div>
            </div>
            <div class="submit-section">
                <button class="btn btn-primary my-3">Submit</button>
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
                