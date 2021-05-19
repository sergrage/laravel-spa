<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->


        <!-- Styles -->

    </head>
    <body> 
        <div id="app">
            <div class="container px-8 font-robo">
                <header class="text-lg py-6 mb-8">
                    <h1>
                        <img src="/img/logo.svg" alt="Laravel">
                    </h1>
                    {{-- <span class="uppercase font-bold text-xl">Laracast</span> --}}
                </header>
                <main class="flex">
                    <aside class="w-1/5 pt-10">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-4">The Brands</h5>
                            <ul>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'home'}" exact>Home</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'logo'}">Logo Symbol</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'colors'}">Colors</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'typography'}">Typography</router-link></li>
                            </ul>
                        </section>
                        <section class="pt-5">
                            <h5 class="uppercase font-bold mb-4">Doodles</h5>
                            <ul>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'mascot'}">Mascot</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'illustrations'}">Illustrations</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'loaders'}">Loaders and Animations</router-link></li>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'wallpapers'}">Wallpapers</router-link></li>
                            </ul>
                        </section>
                        <section class="pt-5">
                            <h5 class="uppercase font-bold mb-4">Stats</h5>
                            <ul>
                                <li class="mb-4 text-sm"><router-link class="text-primary leading-10" :to="{ name: 'stats'}">Stats</router-link></li>
                            </ul>
                        </section>
                       
                    </aside>
                    <div class="primary flex-1">
                        {{-- тут выводится контент из компонентов --}}
                        <router-view></router-view>
                    </div>
                </main>
                <footer>
                    

                </footer>
            </div>
        </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
