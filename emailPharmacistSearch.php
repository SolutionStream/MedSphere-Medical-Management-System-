<?php
// include("adheader.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM pharmacist WHERE pharmacist_id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('pharmacist record deleted successfully..');</script>";
	}
}
?>
<div class="container-fluid">
	<div class="block-header">
		<h2 class="text-center">View Available pharmacist</h2>

	</div>

<div class="card">

	<section class="container">
		<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
			<thead>
				<tr>
					<td>Name</td>
                    <td>Email</td>
					<td>Contact</td>
					<td>Address</td>
					<td>SLMC ID</td>
					<td>Status</td>
				</tr>
			</thead>
			<tbody>
				
				<?php
				$sql ="SELECT * FROM pharmacist";
				$qsql = mysqli_query($con,$sql);
				while($rs = mysqli_fetch_array($qsql))
				{

					$sqldept = "SELECT * FROM pharmacist WHERE pharmacist_id='$rs[pharmacist_id]'";
					$qsqldept = mysqli_query($con,$sqldept);
					$rsdept = mysqli_fetch_array($qsqldept);
					echo "<tr>
					<td>&nbsp;$rs[pharmacist_name]</td>
                    <td>&nbsp;$rs[email]</td>
					<td>&nbsp;$rs[phonenumber]</td>
					<td>&nbsp;$rs[address]</td>
					<td>&nbsp;$rs[pharmacist_slmc_id]</td>
					<td>$rs[status]</td>
					</tr>";
				}
				?>      </tbody>
			</table>
		</section>
	</div>
</div>
	<?php
	include("adformfooter.php");
	?>