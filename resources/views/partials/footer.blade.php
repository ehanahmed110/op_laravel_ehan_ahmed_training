<!-- ✅ Responsive Footer -->
<footer class="bg-gradient-to-r from-[#0f1e65] to-[#081547] text-white py-10 px-6 mt-20 rounded-t-3xl ">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-2 text-sm">

        <!-- Logo & Description -->
        <div class="sm:col-span-2 space-y-4">
            <img src="https://devopinionuniverse.in/new-assets/white-logo.png" alt="Logo" class="w-56">
            <p class="text-[18px] text-gray-300">Empower Success, Accelerate Growth</p>

            <!-- Social Icons -->
            <div class="flex space-x-4">
                <a href="#"><img src="{{ asset('images/linkedin.png') }}" class="w-11 h-11" alt="LinkedIn" /></a>
                <a href="#"><img src="{{ asset('images/twitter.png') }}"  class="w-11 h-11" alt="Twitter" /></a>
                <a href="#"><img src="{{ asset('images/social.png') }}"    class="w-11 h-11" alt="Skype" /></a>
                <a href="#"><img src="{{ asset('images/facebook.png') }}" class="w-11 h-11" alt="Facebook" /></a>
                <a href="#"><img src="{{ asset('images/instagram.png') }}"class="w-11 h-11" alt="Instagram" /></a>
            </div>

            <p class="text-[16px] text-center text-white">
               CopyRight © 2023 OTMR Survey PVT LTD. <br>All Rights Reserved.
            </p>
        </div>

        <!-- Company -->
        <div>
            <h4 class="font-bold mb-2 text-2xl mt-10">Company</h4>
            <div class='bg-white h-[4px] w-[50px] mb-4 rounded-lg'></div>
            <ul class="space-y-4 text-[16px] font-medium text-white">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h4 class="font-bold mb-2 text-2xl mt-10">Services</h4>
            <div class='bg-white h-[4px] w-[50px] mb-4 rounded-lg'></div>
            <ul class="space-y-4 text-[16px] font-medium text-white">
                <li><a href="#">Monetize</a></li>
                <li><a href="#">Advertise</a></li>
            </ul>
        </div>

        <!-- Solutions -->
        <div>
            <h4 class="font-bold mb-2 text-2xl mt-10">Solutions</h4>
            <div class='bg-white h-[4px] w-[50px] mb-4 rounded-lg'></div>
            <ul class="space-y-4 text-[16px] font-medium text-white">
                <li><a href="#">Offerwall</a></li>
                <li><a href="#">SDK</a></li>
                <li><a href="#">API</a></li>
            </ul>
        </div>

        <!-- FAQ -->
        <div>
            <h4 class="font-bold mb-2 text-2xl mt-10">FAQ</h4>
            <div class='bg-white h-[4px] w-[50px] mb-4 rounded-lg'></div>
            <ul class="space-y-4 text-[16px] font-medium text-white">
                <li><a href="#">For Monetize</a></li>
                <li><a href="#">For Advertise</a></li>
                <li><a href="#">Get Docs</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="font-bold mb-2 text-2xl mt-10">Contact</h4>
            <div class='bg-white h-[4px] w-[50px] mb-4 rounded-lg'></div>
            <ul class="space-y-4 text-[16px] font-medium text-white">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Text -->
    <div class="border-t border-white mt-10 pt-4 text-white font-medium text-[16px]">
        When you access our sites, services, or tools, we and our authorized partners may use cookies to store
        information, enhancing your experience with greater speed, security, and personalized marketing.
    </div>
</footer>

<!-- JS for Toggle -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
