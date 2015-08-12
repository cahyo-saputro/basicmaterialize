		<div class="container">
			<img class="responsive-img materialboxed" src="image/slide4">
		</div>
			<div class="row white">
				<div class="container">				
				<div class="col s12">
					<h4>Leave a Comment</h4>
	
					<!-- Modal Trigger -->
					<a class="waves-effect waves-light btn modal-trigger blue-grey darken-1" href="#modal1">Cara memberikan komentar</a>
				
					<!-- Modal Structure-->
					<div id="modal1" class="modal">
						<div class="modal-content">
							<h4>Aturan Berkomentar</h4>
							<p>Isikan nama depan dan nama belakang anda<br>gunakan email yang valid<br>gunakan komentar dengan kata-kata yang sopan</p>
						</div>
						<div class="modal-footer">
							<a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Mengerti</a>
						</div>
					</div>
					<script>
						  $(document).ready(function(){
							// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
							$('.modal-trigger').leanModal();
						  });
					</script>
					<br><br>
					<form class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input placeholder="Placeholder" id="first_name" type="text" class="validate">
								<label for="first_name">First Name</label>								
							</div>
							<div class="input-field col s6">
								<input placeholder="Placeholder" id="last_name" type="text" class="validate">
								<label for="last_name">Last Name</label>								
							</div>						
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email" data-error="wrong" data-success="right">Email</label>								
							</div>						
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="texarea1" class="materialize-textarea" length="120"></textarea>
								<label for="textarea1">Comment</textarea>								
							</div>						
						</div>
						<button class="btn waves-effect waves-light blue-grey darken-3" type="reset" name="action">Reset
						<i class="material-icons"></i>
						</button>
						<button class="btn waves-effect waves-light blue-grey darken-3" type="submit" name="action">Submit
						<i class="material-icons"></i>
						</button>
					</form>
				</div>	
				</div>
			</div> 
		</div>
