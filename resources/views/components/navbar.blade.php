<div x-data="{ open: false }" class="bg-[#232323] w-full ralewayThin font-bold">
    <nav class="relative">
        <div class="container mx-auto flex justify-between items-center h-28 px-4">
            <a class="h-full" href="/">
                <div class="text-white flex items-center h-full">
                    <img class="h-full py-2 mt-1 scale-[1.7]" src="{{ asset('logo/Logo_kriszvill.svg') }}" alt="">
                </div>
            </a>

            <div class="hidden lg:flex gap-8 items-center text-lg text-gray-100 h-full ">
                <a class="cursor-pointer hover:text-[#4DA7F7]" href="/">Főoldal</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]"
                    onclick="scrollToDiv('szolgaltatasok')">Szolgáltatások</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('rolam')">Rólam mondták</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('kapcsolat')">Kapcsolat</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('ajanlatkeres')">Ajánlatkérés</a>
                <div class="border-l-2 border-[#4DA7F7] py-8"></div>
                <a class="bg-[#4DA7F7] px-2 py-1 rounded-sm font-sans font-normal" href="tel:+36702210396">+36 70 221
                    0396</a>
            </div>

            <!-- Hamburger button -->
            <div class="flex lg:hidden">
                <button @click="open = !open" class="text-gray-100 hover:text-gray-100 focus:outline-none">
                    <svg x-show="!open" class="text-gray-100 h-10 w-10" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>
        </div>
        <div x-show="open" x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="opacity-0 translate-y-[-100px]" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transform ease-in duration-300 transition"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-[-20px]"
            class="lg:hidden absolute z-10 -mt-2 text-gray-100 pl-8 w-full bg-[#232323]">
            <div class="container mx-auto flex flex-col gap-2 pt-8">
                <a class="block cursor-pointer hover:text-[#4DA7F7]" onclick="topFunction()">Főoldal</a>
                <a class="block cursor-pointer hover:text-[#4DA7F7]"
                    onclick="scrollToDiv('szolgaltatasok')">Szolgáltatások</a>
                <a class="block cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('rolam')">Rólam mondták</a>
                <a class="block cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('kapcsolat')">Kapcsolat</a>
                <a class="block cursor-pointer hover:text-[#4DA7F7] mb-4"
                    onclick="scrollToDiv('ajanlatkeres')">Ajánlatkérés</a>
                <div class="border-t-2 border-[#4DA7F7] pb-8 pt-4 pr-4 w-fit">
                    <a class="bg-[#4DA7F7] px-2 py-1 rounded-sm font-sans font-normal" href="tel:+36702210396">+36
                        70 221
                        0396</a>
                </div>
            </div>
        </div>
    </nav>
</div>
