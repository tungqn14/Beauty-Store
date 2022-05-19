@extends("site.master")
@section("content")
<section class="login">
    <h3 class="text-center mx-center mb-5">Đăng ký</h3>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="form-login w-50 mx-auto">
        <form action="{{ route("site.handleRegister") }}" method="post">
            @csrf
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Họ và tên</label>
                  <div class="col-sm-10">
                    <input type="text" name="fullname" class="form-control" id="inputPassword" placeholder="Nguyễn Văn A">
                    @if($errors->has('fullname'))
                        <div class="text-danger my-1">{{ $errors->first('fullname') }}</div>
                    @endif
                </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nickname</label>
                    <div class="col-sm-10">
                      <input type="text" name="nickname" class="form-control" id="inputPassword" placeholder="Adeptrai">
                      @if($errors->has('nickname'))
                         <div class="text-danger my-1">{{ $errors->first('nickname') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputPassword" placeholder="abc@gmail.com">
                      @if($errors->has('email'))
                      <div class="text-danger my-1">{{ $errors->first('email') }}</div>
                  @endif
                    </div>
                </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="number" name="phone" class="form-control" id="inputPassword" placeholder="0235478565">
                      @if($errors->has('phone'))
                      <div class="text-danger my-1">{{ $errors->first('phone') }}</div>
                  @endif
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="123456@A">
                    @if($errors->has('password'))
                    <div class="text-danger my-1">{{ $errors->first('password') }}</div>
                 @endif
                </div>
                </div>

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control" id="inputPassword" placeholder="Số nhà 32 Thủy Nguyên Hải Phòng">
                      @if($errors->has('address'))
                      <div class="text-danger my-1">{{ $errors->first('address') }}</div>
                  @endif
                    </div>
                  </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-md-2">
                        <button type="submit" class="text-white btn btn-secondary w-100 d-block">Đăng Ký</button>
                    </div>
                </div>
        </form>
    </div>
</section>

@endsection
@push('css-style')
    <link href="{{ asset("template/styles/myStyle.css") }}" rel="stylesheet" type="text/css">
@endpush

