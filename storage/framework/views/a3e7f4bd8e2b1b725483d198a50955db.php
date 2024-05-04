<?php $__env->startSection('content'); ?>

    <div class="container mt-4">
        <h4>Selamat Datang di Sapphrodite.id</h4>
        <hr>
        <p> Jelajahi koleksi produk terbaru kami yang dirancang dengan cermat untuk memenuhi kebutuhan Anda.
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo e(Vite::asset('resources/images/1.jpg')); ?>" class="img-fluid" alt="Gambar 1">
          </div>
          <div class="col-md-4">
            <img src="<?php echo e(Vite::asset('resources/images/2.jpg')); ?>" class="img-fluid" alt="Gambar 2">
          </div>
          <div class="col-md-4">
            <img src="<?php echo e(Vite::asset('resources/images/3.jpg')); ?>" class="img-fluid" alt="Gambar 3">
          </div>
        </div>
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="" style="background-color: #d4def9; border-color: #d4def9;  color: #fff;">More</a>
            </div>
        </div>
      </div>

      <div class="container mt-4">
        <h4>Profile Owner</h4>
        <hr>
        <div class="container mt-5">
            <div class="row">
              <div class="col-md-4 d-flex justify-content-center">
                <!-- Tampilkan foto profil -->
                <img src="<?php echo e(Vite::asset('resources/images/4.jpeg')); ?>" class="profile-img img-fluid" alt="Foto Profil">
              </div>
              <div class="col-md-8" >
                <h2>Biodata</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nama:</strong> Ramadhani Vanva F</li>
                    <li class="list-group-item"><strong>nim:</strong> 21204220068</li>
                    <li class="list-group-item"><strong>Prodi:</strong> Sistem Informasi</li>
                    <li class="list-group-item"><strong>Umur:</strong> 20 tahun</li>
                    <li class="list-group-item"><strong>Alamat:</strong> Perumahan Green Menganti</li>
                    <li class="list-group-item"><strong>Pekerjaan:</strong> Mahasiswa</li>
                    <li class="list-group-item"><strong>Email:</strong> Ramadhanivanvaf@gmail.com</li>
                </ul>
            </div>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/UTS-MasterBarangVanva/resources/views/home.blade.php ENDPATH**/ ?>