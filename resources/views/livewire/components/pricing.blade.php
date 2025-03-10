<?php

use function Livewire\Volt\{state};

//

?>
<section class="relative">
    <img class="absolute z-[-1] top-[-600px] sm:top-[-800px] lg:top-[-1000px] right-0" src="/images/ellipse-pricing.png" alt="">

    <div class="container mx-auto mt-[40px] flex flex-col justify-center items-center mb-[100px] px-4">
        <div class="flex flex-col justify-center items-center gap-[30px] sm:gap-[40px] mb-[50px] sm:mb-[67px] text-center">
            <h1 class="text-[30px] sm:text-[50px] font-bold">
                Choose Plan That’s Right For You
            </h1>
            <p class="text-base sm:text-lg font-bold text-[#A6A6A6] max-w-[400px] sm:max-w-none">
                Choose plan that works best for you, feel free to contact us
            </p>
            <div class="flex flex-row justify-center items-center gap-[10px] sm:gap-[20px] drop-shadow-2xl py-[6px] sm:py-[10px] px-[10px] sm:px-[16px] rounded-2xl bg-white">
                <a class="text-black text-sm sm:text-xl font-medium px-[20px] sm:px-[40px] py-[8px] sm:py-[13px]" href="#">
                    Bill Monthly
                </a>
                <a class="bg-[#54BD95] text-sm sm:text-xl font-medium text-white px-[20px] sm:px-[40px] py-[8px] sm:py-[13px] rounded-xl" href="#">
                    Bill Yearly
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 w-full max-w-[1200px]">
            @livewire('components.pricing-card', [
                'title' => 'Free',
                'description' => 'Have a go and test your superpowers',
                'price' => 0,
                'features' => ['2 Users', '2 Files', 'Public Share & Comments', 'Chat Support', 'New income apps'],
                'buttonText' => 'Signup for free',
                'buttonLink' => '#',
                'highlighted' => true,
            ])

            @livewire('components.pricing-card', [
                'title' => 'Pro',
                'description' => 'Experiment the power of infinite possibilities',
                'dollarColor' => true,
                'price' => 8,
                'savePrice' => true,
                'features' => ['4 Users', 'All apps', 'Unlimited editable exports', 'Folders and collaboration', 'All incoming apps'],
                'buttonText' => 'Go to pro',
                'buttonLink' => '#',
                'cardHighlighted' => true,
                'descriptionColor' => true,
                'priceColor' => true,
                'titleColor' => true,
            ])

            @livewire('components.pricing-card', [
                'title' => 'Business',
                'description' => 'Unveil new superpowers and join the Design League',
                'price' => 16,
                'features' => ['All the features of pro plan', 'Account success Manager', 'Single Sign-On (SSO)', 'Co-conception program', 'Collaboration - Soon'],
                'buttonText' => 'Goto Business',
                'buttonLink' => '#',
                'highlighted' => true,
            ])
        </div>
    </div>
</section>
