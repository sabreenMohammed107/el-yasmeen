
@foreach ($blogs as $blog)


<div class="mb-4">
    <p>
        <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="" style="width: 100%" class="img-fluid">
    </p>
    <h2> {!! $blog->title ?? '' !!}</h2>
    <p class="text-justify">
        {{ strip_tags(str_limit($blog->text ?? '', $limit = 200, $end = '...')) }}
    </p>
    <div><a href="{{ url('/single-blog/'.$blog->id.'/'.$blog->slug) }}" class="btn btn-primary mb-3">إقرأ المزيد</a></div>
</div>


@endforeach

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
        <!-- a Tag for another page -->
        <li class="page-item ml-2  {{ $blogs->currentPage() == $i ? ' active' : '' }}"> <a
                href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a></li>
    @endfor

    </ul>
</nav>
