<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">
		Payslip
		<div class="btn-group btn-group-sm float-end">
			<button class="btn btn-white" onClick="print_page()"><i class="fa fa-print fa-lg"></i> Print</button>
		</div>
	</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pay Slip print</li>
    </ol>
			
	<?php
		$data=$mysqli->common_select_query("SELECT tbl_salary.*,tbl_employees.first_name,tbl_employees.last_name, tbl_employees.phone,tbl_designations.designation,
											(select count(*) from tbl_attendance where
												tbl_attendance.employee_id=tbl_employees.id
												and tbl_attendance.att_status=0
												and month(tbl_attendance.att_date)=tbl_salary.s_month
												and year(tbl_attendance.att_date)=tbl_salary.s_year
											) as absent
											FROM `tbl_salary`
											join tbl_employees on tbl_employees.id=tbl_salary.employee_id
											join tbl_designations on tbl_designations.id=tbl_employees.designation_id
											where tbl_salary.id=".$_GET['id']."");
		
		if(!$data['error'] && count($data['data'])>0)
		$d=$data['data'][0];
		else{
		echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
		exit;
		}
	?>	
	<!-- /Page Header -->
	<div class="row" id="pay_print">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h4 class="payslip-title">Payslip for the month of <?= date('F', mktime(0, 0, 0, $d->s_month, 10)); ?> <?= $d->s_year ?></h4>
					<div class="row">
						<div class="col-6 m-b-20">
							<img src="assets/img/logo2.png" style="width:80px" class="inv-logo" alt="">
							<ul class="list-unstyled mb-0">
								<li>Dreamguy's Technologies</li>
								<li>3864 Quiet Valley Lane,</li>
								<li>Sherman Oaks, CA, 91403</li>
							</ul>
						</div>
						<div class="col-6 m-b-20">
							<div class="invoice-details">
								<h3 class="text-uppercase">Payslip #<?= $d->id ?></h3>
								<ul class="list-unstyled">
									<li>Salary Month: <span><?= date('F', mktime(0, 0, 0, $d->s_month, 10)); ?>, <?= $d->s_year ?></span></li>
								</ul>
							</div>
							<ul class="list-unstyled">
								<li><h5 class="mb-0"><strong><?= $d->first_name ?> <?= $d->last_name ?></strong></h5></li>
								<li><span><?= $d->designation ?></span></li>
								<li>Contact: <?= $d->phone ?></li>
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Earnings</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Basic Salary</strong> <span class="float-right"> <?= $d->basic ?></span></td>
										</tr>
										<tr>
											<td><strong>House Rent Allowance</strong> <span class="float-right"><?= $d->house_rent ?></span></td>
										</tr>
										<tr>
											<td><strong>Medical Allowance</strong> <span class="float-right"><?=$d->medical_allowance ?></span></td>
										</tr>
										<tr>
											<td><strong>Bonus</strong> <span class="float-right"><?= $d->bonus ?></span></td>
										</tr>
										<tr>
											<td><strong>Total Earnings:</strong> <span class="float-right"><strong><?= ($d->basic + $d->house_rent + $d->medical_allowance+ $d->bonus  ) ?></strong></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Deductions</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Provident Fund</strong> <span class="float-right"><?= $d->provident_fund ?></span></td>
										</tr>
										<tr>
											<td><strong>Tax</strong> <span class="float-right"><?= $d->tax ?></span></td>
										</tr>
										<tr>
											<td><strong>Leave deduction</strong> <span class="float-right"><?= $d->leave_deduction ?></span></td>
										</tr>
										<tr>
											<td><strong>Total Deductions:</strong> <span class="float-right"><strong><?= ($d->provident_fund + $d->tax + $d->leave_deduction )  ?></strong></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12">
							<div>
								<h4 class="m-b-10"></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Net Salary</strong></td>
											<td><strong class="text-end"><?= $d->total ?></strong> </td>
										</tr>
										<tr>
											<td><strong>(In Word): 
												<?php
													$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
													echo $f->format($d->total);
												?></strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php require_once('include/footer.php') ?>
<script>
	function print_page(){
		var prtContent = document.getElementById("pay_print");
		var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
		WinPrint.document.write('<link href="<?= $base_url?>assets/css/styles.css" rel="stylesheet" />');
		WinPrint.document.write(prtContent.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
	}
</script>        