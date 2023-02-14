@extends('styles.bootstrap')
@section('title','sign up')
@section('content')
<a href="/">home page</a>
<h2 class="text-center">New user sign up</h2>
<div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
        <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
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
                <label class="mb-1">user image</label> <input type="file" class="form-control"
                    required="required" name="image" />
            </div>
            <div class="form-outline mb-4">
                <label class="mb-1">password</label> <input type="password" class="form-control"
                    placeholder="Enter u password" autocomplete="off" required="required"
                    name="password" />
            </div>
            <div class="form-outline mb-4">
                <label class="mb-1">confirm password</label> <input type="password" class="form-control"
                    placeholder="confirm password" autocomplete="off" required="required"
                    name="conf_password" />
            </div>

            role:<select class="form-select" name="role">
                <option value="user">user</option>            
                <option value="vendor">vendor</option>            
            </select>
        
            <div class="text-center">
                <button class="my-2 bg-info mb-3 py-2 px-3 border-0" name="signup">sign_up</button>
                <p class="fw-bold mb-0" style="font-size:18pt;">already have account? <a
                        href="login">login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection