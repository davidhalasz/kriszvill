<div class="w-full py-20" id="ajanlatkeres">
    <div class="container mx-auto">
        <div class="text-3xl font-bold text-center mb-20">
            <span class="bg-clip-text raleway text-transparent bg-gradient-to-r from-[#4DA7F7] to-[#4DA7F7]">
                AJÁNLATKÉRÉS
            </span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="pr-10 pt-8 flex items-center">
                <div>
                    <h2 class="text-3xl text-[#4DA7F7] ralewayBold">Vegye fel velem a kapcsolatot!</h2>
                    <p class="pt-8 text-lg text-gray-100">
                        Villanyszerelés, korszerűsítés, gyorsszervíz a hét minden napján.</br>
                    </p>
                    <p class="pt-4 text-lg text-gray-100">
                        Hívjon engem, írjon emailt vagy töltse ki az ajánlatkérő űrlapot és hamarosan felveszem Önnel
                        a
                        kapcsolatot.
                    </p>
                    <div class="mt-8 flex text-gray-100 text-lg items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <p class="ralewayBold pl-4">+36 70 221 0396</p>
                    </div>
                    <div class="mt-4 flex text-gray-100 text-lg items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <p class="ralewayBold pl-4">info@krisz-vill.hu</p>
                    </div>
                </div>

            </div>
            <div class="w-full p-8 my-4 md:px-12 mr-auto rounded-sm shadow-2xl">
                <div class="flex">
                    <h1 class="font-bold uppercase text-2xl text-[#4DA7F7]">Kérjen árajánlatot!</h1>
                </div>
                <form method="post" action="/send-email" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <div class="form-group">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Név*" name="name" />
                        </div>
                        <div class="form-group">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="email" placeholder="Email*" name="email" />
                        </div>
                        <div class="form-group">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Telefonszám*" name="phone" />
                        </div>
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Üzenet*" name="message"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-sm focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="grid grid-cols-1">
                        <input name="attachments[]" multiple
                            class="custom-file-input w-full bg-gray-100 text-gray-900 p-3 rounded-sm focus:outline-none focus:shadow-outline"
                            type="file" />
                        <p class="text-gray-200 mt-1">Adott munka jellegéről, pl. konyha, alaprajz, villamossági terv,
                            stb.
                        </p>
                    </div>
                    <div class="mb-2 mt-8 w-1/2 lg:w-1/4">
                        <button type="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-[#4DA7F7] text-gray-100 p-3 rounded-sm w-full 
                          focus:outline-none focus:shadow-outline">
                            Küldés
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
