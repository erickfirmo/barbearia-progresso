<div class="form-contact">

	<form id="contactForm" action="agendar" method="post" class="positioned">
		<div class="row">
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<input class="form-control" name="name" id="senderName" type="text" placeholder="Nome" required="required">                       
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<select class="form-control custom-select" name="service" id="senderService" placeholder="Serviço" required="required">
							<option selected>--</option>
							<option value="Corte Masculino">Corte Masculino</option>
							<option value="Barba">Barba</option>
							<option value="Luzes">Luzes</option>
							<option value="Relaxamento">Relaxamento</option>
							<option value="Sobrancelhas">Sobrancelhas</option>
							<option value="Hidratação">Hidratação</option>
						</select>
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12  controls">
						<input class="form-control" placeholder="Telefone ou Celular" name="phone" id="senderPhone" type="text">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<input class="form-control" type="email" name="email" id="senderEmail" placeholder="Email" required="required">
						<p class="help-block"></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<textarea rows="7" class="form-control" name="message" id="message" placeholder="Mensagem" style="height:275px;"></textarea>
						<p class="help-block"></p>
					</div>
				</div>
			</div>
		
		</div>
		<div class="row">
			<div class="form-group col-xs-12">
				<div class="g-recaptcha" data-sitekey=""></div>
			</div>
			<div class="form-group col-xs-12">
				<button type="submit" class="button btn-full btn-lg" style="font-size: 18px;"><i class="fa fa-cut" style="font-size: 20px; padding-right: 10px;"></i> Solicitar Agendamento</button>
			</div>
		</div>
	</form>


	<div id="alertBox"></div>

	
	
	
	
	
</div>