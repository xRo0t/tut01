<!---blade directive-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .alert {
            padding: 20px;
            background-color: #2c2c2c;
            color: white;
            height:300px;
            width:400px;
            position: absolute;
            z-index: 300;
            margin-top: 17%;
            margin-left: 40%;
            border:solid yellow 1px;
        }
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.5s;
        }
        .closebtn:hover {
          color: black;
        }
    </style>
</head>
<body>
    <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong>WARNING!</strong> <p>are you sure you want to delete the current user ?.</p>
    <button style="background-color:tomato; color:white; margin-top: 40%;" type="button"
        class="btn" onclick="this.parentElement.style.display='none';">Delete</button>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">xRo0tWEBO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container mt-5">
        <div class="text-center">
            <button type="button" class="btn btn-warning">Add new Row</button>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tableData as $data)
                <tr>
                    <th scope="row">{{$data['id']}}</th>
                    <td>{{$data['first_name']}}</td>
                    <td>{{$data['last_name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td style="width:10px;"><button style="background-color:blue; color:white;" type="button" class="btn">moreinfo</button></td>
                    <td style="width:10px;"><button style="background-color:tomato; color:white;" type="button" class="btn">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--@dd($tableData) die dumb just for testing the table, its temprary-->
</body>
</html>
