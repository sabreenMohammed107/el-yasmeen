@extends('layout.web')
@section('body')
<body class="ar">
    @endsection

@section('content')


        <section class="home-slider owl-carousel" id="home-sec">
            <div class="slider-item" style="background-image:url({{ asset('webassets/imgs/slider/1.png')}});">
                <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate text-right">
                  <h1>خدمات تنظيف احترافيه</h1>
                  <h2>تنظيف سجاد</h2>
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</p>
                  <!--<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>-->
                </div>
              </div>
              </div>
            </div>

            <div class="slider-item" style="background-image:url({{ asset('webassets/imgs/slider/3.png')}});">
                <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-right">
                        <h1 class="mb-2">خدمات تنظيف احترافيه</h1>
                        <h2>تنظيف سجاد</h2>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</p>
                        <!--<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>-->
                    </div>
              </div>
              </div>
            </div>
          </section>
            <section class="ftco-section ftco-no-pt ftc-no-pb" id="about-sec">
                <div class="container">
                    <div class="row d-flex dir mob-container">
                        <div class="col-lg-6 col-md-12 col-sm-12  mt-5 wrap-about py-5 pr-md-4 ftco-animate text-dir">
                            <div class="line"></div>
                            <h4>
                                من نحن
                            </h4>
                            <h2>
                                خدمات تنظيف احترافيه
                            </h2>
                            <p class="text-justify">
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 wrap-about py-5 pr-md-4 ftco-animate">
                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 brd-1">
                                    <div class="services-2 d-flex justify-content-center align-items-center">
                                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/1.svg')}}" style="height:40px" /></span></div>
                                    </div>
                                    <div class="text text-center">
                                        <h4>خدمات تنظيف احترافيه</h4>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 brd-2">
                                    <div class="services-2 d-flex justify-content-center align-items-center">
                                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/2.svg')}}" style="height:40px" /></span></div>
                                    </div>
                                    <div class="text text-center">
                                        <h4>خدمات على مدار الساعه</h4>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 brd-3">
                                    <div class="services-2 d-flex justify-content-center align-items-center">
                                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/3.svg')}}" style="height:40px" /></span></div>
                                    </div>
                                    <div class="text text-center">
                                        <h4>افضل سعر</h4>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="services-2 d-flex justify-content-center align-items-center">
                                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/1.svg')}}" style="height:40px" /></span></div>
                                    </div>
                                    <div class="text text-center">
                                        <h4>خدمات تنظيف احترافيه</h4>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section" style="background-image:url({{ asset('webassets/imgs/bg/bg-1.png')}})" id="serv-sec">
                <div class="container mob-container">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <h2 class="mb-4">خدماتنا</h2>
                        </div>
                    </div>
                    <div class="row dir">
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/1.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/2.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف تتكييفات</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/3.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيفات خزانات</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/4.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">صيانة مكيفات</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/5.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">مكافحة حشرات</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/6.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">نظافة كنب وسجاد</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/3.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تعقيم منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('webassets/imgs/bg/bg-2.png')}});background-size:cover">
                <div class="container">
                    <div class="row d-md-flex align-items-center justify-content-center">
                        <div class="col-lg-12">
                            <div class="row d-md-flex align-items-center">
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="icon"><span class="flaticon-doctor"></span></div>
                                        <div class="text">
                                            <strong class="number" data-number="100">0</strong>
                                            <span>Subscription</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="icon"><span class="flaticon-doctor"></span></div>
                                        <div class="text">
                                            <strong class="number" data-number="50">0</strong>
                                            <span>Cities Office</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="icon"><span class="flaticon-doctor"></span></div>
                                        <div class="text">
                                            <strong class="number" data-number="200">0</strong>
                                            <span>Worker</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="icon"><span class="flaticon-doctor"></span></div>
                                        <div class="text">
                                            <strong class="number" data-number="500">0</strong>
                                            <span>Happy Clients</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section testimony-section">
                <div class="container mob-container">
                    <div class="row ftco-animate">
                  <div class="col-12 text-dir wrap-about">
                      <div class="line"></div>
                      <h2>
                          لنتعرف على اراء<br />عملائنا معا
                      </h2>
                  </div>
                    </div>
                    <div class="row ftco-animate justify-content-center">
                        <div class="offset-1 col-md-5 text-dir wrap-about">
                      <h2>
                          اراءكم تهمنا للتطوير
                      </h2>
                            <p class="text-justify">
                                العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                            </p>
                        </div>
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
                    </div>
                </div>
            </section>
            <section class="ftco-section" id="glry-sec">
                <div class="container mob-container">
                    <div class="row dir d-flex pb-4">
                        <div class="col-md-12">
                            <div>
                            <div class="float-right text-dir wrap-about">
                      <div class="line"></div>
                      <h2>
                          سابقه اعمالنا
                      </h2>
                      <p>
                          العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم
                      </p>
                            </div>
                            </div>
                            <div class="float-left">
                      <a href="{{ url('/gallery') }}"> سابقة الأعمال   <i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-wrap">
                    <div class="row no-gutters">
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('webassets/imgs/gallery/10.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/10.png')}});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('webassets/imgs/gallery/8.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/8.png')}});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('webassets/imgs/gallery/5.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/5.png')}});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('webassets/imgs/gallery/12.png')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('webassets/imgs/gallery/12.png')}});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section" style="background-color:#FAFBFD"id="blog-sec">
                <div class="container mob-container">
                    <div class="row dir d-flex pb-4">
                        <div class="col-md-12">
                            <div>
                                <div class="float-right text-dir">
                                    <h2>
                                        المدونة
                                    </h2>
                                    <p>
                                    العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم
                                    </p>
                                </div>
                            </div>
                            <div class="float-left">
                                <a href=""> المدونة   <i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row dir">
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/4.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/5.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/6.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('webassets/imgs/product/3.png')}});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">تنظيف منازل</a></h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
