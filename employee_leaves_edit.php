<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Emoloyee Leaves</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title"> Edit Employee Leaves</h3>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_leaves','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


                <div class="card-body">
                  <!-- <div class="row "> -->
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select Leave Type</option>
											<option>Casual Leave 12 Days</option>
										</select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <div class="cal-icon">
                            <label>From <span class="text-danger">*</span></label>
											<input class="form-control datetimepicker" value="<?= $d->starting_at ?>" type="text">
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="form-group">
                            <label>To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" value="<?= $d->ending_on ?>"  type="text">
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" type="text" value="<?= $d->days ?>">
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="form-group">
                            <label>Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" value="<?= $d->days ?>" type="text">
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="form-group">
                            <label>Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control" value="<?= $d->reason ?>"></textarea>
                            </div>
                        </div>
        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
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
                </div>
                
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




</div>
<?php require_once('include/footer.php') ?>
                