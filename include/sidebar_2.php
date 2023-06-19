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


		
					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#colemp" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
						Manage Leave
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="colemp" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?= $base_url?>apply_leave.php">Apply Leave</a>
							<a class="nav-link" href="<?= $base_url?>view_leave.php">View Leave</a>
						</nav>
					</div>

					<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#colhr" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
						Manage Tour
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="colhr" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?= $base_url?>employee_salary_list.php">Apply Tour</a>
							<a class="nav-link" href="<?= $base_url?>payroll_additions.php">View Tour</a>
						</nav>
					</div><br>	
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