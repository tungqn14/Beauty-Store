@extends("site.master")
@section("content")
<section class="login">
    <h3 class="text-center mx-center mb-5">Đăng nhập</h3>
    <div class="container">
        <div class="row">
            @if(session()->has('message'))
            <div class="alert alert-success text-center w-50 mx-auto" role="alert">
            {{ session()->get('message')  }}
            </div>
        @endif
        @if(session()->has('failMessage'))
            <div class="alert alert-danger text-center" role="alert">
            {{ session()->get('failMessage')  }}
            </div>
        @endif
    </div>
    <div class="form-login w-50 mx-auto">
        <form action="{{ route("site.handleLogin")}}" method="post">
            @csrf
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
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="123456@A">
                    @if($errors->has('password'))
                        <div class="text-danger my-1">{{ $errors->first('password') }}</div>
                     @endif
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
                <a href="{{ route("site.redirectToGoogle") }}" class="btn btn-danger text-white"><i class="fa fa-google-plus mr-1"></i>Google</a>
                <a href="#" class="btn btn-primary text-white"><i class="fa fa-facebook mr-1"></i>Facebook</a>
            </div>
        </div>
    </div>
</section>

@endsection
@push('css-style')
    <link href="{{ asset("template/styles/myStyle.css") }}" rel="stylesheet" type="text/css">
@endpush

