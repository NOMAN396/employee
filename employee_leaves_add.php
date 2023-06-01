<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-center mx-auto">Emoloyee Leave</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">Add New Leave</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Employee Leaving <span class="text-danger">*</span></label>
										<select name="employee" class="select">
										<option>Select Employee</option>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>From <span class="text-danger">*</span></label>
										<input name="starting_at" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>To <span class="text-danger">*</span></label>
											<input name="ending_on" class="form-control " type="date">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
										<input name="days" class="form-control" type="number">
                            </div>
                        </div>

              
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave Reason <span class="text-danger">*</span></label>
										<textarea name="reason" rows="4" class="form-control"></textarea>
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
    $rs=$mysqli->common_create('tbl_leaves',$_POST);
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
                