<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sections</title>
    <link rel="icon" href="./images/bcimage1.png">
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>

    <div style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="d-flex justify-content-between align-items-center">
        <h3 class="pb-3 text-dark m-0">Subjects</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add new Subject</button>
    </div>
    
    <table class="table table-hover my-5">
    <thead>
        <tr>
        <th scope="col">Subject ID</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Math</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Science</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>English</td>
        <td>
            <div class="d-flex gap-1">
                <button class="btn btn-primary"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
            </div>
        </td>
        </tr>
    </tbody>
    </table>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add a subject</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="floatingInput" placeholder="subject">
                    <label for="floatingInput">Subject</label>
                </div>
                <div class="d-flex gap-1 justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>