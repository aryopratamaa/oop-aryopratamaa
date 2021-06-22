<div class="app-header-inner">  
	<div class="container-fluid py-2">
		<div class="app-header-content"> 
			<div class="row justify-content-between align-items-center">
			
			<div class="col-auto">
				<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
				</a>
			</div><!--//col-->
			<div class="search-mobile-trigger d-sm-none col">
				<i class="search-mobile-trigger-icon fas fa-search"></i>
			</div><!--//col-->
			<div class="app-search-box col">
				<form class="app-search-form">   
					<input type="text" placeholder="Search..." name="search" class="form-control search-input">
					<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button> 
				</form>
			</div><!--//app-search-box-->
			
			<div class="app-utilities col-auto">
				<div class="app-utility-item app-notifications-dropdown dropdown">    
					<a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
						<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
						<path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
						</svg>
						<span class="icon-badge">2</span>
					</a><!--//dropdown-toggle-->
					
					<div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
						<div class="dropdown-menu-header p-3">
							<h5 class="dropdown-menu-title mb-0">Notifications</h5>
						</div><!--//dropdown-menu-title-->
						<div class="dropdown-menu-content">
						   <div class="item p-3">
								<div class="row gx-2 justify-content-between align-items-center">
									<div class="col-auto">
										<div class="app-icon-holder">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
												<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
												</svg>
										</div>
									</div><!--//col-->
									<div class="col">
										<div class="info"> 
											<div class="desc">You have a new invoice. Proin venenatis interdum est.</div>
											<div class="meta"> 1 day ago</div>
										</div>
									</div><!--//col-->
								</div><!--//row-->
								<a class="link-mask" href="#"></a>
						   </div><!--//item-->
						   <div class="item p-3">
								<div class="row gx-2 justify-content-between align-items-center">
									<div class="col-auto">
										<div class="app-icon-holder icon-holder-mono">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
												</svg>
										</div>
									</div><!--//col-->
									<div class="col">
										<div class="info"> 
											<div class="desc">Your report is ready. Proin venenatis interdum est.</div>
											<div class="meta"> 3 days ago</div>
										</div>
									</div><!--//col-->
								</div><!--//row-->
								<a class="link-mask" href="#"></a>
						   </div><!--//item-->
						</div><!--//dropdown-menu-content-->
						
						<div class="dropdown-menu-footer p-2 text-center">
							<a href="#">View all</a>
						</div>
													
					</div><!--//dropdown-menu-->					        
				</div><!--//app-utility-item-->
				
				<div class="app-utility-item app-user-dropdown dropdown">
					<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="layout/assets/images/icon-user.png" alt="user profile"></a>
					<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
						<li><a class="dropdown-item">On <b><?php echo $_SESSION['user_nama']; ?></b></a></li>
						<li><a class="dropdown-item" href="#">Account</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="logout.php">Log Out</a></li>
					</ul>
				</div><!--//app-user-dropdown--> 
			</div><!--//app-utilities-->
		</div><!--//row-->
		</div><!--//app-header-content-->
	</div><!--//container-fluid-->
</div><!--//app-header-inner-->
