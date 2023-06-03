<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Promotion</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Promotion</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">Add New Promotion</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Promotion For <span class="text-danger">*</span></label>
										<input name="promoted_employee" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Promotion From <span class="text-danger">*</span></label>
											<input name="promoted_designation_from" class="form-control " type="text">
                            </div>
                        </div>

                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Promotion To<span class="text-danger">*</span></label>
										<input name="promoted_designation_to" class="form-control" type="text">
                            </div>
                        </div>

              
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                            <label>Promotion Date<span class="text-danger">*</span></label>
                            <input name="promotion_date" class="form-control" type="date">	
                            </div>
                        </div>
                       
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div>
                 

            <?php
            if($_POST){
                $rs=$mysqli->common_create('tbl_promotion',$_POST);
                if(!$rs['error']){
                echo "<script>window.location='promotion_list.php'</script>";
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
                