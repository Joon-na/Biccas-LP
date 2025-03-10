<?php
use function Livewire\Volt\{state};
use App\Models\Contact;
use Livewire\Volt\Component;

new class extends Component {
    public $email;
    public $message;
    public $success;
 
    function store () {
        $this->validate([
            'email' => 'required|email|min:6',
            'message' => 'required',
        ]);

        Contact::create([
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['email', 'message']);
        $this->success = true;
    }
}

?>

<section class="bg-[#161C28] py-16 px-8">
    <div class="container mt-[40px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-[100px] items-center">
        <div class="text-white">
            <h1 class="text-4xl font-bold mb-[20px]">People are Saying About DoWhith</h1>
            <p class="mt-4 text-lg text-[#A6A6A6] mb-[40px]">
                Everything you need to accept payment and grow your money from anywhere on the planet.
            </p>
            <div class="mb-[40px]">
                <img src="/images/quote-footer.svg" alt="Quote">
            </div>
            <p class="text-lg font-medium text-[#A6A6A6] mb-[40px]">
                "I am very helped by this E-wallet application, my days are very easy using this application and it's
                very
                helpful in my life, even I can pay a short time"
            </p>
            <p class="text-lg mb-[40px] font-semibold">_ Aria Zinanrio</p>


            <div class="flex items-center gap-3 mt-6">
                <img src="/images/avatar-1.png" class="w-12 h-12 rounded-full">
                <img src="/images/avatar-2.png" class="w-12 h-12 rounded-full">
                <img src="/images/avatar-3.png" class="w-12 h-12 rounded-full">
                <img src="/images/avatar-4.png" class="w-12 h-12 rounded-full">
                <img src="/images/avatar-5.png" class="w-12 h-12 rounded-full">
            </div>
        </div>

        <div class="bg-[#222938] md:px-14 lg:px-24 px-12 py-6 rounded-xl text-white shadow-lg">
            <div class="flex flex-col items-center">
                <img src="/images/get-started.svg" class="w-18">
                <h2 class="text-[30px] font-medium mt-[10px]">Get Started</h2>
            </div>

            @if ($success)
                <div class="bg-[#54BD95] text-white p-4 rounded-xl mt-4 mb-4">
                    Message sent successfully!
                </div>
            @endif

            <form wire:submit="store" class="mt-6 space-y-4">
                <div>
                    <label class="block text-white text-lg mb-[20px]">Email</label>
                    <input wire:model="email" type="email" placeholder="Enter your email"
                        class="w-full p-3 rounded-xl bg-white border border-gray-700 text-black">
                    @error('email')
                        <span class="text-red-500 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-white text-lg mb-[20px]">Message</label>
                    <textarea wire:model="message" placeholder="What are you say ?"
                        class="w-full p-3 rounded-xl bg-white border border-gray-700 text-black"></textarea>
                    @error('message')
                        <span class="text-red-500 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-[#54BD95] py-3 rounded-xl font-semibold">
                    Request Demo
                </button>
                <p class="text-right text-[#A6A6A6] text-sm">or Start Free Trial</p>
            </form>
        </div>
    </div>

    <div class="bg-[#161C28] text-white">
        <div class="mx-auto container mt-[40px] flex flex-col md:flex-row items-center justify-center md:justify-between gap-[157px]">
            <div class="flex justify-center flex-col items-center">
                <img src="/images/logo-biccas.svg" alt="Biccas" class="w-24">
                <p class="text-[#A6A6A6] mt-3">Get started now try our product</p>
                <form class="mt-4 flex items-center border border-gray-500 rounded-full overflow-hidden w-64">
                    <input type="email" placeholder="Enter your email here"
                        class="flex-1 px-4 py-2 bg-transparent text-white outline-none">
                    <button type="button" class="m-1">
                        <img class="bg-[#54BD95] rounded-full p-2" src="/images/arrow-right-new.svg" alt="Submit">
                    </button>
                </form>
            </div>

            <div class="flex flex-row gap-16">
                <div>
                    <h3 class="text-lg font-semibold mb-3">Support</h3>
                    <ul class="text-[#A6A6A6] space-y-2">
                        <li><a href="#">Help centre</a></li>
                        <li><a href="#">Account information</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-3">Help and Solution</h3>
                    <ul class="text-[#A6A6A6] space-y-2">
                        <li><a href="#">Talk to support</a></li>
                        <li><a href="#">Support docs</a></li>
                        <li><a href="#">System status</a></li>
                        <li><a href="#">Covid response</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-3">Product</h3>
                    <ul class="text-[#A6A6A6] space-y-2">
                        <li><a href="#">Update</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Beta test</a></li>
                        <li><a href="#">Pricing product</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-[40px] flex flex-col md:flex-row justify-center md:justify-between items-center">
            <p class="text-white text-sm">© 2022 Biccas Inc. Copyright and rights reserved</p>
            <p class="text-white text-sm">Terms and Condtions . Privacy Policy</p>
        </div>
    </div>
</section>
