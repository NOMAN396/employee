<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Department</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <form  action="" method="post">
                <div class="head">
                  <h3 class="card-title">Add Department</h3>
                </div>
                <div class="body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Department Name</label>
                            <input type="text" name="department_name" class="form-control">
                                <button type="submit" class="btn btn-primary my-2 p-2 px-5">Save</button>
                            </div>
                        </div>   
                  </div>

<?php
  if($_POST){
    $rs=$mysqli->common_create('tbl_department',$_POST);
    if(!$rs['error']){
      echo "<script>window.location='department_list.php'</script>";
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
                