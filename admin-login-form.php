<div class="logincard">

  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
      <div class = "wrong-password">
        <p>Wrong Login credentials, please try again!</p>
      </div>
			<form method = "post" id = "adminLoginForm" action = "actions/admin-login.php">
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo">
						<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
					</div>
          <h2>Admin Login</h2>
					<h3>Enter Your Username and Password</strong></span></h3>
				</div>


				<div class="pmd-card-body">

					<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input name = "username" type="text" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input name = "password" type="password" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>
                </div>
				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center" id = "admin-login-button-div">
					<button type="submit" class="btn pmd-ripple-effect btn-primary btn-block pull-right">Login</button>
				</div>

			</form>
		</div>
