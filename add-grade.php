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
                <small>Current Level: 2</small>
            </div>

            <div class="mb-4">
                <strong for="">Subject</strong>
                <select class="form-select" aria-label="Default select example" >
                    <option selected>Open this select menu</option>
                    <option value="1">Math</option>
                    <option value="2">English</option>
                    <option value="3">Bisaya</option>
                </select>
            </div>    

            <div class="input-group">
            <span class="fw-bold input-group-text">Quarter</span>
                <small class="fw-bold">1st</small>
                <input type="text" aria-label="First name" class="form-control" value="89">
                <small class="fw-bold" for="">2nd</small>
                <input type="text" aria-label="Last name" class="form-control" value="97">
                <small class="fw-bold" for="">3rd</small>
                <input type="text" aria-label="First name" class="form-control" value="78">
                <small class="fw-bold" for="">4th</small>
                <input type="text" aria-label="Last name" class="form-control" value="83">
            </div>
            <!-- <button type="submit" class="btn btn-primary">Save</button> -->

            
            
            <div class="mx-auto w-100 d-flex justify-content-center gap-3" style="max-width: 400px;">
                <input type="submit"  class="btn btn-primary" name="" id="">
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </main>
</body>
</html>