<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./images/bcimage1.png">
</head>
<body>
    <?php 
        include'sidebar.php';
    ?>
    
    <h3 style="z-index: 200; border-bottom: 1px solid rgb(24, 49, 83);" class="pb-3 text-dark">Home</h3>
    
    <main class="d-flex w-100 justify-content-between gap-3">
        <section class="mt-5 d-flex gap-3 align-items-center p-3 rounded w-100" style="box-shadow: 4px 4px 4px rgba(0, 0, 0, .1); max-width: 300px;">
            <div class=" rounded d-flex flex-row justify-content-center align-items-center" style="height: 90px; width: 100px; background-color: var(--blue);">
                <i class="fa-solid fa-user-group fa-2x" style="color: #ffffff;"></i>
            </div>
            <div>
                <p class="m-0">Total students</p>
                <strong>0</strong>
            </div>
        </section>

        <section class="mt-5 d-flex gap-3 align-items-center p-3 rounded w-100" style="box-shadow: 4px 4px 4px rgba(0, 0, 0, .1); max-width: 300px;">
            <div class=" rounded d-flex flex-row justify-content-center align-items-center" style="height: 90px; width: 100px; background-color: var(--blue);">
                <i class="fa-solid fa-th-list fa-2x" style="color: #ffffff;"></i>
            </div>
            <div>
                <p class="m-0">Total classes</p>
                <strong>0</strong>
            </div>
        </section>

        <section class="mt-5 d-flex gap-3 align-items-center p-3 rounded w-100" style="box-shadow: 4px 4px 4px rgba(0, 0, 0, .1); max-width: 300px;">
            <div class=" rounded d-flex flex-row justify-content-center align-items-center" style="height: 90px; width: 100px; background-color: var(--blue);">
                <i class="fa-solid fa-book fa-2x" style="color: #ffffff;"></i>
            </div>
            <div>
                <p class="m-0">Total subjects</p>
                <strong>0</strong>
            </div>
        </section>
    </main>
    
</body>
</html>