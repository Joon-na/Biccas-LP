<?php

use function Livewire\Volt\{state};

//

?>

<section class="container mx-auto mt-[40px] flex flex-col mb-[130px] px-4">
    <div class="flex flex-col md:flex-row items-center justify-between mb-[50px] sm:mb-[74px] gap-6 sm:gap-10">
        <h1 class="font-semibold max-w-[331px] text-[30px] sm:text-[50px] text-center md:text-left">
            Our Features you can get
        </h1>
        <p class="text-base sm:text-xl font-medium text-[#A6A6A6] max-w-[461px] text-center md:text-left">
            We offer a variety of interesting features that can help increase your productivity at work and
            manage your project easily.
        </p>
        <a class="px-[31px] py-[18px] font-medium text-xl rounded-4xl bg-[#54BD95] text-white text-center" href="#">
            Get Started
        </a>
    </div>


    <div class="flex flex-col justify-between items-center md:flex-row gap-[44px]">
        @livewire('components.feature-card', [
            'image' => '/images/feature-1.png',
            'title' => 'Collboration Teams',
            'description' => 'Here you can handle projects together with team virtually',
        ])
        @livewire('components.feature-card', [
            'image' => '/images/feature-2.png',
            'title' => 'Cloud Storage',
            'description' => 'No nedd to worry about storage because we provide storage up to 2 TB',
        ])
        @livewire('components.feature-card', [
            'image' => '/images/feature-3.png',
            'title' => 'Daily Analytics',
            'description' => 'We always provide useful informatin to make it easier for you every day',
        ])
    </div>
</section>
