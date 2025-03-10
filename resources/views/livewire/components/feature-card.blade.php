<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title;
    public string $description;
    public string $image;
    public array $features = [];
}; ?>

<section>
        <div class="flex flex-col justify-center items-center gap-[30px]">
            <img class="w-1/2 md:w-full" src="{{ $image }}" alt="images">
            <h1 class="text-[30px] font-semibold">{{ $title }}</h1>
            <p class="text-lg text-center font-medium text-[#A6A6A6] max-w-[461px]">{{ $description }}</p>
        </div>
    
</section>
