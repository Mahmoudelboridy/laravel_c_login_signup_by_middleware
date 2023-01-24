@extends('auth.bootstrap')
@section('title','signup')
@section('content')
<div class="container-fluid my-3">
    <h2 class="text-center">New user registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <label class="mb-1">user name</label> <input type="text" class="form-control"
                        placeholder="Enter u username" autocomplete="off" required="required"
                        name="name" />
                </div>
                <div class="form-outline mb-4">
                    <label class="mb-1">user email</label> <input type="email" class="form-control"
                        placeholder="Enter u email" autocomplete="off" required="required" name="email" />
                </div>
                <div class="form-outline mb-4">
                    <label class="mb-1">password</label> <input type="password" class="form-control"
                        placeholder="Enter u password" autocomplete="off" required="required"
                        name="password" />
                </div>
               
                <div class="text-center">
                    <button class="bg-info mb-3 py-2 px-3 border-0" name="user_register">register</button>
                    <p class="fw-bold mb-0" style="font-size:18pt;">already have account ? <a
                            href="/en/login">login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection