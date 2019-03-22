<div class="container:mt-4">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card bg-light">
            <div class="card-header">
                <h3 class="text-center">Register</h3>
            </div>
            <div class="card-body">
                <form action="index.php?action=addUser" method="post">
                    <div class="form-group">
                        <b><label for="">Username</label></b>
                        <input type="text" placeholder="username" name="username" required class="form-control">
                    </div>
                    <div class="form-group">
                        <b><label for="">Password</label></b>
                        <input type="password" placeholder="password" name="pwd" required class="form-control">
                    </div>
                    <div class="form-group">
                        <b><label for="">Confirm Password</label></b>
                        <input type="password" placeholder="confirm password" name="con_pass" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-blog form-control">Register Now</button>
                        <!-- <a href="index.php?action=login" class="float-right btn btn-info">Cancel</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="col-md-4"></div>
    </div>
</div>