<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<div class="sb-sidenav-menu-heading">Core</div>
					<a class="nav-link" href="index.html">
						<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
						Dashboard
					</a>


					<div class="sb-sidenav-menu-heading">Employee manage</div>
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#colemp" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
						Employees
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="colemp" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?= $base_url?>employee_list.php">All Employees</a>
							<a class="nav-link" href="<?= $base_url?>attendance_list.php">Employee Attendance</a>
							<a class="nav-link" href="<?= $base_url?>employee_leave.php">Employee Leave</a>
							<!-- <a  class="nav-link" href="<?= $base_url?>holidays_list.php">Holidays</a> -->
							<a class="nav-link" href="<?= $base_url?>department_list.php">Departments</a>
							<a class="nav-link" href="<?= $base_url?>designation_list.php">Designations</a>
							<!-- <a class="nav-link" href="<?= $base_url?>manage_leave.php">Manage Leave</a> -->
							<!-- <a class="nav-link" href="<?= $base_url?>timesheet.php">timesheet</a> -->
							<a class="nav-link" href="<?= $base_url?>overtime_list.php"> Employee Overtime</a>
						</nav>
					</div>

					<div class="sb-sidenav-menu-heading">HR</div>
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#colhr" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
						Payroll
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="colhr" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?= $base_url?>employee_salary_list.php">Employee salary</a>
							<!-- <a class="nav-link" href="employee_payslip.php">Payslip</a> -->
							<!-- <a class="nav-link" href="<?= $base_url?>payroll_additions.php">Payroll Items</a> -->
						</nav>
					</div><br>
					
					<a class="nav-link" href="<?= $base_url?>promotion_list.php">
						<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
						Promotion
					</a>
					<a class="nav-link" href="<?= $base_url?>termination_list.php">
						<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
						Termination
					</a>
					<a class="nav-link" href="<?= $base_url?>resignation_list.php">
						<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
						Resignation
					</a>
					
				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Logged in as:</div>
				<?= $_SESSION['username'] ?>
			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>