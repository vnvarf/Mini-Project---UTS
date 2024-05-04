<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav style="background-color: rgb(255, 184, 195); color: rgb(67, 200, 200);" class="navbar navbar-expand-md navbar-dark ">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi bi-gem me-2"></i> Sapprodite.id</a>


            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="container mt-5">
            <div class="row">
              <div class="col-md-4 d-flex justify-content-center">
                <!-- Tampilkan foto profil -->
                <img src="<?php echo e(Vite::asset('resources/images/4.jpeg')); ?>" class="profile-img img-fluid" alt="Foto Profil">
              </div>
              <div class="col-md-8">
                <!-- Tampilkan biodata -->
                <h2>Nama: Ramadhani Vanva Fauzia</h2>
                <p>Tempat Tanggal lahir: 17 November 2003</p>
                <p>Pendidikan: Mahasiswa Telkom University</p>
                <p>NIM: 1204220068</p>
                <p>Email: Ramadhanivanvaf@gmail.com</p>

              </div>
            </div>
          </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/UTS-MasterBarangVanva/resources/views/profile.blade.php ENDPATH**/ ?>