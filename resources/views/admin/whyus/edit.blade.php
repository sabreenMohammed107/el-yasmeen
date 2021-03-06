@extends('adminLayout.web')

@section('title', 'بيانات التواصل')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">تعديل</h3>
        </div>






                  <form action="{{route('whyus.update',$row->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
				  @csrf
                  <div class="box-body">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label  >{{ __('  العنوان ') }}</label>
                                <input type="text" id="newTitle" name="title" value="{{$row->title}}" class="form-control"
                                   placeholder=" العنوان">
                            </div>
                        </div>



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label  >{{ __('  النص  ') }}</label>
                                        <input type="text" id="newTitle" name="text" value="{{$row->text}}" class="form-control"
                                           placeholder=" النص">
                                    </div>
                                </div>


                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اضافة صورة</label>

                                    <div class="custom-file">
                                        <input type="file" name="img"
                                            class="custom-file-input"
                                            id="inputGroupFile02" />
                                        <label class="custom-file-label"
                                            for="inputGroupFile02">{{ $row->logo ?? '' }}</label>
                                    </div>
                                </div>
                            </div> --}}

                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('whyus.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection
