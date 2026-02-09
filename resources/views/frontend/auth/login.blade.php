@extends('frontend.layouts.auth')

@section('content')
<div class="w-full h-screen flex items-center justify-center">
    <div class="rounded bg-white text-milklife-blue-darken md:w-1/3 w-11/12">
        <div class="header-bar text-center font-geologica font-bold border-b border-milklife-blue p-4">
            <h4 class="text-2xl">Login Administrator</h4>
        </div>

        <div class="body-bar p-4">
            <x-forms.post :action="route('frontend.auth.login')" class="space-y-4">
                <div class="grid grid-cols-4 gap-2">
                    <label for="email" class="font-koara-light tracking-wider text-lg">@lang('E-mail Address')</label>
                    <div class="col-span-3">
                        <input type="email" name="email" id="email" class="transition-all ease-in w-full p-1 bg-white focus:outline-none border border-milklife-blue focus:border-0 focus:ring focus:ring-milklife-blue rounded" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="email">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <label for="password" class="font-koara-light tracking-wider text-lg">@lang('Password')</label>
                    <div class="col-span-3">
                        <input type="password" name="password" id="password" class="transition-all ease-in w-full p-1 bg-white focus:outline-none border border-milklife-blue focus:border-0 focus:ring focus:ring-milklife-blue rounded" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password">
                    </div>
                </div>
                <div class="flex space-x-2 items-center ">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember me</label>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-milklife-blue">Login</button>
                </div>
            </x-forms.post>
        </div>
    </div>
</div>
@endsection
