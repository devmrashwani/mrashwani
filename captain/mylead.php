
	<!--starts navigation bar / sidebar -->

	<!--starts top header-->
	<?php 
		include("./include/header.php");
		?>

	<!--Ends navigation bar / sidebar -->
	 <!--end top header-->




        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div> -->
          <!--end breadcrumb-->

		  <style>
				.table-responsive::-webkit-scrollbar {
					width: 1px !important;
				}

				.table-responsive::-webkit-scrollbar-thumb {
					background-color: rgb(0, 0, 0);
					border-radius: 20px;
				}

				.table-responsive::-webkit-scrollbar-track {
					background-color: #ffffff;
				}
		  </style>


          <h6 class="mb-0 text-uppercase">My Leads</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="table2" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S. NO</th>
										<th>Order ID</th>
										<th>Name</th>
										<th>Requirement Msg</th>
										<th>Phone no</th>
										<th>Email</th>
										<th>Order Date</th>
										<th>Service</th>
										<th>University</th>
										<th>Update </th>
										<th>Bookmark</th>
									</tr>
								</thead>
								<tbody>
								      <?php
										include("./include/db_connect.php");

										$query = "SELECT * FROM students";
										$result = mysqli_query($conn, $query);
										
										if(mysqli_num_rows($result) > 0) {
											$l=1;

											foreach($result as $row)
											{
												

												echo "
													<tr>
													<td>$l</td>
													<td>". $row['call_date'] ." </td>
													<td>". $row['order_no'] ." </td>
													<td>". $row['name'] ." </td>
													<td>". $row['phone'] ." </td>
													<td>". $row['email'] ." </td>
													<td>". $row['reminder_date'] ." </td>
													<td>". $row['service'] . "</td>   
													<td>". $row['university'] . "</td> 
													<td>". $row['update_details'] . "</td> 
													<td>". $row['bookmark'] . "</td>          
												</tr>
												";
												$l++;

										?>
													<!-- <td>
													<input type='text' value='" . $row['phone'] . "' readonly id='" . $row['phone'] . "'>
													</td>
													<td>
													<input type='text' value='" . $row['email'] . "' readonly id='" . $row['email'] . "'>
													</td> -->
													<!-- <i class='fa-solid fa-eye' id='" . $row['order_no'] . "' onclick='toggle()'></i> -->
										<!-- 
										<script>
											let state = false;

										function toggle() {
											if (state) {
												document.getElementById($phone).setAttribute("type", "password");
												document.getElementById($order_no).setAttribute("class", "fa-solid fa-eye");
												state = false;
											} else {
												document.getElementById($email).setAttribute("type", "text");
												document.getElementById($order_no).setAttribute("class", "fa-solid fa-eye-slash");
												state = true;
											}
										}
										</script> -->


										<?php
											}
										}
										else {
											echo "

										<tr>
											<th scope='row'>1</th>  
													<td> Re </td>
													<td>". $row['order_date'] ." </td>
													<td>". $row['order_no'] ." </td>
													<td>". $row['name'] ." </td>
													<td>
													<input type='password' value='" . $row['phone'] . "' readonly id='password'>
													<i class='fa-solid fa-eye' id='eye' onclick='toggle()'></i>
													</td>
													<td>". $row['email'] ." </td>
													<td>". $row['reminder_date'] ." </td>
													<td>" . $row['service'] . "</td>   
													<td>" . $row['university'] . "</td> 
													<td>" . $row['category'] . "</td> 
													<td>" . $row['update'] . "</td> 
													<td>" . $row['bookmark'] . "</td> 
													
										</tr>
										";
										}


										?>
									
								</tbody>
								<tfoot>
									<tr>
                                    <th>S. NO</th>
										<th>Order ID</th>
										<th>Name</th>
										<th>Requirement Msg</th>
										<th>Phone no</th>
										<th>Email</th>
										<th>Order Date</th>
										<th>Service</th>
										<th>University</th>
										<th>Update </th>
										<th>Bookmark</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
          <!-- end page content-->
         </div>
         


         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
			 <!--End Back To Top Button-->
	  
			 <!--start switcher-->
    <div class="switcher-body">
      <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <h6 class="mb-0">Theme Variation</h6>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
            <label class="form-check-label" for="LightTheme">Light</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option1" checked>
            <label class="form-check-label" for="SemiDark">Semi Dark</label>
          </div>
          <hr />
          <h6 class="mb-0">Header Colors</h6>
          <hr />
          <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
              <div class="col">
                <div class="indigator headercolor1" id="headercolor1"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor2" id="headercolor2"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor3" id="headercolor3"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor4" id="headercolor4"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor5" id="headercolor5"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor6" id="headercolor6"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor7" id="headercolor7"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor8" id="headercolor8"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--end switcher-->


         <!--start overlay-->
          <div class="overlay nav-toggle-icon"></div>
         <!--end overlay-->

     </div>
  <!--end wrapper-->


  


    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/table-datatable.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>