@extends('layout.web')

@section('body')
<body class="ar bg-blog">
    @endsection
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/imgs/slider/1.png')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">معرض الاعمال</h1>
                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ</p>
                <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>-->
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5 portfolio section">
    <div class="container">
        <div class="row dir text-dir">
            <div class="col-lg-2">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">تنظيف منازل</li>
                        <li data-filter=".corporate">تنظيف تكييفات</li>
                        <li data-filter=".personal">تنظيف خزنات</li>
                        <li data-filter=".agency">صيانه مكيفات</li>
                        <li data-filter=".portal">مكافحه حشرات</li>
                        <li data-filter=".personal">المدونه</li>
                        <li data-filter=".agency">تنظيف منازل</li>
                        <li data-filter=".portal">تنظيف تكييفات</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-3 col-md-6 all corporate agency">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/1.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/1.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all personal corporate">
                            <div class="item">
                                <div class="img img-video d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/2.png')}});height:200px">
                                    <div class="video justify-content-center">
                                        <a href="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                            <span class="fa-solid fa-play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all agency personal">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/3.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/3.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all portal">
                            <div class="item">
                                <a href="imgs/gallery/4.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/4.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all corporate portal">
                            <div class="item">
                                <div class="img img-video d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/5.png')}});height:200px">
                                    <div class="video justify-content-center">
                                        <a href="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                            <span class="fa-solid fa-play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all personal">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/6.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/6.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all agency">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/7.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/7.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all portal">
                            <div class="item">
                                <div class="img img-video d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/8.png')}});height:200px">
                                    <div class="video justify-content-center">
                                        <a href="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                            <span class="fa-solid fa-play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all corporate">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/9.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/9.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all personal">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/10.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/10.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all agency">
                            <div class="item">
                                <a href="{{ asset('webassets/imgs/gallery/11.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/11.png')}});">
                                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                        <span class="fa-brands fa-instagram"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 all portal">
                            <div class="item">
                                <div class="img img-video d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/12.png')}});height:200px">
                                    <div class="video justify-content-center">
                                        <a href="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                            <span class="fa-solid fa-play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center mb-5 pb-2 mt-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item ml-2">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item ml-2">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item ml-2">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item active ml-2">
                            <a href="#" class="page-link">1</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> --}}
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container mob-container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-6">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('webassets/imgs/team/teacher-1.jpg')}})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">محمد إبراهيم</p>
                                    <span class="position">مدير شركة الأهرام</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('webassets/imgs/team/teacher-1.jpg')}})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">محمد إبراهيم</p>
                                    <span class="position">مدير شركة الأهرام</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('webassets/imgs/team/teacher-1.jpg')}})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">محمد إبراهيم</p>
                                    <span class="position">مدير شركة الأهرام</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('webassets/imgs/team/teacher-1.jpg')}})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">محمد إبراهيم</p>
                                    <span class="position">مدير شركة الأهرام</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('webassets/imgs/team/teacher-1.jpg')}})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">محمد إبراهيم</p>
                                    <span class="position">مدير شركة الأهرام</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-1 col-md-5 text-dir">
                <h2>
                    لنتعرف على اراء<br />عملائنا معا
                </h2>
                <p class="text-justify">
                    العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                </p>
            </div>
        </div>
    </div>
</section>
@endsection


