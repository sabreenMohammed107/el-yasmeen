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
                <h1 class="mb-2 bread">المدونة</h1>
                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ</p>
                <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>-->
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container mob-container">
        <div class="row dir text-dir">
            <div class="col-lg-8 ftco-animate">

                    <div class="mb-4">
                        <p>
                            <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="" class="img-fluid">
                        </p>
                        <h2> {!! $blog->title ?? '' !!}</h2>
                        <p class="text-justify">
                            {!! $blog->text ?? '' !!}        </p>
                  </div>
                </div> <!-- .col-md-8 -->


            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate pt-2 bg-side">
                    <div class="line"></div>
                    <h3>اخر المقالات</h3>
                    @foreach ($latestPlogs as $latest)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img ml-4" style="background-image: url({{ asset('uploads/blogs') }}/{{ $latest->image ?? '' }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">  {{ strip_tags(str_limit($latest->text ?? '', $limit = 30, $end = '...')) }}</a></h3>
                        </div>
                    </div>
                    @endforeach

                </div>
                {{-- <div class="sidebar-box ftco-animate pr-0 pl-0">
                    <div class="line"></div>
                    <h3>معرض الصور</h3>
                    <p>
                        <img src="imgs/blog/13.png" alt="" class="img-fluid" style="width:100%">
                    </p>
                </div> --}}
                <div class="sidebar-box ftco-animate pt-2 bg-side">
                    <div class="line"></div>
                    <h3>خدماتنا</h3>
                    @foreach ($services as $service)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img ml-4" style="background-image: url({{asset('uploads/services')}}/{{$service->image}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#"> {{ strip_tags(str_limit($service->text ?? '', $limit = 30, $end = '...')) }}</a></h3>
                        </div>
                    </div>

@endforeach
                </div>
            </div><!-- END COL -->
        </div>
    </div>
</section>


@endsection




