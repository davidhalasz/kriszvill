<div class="w-full py-20" id="ajanlatkeres">
    <div class="container mx-auto">
        <div class="text-2xl md:text-3xl font-bold text-center mb-10 md:mb-20">
            <span class="bg-clip-text raleway text-transparent bg-gradient-to-r from-[#4DA7F7] to-[#4DA7F7]">
                AJÁNLATKÉRÉS
            </span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 px-4 md:px-8 lg:px-0">
            <div class="lg:pr-10 lg:pt-8 flex items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl text-[#4DA7F7] ralewayBold">Vegye fel velem a kapcsolatot!</h2>
                    <p class="pt-8 md:text-lg text-gray-100">
                        Villanyszerelés, korszerűsítés, gyorsszervíz a hét minden napján.</br>
                    </p>
                    <p class="pt-4 md:text-lg text-gray-100">
                        Keressen fel az alábbi elérhetőségek egyikén vagy töltse ki az ajánlatkérő űrlapot és hamarosan felveszem Önnel
                        a kapcsolatot.
                    </p>
                    <div class="mt-8 flex text-gray-100 md:text-lg items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <p class="ralewayBold pl-4">+36 70 221 0396</p>
                    </div>
                    <div class="mt-4 flex text-gray-100 md:text-lg items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <p class="ralewayBold pl-4">info@krisz-vill.hu</p>
                    </div>
                </div>

            </div>
            <div class="w-full mt-12 lg:mt-0 p-8 my-4 md:px-12 mr-auto rounded-sm shadow-2xl">

                <div class="flex">
                    <h1 class="font-bold uppercase text-2xl text-[#4DA7F7]">Kérjen árajánlatot!</h1>
                </div>
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
                        <div class="form-group flex flex-col md:mr-4">
                            <div class="h-8">
                                @error('name')
                                    <span class="text-red-500 font-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <input
                                class="w-full bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Név*" wire:model="name" />
                        </div>
                        <div class="form-group">
                            <div class="h-8">
                                @error('email')
                                    <span class="text-red-500 font-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <input
                                class="w-full bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="email" placeholder="Email*" wire:model="email" />
                        </div>
                        <div class="form-group md:mr-4">
                            <div class="h-8 mt-1">
                                @error('phone')
                                    <span class="text-red-500 font-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <input
                                class="w-full bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Telefonszám*" wire:model="phone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="h-8 mt-1">
                            @error('message')
                                <span class="text-red-500 font-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <textarea placeholder="Üzenet*" wire:model="message"
                            class="w-full h-32 bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="h-8 mt-1">
                            @error('message')
                                <span class="text-red-500 font-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <input wire:model="attachments" multiple
                            accept="image/*,.pdf"
                            class="custom-file-input w-full bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                            type="file" />
                        <p class="text-gray-200 mt-1">Adott munka jellegéről, pl. konyha, alaprajz, villamossági terv,
                            stb. </br>Elfogadott formátumok: jpg, jpeg, png, pdf
                        </p>
                    </div>
                    <div class="mb-2 mt-8 w-1/2 lg:w-1/4">
                        <button type="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-[#4DA7F7] text-gray-100 p-3 rounded-sm w-full 
                          focus:outline-none focus:shadow-outline">
                            Küldés
                        </button>
                    </div>
                    @if (session()->has('success'))
                        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                            <div class="bg-emerald-300 text-gray-700 font-bold p-2 w-full text-center ralewayBold text-lg rounded-sm">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
