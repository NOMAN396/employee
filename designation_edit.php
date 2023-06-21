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
                            <label><h6>Designation Name</h6></label>
                            <input type="text" name="designation" value="<?= $d->designation ?>"class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 d-block">
                            <div class="form-group">
                            <label><h6>House Rent</h6></label>
                            <input type="text" name="house_rent" value="<?= $d->house_rent ?>"class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 d-block">
                            <div class="form-group">
                            <label><h6>Medical Allowance</h6></label>
                            <input type="text" name="medical_allowance" value="<?= $d->medical_allowance ?>"class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 d-block">
                            <div class="form-group">
                            <label><h6>Provident Found</h6></label>
                            <input type="text" name="pf" value="<?= $d->pf ?>"class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 d-block">
                            <div class="form-group">
                            <label><h6>Tax</h6></label>
                            <input type="text" name="tax" value="<?= $d->tax ?>"class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 d-block">
                            <div class="form-group">
                            <label><h6>Bonus</h6></label>
                            <input type="text" name="bonus" value="<?= $d->bonus ?>"class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <button type="submit" class="btn btn-success px-5 my-2 form-control">Save</button>
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
                