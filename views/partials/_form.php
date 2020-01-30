<div class="form-contact">

	<form id="contactForm" action="php/contact.php" method="post" class="positioned">
		<div class="row">
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<input class="form-control" name="senderName" id="senderName" type="text" placeholder="Name" required="required">                       
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<input class="form-control" type="email" name="senderEmail" id="senderEmail" placeholder="Email Address" required="required">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12  controls">
						<input class="form-control" placeholder="Phone Number" name="senderPhone" id="senderPhone" type="text">
						<p class="help-block"></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row control-group">
					<div class="form-group col-xs-12 controls">
						<textarea rows="7" class="form-control" name="message" id="message" placeholder="Message"></textarea>
						<p class="help-block"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-12">
				<button type="submit" class="button btn-full btn-lg">Send Message</button>
			</div>
		</div>
	</form>

	<div id="sendingMessage" class="statusMessage">
		<p><i class="fa fa-spin fa-spinner"></i> Sending your message. Please wait...</p>
	</div>
	<div id="successMessage" class="successmessage">
		<p><i class="fa fa-check"></i> Thanks for sending your message! We'll get back to you shortly.</p>
	</div>
	<div id="failureMessage" class="errormessage">
		<p><i class="fa fa-close"></i> There was a problem sending your message. Please try again.</p>
	</div>
	<div id="incompleteMessage" class="statusMessage">
		<p><i class="fa fa-warning"></i> Please complete all the fields in the form before sending.</p>
	</div>
	
</div>