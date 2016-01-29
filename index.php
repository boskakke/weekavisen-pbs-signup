



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BT.dk</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body>








<div class="container" id="content">
	<div class="row ">
		

		<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 ">
			<div class="box mt">

			<header class="logo"><img src="/dist/images/logo_weekendavisen.png" alt=""></header>
			
			<?php if(isset($_GET["step-2"])) : ?>

			<p class="text-center text-pagination">
				Trin <strong>2</strong> ud af <strong>3</strong>
			</p>
			
			<form action="index.php?step-3" method="POST" >
			  <div class="form-group row">
			    <label for="input_cpr" class="col-md-3 form-control-label ">Dit CPR-nr.</label>
			    <div class="col-md-9 col-lg-8">
			      <input type="number" class="form-control" id="input_cpr" placeholder="CPR-nr">
			      <small class="text-muted form-help">Indtast fx. 0102701234 uden bindesstreg eller mellemrum	
			      </small>
			    </div>
			  </div>
			  
			  <div class="form-group row">
			    <label for="input_account" class="col-md-3 col-xs-12 form-control-label ">Kontonr.</label>
			    <div class="col-md-4 col-xs-4 col-lg-3">
			      <input type="number" class="form-control" id="input_reg" placeholder="Reg. nr">
			    </div>

			    <div class="col-md-5 col-xs-8 col-lg-5">
			      <input type="number" class="form-control" id="input_acount" placeholder="Kontonr.">
			    </div>
			  </div>

			  <div class="form-group row">
			  	<div class="col-md-9 col-md-offset-3">
			  		<div class="tjek text-muted form-help">
			    	<label>
			      	<input type="checkbox"> Jeg accepterer Weekendavisens <a href="#" class="help-trigger link-help">betingelser</a>
			      	<span class="help-hidden hidden">Her kommer nogen betingelser</span>
			    	</label>
			  	</div>		
			  	</div>
			  </div>

			  
			  
			  <div class="form-group row">
			    <div class="col-xs-12 col-lg-11 col-md-10 text-right">
			    	<a href="?step-1" class="btn btn-sm btn-link pull-left">< Tilbage</a>	
			      <button type="submit" class="btn btn-wa">Tilmeld PBS</button>
			    </div>
			  </div>
			</form>



			<?php elseif(isset($_GET["step-3"])) : ?>

				<p class="text-center text-pagination">
				Trin <strong>3</strong> ud af <strong>3</strong>
			</p>
				
					<h2 class="text-center">Tak for hjælpen</h2>
					<p class="text-center">Du er nu tilmeldt Betalingsservice!</p>
					<p class="text-center">Fortsat god læselyst!</p>
					<p class="text-center">Med venlig hilsen<br><a href="http://www.weekendavisen.dk" class="link-wa">Weekendavisen</a></p>

			<?php else: ?>



			<p><strong>Kære læser,</strong></p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus efficitur leo et commodo. Integer ut massa eget arcu commodo elementum. 
			</p>
			
			<form action="index.php?step-2" method="POST" >
			  <div class="form-group row">
			    <label for="input_order" class="col-md-3 col-lg-3 form-control-label ">Dit ordrenr.</label>
			    <div class="col-md-7 col-lg-8">
			      <input type="number" class="form-control" id="input_order" placeholder="Ordrenr.">
			      <small class="text-muted form-help"><a href="#" class="help-trigger">Hvor finder jeg mit ordrenr.?</a>
					<span class="help-hidden hidden">Her kommer en hjælpetekst</span>
			      </small>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="input_zip" class="col-md-3 col-lg-3 form-control-label ">Dit postnr.</label>
			    <div class="col-md-7 col-lg-8">
			      <input type="number" class="form-control" id="input_zip" placeholder="Postnr.">
			    </div>
			  </div>
			  
			  <div class="form-group row">
			    <div class="col-xs-12 col-lg-11 col-md-10 text-right">
			      <button type="submit" class="btn btn-wa">Fortsæt</button>
			    </div>
			  </div>
			</form>
			
			<?php endif; ?>


			<footer class="address">
				<p>Weekendavisen A/S - Pilestræde 34 - DK - 1147 København K </p>
				<p>Kundeservice: Tlf.: 33 75 36 33 <a href="mailto:kundeservice@weekendavisen.dk">kundeservice@weekendavisen.dk</a> </p>
			</footer>
			</div>

		</div>

		
		
	</div>
</div>


<script src="/dist/scripts/main.js"></script>




</body>
</html>