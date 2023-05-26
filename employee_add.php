<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Page Name</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Page Name</li>
    </ol>
    
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Employee</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input name="firstname" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input name="lastname" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input name="username" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input name="email" required class="form-control" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Password</label>
												<input class="form-control" required name="password" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" required name="confirm_pass" type="password">
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input name="employee_id" readonly type="text" value="<?php echo 'EMP-'.$id; ?>" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input name="phone" required class="form-control" type="text">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select required name="department" class="select">
													<option>Select Department</option>
													<?php 
											$sql2 = "SELECT * from departments";
											$query2 = $dbh -> prepare($sql2);
											$query2->execute();
											$result2=$query2->fetchAll(PDO::FETCH_OBJ);
											foreach($result2 as $row)
											{          
												?>  
											<option value="<?php echo htmlentities($row->Department);?>">
											<?php echo htmlentities($row->Department);?></option>
											<?php } ?> 
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select required name="designation" class="select">
													<option>Select Designation</option>
													<?php 
											$sql2 = "SELECT * from designations";
											$query2 = $dbh -> prepare($sql2);
											$query2->execute();
											$result2=$query2->fetchAll(PDO::FETCH_OBJ);
											foreach($result2 as $row)
											{          
												?>  
											<option value="<?php echo htmlentities($row->Designation);?>">
											<?php echo htmlentities($row->Designation);?></option>
											<?php } ?> 
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-form-label">Employee Picture</label>
												<input class="form-control" required name="picture" type="file">
											</div>
										</div>
									</div>
									
									<div class="submit-section">
										<button type="submit" name="add_employee" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


</div>
<?php require_once('include/footer.php') ?>
                