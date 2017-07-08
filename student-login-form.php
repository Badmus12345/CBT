<?php $title = "Login Page"?>
<div class="logincard">
  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
			<form action = "actions/add-student.php" id = "addStudent" method = "post">
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo">
						<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
					</div>
					<h3>Enter Your Name And Class</strong></span></h3>
				</div>

				<div class="pmd-card-body">
					<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Full Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="text" name = "full_name"class="form-control" id="exampleInputAmount">
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Class</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <select name = "class" class="select-simple form-control pmd-select2">
            									<option></option>
            									<option value = "1">Jss 1</option>
            									<option value = "2">Jss 2</option>
            									<option value = "3">Jss 3</option>
            									<option value = "4">Sss 1</option>
            									<option value = "5">Sss 2</option>
            									<option value = "6">Sss 3</option>
            								</select>
                        </div>
                    </div>
                </div>
				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
					<button type = "submit" class="btn pmd-ripple-effect btn-primary btn-block">Check For Available Exams</button>
				</div>

			</form>
		</div>
  </div>
</div>
