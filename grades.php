<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
    <link rel="icon" href="./images/bcimage1.png">
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>
    
    <h3 style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="pb-3 text-dark">Grades</h3>
    

    <table class="table table-hover my-5">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Class</th>
        <th scope="col">Subjects</th>
        <th scope="col">General Average</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Kurt</td>
        <td>Cagulang</td>
        <td>2</td>
        <td>3</td>
        <td>90</td>
        <td>
            <div class="d-flex gap-1">
                <a href="add-grade.php" class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a>
                <a class="btn btn-info"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                <a class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>  
        <td>Thornton</td>
        <td>6</td>
        <td>5</td>
        <td>87.50</td>
        <td>
            <div class="d-flex gap-1">
                <a href="add-grade.php" class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a>
                <button class="btn btn-info"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry </td>
        <td>the Bird</td>
        <td>10 - kalabasa</td>
        <td>5</td>
        <td>87.50</td>
        <td>
            <div class="d-flex gap-1">
                <a href="add-grade.php" class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a>
                <button class="btn btn-info"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>

        </tr>
    </tbody>
    </table>
</body>
</html>