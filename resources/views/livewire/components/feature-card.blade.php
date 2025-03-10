<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title;
    public string $description;
    public string $image;
    public array $features = [];
}; ?>

<section>
        <div class="flex flex-col gap-[30px]">
            <img src="{{ $image }}" alt="images">
            <h1 class="text-[30px] font-semibold">{{ $title }}</h1>
            <p class="text-lg font-medium text-[#A6A6A6] max-w-[461px]">{{ $description }}</p>
        </div>
    
</section>
