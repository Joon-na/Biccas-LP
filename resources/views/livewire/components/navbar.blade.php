<?php

use function Livewire\Volt\{state};

//

?>

<nav class="container z-30 mx-auto pt-[40px] flex justify-between h-[68px] items-center mb-[70px] bg-white px-8">
    <a wire:navigate href="/" class="z-30"><img class="w-24 md:w-full" src="/images/logo-biccas.svg" alt="logo"></a>
    
    <!-- Hamburger Icon -->
    <button id="menu-toggle" class="lg:hidden z-30 text-black focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    
    <!-- Navigation Links -->
    <div id="menu" class="hidden z-30 lg:flex lg:gap-[40px] flex-col lg:flex-row absolute lg:static top-[68px] left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow-lg lg:shadow-none p-5 lg:p-0 transition-all duration-300 ease-in-out">
        <ul class="flex flex-col lg:flex-row lg:gap-[40px] text-center lg:text-left">
            <li><a wire:navigate wire:current="font-medium text-black" href="/home" class="text-[#A6A6A6] text-[16px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Home</a></li>
            <li><a wire:navigate wire:current="font-medium text-black" href="/product" class="text-[#A6A6A6] text-[16px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Product</a></li>
            <li><a wire:navigate wire:current="font-medium text-black" href="/FAQ" class="text-[#A6A6A6] text-[16px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">FAQ</a></li>
            <li><a wire:navigate wire:current="font-medium text-black" href="/blog" class="text-[#A6A6A6] text-[16px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Blog</a></li>
            <li><a wire:navigate wire:current="font-medium text-black" href="/about" class="text-[#A6A6A6] text-[16px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">About Us</a></li>
        </ul>
    </div>

    <div class="hidden lg:flex flex-row gap-5 z-30">
        <button><a href="">Login</a></button>
        <button class="px-4 py-2 rounded-lg text-white bg-[#54BD95]"><a href="">Sign Up</a></button>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>
