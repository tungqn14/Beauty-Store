@extends("site.master")
@section("content")
<section class="login">
    <h3 class="text-center mx-center mb-5">Đăng nhập</h3>
    <div class="form-login w-50 mx-auto">
        <form action="#" method="post">
            @csrf
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="abc@gmail.com">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="123456@A">
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-md-2">
                        <input type="checkbox" name="remember" class="form-check-input ml-0" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nho mat khau</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-md-2">
                        <button type="submit" class="text-white btn btn-secondary w-100 d-block">Đăng nhập</button>
                    </div>
                </div>
        </form>
        <div class="login-other my-3 text-center row">
            <div class="col-sm-10 offset-md-2">
                <div class="my-2">
                    — Hoặc đăng nhập với —
                </div>
                <a href="#" class="btn btn-info text-white">Google</a>
                <a href="#" class="btn btn-dark text-white">Facebook</a>
            </div>
        </div>
    </div>
</section>

@endsection
@push('css-style')
    <link href="{{ asset("template/styles/myStyle.css") }}" rel="stylesheet" type="text/css">
@endpush

