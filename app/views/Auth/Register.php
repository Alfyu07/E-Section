<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">SIGN UP!</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="<?= BASEURL?>/C_Auth/tambah">
	    					<div class="form-group">
								<input type="text" name="uname" id="uname" class="form-control input-sm" placeholder="Username">
	    					</div>
	    					<div class="form-group">
								<input type="text" name="email" id="email" class="form-control input-sm" placeholder="email@gmail.com">
	    					</div>
			    			<div class="form-group">
			    				<input type="password" name="password" id="password" class="form-control input-sm" placeholder="password">
			    			</div>
			    			<div class="form-group">
								<input type="text" name="tanggal" id="tanggal" class="form-control input-sm" placeholder="tanggal">
	    					</div>
							<div class="form-group">
								<input type="text" name="bulan" id="bulan" class="form-control input-sm" placeholder="bulan">
	    					</div>	
							<div class="form-group">
								<input type="text" name="tahun" id="tahun" class="form-control input-sm" placeholder="tahun">
	    					</div>		    			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>