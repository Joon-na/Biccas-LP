<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title;
    public bool $titleColor;
    public string $description;
    public bool $dollarColor = false;
    public int $price;
    public bool $savePrice = false;
    public string $feature;
    public string $buttonText;
    public string $buttonLink;
    public bool $priceColor = false;
    public bool $descriptionColor = false;
    public bool $bgFeature = false;
    public bool $highlighted = false;
    public array $features = [];
    public bool $cardHighlighted = false;
};
?>


<div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-[30px] px-4">
    <div class="{{ $cardHighlighted ? 'bg-[#54BD95]' : 'bg-white' }} rounded-2xl w-full max-w-[350px] sm:max-w-none mx-auto p-6">
        <div class="flex flex-col justify-center items-center gap-3 mt-6">
            <h1 class="text-[24px] sm:text-[30px] {{ $titleColor ? 'text-white' : 'text-black' }} font-semibold text-center">
                {{ $title }}
            </h1>
            <p class="text-base sm:text-lg text-[#A6A6A6] text-center max-w-[240px] font-medium {{ $descriptionColor ? 'text-white' : 'text-[#A6A6A6]' }}">
                {{ $description }}
            </p>
            <div class="flex items-start">
                <span class="text-lg font-medium {{ $dollarColor ? 'text-white' : 'text-[#A6A6A6]' }}">$</span>
                <p class="text-[40px] sm:text-[50px] {{ $priceColor ? 'text-white' : 'text-black' }} font-semibold">
                    {{ $price }}
                </p>
            </div>

            <div class="{{ $savePrice ? 'flex' : 'hidden' }}">
                <a class="py-[5px] px-[10px] text-white text-[14px] font-semibold bg-[#85DAB9] rounded-lg" href="">Save $50 a year</a>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center mt-6 p-4 rounded-2xl {{ $bgFeature ? 'bg-[#54BD95]' : 'bg-white' }} gap-[20px] sm:gap-[30px]">
            <ul class="flex flex-col gap-[20px] sm:gap-[30px]">
                @foreach ($features as $feature)
                    <li class="text-base sm:text-lg flex gap-[15px] font-medium">
                        <img src="/images/checklist.svg" alt="">
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
            <a href="#" class="w-full sm:w-auto px-[31px] py-[14px] sm:py-[18px] font-medium text-lg sm:text-xl rounded-4xl text-center 
                {{ $highlighted ? 'bg-white text-[#54BD95]' : 'bg-[#54BD95] text-white' }}">
                {{ $buttonText }}
            </a>
        </div>
    </div>
</div>
