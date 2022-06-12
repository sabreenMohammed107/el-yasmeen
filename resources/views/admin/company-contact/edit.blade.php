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






                  <form action="{{route('admin-company-contact.update',$row->id)}}" method="POST">
                @method('PUT')
				  @csrf
                  <div class="box-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label  >{{ __(' عنوان من نحن  ') }}</label>
                            <textarea class="form-control " name="overview_title">{{$row->overview_title}}</textarea>


                        </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label  >{{ __(' نص من نحن') }}</label>
                        <textarea class="form-control " name="overview_text">{{$row->overview_text}}</textarea>


                    </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label  >{{ __('نص اراء العملاء  ') }}</label>
                    <textarea class="form-control " name="feedback_text">{{$row->feedback_text}}</textarea>


                </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label  >{{ __(' نص  سابقة اعمالنا') }}</label>
                <textarea class="form-control " name="gallery_text">{{$row->gallery_text}}</textarea>


            </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label  >{{ __(' نص   المقالات') }}</label>
            <textarea class="form-control " name="blogs_text">{{$row->blogs_text}}</textarea>


        </div>
</div>

                    <div class="col-md-12">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label  >{{ __(' تليفون') }}</label>
                                <input type="text" id="newTitle" name="phones" value="{{$row->phones}}" class="form-control"
                                   placeholder=" تليفون">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label  >{{ __(' واتس اب') }}</label>
                                <input type="text" id="newTitle" name="whatsapp" value="{{$row->whatsapp}}" class="form-control"
                                   placeholder=" واتس اب">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  >{{ __(' البريد الالكترونى') }}</label>
                                    <input type="text" id="newTitle" name="email" value="{{$row->email}}" class="form-control"
                                       placeholder="البريد الالكترونى">
                            </div>
                            </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label  >{{ __(' facebook') }}</label>
                                <input type="text" id="facebook" name="facebook" value="{{$row->facebook}}" class="form-control"
                                   placeholder=" facebook">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  >{{ __('  twitter') }}</label>
                                    <input type="text" id="newTitle" name="twitter" value="{{$row->twitter}}" class="form-control"
                                       placeholder=" twitter">
                            </div>
                            </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label  >{{ __(' instagram') }}</label>
                                <input type="text" id="newTitle" name="instagram" value="{{$row->instagram}}" class="form-control"
                                   placeholder=" instagram">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  >{{ __('  linkedin') }}</label>
                                    <input type="text" id="newTitle" name="linkedin" value="{{$row->linkedin}}" class="form-control"
                                       placeholder=" linkedin">
                            </div>
                            </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  >{{ __('  العنوان عربي') }}</label>
                                <textarea class="form-control " name="address_ar">{{$row->address_ar}}</textarea>


                            </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  >{{ __('  العنوان ') }}</label>
                                <textarea class="form-control " name="address">{{$row->address}}</textarea>


                            </div>
                            </div>
                    </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('admin-company-contact.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection
