<?php
	session_start();
	$page_title = "Admin Dashboard";

	include('includes/dashboard_header.php');

	include('includes/db.php');

	include('includes/function.php');

	checkLogin();


?>
<div class="wrapper">
		<div id="stream">
			<table id="tab">
				<thead>
					<tr>
						<th>Category id</th>
						<th>Category name</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$data = viewCategory($conn);
						echo $data;

					?>
          		</tbody>
			</table>
		</div>

		<div class="paginated">
			<a href="#">1</a>
			<a href="#">2</a>
			<span>3</span>
			<a href="#">2</a>
		</div>
	</div>


<?php

	include('includes/footer.php');

?>