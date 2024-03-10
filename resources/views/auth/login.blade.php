@extends('layouts.app')

@section('content')


<!-- Section: Design Block -->
<section class="mb-40">
    <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
        <div class="px-6 w-full flex flex-wrap items-center justify-between">
            <div class="flex items-center">
                <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentY" aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                    </svg>
                </button>
                <a class="navbar-brand text-blue-600" href="#!">
                    <svg class="w-5 h-5 ml-2 lg:ml-0 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"></path>
                    </svg>
                </a>
            </div>
            <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
                <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
                    <li class="nav-item">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Team</a>
                    </li>
                    <li class="nav-item mb-2 lg:mb-0">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Projects</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center lg:ml-auto">
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</button>
                <a href="/registration"><button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</button></a>
            </div>
        </div>
    </nav>
    <div class="flex m-5 justify-center">
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="font-bold text-center text-2xl">Login</div>
            <div class="">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="email_address" class="col-md-4 col-form-label text-md-right font-bold">Email</label>
                        <div class="col-md-10">
                            <input type="text" id="email_address" class="rounded-lg form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right font-bold">Password</label>
                        <div class="col-md-10">
                            <input type="password" id="password" class="rounded-lg form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-4 mt-10">
                        <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Login
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>

<footer class="text-center lg:text-left bg-gray-100 text-gray-600 fixed bottom-0">

    <div class="mx-6 py-15 text-center md:text-left mt-5">
        <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="">
                <h6 class="
        uppercase
        font-semibold
        mb-4
        flex
        items-center
        justify-center
        md:justify-start
      ">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cubes" class="w-4 mr-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z">
                        </path>
                    </svg>
                    Blogger ELEMENTS
                </h6>
                <p>
                    Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Products
                </h6>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">Angular</a>
                </p>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">React</a>
                </p>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">Vue</a>
                </p>
                <p>
                    <a href="#!" class="text-gray-600">Laravel</a>
                </p>
            </div>
            <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Useful links
                </h6>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">Pricing</a>
                </p>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">Settings</a>
                </p>
                <p class="mb-4">
                    <a href="#!" class="text-gray-600">Orders</a>
                </p>
                <p>
                    <a href="#!" class="text-gray-600">Help</a>
                </p>
            </div>
            <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Contact
                </h6>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                        </path>
                    </svg>
                    New York, NY 10012, US
                </p>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                        </path>
                    </svg>
                    info@example.com
                </p>
                <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                        </path>
                    </svg>
                    + 01 234 567 88
                </p>
                <p class="flex items-center justify-center md:justify-start">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                        </path>
                    </svg>
                    + 01 234 567 89
                </p>
            </div>
        </div>
    </div>
    <div class="text-center p-6 bg-gray-200">
        <span>© 2023 Blogger</span>
        <a class="text-gray-600 font-semibold" href="https://Blogger-elements.com/">Blogger Elements</a>
    </div>
</footer>

<!-- Section: Design Block -->

@endsection