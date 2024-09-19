<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Grades</title>
    <link rel="icon" href="./images/bcimage1.png">
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>
    
    <h3 style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="pb-3 text-dark">Add Grades</h3>
    

    <main class="mx-auto w-100 border border-1 border-danger p-3" style="max-width: 900px;">
        <form action="">
            
            <div class="w-100 mx-auto p-2 mb-4" style="max-width: 400px;">
                <strong class="text-center">Student</strong>
                <div class="border border-1 border-secondary rounded p-2" >
                    1 | Kurt Cagulang
                </div>
                <small>Current class: 2 - sunflower</small>
            </div>
            
            <div class="input-group mb-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select subject</option>
                    <option value="math">Math</option>
                    <option value="science">Science</option>
                <option value="english">English</option>
            </select>
                
                <input type="text" aria-label="First name" class="form-control">
                <input type="text" aria-label="Last name" class="form-control">
                <input type="text" aria-label="First name" class="form-control">
                <input type="text" aria-label="Last name" class="form-control">

                <button class="btn btn-primary">add</button>
            </div>


            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">1st Grading</th>
                    <th scope="col">2nd Grading</th>
                    <th scope="col">3rd Grading</th>
                    <th scope="col">4th Grading</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>English</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Math</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Science</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                    </td>
                    </tr>

                    <tr>
                        <td class="fw-bold" colspan="5">Average</td>
                        <td class="fw-bold">90</td>
                    </tr>
                </tbody>
            </table>

            
            
            <div class="mx-auto w-100 d-flex justify-content-center gap-3" style="max-width: 400px;">
                <input type="submit"  class="btn btn-primary" name="" id="">
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </main>
</body>
</html>