<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEPENDENT-DROPDOWN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="" class="navbar-brand">Result Overview</a>
    <button class="navbar-toggler" data-target="#myLinks" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="myLinks">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link">About</a></li>
            <li class="nav-item"><a href="" class="nav-link">Info</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h3 class="text-center text-danger my-2">Dependent Dropdown Using PHP, MySql, Bootstrap 4, AjaxJQuery</h3>
    
    <div class="col-lg-6 mx-auto my-5 bg-light rounded p-4 shadow">
        <form action="" method="post">
            <div class="form-group">
                <select id="category" class="form-control">
                    <option value="" selected>Select catgory</option>
                </select>
            </div>

            <div class="form-group">
                <select id="cat_list" class="form-control" style="display:none">
                    <option value="" selected>Select list</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary form-control" id="send-btn" type="button">Submit</button>
            </div>


        </form>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="result_script.js"></script>
</body>
</html>