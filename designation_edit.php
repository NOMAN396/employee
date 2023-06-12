<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Designation</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="content">
              <form  action="" method="post">
                <div class="head">
                  <h3 class="title">Edit Designation</h3>
                </div>


                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_designations','*',$where);
                 
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
                            <label>Designation Name</label>
                            <input type="text" name="designation" value="<?= $d->designation ?>"class="form-control">
                                
                            </div>
                        </div>
                     
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>basic</label>
                            <input type="text" name="designation" value="<?= $d->basic ?>"class="form-control">
                            <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                            </div>
                        </div>
                     
                        
                  </div>

                  <?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_designations',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='designation_list.php'</script>";
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
                