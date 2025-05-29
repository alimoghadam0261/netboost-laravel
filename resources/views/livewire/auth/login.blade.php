<div class="max-w-3xl mx-auto py-10 login-bg rounded-md dark:bg-gray-900 text-black dark:text-white dark:max-w-full">
    @if (!$is_code_sent)
        <form wire:submit.prevent="sendVerificationCode" class="form-control">
            <br><br>
            <label for="phone" class="text-center block text-[25px] mb-2">
                شماره همراه:
            </label>
            <input type="tel" id="phone" wire:model="phone" placeholder="شماره موبایل خود را وارد کنید"
                   class="mx-auto block w-full md:w-[250px] h-[40px] text-right px-[10px] rounded-sm mb-4">
            <br><br>
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            <button type="submit" class="bg-blue-300 w-full md:w-[150px] h-[40px] md:mx-[300px] rounded-md mx-auto">
                ارسال کد تایید
            </button>
        </form>
    @else
        <form wire:submit.prevent="login" class="form-control">
            <br><br>
            <label for="entered_code" class="text-center block text-[25px] mb-2">
                کد تایید:
            </label>
            <input
                type="text"
                inputmode="numeric"
                pattern="[0-9]*"
                id="entered_code" wire:model="entered_code" placeholder="کد تایید 6 رقمی را وارد کنید"
                   class="mx-auto block w-full md:w-[250px] h-[40px] text-right px-[10px] rounded-sm mb-4">
            <br><br>
            @error('entered_code') <span class="text-danger">{{ $message }}</span> @enderror
            <button type="submit" class="bg-blue-300 w-full md:w-[150px] h-[40px] md:mx-[300px] rounded-md mx-auto">
                ورود
            </button>
            <hr>
        </form>
    @endif
</div>
