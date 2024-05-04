<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Sapphrodite.id</h1>
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/Main-Sapphrodite.png')); ?>" style="width: 1000px; height: 730px;" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Home</a>
            </div>
        </div>
    </div>
</body>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/UTS-MasterBarangVanva/resources/views/welcome.blade.php ENDPATH**/ ?>