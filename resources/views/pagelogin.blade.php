<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <x-header>
    <x-layout>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="{{ asset('img/puskesmas-seeklogo-3.svg') }}" alt="logo">
                    PUSKESMAS SUKABUMI
                </a>
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Masuk ke Akun Anda
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email Anda
                                </label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="nama@perusahaan.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Kata Sandi
                                </label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">
                                            Ingat saya
                                        </label>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                                    Lupa kata sandi?
                                </a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Masuk
                            </button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Belum punya akun? <a href="/daftar"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                                    Daftar
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </x-layout>


    <x-layout>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="{{ asset('img/puskesmas-seeklogo-3.svg') }}" alt="logo">
                    PUSKESMAS SUKABUMI
                </a>
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 text-center">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Pendaftaran Akun
                        </h1>
                        <p class="text-gray-600 dark:text-gray-300">
                            Untuk melakukan pendaftaran akun, silakan langsung menghubungi <br>
                            <strong>Diskominfo</strong> untuk informasi lebih lanjut.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300">
                            Anda dapat menghubungi Diskominfo melalui:
                        </p>
                        <div class="space-y-2">
                            <p class="text-gray-700 dark:text-gray-300"><strong>Email:</strong>
                                diskominfo@sukabumi.go.id</p>
                            <p class="text-gray-700 dark:text-gray-300"><strong>Telepon:</strong> (0266) 123456</p>
                            <p class="text-gray-700 dark:text-gray-300"><strong>Alamat:</strong> Jl. Raya Sukabumi No.
                                10</p>
                        </div>
                        <a href="index.html"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </x-layout>
</body>


</html>
