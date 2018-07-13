<?php
	include 'inc_rez/insert_rez.php';
?>
<div clas= "contanier">
		<div class= "jumbotron">
			<form action="index.php?opcija=rezervacije" method="POST">
				
					
				
				<h2>Vaša rezrvacija</h2>
				
				Korisničko ime<br>
				<input type="text" name="username" style="margin-top: 0px;">
				</label><br>
				
				Marka i model<br>
				<select name="model_tip" style="margin-top: 5px;" >
					<option>Audi A3</option>
					<option>Audi A5</option>
					<option>BMW 320</option>
					<option>BMW 520</option>
					<option>Mercedes C270</option>
					<option>Mercedes W123</option>
					<option>Opel Astra</option>
					<option>Opel Corsa</option>
					<option>VW Golf II</option>
					<option>VW Golf V</option>
							
				</select>
				
				<br>
				
				Datum preuzimanja<br>
				
				<select name="dan_pr" style="margin-top: 5px;" >
					<?php
						for($dan_pr=1; $dan_pr<=31; $dan_pr++){
							?>
								<option value="<?php echo $dan_pr; ?>" ><?php echo $dan_pr;?></option>
							<?php
								}
							?>
							
				</select>
				<select name="mjesec_pr" >
						<?php
							for($mjesec_pr=1; $mjesec_pr<=12; $mjesec_pr++){
								?>
									<option value="<?php echo $mjesec_pr; ?>" ><?php echo $mjesec_pr;?></option>
								<?php
									}
								?>
							
				</select>
				<select name="godina_pr" >
						<?php
							for($godina_pr=2018; $godina_pr<=2019; $godina_pr++){
								?>
									<option value="<?php echo $godina_pr; ?>" ><?php echo $godina_pr;?></option>
								<?php
									}
								?>
							
				</select>
				
				<br>
				Datum povratka<br>
				<select name="dan_po" style="margin-top: 5px;" >
					<?php
						for($dan_po=1; $dan_po<=31; $dan_po++){
							?>
								<option value="<?php echo $dan_po; ?>" ><?php echo $dan_po;?></option>
							<?php
								}
							?>
							
				</select>
				<select name="mjesec_po" >
						<?php
							for($mjesec_po=1; $mjesec_po<=12; $mjesec_po++){
								?>
									<option value="<?php echo $mjesec_po; ?>" ><?php echo $mjesec_po;?></option>
								<?php
									}
								?>
							
				</select>
				<select name="godina_po" >
						<?php
							for($godina_po=2018; $godina_po<=2019; $godina_po++){
								?>
									<option value="<?php echo $godina_po; ?>" ><?php echo $godina_po;?></option>
								<?php
									}
								?>
							
				</select>
				<br>
				
				<input type="submit" role="button" class="btn btn-primary"  name="rezerviraj" value= "Rezerviraj" style= "margin-top: 10px;">
				
			</form>
		</div>
	</div>
	