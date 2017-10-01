
<div class="bg-2">
	<div class="container" id="contactMe">
		<div class="text-center">
			<hr class="style bg-color-hr" data-content="Contact ME">
		</div>
	  	<div class="row">
			    <div class="col-sm-12 text-center">
			      <p><span class="glyphicon glyphicon-map-marker"></span> Miami, US</p>
			      <p><span class="glyphicon glyphicon-phone"></span> +786-718-7946</p>
			      <p><span class="glyphicon glyphicon-envelope"></span> ommalor@gmail.com</p> 
			    </div>

			    <div class="col-sm-12">
				    <form id="myForm" action="" >
						<div class="row">
							<div class="col-sm-6 form-group">
							  <input class="form-control" id="name" name="name" placeholder="Your Name" type="text" pattern="[A-Za-z]{3,40}" required>
							</div>
							<div class="col-sm-6 form-group">
							  <input class="form-control " id="email" name="email" placeholder="Your Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
							</div></div>				      
						<div class="row">
							<div class="col-sm-12 form-group text-center">
							  <button  class="btn" type="submit" id="submit">Send</button>
							</div>
						</div> 
				    </form>
			    </div>
			</div>
		 <!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-sm">
				  <div class="modal-content">
				    <div class="modal-header bg-2">
				      <button type="button" class="close" data-dismiss="modal">&times;</button>
				      <h4 class="modal-title"></h4>
				    </div>
				    <div class="modal-body text-center bg-1">
				      <p id="modalText"></p>
				    </div>
				    <div class="modal-footer bg-2">
				      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
				  </div>
				</div>
			</div>
	  
		</div>
	</div>
</div>
