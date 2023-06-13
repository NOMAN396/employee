<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">TIMESHEET</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <form enctype="multipart/form-data" action="" method="post">
                  <h4 class="title"> Edit Timesheet</h4>
   
                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_timesheet','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


                <div class="body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>ID:</label>
                            <input type="text" value="<?= $d->id ?>" name="id" class="form-control">
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Date:</label>
                            <input type="text" value="<?= $d->a_date ?>" name="a_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Projects:</label>
                                <input type="text" value="<?= $d->projects ?>" name="projects" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Assigned Hours:</label>
                                <input type="text" value="<?= $d->a_hours ?>" name="a_hours" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Hours:</label>
                                <input type="text" value="<?= $d->hours ?>" name="hours" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" value="<?= $d->description ?>" name="description" class="form-control">   
                                <button type="submit" class="btn btn-primary px-5 py-2 my-3">Save</button>
                            </div>
                        </div>
                  </div>
                 

<?php
  if($_POST){
    
    $rs=$mysqli->common_update('tbl_timesheet',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='timesheet.php'</script>";
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
                