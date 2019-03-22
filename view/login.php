
<div class="container mt-4">
  <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="index.php?action=loginValidation">
                    <div id="div_login">
                        <div class="form-group">
                            <input type="text" class="form-control " id="txt_uname" name="txt_uname" placeholder="Username"  required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control " id="txt_uname" name="txt_pwd" placeholder="Password" required/>
                        </div>
                        <div>
                            <input type="submit" value="Submit" name="but_submit" class="btn btn-primary" id="but_submit"/>
                            <input type="reset"  class="btn btn-primary float-right" />
                        </div>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    Forgot password? <a href="index.php?action=register">Register</a>
                </div>
            </div>
        </div>
      </div>
      <div class="col-4"></div>
  </div>
</div>
