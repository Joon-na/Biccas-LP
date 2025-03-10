<?php

use function Livewire\Volt\{state};

//

?>

<section class="container mx-auto mt-[40px] flex flex-col md:flex-row justify-between items-center gap-10 sm:gap-20 mb-[100px] px-8">
    <div>
        <div class="flex flex-col gap-4 sm:gap-[30px] mb-[50px] sm:mb-[73px]">
            <h1 class="text-[30px] sm:text-[50px] font-semibold text-center md:text-left">
                How we support our partner all over the world
            </h1>
            <p class="text-base sm:text-lg font-medium text-[#A6A6A6] text-center md:text-left">
                SaaS has become a common delivery model for many business applications, including office software, 
                messaging software, payroll processing software, DBMS software, and management software.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-6 sm:gap-[80px] items-center md:items-start">
            <div class="flex flex-col gap-[12px] sm:gap-[18px] items-center md:items-start">
                <img src="/images/rating-1.svg" alt="Databricks rating">
                <p class="text-lg sm:text-xl"> <span class="font-bold">4.9</span> / 5 rating</p>
                <p class="font-bold text-[#A6A6A6]">Databricks</p>
            </div>
            <div class="flex flex-col gap-[12px] sm:gap-[18px] items-center md:items-start">
                <img src="/images/rating-2.svg" alt="Chainalysis rating">
                <p class="text-lg sm:text-xl"> <span class="font-bold">4.8</span> / 5 rating</p>
                <p class="font-bold text-[#A6A6A6]">Chainalysis</p>
            </div>
        </div>
    </div>

    <!-- Right section -->
    <div class="flex flex-col gap-6 sm:gap-[30px]">
        <div class="flex flex-row gap-4 sm:gap-[21px] items-start">
            <img class="p-[15px] bg-white drop-shadow-2xl" src="/images/activity-1.svg" alt="Publishing">
            <div>
                <h1 class="text-lg sm:text-[28px] font-bold">Publishing</h1>
                <p class="text-base sm:text-[18px] text-[#A6A6A6] font-medium leading-[24px] sm:leading-[30px]">
                    Plan, collaborate, and publish your content that drives meaningful engagement and growth for your brand.
                </p>
            </div>
        </div>
        <div class="flex flex-row gap-4 sm:gap-[21px] items-start">
            <img class="p-[15px] bg-white drop-shadow-2xl" src="/images/activity-2.svg" alt="Analytics">
            <div>
                <h1 class="text-lg sm:text-[28px] font-bold">Analytics</h1>
                <p class="text-base sm:text-[18px] text-[#A6A6A6] font-medium leading-[24px] sm:leading-[30px]">
                    Analyze your performance and create gorgeous reports.
                </p>
            </div>
        </div>
        <div class="flex flex-row gap-4 sm:gap-[21px] items-start">
            <img class="p-[15px] bg-white drop-shadow-2xl" src="/images/activity-3.svg" alt="Engagement">
            <div>
                <h1 class="text-lg sm:text-[28px] font-bold">Engagement</h1>
                <p class="text-base sm:text-[18px] text-[#A6A6A6] font-medium leading-[24px] sm:leading-[30px]">
                    Quickly navigate and engage with your audience.
                </p>
            </div>
        </div>
    </div>
</section>
