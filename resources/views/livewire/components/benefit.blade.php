<?php

use function Livewire\Volt\{state};

//

?>
<section class="container mx-auto mt-[40px] px-4">
    <div class="flex flex-col md:flex-row justify-between items-center md:items-start mb-[130px] gap-10">
        <div class="flex flex-col text-center md:text-left">
            <h1 class="text-[32px] sm:text-[50px] font-bold mb-[30px]">What Benefit Will You Get</h1>
            <ul class="flex flex-col gap-[20px]">
                <li class="text-lg flex items-center gap-[15px] font-medium"><img src="/images/checklist.svg" class="w-6 h-6" alt=""><span>Free Consulting With Expert Saving Money</span></li>
                <li class="text-lg flex items-center gap-[15px] font-medium"><img src="/images/checklist.svg" class="w-6 h-6" alt=""><span>Online Banking</span></li>
                <li class="text-lg flex items-center gap-[15px] font-medium"><img src="/images/checklist.svg" class="w-6 h-6" alt=""><span>Investment Report Every Month</span></li>
                <li class="text-lg flex items-center gap-[15px] font-medium"><img src="/images/checklist.svg" class="w-6 h-6" alt=""><span>Saving Money For The Future</span></li>
                <li class="text-lg flex items-center gap-[15px] font-medium"><img src="/images/checklist.svg" class="w-6 h-6" alt=""><span>Online Transaction</span></li>
            </ul>
        </div>

        <div class="relative w-full md:w-auto max-w-sm md:max-w-none mx-auto md:mx-0">
            <img class="w-full" src="/images/benefit-image.png" alt="benefit-image">
      
            <img class="hidden sm:block absolute top-[60px] right-[250px] z-10" src="/images/benefit-element-1.png" alt="">
            <img class="hidden sm:block absolute top-[100px] right-[-70px] z-10" src="/images/benefit-element-2.png" alt="">
            <img class="hidden sm:block absolute bottom-[230px] left-[-70px] z-10" src="/images/benefit-element-3.png" alt="">
            <img class="hidden sm:block absolute bottom-[-30px] left-[-110px] z-10" src="/images/benefit-element-4.png" alt="">
        </div>
    </div>
</section>
