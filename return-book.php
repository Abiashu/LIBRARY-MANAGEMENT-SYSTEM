	<?php 
		 session_start();
		if (!isset($_SESSION["username"])) {
            ?>
                <script type="text/javascript">
                    window.location="login.php";
                </script>
            <?php
        }
        include 'inc/header.php';
        include 'inc/connection.php';
	 ?>
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">return book</span>
						</div>
					</div>
				</div>
				<div class="rBook">
					<form action="" method="post" name="form1">
                       <table class="table table-bordered">
                           <tr>
                               <td>
                                   <select name="enr" class="form-control">
                                        <option value="">14502000020</option>
                                        <option value="">14502000007</option>
                                        <option value="">14502000008</option>
                                   </select>
                               </td>
                               <td>
                                   <input type="submit" name="submit1" class="btn btn-info form-control" value="Search">
                               </td>
                           </tr>
                       </table>
                   </form>
                   <div class="row">
						<div class="col-md-12">
							<div class="rbook-info">
								<table class="table  table-striped table-dark text-center">
									<thead>
										<tr>
											<th>Reg No</th>
											<th>Name</th>
											<th>Username</th>
											<th>Semester</th>
											<th>Dept</th>
											<th>Book Name</th>
											<th>Issue Date</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Return Book</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>14502000020</td>
											<td>Mostafizur Rahman</td>
											<td>utter333</td>
											<td>8th</td>
											<td>CSE</td>
											<td>Computer Network & Secutity</td>
											<td>22/03/19</td>
											<td>mamun@gmail.com</td>
											<td>01721585268</td>
											<td ><a href="return.php" class="link">Return book</a></td>
										</tr>
										<tr>
											<td>14502000020</td>
											<td>Mostafizur Rahman</td>
											<td>utter333</td>
											<td>8th</td>
											<td>CSE</td>
											<td>Computer Network & Secutity</td>
											<td>22/03/19</td>
											<td>mamun@gmail.com</td>
											<td>01721585268</td>
											<td><a href="return.php" .std-info>Return book</a></td>
										</tr>
										<tr>
											<td>14502000020</td>
											<td>Mostafizur Rahman</td>
											<td>utter333</td>
											<td>8th</td>
											<td>CSE</td>
											<td>Designing for Safe Use</td>
											<td>22/03/19</td>
											<td>mamun@gmail.com</td>
											<td>01721585268</td>
											<td><a href="return.php" .std-info>Return book</a></td>
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
	<?php 
		include 'inc/footer.php';
	 ?>