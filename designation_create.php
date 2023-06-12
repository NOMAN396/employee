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
                  <h3 class="title">Add Designation</h3>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Designation Name</label>
                            <input type="text" name="designation" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Basic</label>
                            <input type="text" name="basic" class="form-control">
                                <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                            </div>
                        </div>
                  </div>

  <?php
  if($_POST){
    $rs=$mysqli->common_create('tbl_designations',$_POST);
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
                