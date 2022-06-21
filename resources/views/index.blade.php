@extends('layout.web')
@section('body')
<body class="ar">
    @endsection

@section('content')


        <section class="home-slider owl-carousel" id="home-sec">
            @foreach ($homeSliders as $slider)
            <div class="slider-item" style="background-image:url({{ asset('uploads/sliders') }}/{{ $slider->image }});">
                <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate text-right">
                  <h1> {!! $slider->title !!}</h1>
                  <h2> {!! $slider->subtitle !!}</h2>
                  <p> {!! $slider->text !!}</p>
                  <!--<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>-->
                </div>
              </div>
              </div>
            </div>
            @endforeach



          </section>
             @if (session()->has('success'))
             <div class="alert alert-success alert-dismissible fade show" style="text-align: right" >
                    {{ session()->get('success') }}
                </div>
            @endif
            <section class="ftco-section ftco-no-pt ftc-no-pb" id="about-sec">
                <div class="container">
                    <div class="row d-flex dir mob-container">
                        <div class="col-lg-6 col-md-12 col-sm-12  mt-5 wrap-about py-5 pr-md-4 ftco-animate text-dir">
                            <div class="line"></div>
                            <h4>
                                من نحن
                            </h4>
                            <h2>
                              {!! $companyContact->overview_title !!}
                            </h2>
                            <p class="text-justify">
                                {!! $companyContact->overview_text !!} </p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 wrap-about py-5 pr-md-4 ftco-animate">
                            <div class="row mt-5">


                                        @isset($whyRows[0])
                                        <div class="col-lg-6 col-md-6 brd-1">
                                            <div class="services-2 d-flex justify-content-center align-items-center">
                                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/1.svg')}}" style="height:40px" /></span></div>
                                            </div>
                                            <div class="text text-center">
                                                <h4>{{$whyRows[0]->title}}</h4>
                                                <p>{{$whyRows[0]->text}}</p>
                                            </div>
                                        </div>
                                        @endisset
                                        @isset($whyRows[1])
                                        <div class="col-lg-6 col-md-6 brd-2">
                                            <div class="services-2 d-flex justify-content-center align-items-center">
                                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/2.svg')}}" style="height:40px" /></span></div>
                                            </div>
                                            <div class="text text-center">
                                                <h4>{{$whyRows[1]->title}}</h4>
                                                <p>{{$whyRows[1]->text}}</p>
                                            </div>
                                        </div>
                                        @endisset
                                        @isset($whyRows[2])
                                        <div class="col-lg-6 col-md-6 brd-3">
                                            <div class="services-2 d-flex justify-content-center align-items-center">
                                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/3.svg')}}" style="height:40px" /></span></div>
                                            </div>
                                            <div class="text text-center">
                                                <h4>{{$whyRows[2]->title}}</h4>
                                                <p>{{$whyRows[2]->text}}</p>
                                            </div>
                                        </div>
                                        @endisset
                                        @isset($whyRows[3])
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services-2 d-flex justify-content-center align-items-center">
                                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span><img src="{{ asset('webassets/imgs/product/1.svg')}}" style="height:40px" /></span></div>
                                            </div>
                                            <div class="text text-center">
                                                <h4>{{$whyRows[3]->title}}</h4>
                                                <p>{{$whyRows[3]->text}}</p>
                                            </div>
                                        </div>
                                        @endisset







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
                        @foreach ($services as $service)
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('uploads/services') }}/{{ $service->image }});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">{{$service->title}}</a></h3>
                                <p>
                                    {{$service->text}}
                                                                </p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('webassets/imgs/bg/bg-2.png')}});background-size:cover">
                <div class="container">
                    <div class="row d-md-flex align-items-center justify-content-center">
                        <div class="col-lg-12">
                            <div class="row d-md-flex align-items-center">
                                @foreach ($counters as $counter)
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18">
                                        <div class="icon"><span class="flaticon-doctor"></span></div>
                                        <div class="text">
                                            <strong class="number" data-number="{{$counter->title}}">0</strong>
                                            <span>{{$counter->text}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


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
                                {{$companyContact->feedback_text}}                          </p>
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-testimony owl-carousel">
                                @foreach ($feedbacks as $feedback)
                                <div class="item">
                                    <div class="testimony-wrap">
                                        <p class="text-dir">
{{$feedback->feedback}}                                        </p>
                                        <div class="d-flex dir pt-3">
                                            <div class="user-img" style="background-image: url({{ asset('uploads/feedbacks') }}/{{ $feedback->image }})">
                                            </div>
                                            <div class="mr-2">
                                                <p class="name">{{$feedback->name}} </p>
                                                <span class="position">{{$feedback->position}} </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

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
                        {{$companyContact->gallery_text}}
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
                        @foreach ($gallery as $obj)
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset('uploads/gallery') }}/{{ $obj->image }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('uploads/gallery') }}/{{ $obj->image }});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                        @endforeach


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
                                        {{$companyContact->blogs_text}}
                                    </p>
                                </div>
                            </div>
                            <div class="float-left">
                                <a href="{{ url('/blogs') }}"> المدونة   <i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row dir">
                        @foreach ($blogs as $blog)
                        <div class="col-lg-3 col-md-6 course ftco-animate">
                            <div class="img" style="background-image: url({{ asset('uploads/blogs') }}/{{ $blog->image }});"></div>
                            <div class="srv-text pt-4">
                                <h3><a href="#">{{ $blog->title }}</a></h3>
                                <p>
                                    {{ $blog->text }}
                                </p>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </section>

@endsection
