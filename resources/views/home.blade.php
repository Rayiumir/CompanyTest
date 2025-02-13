<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        {{-- Header --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/LogoRayium.png')}}" class="img-fluid" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">پیوند</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                دیگر ...
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
                    <div class="d-flex">
                        <button class="btn btn-primary rounded-5" type="submit">ورود / عضویت</button>
                    </div>
                </div>
            </div>
        </nav>
        {{-- End Header --}}
        <main class="container">
            {{-- Slider --}}
            <div id="carouselExampleFade" class="carousel slide carousel-fade mt-3 mb-3">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://user-images.githubusercontent.com/78242022/282697437-bb8d7140-128f-44e9-a11f-d0d5c8d29f87.png" class="d-block w-100 rounded-4" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://user-images.githubusercontent.com/78242022/273443248-130249b5-87b7-423d-9281-48d810bcd30d.jpg" class="d-block w-100 rounded-4" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://user-images.githubusercontent.com/78242022/273443251-9c210d6f-35ba-4861-885e-9b2e684ab339.jpg" class="d-block w-100 rounded-4" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- End Slider --}}
            {{-- Services --}}
            <section class="mb-4">
                <div class="title text-center mb-5">
                    <h2>خدمات ما</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <article class="card rounded-4 text-center box">
                            <div class="card-body">
                                <i class="fa-brands fa-laravel fa-4x"></i>
                                <h1 class="fs-4 fw-bold mt-3 mb-3">لاراول</h1>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3">
                        <article class="card rounded-4 text-center box">
                            <div class="card-body">
                                <i class="fa-brands fa-laravel fa-4x"></i>
                                <h1 class="fs-4 fw-bold mt-3 mb-3">لاراول</h1>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3">
                        <article class="card rounded-4 text-center box">
                            <div class="card-body">
                                <i class="fa-brands fa-laravel fa-4x"></i>
                                <h1 class="fs-4 fw-bold mt-3 mb-3">لاراول</h1>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3">
                        <article class="card rounded-4 text-center box">
                            <div class="card-body">
                                <i class="fa-brands fa-laravel fa-4x"></i>
                                <h1 class="fs-4 fw-bold mt-3 mb-3">لاراول</h1>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
