<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Termination</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Termination</li>
    </ol>
    
    <section class="content">
        <div class="row">
          <div class="col-md-12">            
              <form enctype="multipart/form-data" action="" method="post">
                
                <div class="body">
                  
                  <div class="col-sm-10">
                            <div class="form-group">
                            <label>Terminated Employee <span class="text-danger">*</span></label>
                            <select class="form-control" id="department_id" name="terminated_employee">
                                  <?php
                                      $data=$mysqli->common_select('tbl_employees');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->first_name.$dt->last_name ?></option>
                                  <?php } } ?>
                              </select>
                            </div>
                        </div>
                  <div class="col-sm-10">
                            <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select class="form-control" id="department_id" name="department">
                                  <?php
                                      $data=$mysqli->common_select('tbl_department');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->department_name ?></option>
                                  <?php } } ?>
                              </select>
                            
                            </div>
                        </div>

        <div class="col-sm-10">
            <div class="form-group">
            <label>Termination Type <span class="text-danger">*</span></label>
            <select name="termination_type" class="form-control " type="text">
                 <option value="miscoduct">Misconduct</option>
                  <option value="others">Incompatibility</option>
                  <option value="others">Job abandonment</option>
                  <option value="others">Others</option>
              </select>
                  </div>
                     </div>

                        <div class="col-sm-10">
                            <div class="form-group">
                            <label>Termination Date<span class="text-danger">*</span></label>
                            <input name="termination_date" class="form-control" type="date">	
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <div class="form-group">
                            <label>Reason<span class="text-danger">*</span></label>
							<textarea name="reason" class="form-control" type="text"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-10">
                            <div class="form-group">
                            <label>Notice Date<span class="text-danger">*</span></label>
                            <input name="notice_date" class="form-control" type="date">	
                            </div>
                        </div>

                        
                        <button type="submit" class="btn btn-primary px-5 py-2 my-2">Save</button>
                           
                 
                 

            <?php
            if($_POST){
                $rs=$mysqli->common_create('tbl_termination',$_POST);
                if(!$rs['error']){
                echo "<script>window.location='termination_list.php'</script>";
                }else{
                    echo $rs['error'];
                }
            }
            ?>
                        <!-- </div> -->
                        
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
                