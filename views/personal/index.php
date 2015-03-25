<?php
$this->title = 'Personal';
$this->registerCssFile(Yii::$app->urlManager->getBaseUrl() . '/css/personal/personal.css');
?>
<div id="cont-nav-box" class="box nav-box g16">
	
	<ul class="nav">
		<li data-nav="#tab1" class="sel"><span class="nav-icon icon-info-sign"></span>Datos Generales</li>
		<li data-nav="#tab2" class="text"><span class="nav-icon icon-list"></span>Reclutamiento</li>
		<li data-nav="#tab3" class="text"><span class="nav-icon icon-check"></span>Selección</li>
		<li data-nav="#tab4" class="text"><span class="nav-icon icon-book"></span>Formación Inicial</li>
		<li data-nav="#tab5" class="text"><span class="nav-icon icon-police"></span>Nombramiento y Certificación</li>
		<li data-nav="#tab6" class="text"><span class="nav-icon icon-list-alt"></span>Plan Individual</li>
		<li data-nav="#tab7" class="text"><span class="nav-icon icon-certificatealt"></span>Estimulos, Reconocimientos y Recompensas</li>
		<li data-nav="#tab8" class="text"><span class="nav-icon icon-office-building"></span>Cambio de Adscripción</li>
		<li data-nav="#tab9" class="text"><span class="nav-icon icon-circledelete"></span>Sanciones</li>
	</ul>

	<div class="nav-cont">

		<div id="tab1" class="nav-item pad-m show">
			<strong>Datos Generales</strong>
			<br>
			<div class="content gcont no-pad-btm">
				<form id="sample-form">
					<div class="g3 inp-cont no-pad">
						<select class="required inset">
							<option selected disabled>Prefix</option>
							<option>Mr.</option>
							<option>Mrs.</option>
						</select>
					</div>
					<input type="text" class="required g5" placeholder="First Name">
					<input type="text" class="required g5" placeholder="Last Name">
					<div class="g3">
						<input id="age-inp" class="spinner required number inset" placeholder="Age">
					</div>

					<input type="text" class="required email g6" placeholder="E-mail">
					<input type="password" class="required match g5" data-match="password" placeholder="Password">
					<input type="password" class="required match g5" data-match="password" placeholder="Password again">

					<input type="text" class="ver-code g4" value="EDB48BO0" disabled>
					<input type="text" class="required g4" data-min="8" placeholder="Verification">
					<br class="clear">

					<div class="g4 inp-cont no-pad">
						<div class="drop drop-u select g4">
							<span class="opt-sel">Card Type</span>
							<ul>
							  <li>Visa</li>
							  <li>Mastercard</li>
							  <li>Amex</li>
							</ul>
							<span class="arrow">'</span>
						</div>
					</div>
					<input type="text" id="card-num" class="cardnum g7" placeholder="Card Number">
					<input type="text" class="g2" placeholder="CVV">
					<input type="text" id="exp-inp" class="g3" placeholder="Expiry Date">

					<div class="cont g13">
						<input type="checkbox" class="checkbox required big flt-l ig3">
						<label class="lh-xxl g13">By checking this box, I am signing a blank check.</label>
					</div>
					<button type="submit" class="green flt-r g3">Submit</button>
				</form>
			</div>

		</div>

		<div id="tab2" class="nav-item pad-m">
			<strong>Reclutamiento</strong>
		</div>
		<div id="tab3" class="nav-item pad-m">
			<strong>Selección</strong>
		</div>
		<div id="tab4" class="nav-item pad-m">
			<strong>Formación Inicial</strong>
		</div>
		<div id="tab5" class="nav-item pad-m">
			<strong>Nombramiento y Certificación</strong>
		</div>
		<div id="tab6" class="nav-item pad-m">
			<strong>Plan Individual</strong>
		</div>
		<div id="tab7" class="nav-item pad-m">
			<strong>Estimulos, Reconocimientos y Recompensas</strong>
		</div>
		<div id="tab8" class="nav-item pad-m">
			<strong>Cambio de Adscripción</strong>
		</div>
		<div id="tab9" class="nav-item pad-m">
			<strong>Sanciones</strong>
		</div>

	</div>

</div>