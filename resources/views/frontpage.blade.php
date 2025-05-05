
@extends('layouts.app')



@section('content')
    <!-- ✅ Hero Section -->
    <section class="container mx-auto px-6 py-16 flex flex-col-reverse lg:flex-row items-center mt-30">
        <div class="lg:w-1/2 mt-10 lg:mt-0">
            <h1 class="text-4xl font-semibold leading-snug mt-[100px]">
                The Perfect and <br> <span class="text-[#ff5300] font-[900]">Most <br> Rewarding</span> way <br> to <span class="text-[#ff5300] font-[900]">Monetize</span> <br> your User Base
            </h1>
            <p class="mt-4 mb-8 text-gray-600">
                Maximize your product's revenue potential while ensuring a seamless user experience. Allow users to share their opinions, engage in gaming, and more.
            </p>
            <a href="{{ route('register') }}" class="bg-[#ff5300] text-white px-20 pt-1 pb-2 border border-white rounded-full">Signup</a>

        </div>
        <div class="lg:w-1/2 text-center">
            <img src="{{ asset('images/mobile-mokup.png') }}" alt="Mobile UI" class="w-90 h-[400px] mt-[70px] mx-auto transform -rotate-6">
        </div>

    </section>
</div>
<!-- ---------------------------replied-upon------------------------------- -->
 <div class="h-max relative  px-[2rem] max-sm:px-0 mt-6 overflow-x-hidden">
    <div class="absolute top-0 left-[calc(93%+35px)] z-10 bg-gradient-to-t from-[#FF5300] to-[#FFB84D] bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full"></div>
    <h3 class="font-semibold text-[45px] leading-[54px] text-center z-10 relative max-md:text-[28px] max-md:leading-[32px] max-sm:text-start">RELIED UPON BY OVER <span class="text-[#FF5300] font-extrabold">10K+ PUBLISHERS</span></h3>
    <div class="flex flex-row justify-between items-center pt-[40px] relative">
        <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-1/2 left-[-40px]"></div>
        <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[75%] left-[calc(100%-120px)]"></div>
        <div class="w-[50%] z-5 flex items-center justify-start max-mlg:hidden">
            <img class="z-10" src="https://devopinionuniverse.in/offerMainImg.png" alt=""></div>
        <div class="w-[50%] flex items-center gap-[1rem] max-mlg:w-full"><div class="z-10">
            <img class="pb-[20px]" src="https://devopinionuniverse.in/offersImg.png" alt="">
        <div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
        <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">Offers</h3>
        <p class="pt-[10px] text-[15px] font-normal">Utilize precise control over our offers to display users the most relevant content, ensuring impactful results.</p>
    </div>
    <img class="z-10" src="https://devopinionuniverse.in/offerTextLogo.png" alt="">
</div>
</div>
<!-- ------------------------------------------ -->
<div class="flex justify-between items-center relative">
    <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[75%] left-[-40px]"></div>
    <div class="w-[50%] flex items-center gap-[1rem] max-mlg:w-full">
        <img class="pb-[20px] z-10" src="https://devopinionuniverse.in/gamesLogo.png" alt="">
        <div class="z-10"><img class="pb-[20px]" src="https://devopinionuniverse.in/dizeImg.png" alt="">
        <div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
        <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">Games</h3>
        <p class="pt-[10px] text-[15px] font-normal">Benefit from our top game advertisers who are eager to pay for testing your game. Encourage your users to explore games and earn rewards as motivation.</p>
    </div>
</div>
<div class="w-[50%] z-5 flex items-center justify-end max-mlg:hidden">
    <img class="z-10" src="https://devopinionuniverse.in/gamesImg.png" alt="">
</div>
</div>
<!-- -------------------------------------------- -->
<div class="flex flex-row justify-center items-center pt-[40px] relative">
    <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[45%] left-[-40px]"></div>
    <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[65%]" style="left: calc(100% - 120px);"></div>
    <div class="w-[50%] z-5 flex items-center justify-start max-mlg:hidden"><img class="z-10" src="https://devopinionuniverse.in/liveSurvey.png" alt=""></div>
    <div class="w-[50%] flex items-center gap-[1rem] max-mlg:w-full">
        <div class="z-10">
            <img class="pb-[20px]" src="https://devopinionuniverse.in/liveSurveyImg.png" alt="">
        <div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
        <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">Live Survey</h3>
        <p class="pt-[10px] text-[15px] font-normal">Explore high-quality survey inventory featuring top eCPM rates from our exclusive providers, delivering an exceptional user experience.</p>
    </div>
    <img class="pb-[20px] z-10" src="https://devopinionuniverse.in/liveSurveyLogo.png" alt="">
</div>
</div>
<!-- --------------------------------------------------------------- -->
<div class="flex justify-between items-center relative">
    <div class="absolute top-0 left-[-180px] z-10 bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full" style="background-image: linear-gradient(to top, rgb(255, 83, 0), rgb(255, 184, 77));"></div>
    <div class="w-[50%] flex items-center gap-[1rem] max-mlg:w-full">
        <img class="pb-[20px] z-10" src="https://devopinionuniverse.in/liveSurveyLogo.png" alt="">
        <div class="z-10">
            <img class="pb-[20px]" src="https://devopinionuniverse.in/liveSurveyImg.png" alt="">
            <div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
            <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">Survey</h3>
            <p class="pt-[10px] text-[15px] font-normal">Unlock faster conversions with our top-notch EPC high-converting survey routers designed specifically for your traffic.</p>
        </div>
    </div>
    <div class="w-[50%] z-5 flex items-center justify-end max-mlg:hidden">
            <img class="z-10" src="https://devopinionuniverse.in/SurveyImgMain.png" alt="">
        </div>
    </div>
    <!-- ----------------------------------------------------------- -->
    <div class="flex flex-row justify-center items-center pt-[40px] relative">
        <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[45%] left-[-40px]"></div>
        <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-1 top-[65%]" style="left: calc(100% - 120px);"></div>
        <div class="w-[50%] z-5 flex items-center justify-start max-mlg:hidden">
            <img class="z-10" src="https://devopinionuniverse.in/ptcImgMain.png" alt="">
        </div>
        <div class="w-[50%] flex items-center gap-[1rem] max-mlg:w-full">
            <div class="z-10"><img class="pb-[20px]" src="https://devopinionuniverse.in/ptcImg.png" alt="">
            <div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
            <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">PTC Ads</h3>
            <p class="pt-[10px] text-[15px] font-normal">PTC ads are online ads where advertisers pay publishers for clicks. Users earn small rewards for clicking and viewing these ads.</p>
        </div><img class="pb-[20px] z-10" src="https://devopinionuniverse.in/ptcLogo.png" alt="">
    </div>
</div>
</div>


<!-- ----------------------advertisor----------------- -->
<div id="advertisers" class="flex flex-col gap-[3rem] relative pt-[160px] px-[6rem] max-sm:gap-2 max-sm:px-0" style="height: max-content;">
    <div class="absolute bg-[#FF530060] h-[110px] w-[110px] border border-transparent rounded-full z-[1] top-[85%] left-[-140px]"></div>
    <h3 class="text-[45px] font-black leading-[54px] text-[#FF5300] text-center z-[10] relative max-sm:text-[28px] max-sm:leading-[32px] max-sm:text-start">ADVERTISERS</h3>
    <div class="flex gap-[1rem] justify-between z-[10]"><div class="flex flex-col justify-center gap-[2rem] w-1/2 max-mlg:w-full"><div class="w-[116px] h-[3px] bg-[#FF5300]"></div>
    <h3 class="font-bold text-[36px] leading-[44px] max-w-[620px] max-sm:text-[20px] max-sm:leading-[24px]">Reach Your Target Audience</h3>
    <p class="font-normal text-[15px] pb-[20px]">Lorem ipsum dolor sit amet consectetur. Et tellus sed nulla elementum scelerisque egestas sapien. Metus metus nulla tortor cras eu donec. Adipiscing in eget tincidunt feugiat. Platea ac orci fermentum sapien non. Risus mi diam feugiat rutrum in. 
        <br>Varius leo nunc nunc volutpat pellentesque convallis. Porttitor ullamcorper nec tincidunt tincidunt egestas eleifend. Quis risus bibendum nunc bibendum. Turpis aliquam placerat eget elementum sollicitudin.</p>
        <div class="flex gap-[1rem]"><a class="bg-[#FF5300] text-white rounded-[22.5px] w-[210px] h-[45px] text-center flex justify-center items-center" href="/contact-us">Contact Us</a>
        <a class="bg-[#FFF3EC] text-[#FF5300] border-[#FF5300] border-2 border-solid rounded-[22.5px] w-[210px] h-[45px] text-center flex justify-center items-center" href="/signup">Sign Up</a></div>
    </div>
    <div class="relative ">
        <img src="https://devopinionuniverse.in/advertiseRight.png" alt="">
        <img class="absolute top-[50px] left-[40px]" src="https://devopinionuniverse.in/advertiseNet.png" alt="">
    <img class="absolute top-[170px] left-[100px]" src="https://devopinionuniverse.in/advertiseSpeaker.png" alt="">
    <img class="absolute top-[275px] left-[40px]" src="https://devopinionuniverse.in/advertiseWeb.png" alt="">
 </div>
 </div>
</div>

<!-- about--------------us ------------------ -->
  

<section class="px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-center text-5xl font-bold text-[#ff5300] mb-[80px] mt-[170px] uppercase">About Us</h1>
        <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center">
            <!-- Text -->
            <div class="text-gray-700 text-[15px] leading-relaxed">
                <p>
                    <strong>Opinion Universe</strong> is the Perfect and Most Rewarding way to
                    Monetize your User Base. We are constantly enhancing our solutions to provide
                    the best experience and opportunities to earn more revenue for our publishers.
                    We offer various advertising verticals such as <strong>CPA, CPL, CPI, CPS, CPC, APPS, Surveys</strong>, etc.
                </p>
            </div>

            <!-- Image -->
            <div class="text-center">
                <img src="https://devopinionuniverse.in/aboutImg.png" alt="About" class="mx-auto w-full md:w-[300px] rounded-lg">
            </div>
        </div>
    </div>
</section>




<section class="bg-white text-center py-10 px-4">
    <!-- Stats Section -->
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-2 max-w-4xl mx-auto">
        <!-- Item 1 -->
        <div>
            <div class="w-16 h-16 mx-auto border-2 border-[#ff5300] rounded-full flex items-center justify-center">
                <img src="{{ asset('images/megaphone.png') }}" alt="Campaigns" class="w-6">
            </div>
            <h3 class="text-xl font-bold mt-4">5000+</h3>
            <p class="text-gray-700">Active Campaigns</p>
        </div>

        <!-- Item 2 -->
        <div>
            <div class="w-16 h-16 mx-auto border-2 border-[#ff5300] rounded-full flex items-center justify-center">
                <img src="{{ asset('images/edit.png') }}" alt="Publishers" class="w-6">
            </div>
            <h3 class="text-xl font-bold mt-4">10K+</h3>
            <p class="text-gray-700">Publishers</p>
        </div>

        <!-- Item 3 -->
        <div>
            <div class="w-16 h-16 mx-auto border-2 border-[#ff5300] rounded-full flex items-center justify-center">
                <img src="{{ asset('images/user.png') }}" alt="Offers" class="w-6">
            </div>
            <h3 class="text-xl font-bold mt-4">1M+</h3>
            <p class="text-gray-700">Offers Completed</p>
        </div>

        <!-- Item 4 -->
        <div>
            <div class="w-16 h-16 mx-auto border-2 border-[#ff5300] rounded-full flex items-center justify-center">
                <img src="{{ asset('images/star.png') }}" alt="Campaigns Again" class="w-6">
            </div>
            <h3 class="text-xl font-bold mt-4">5000+</h3>
            <p class="text-gray-700">Active Campaigns</p>
        </div>
    </div>

    <!-- Tracking Partners Heading -->
    <h2 class="text-5xl font-bold text-[#ff5300] mt-20">Tracking Partners</h2>

    <!-- Logos Section -->
    <div class="flex flex-wrap justify-center gap-10 items-center mt-10">
        <img src="https://devopinionuniverse.in/trackFirst.png" alt="AppsFlyer" class="h-10 sm:h-14">
        <img src="https://devopinionuniverse.in/trackSecond.png" alt="Adjust"       class="h-10 sm:h-14">
        <img src="https://devopinionuniverse.in/trackThird.png" alt="Kochava"     class="h-10 sm:h-14">
        <img src="https://devopinionuniverse.in/trackForth.png" alt="Justtrack" class="h-10 sm:h-14">
        <img src="https://devopinionuniverse.in/trackFifth.png" alt="Singular"   class="h-10 sm:h-14">
    </div>
</section>
@endsection







