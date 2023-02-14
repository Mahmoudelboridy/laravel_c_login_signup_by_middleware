@extends('styles.bootstrap')
@section('title','login')
@section('content')
<form action="{{ route('login') }}" method="POST">
@csrf
<a href="/">home page</a>
<h2 class="text-center">User login</h2>
<div class="row mt-5 d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="POST">
            <div class="form-outline mb-4">
                <label class="mb-1">user email</label> <input type="text" class="form-control"
                    placeholder="Enter u username"  required="required"
                    name="email" />
            </div>
            <div class="form-outline mb-4">
                <label class="mb-1">password</label> <input type="password" class="form-control"
                    placeholder="Enter u password"  required="required"
                    name="password" />
            </div>
            
            <div class="text-center">
                <button class=" bg-info mb-3 py-2 px-3 border-0" name="login">login</button>
                <p class="fw-bold mb-0" style="font-size:18pt;">Don't have an account? <a
                        href="signup">sign up</a></p>
            </div>
        </form>
    </div>
</div>
</form>
@endsection