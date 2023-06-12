<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active fs-5">Department</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <form  action="" method="post">
                  <h4 class="my-3">Add Department</h4>
                        <div class="col-sm-6">
                            <div class="form-group my-1">
                            <label>Department Name</label>
                            <input type="text" name="department_name" class="form-control my-1">
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
                