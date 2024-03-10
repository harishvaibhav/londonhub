@extends('layouts.app')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center mt-10">
            <div class="col-md-8">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="card-header text-2xl text-center mtb-5 ">Create an Account</div>
                    <div class="card-body">

                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="font-bold text-gray-800 mt-3 col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control rounded-lg shadow-lg" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="font-bold text-gray-800 mt-3 col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control rounded-lg shadow-lg" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="font-bold text-gray-800 mt-3 col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control rounded-lg shadow-lg" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="font-bold text-gray-800 mt-3 col-md-4 col-form-label text-md-right">Role</label>
                                <div class="col-md-6">
                                    <select id="email" class="block mt-1 w-full" name="role" required>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Create Account
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="text-center lg:text-left bg-gray-100 text-gray-600 fixed bottom-0">
    <div class="text-center p-6 bg-gray-200">
        <span>© 2023 Blogger</span>
        <a class="text-gray-600 font-semibold" href="https://Blogger-elements.com/">Blogger Elements</a>
    </div>
</footer>


@endsection