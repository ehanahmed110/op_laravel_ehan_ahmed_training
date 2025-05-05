<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div id="root">
        <div class="px-8 max-md:px-4 lg:pt-8 max-lg:pt-8 pb-0 bg-white relative z-10 h-screen overflow-hidden">
            <div class="w-[307px] h-[306px] rounded-full bg-[#FF5300] blur-[100px] fixed -left-[215px] -top-[145px] -z-[1]">

            </div>
            <div class="fixed -top-[58%] -right-[28%] -z-[10] w-[1000px] h-[1000px] rounded-full bg-gradient-to-br from-[#FFD8C2] to-[#FF8036] hidden lg:block"></div>
            <form method='POST' action="{{ route('login') }}">
            @csrf
                <div class="flex  gap-12">
                    <div class="md:px-12 flex-[1_1_500px] max-w-[700px]">
                <a href="/">
                        <div class="max-w-80 overflow-hidden">
                            <img src="https://devopinionuniverse.in/opinionuniverse.png" alt="opinion_universe_logo" class="w-fulll">
                    </div>
                </a>
                <div class="my-4">
                    <h3 class="text-[#4E4D4D] text-[24px] font-bold max-sm:text-center">Welcome Back!</h3>
                    <p class="text-[#FF5300] text-[13px] font-medium max-sm:text-center">Login To Opinion Universe</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                        <label for="email" class="text-sm text-black font-medium mb-1">Email Address</label>
                        <input name="email" type="email" id="email_address" class="h-[50px] rounded-lg bg-[#FFD8C2] border-0 outline-none px-2 text-sm" value="" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-sm text-black font-medium mb-1">Password</label>
                        <div class="flex h-[50px] rounded-lg bg-[#FFD8C2]">
                            <input name="password" type="password" id="password" class=" border-0 bg-transparent outline-none px-2 text-sm" value="" style="width: calc(100% - 40px);">
                            <button type="button" class="border-none outline-none w-10 h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 text-[#FF5300]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"></path>
                                </svg>
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="text-[13px] font-extrabold text-[#5E5C5C] text-end cursor-pointer" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif
                    </div>
                </div>
                <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
                <button type="submit" class="h-[50px] w-full rounded-full text-white text-[20px] font-semibold bg-gradient-to-r from-[#FF5300] from-0% via-100% to-[#FF8036] to-100% hover:drop-shadow-[0px_4px_15px_0px_#FF8036] border-1 border-[#FFF8F8]"> {{ __('Log in') }}</button>
            </div><div class="flex-1">
                <div class="flex flex-col">
                    <div>
                        <h3 class="text-[25px] max-sm:text-[17px] max-sm:font-semibold text-[#FF5300] font-extrabold text-center">Are you new to opinion universe?</h3>
                        <h4 class="text-[20px] max-sm:text-sm text-[#FF5300] font-semibold text-center">Create your account</h4>
                    </div>
                    <div class="flex justify-center max-md:flex-wrap gap-6 my-8">
                        <a class="text-sm min-w-[272px] h-[50px] border border-[#000000] rounded-full font-semibold text-[#FF5300] shadow-[0px_4px_20px_0px_#FF5300] bg-white flex items-center justify-center" href="#">I’m a Publisher</a>
                        <a class="text-sm min-w-[272px] h-[50px] border border-[#000000] rounded-full font-semibold bg-[#FF5300] text-[#FFFDFD] shadow-[0px_4px_20px_0px_#FFFFFF] flex items-center justify-center" href="#">I’m an Advertiser</a>
                    </div>
                </div>
                <div class="relative" style="height: calc(-181.484px + 100vh);">
                    <img src="https://devopinionuniverse.in/new-assets/login-girl.png" alt="op_login_img" class="max-w-full max-h-full object-contain absolute top-0 left-[50%] translate-x-[-50%]"></div>
                </div>
            </div>
        </form>
        <svg xmlns="http://www.w3.org/2000/svg" width="930" height="323" viewBox="0 0 930 323" fill="none" class="absolute -bottom-[50px] left-1/2 -translate-x-1/2 -z-[1]">
            <g opacity="0.4" filter="url(#filter0_f_19_6)">
                <path d="M730 386.5C730 517.668 664.857 624 584.5 624C504.143 624 200 588.668 200 457.5C200 326.332 513.643 200 594 200C674.357 200 730 255.332 730 386.5Z" fill="#FF5300"></path>
            </g><defs><filter id="filter0_f_19_6" x="0" y="0" width="930" height="824" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_19_6"></feGaussianBlur>
            </filter>
        </defs>
    </svg>
</div>
<div class="Toastify"></div>
</div>
</x-guest-layout>
  

