<div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>
                      
                      
                        
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="../assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> <?php echo $_SESSION['userdata']['name'];?>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="edit_profile.php">
										<i class="icon-user"></i>Edit Profile </a>
								</li>
								<li>
									<a href="<?php echo base_url.'/classes/Login.php?f=adminlogout' ?>">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>