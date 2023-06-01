<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Holidays</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">Edit Holidays</h3>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_holidays','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


                <div class="card-body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Holiday</label>
                            <input type="text" value="<?= $d->holiday_name ?>" name="holiday_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
										    <label>Holiday Date</label>
										    <input class="form-control" value="<?= $d->holiday_date ?>" name="holiday_date" type="date">
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
    $rs=$mysqli->common_update('tbl_holidays',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='holidays_list.php'</script>";
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
                