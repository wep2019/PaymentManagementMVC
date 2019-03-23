<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <a class="navbar-brand text-white">Payment Managment System</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <?php if($data['page'] !=='register' && $data['page'] !=='login'){?>
        <form method='post' action="index.php?action=logout" class="form-inline my-2 my-lg-0 ">
            <button type="submit" name="but_logout" id="but_logout" class="btn btn-sm btn-secondary text-white float-right"><i class="fas fa-sign-out-alt"></i><strong> LOGOUT</strong> </button>
        </form>
    <?php }?>
    </div>
</nav>
</section>
<br><br><br>
<div class="container mt-4">
    <?php 
        include "view/" . $data['page'].".php";
    ?>
</div>