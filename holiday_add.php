<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Holidays</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">All Holidays</li>
    </ol>





 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

              <form  action="" method="post">
                
                  <h3 class="title">Add Holiday</h3>
              
                <div class="body">
                  <div class="row ">
                    <div class="col-sm-6">
                    <form method="POST">
									<div class="form-group">
										<label>Holiday Name <span class="text-danger">*</span></label>
										<input name="holiday_name" class="form-control" required type="text">
									</div>
									<div class="form-group">
										<label>Holiday Date <span class="text-danger">*</span></label>
										<input class="form-control" name="holiday_date" required type="date">
                             <button type="submit" class="btn btn-primary px-5 py-2 my-2">Save</button>
                            </div>
                        </div>
                  </div> 



            <?php

          if($_POST){
            $rs=$mysqli->common_create('tbl_holidays',$_POST);
            if(!$rs['error']){
              echo "<script>window.location='holidays_list.php'</script>";
            }else{
                echo $rs['error'];
            }
                 }


            ?>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  

        <?php require_once('include/footer.php') ?>