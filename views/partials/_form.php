<div class="form-contact">

	<form id="contactForm" action="php/contact.php" method="post" class="positioned">
		<div class="row">
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<input class="form-control" name="senderName" id="senderName" type="text" placeholder="Nome" required="required">                       
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<select class="form-control custom-select" name="senderService" id="senderService" placeholder="Serviço" required="required">
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
						<input class="form-control" placeholder="Telefone ou Celular" name="senderPhone" id="senderPhone" type="text">
						<p class="help-block"></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<textarea rows="7" class="form-control" name="message" id="message" placeholder="Mensagem"></textarea>
						<p class="help-block"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-12">
				<button type="submit" class="button btn-full btn-lg">Solicitar Agendamento</button>
			</div>
		</div>
	</form>

	<div id="sendingMessage" class="statusMessage">
		<p><i class="fa fa-spin fa-spinner"></i> Enviando sua mensagem. Aguarde por favor...</p>
	</div>
	<div id="successMessage" class="successmessage">
		<p><i class="fa fa-check"></i> Obrigado por enviar a sua mensagem! Entraremos em contato em breve.</p>
	</div>
	<div id="failureMessage" class="errormessage">
		<p><i class="fa fa-close"></i> Ocorreu um problema ao enviar sua mensagem. Por favor, tente novamente.</p>
	</div>
	<div id="incompleteMessage" class="statusMessage">
		<p><i class="fa fa-warning"></i> Por favor, preencha todos os campos do formulário antes de enviar.</p>
	</div>
	
</div>