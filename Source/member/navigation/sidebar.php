<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="sidebar-user">
									<div class="sidebar-user-picture">
										<img alt="image" src="../assets/img/dp.jpg">
									</div>
									<div class="sidebar-user-details">
										<div class="user-name"><?php echo $_SESSION['userdata']['name'];?></div>
										<div class="user-role"><?php echo $_SESSION['userdata']['designation'];?></div>
										<div class="user-role">Dept :- <?php echo $_SESSION['userdata']['dept'];?></div>
									</div>
								</div>
							</li>
							<li class="nav-item start ">
								<a href="index.php" class="nav-link nav-toggle"> <i data-feather="airplay"></i>
									<span class="title">Dashboard</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
									<span class="title">Jobs</span> <span class="selected"></span>
									<span class="arrow"></span>
									<!-- <span class="label label-rouded label-menu label-success">new</span> -->
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_jobs.php" class="nav-link "> <span class="title">Job Postings</span>
											<span class="selected"></span>
										</a>
									</li>
								</ul>
							</li>							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
									<span class="title">Committee</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="members.php" class="nav-link "> <span class="title">Co
												Committee Members</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>