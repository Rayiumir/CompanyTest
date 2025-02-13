<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/sliderable.css')}}">
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
        <div class="container">
            {{-- Slider --}}
            <div id="carouselExampleFade" class="carousel slide carousel-fade mt-3 mb-3">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://user-images.githubusercontent.com/78242022/282697437-bb8d7140-128f-44e9-a11f-d0d5c8d29f87.png" class="d-block w-100 rounded-4" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>تست</h5>
                            <p>تست ۱</p>
                        </div>
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
            </div>
            {{-- End Slider --}}
            {{-- Services --}}
            <section class="bg-light mb-4 p-5">
                <div class="container">
                    <div class="title text-center mb-5">
                        <h2>خدمات ما</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <article class="card rounded-4 text-center box position-relative zindex-100">
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
                </div>
            </section>
            {{-- End Services --}}
            {{-- About us --}}
            <section class="container">
                <div class="title text-center mb-5">
                    <h2>درباره ما</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <img src="{{ asset('img/about-us.jpg') }}" class="img-fluid rounded-4" alt="" srcset="">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <div class="mt-4">
                            <ul>
                                <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            {{-- End About us --}}
            {{-- Portfolios --}}
            <section class="bg-light mb-3 p-5">
                <div class="container">
                    <div class="title text-center mb-5">
                        <h2>نمونه کارها</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 mb-3">
                            <article class="portfolios">
                                <div class="img-box">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" role="img" alt="...">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#" class="btn btn-outline-warning rounded-5 btns">مشاهده نمونه کار</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            {{-- End Portfolios --}}
            {{-- Blog --}}
            <section class="container mb-4">
                <div class="title text-center mb-5">
                    <h2>وبلاگ</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <article class="card rounded-4 box">
                            <div class="card-body">
                                <figure class="img">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" alt="" srcset="">
                                </figure>
                                <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                                <div class="mt-3">
                                    <i class="fa-duotone fa-heart"></i> 1000
                                    <div class="float-end">
                                        <i class="fa-duotone fa-comments"></i> 1000
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="card rounded-4 box">
                            <div class="card-body">
                                <figure class="img">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" alt="" srcset="">
                                </figure>
                                <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                                <div class="mt-3">
                                    <i class="fa-duotone fa-heart"></i> 1000
                                    <div class="float-end">
                                        <i class="fa-duotone fa-comments"></i> 1000
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="card rounded-4 box">
                            <div class="card-body">
                                <figure class="img">
                                    <img src="{{asset('img/about-us.jpg')}}" class="img-fluid rounded-4" alt="" srcset="">
                                </figure>
                                <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                                <div class="mt-3">
                                    <i class="fa-duotone fa-heart"></i> 1000
                                    <div class="float-end">
                                        <i class="fa-duotone fa-comments"></i> 1000
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            {{-- End Blog --}}
        {{-- Customers --}}
        <section class="bg-light p-4">
            <div class="container">
                <div class="row">
                    <div class="Sliderable" data-items="1,3,5,4" data-slide="1" id="Sliderable"  data-interval="1000">
                        <div class="Sliderable-inner">
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-1.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-2.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-3.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-4.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-5.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-6.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-7.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                            <div class="item">
                                <figure class="customers">
                                    <img src="{{asset('img/Customers/company-8.jpg')}}" class="rounded-4" alt="" srcset="">
                                </figure>
                            </div>
                        </div>
                        <button class="btn btn-light btn-left"><i class="fa-duotone fa-arrow-left"></i></button>
                        <button class="btn btn-light btn-right"><i class="fa-duotone fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Customers --}}
        {{-- Footer --}}
        <footer class="footer p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="fs-5 fw-bold"><i class="fa-duotone fa-circle"></i> درباره ما </h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="col-md-4">
                        <h1 class="fs-5 fw-bold"><i class="fa-duotone fa-circle"></i> لینک های مفید </h1>
                        <ul>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم</li>
                            <li>لورم ایپسوم</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h1 class="fs-5 fw-bold"><i class="fa-duotone fa-share"></i> اشتراک گذاری </h1>
                        <div class="mt-5 text-center">
                            <i class="fa-brands fa-whatsapp text-success fa-3x"></i>
                            <i class="fa-brands fa-telegram text-info fa-3x"></i>
                            <i class="fa-brands fa-linkedin text-primary fa-3x"></i>
                            <i class="fa-brands fa-bluesky text-primary fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- End Footer --}}
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/sliderable.js')}}"></script>
        <script type="text/javascript">
            var options = {
                autoPlay: true, // Or false
                autoPlayInterval: 3000, // Autoplay interval in milliseconds
                swipeThreshold: 50, // Minimum swipe distance in pixels
            };
        </script>
    </body>
</html>
