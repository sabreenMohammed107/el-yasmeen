@extends('layout.web')
@section('style')
<!-- Gallery css -->
<link rel="stylesheet" href="{{ asset('webassets/css/gallery.css')}}">
@endsection
@section('body')
<body class="ar bg-gallery">
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
                        <li class="active" data-filter="*">كل الصور</li>
                        @foreach ($categories as $row)


                        <li class="list col bg-cat2" data-filter=".{{ $row->id }}" >{{ $row->name ?? '' }}
                        </li>

                    @endforeach
                    <li data-filter=".video" class="bg-cat2"  >فيديو</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="filters-content">
                    <div class="row grid" dir="rtl">
                      @foreach ($galleries as $row)

                      <div
                          class="col-sm-3  all @if ($row->type == 1)
                          images
                      @else
                      video
                      @endif {{ $row->cat->id ?? '' }}">
                            <div class="item">

                                @if ($row->type == 1)
                                <a href="{{ asset('uploads/gallery') }}/{{ $row->image }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{asset('uploads/gallery') }}/{{$row->image}}');">
                                  <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                      <span class="fa-solid fa-image"></span>
                                  </div>
                                </a>
                                @else

                                {{-- <div class="img img-video d-flex align-items-center"  style="background-image: url({{ $row->vedio_url }});height:200px">
                                <div class="video justify-content-center">
                                    <a href="{{ $row->vedio_url }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                        <span class="fa-solid fa-play"></span>
                                    </a>
                                </div>

                                </div> --}}
                                <div class="img img-video d-flex align-items-center"  style="background-image: url({{ $row->vedio_url }});height:200px">
                                <a href="{{ $row->vedio_url }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">



                                      <iframe src="{{ $row->vedio_url }}" style=" width: 100%;
                                          height: 100%;
                                          position: absolute;
                                          object-fit: cover;
                                          z-index: 0;" frameborder="0"></iframe>

                                      <div>
                                          <i class="fa fa-play text-white fz-18"></i>
                                      </div>


                              </a>
                                </div>
                          @endif
                            </div>
                        </div>
                        @endforeach
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
                    @foreach ($feedbacks as $feedback)
                    <div class="item">
                        <div class="testimony-wrap">
                            <p class="text-dir">
                                {{$feedback->feedback}}
                            </p>
                            <div class="d-flex dir pt-3">
                                <div class="user-img" style="background-image: url({{ asset('uploads/feedbacks') }}/{{ $feedback->image }})">
                                </div>
                                <div class="mr-2">
                                    <p class="name">{{$feedback->name}}</p>
                                    <span class="position">{{$feedback->position}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
@section('scripts')
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<script>
    $('.filters ul li').click(function () {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    })
</script>
@endsection


