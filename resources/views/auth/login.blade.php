<x-guest-layout>
  <div id="login">
    <div class="px-8 md:px-4  pt-8 pb-0 bg-white relative z-10 h-screen overflow-hidde">
        <div class="w-[307px] h-[306px] rounded-full bg-[#FF5300] blur-[80px] fixed -left-[190px] -top-[130px]"></div>
        <div class="hidden fixed -top-[58%] -right-[28%] -z-[10] w-[1000px] h-[1000px] rounded-full bg-gradient-to-br from-[#FFD8C2] to-[#FF8036] lg:block"></div>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="flex  gap-12">
         <div class="md:px-12 flex-[1_1_500px] max-w-[700px]">
                    <a href="/">
                        <div class="w-80">
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
                    <input name="password" type="password" id="password" class=" border-0 bg-transparent outline-none px-2 text-sm" value="" style="width: calc(100% - 40px);" required>
                 
                </div>
                <a href="{{ route('password.request') }}" class="text-[13px] font-bold text-[#5E5C5C] text-end cursor-pointer">Forget password?</a>
            </div>
        </div>
    
        
<button type="submit" class="mt-10 h-[50px] w-full rounded-full text-white text-[20px] font-semibold bg-gradient-to-r from-[#FF5300] from-0% via-100% to-[#FF8036] to-100% hover:drop-shadow-[0px_4px_15px_0px_#FF8036] border-1 border-[#FFF8F8]">Log in</button>
</div>


<!-- ---------------- -->


<div class="flex-1">
    <div class="flex flex-col"><div>
        <h3 class="text-[25px]  max-sm:font-semibold text-[#FF5300] font-extrabold text-center">Are you new to opinion universe?</h3>
        <h4 class="text-[20px]  text-[#FF5300] font-semibold text-center">Create your account</h4>
    </div>
    <div class="flex justify-center max-md:flex-wrap gap-6 my-8">
        <a class="w-[272px] h-[50px] border border-[#000000] rounded-full font-semibold text-[#FF5300] shadow-[0px_4px_20px_0px_#FF5300] bg-white flex items-center justify-center" href="#">I’m a Publisher</a>
        <a class="w-[272px] h-[50px] border border-[#000000] rounded-full font-semibold bg-[#FF5300] text-[#FFFDFD] shadow-[0px_4px_20px_0px_#FFFFFF] flex items-center justify-center" href="#">I’m an Advertiser</a>
    </div>
</div>
<div class="relative" style="height: calc(-181.5px + 100vh);">
    <img src="https://devopinionuniverse.in/new-assets/login-girl.png" alt="img" class="max-w-full max-h-full object-contain absolute top-0 left-[50%] translate-x-[-50%]">
</div>
</div>
     </div>
</form>

</div>
       
</div>
</x-guest-layout>

