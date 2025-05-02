<x-guest-layout>
    <div class="min-h-screen flex">
        <!-- Left side: Login Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center p-2 bg-gradient-to-bl from-white via-orange-50 to-white">
            <div class="w-full max-w-md space-y-6">
                <img src="https://devopinionuniverse.in/opinionuniverse.png" alt="Logo" class="h-16">
                <h2 class="text-3xl font-bold">Welcome Back!</h2>
                <p class="text-[#ff7125]">Login To Opinion Universe</p>

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <input type="email" name="email" required placeholder="Email Address" class="w-full rounded-lg bg-[#ffd8c2] px-4 py-3 border-none focus:ring-2 focus:ring-orange-400" />

                    <div class="relative">
                        <input type="password" name="password" required placeholder="Password" class="w-full rounded-lg bg-[#ffd8c2] px-4 py-3 border-none focus:ring-2 focus:ring-orange-400" />
                        <span class="absolute inset-y-0 right-3 flex items-center text-orange-500 cursor-pointer">
                            👁️
                        </span>
                    </div>

                    <div class="flex justify-between text-sm">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-orange-500">
                            <span class="ml-2">Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-gray-600 font-semibold">Forget password?</a>
                    </div>

                    <div>
                        {{-- Insert reCAPTCHA widget if used --}}
                    </div>

                    <button type="submit" class="w-full bg-[#ff7125] hover:bg-orange-600 text-white font-bold py-3 rounded-full">
                        Log in
                    </button>
                </form>
            </div>
        </div>

        <!-- Right side -->
        <div class="relative top-[-100px] right-[-120px] hidden md:flex w-1/2 bg-[#ffa36d] items-center justify-center p-10 rounded-full">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-orange-600 mb-2">Are you new to opinion universe?</h2>
                <p class="mb-6 text-gray-700">Create your account</p>
                <div class="space-x-4">
                    <a href="#" class="inline-block bg-white text-orange-600 border border-orange-600 px-6 py-3 rounded-full font-semibold shadow hover:shadow-md">
                        I'm a Publisher
                    </a>
                    <a href="#" class="inline-block bg-[#ff7125] text-white px-6 py-3 rounded-full font-semibold shadow hover:shadow-md">
                        I'm an Advertiser
                    </a>
                </div>
                <img src="https://devopinionuniverse.in/new-assets/login-girl.png" alt="woman" class="mt-10 max-h-[300px] mx-auto" />
            </div>
        </div>
    </div>
</x-guest-layout>