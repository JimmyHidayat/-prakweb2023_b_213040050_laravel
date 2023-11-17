@extends('layouts.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-5">

            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Registration</h1>
                <form>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name@example.com">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-primary w-100 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already have account? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection
