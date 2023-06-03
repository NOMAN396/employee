<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">RESIGNATION</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Resignation List</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title"> Edit Employee Resignation</h3>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_resignation','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


              <div class="card-body">
                  <!-- <div class="row "> -->
                    <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Resigning Employee <span class="text-danger">*</span></label>
										        <input name="resigning_employee" value="<?= $d->resigning_employee ?>"  class="form-control" type="text">
                            </div>
                          </div>

                          <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Notice Date<span class="text-danger">*</span></label>
                            <input name="notice_date" value="<?= $d->notice_date ?>" class="form-control" type="date">	
                            </div>
                        </div>

                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Resignation Date<span class="text-danger">*</span></label>
                            <input name="resignation_date" value="<?= $d->resignation_date ?>" class="form-control" type="date">	
                            </div>
                        </div>

                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Reason<span class="text-danger">*</span></label>
							      <textarea name="reason" value="<?= $d->reason ?>" class="form-control" type="text"></textarea>
                            </div>
                          </div>

                         
                       
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  
                  

<?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_resignation',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='resignation_list.php'</script>";
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
                