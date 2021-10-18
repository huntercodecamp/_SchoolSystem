 
<nav>

	<input type="checkbox" id="bt-equiv">
	<label for="bt-equiv" id="lbequiv"> &equiv; </label>
	
	<div id="main">
		<div class="dMenu">
			<a href="index.php"> Home </a>
			
			<input id="bt-register" type="checkbox" name="subs" class="SInput-1"  >
			<label for="bt-register" class="LbSubMenu-1">
				Registers
			</label>
			<div id="Sub-1 " >
				<a href="RegisterCollaborator.php"> Register Collaborator </a>
				<a href="#"> Register Room </a>
				<a href="RegisterEquipment.php"> Register Equipment </a>
				<a href="RegisterClient.php"> Register Client </a>
				<a href="CadastrarTurmas.php">  </a>
				<a href="#"> Register Serviçe </a>
				<a href="#"> Register Product </a>
				<a href="#"> Register Work Order </a>
			</div>

			<input id="visualizar" type="checkbox" name="subs" class="SInput-2" >
			<label for="visualizar" class="LbSubMenu-2"> View </label>
			<div id="Sub-2"  >
				<a href="#"> View Client </a>
				<a href="#"> View Employees </a>
				<a href="#"> View Work </a>
				<a href="#"> View Product </a>
				<a href="#"> View Work Order </a>
			</div>
			<a href="devmap.php"> Development Progress </a> 
			<a href="https://www.freeprojectz.com/uml-diagram/school-management-system-uml-diagram" target="_blank"> UML </a>
			<a href="#"> Exit </a> 
		</div>
		
		<figure>
			<img id="logo1" src="../_imgs/logo.jpg" alt="logo" />
		</figure>

		<h2> <?php echo NOME; ?></h2>
		
	</nav>
