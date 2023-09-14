<div class="w-full bg-[#232323] py-20 flex" id="kapcsolat">
    <div class="container mx-auto grid md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-0 px-8 lg:px-0">
        <div class="md:col-span-2 lg:col-span-1 text-gray-100 flex justify-center items-center">
            <div class="text-white flex items-center h-44">
                <img class="h-full py-2" src="{{asset('logo/kriszvill-logo.png')}}" alt=""> 
            </div>
        </div>

        <div class="flex text-gray-100 text-lg mt-8 lg:mt-0">
            <div class="w-fit lg:mx-auto flex flex-col">
                <h2 class="ralewayBold text-[#4DA7F7] text-xl md:text-2xl mb-4">Szolgáltatások</h2>
                <p class="">Lakossági villanyszerelés</p>
                <p class="">Ipari villanyszerelés</p>
                <p class="">Strukturált hálózatok kiépítése</p>
                <p class="">Gyorsszervíz</p>
            </div>
        </div>

        <div class="flex justify-start md:justify-center mt-8 lg:mt-0">
            <div class="w-fit lg:mx-auto flex flex-col">
                <h2 class="ralewayBold text-[#4DA7F7] text-xl md:text-2xl  mb-4">Elérhetőségek</h2>
                <div class="flex text-gray-100 md:text-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                    <a class="font-sans font-bold pl-4" href="tel:+36702210396">+36 70 221 0396</a>
                </div>
                <div class="mt-4 flex text-gray-100 md:text-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <a class="ralewayBold pl-4" href="mailto:info@krisz-vill.hu">info@krisz-vill.hu</a>
                </div>
            </div>
        </div>
        <div class="flex justify-start text-gray-100 text-lg mt-8 lg:mt-0">
            <div class="w-fit lg:mx-auto flex flex-col">
                <h2 class="ralewayBold text-[#4DA7F7] text-xl md:text-2xl mb-4">Menü</h2>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="topFunction()">Főoldal</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]"
                    onclick="scrollToDiv('szolgaltatasok')">Szolgáltatások</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('rolam')">Rólam mondták</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('kapcsolat')">Kapcsolat</a>
                <a class="cursor-pointer hover:text-[#4DA7F7]" onclick="scrollToDiv('ajanlatkeres')">Ajánlatkérés</a>
            </div>
        </div>
    </div>
</div>
