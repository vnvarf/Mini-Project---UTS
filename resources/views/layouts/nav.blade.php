@php
$currentRouteName = Route::currentRouteName();
@endphp

    <nav style="background-color: rgb(255, 184, 195); color: rgb(67, 200, 200);" class="navbar navbar-expand-md navbar-dark ">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-gem me-2"></i> Sapphrodite.id</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('Product.index') }}" class="nav-link">Product List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
