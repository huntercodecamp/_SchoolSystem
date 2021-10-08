
<?php 
include('../vars.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
	include('header.php');
	?>
	<title>
		<?php echo NOME; ?>
		| Development Progress

	</title>
	<link rel="stylesheet" href="">
	<?php 
	require_once('../_css/styles-front.php');
	?>
</head>
<body>
	<?php 
	require_once('menu.php');
	?>
	<br>
	<br>
	<br>
	<table width="100%" >
		<tr id="line1">
			<th class="td1">Tarefa</th>
			<th class="td2">Status</th>
		</tr>
		<tr>
			<td class="td1"> 

				<label for=""> Menu </label> 

			</td>
			<td class="td2"> 
				
				<label for=""> OK</label>

			</td>
		</tr>
		<tr>
			<td class="td1"> Cadastro de usuário </td>
			<td class="td2">
				
				<label for=""> 
					stop
				</label>
			</td>
		</tr>
		<tr>
			<td class="td1">
				<label for="">
					x
				</label></td>
				<td class="td2">
					<label for="">
						
					</label>
				</td>
			</tr>
			<tr>
				<td class="td1">
					<label for="">
						x
					</label>
				</td>
				<td class="td2"></td>
			</tr>

			<tr>
				<td class="td1">,
					<label for="">
						x
					</label>
				</td>
				<td class="td2"></td>
			</tr>

			<tr>
				<td class="td1">,
					<label for="">
						x
					</label>
				</td>
				<td class="td2"></td>
			</tr>

			<tr>
				<td class="td1">,
					<label for="">
						x
					</label>
				</td>
				<td class="td2"></td>
			</tr>



		</table>
	</body>
	</html>