@extends('adminLayout.web')

@section('title', 'معرض الصور')

@section('content')
<style>
    .hide{
        display: none;
    }
</style>
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">تعديل</h3>
                </div>




                <form action="{{ route('admin-gallery.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="box-body">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
                                <div class="form-group ">
                                    <label> النوع</label>
                                    <select name="type"  id="category_id" disabled class="form-control">

                                        <option value="1" {{ 1 == $row->type ? 'selected' : '' }}>صور</option>
                                        <option value="2" {{ 2 == $row->type ? 'selected' : '' }}>فديو</option>

                                    </select>

                                </div>
                            </div>

                            @if ($row->type == 2)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" id="vedio" style="direction:rtl">

                                    <div class="form-group">
                                        <label class=""> فديو</label>
                                        <input name="image" value="{{ $row->vedio_url}}" type="url" class="form-control"
                                            placeholder=" فديو">
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="image" style="direction:rtl">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="img"
                                                class="custom-file-input"
                                                id="inputGroupFile02" />
                                            <label class="custom-file-label"
                                                for="inputGroupFile02">{{ $row->image ?? '' }}</label>
                                        </div>


                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="row">


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
                                <div class="form-group ">
                                    <label> التصنيف</label>
                                    <select name="category_id"  class="form-control">
                                        <option value="">إختر</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ $cat->id == $row->category_id  ? 'selected' : '' }}>
                                                {{ $cat->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

                                <div class="form-group">
                                    <label class=""> الترتيب</label>
                                    <input type="number" class="form-control" name="order" value="{{ $row->order }}">
                                </div>
                            </div> --}}

                        </div>

                        <div class="card-footer">

                            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                                <a href="{{ route('admin-gallery.index') }}" class="btn btn-danger">إلغاء</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

    @section('scripts')
<script>
$(document).ready(function (){
    $("#category_id").change(function(){
    var selected_option = $('#category_id').val();
alert(selected_option);
    if(selected_option == '2'){
        $("#vedio").removeClass("hide");
        $("#image").addClass("hide");
    }
        if(selected_option != '2'){
            $("#vedio").addClass("hide");
        $("#image").removeClass("hide");
    }
  })
  });
  </script>
@endsection
