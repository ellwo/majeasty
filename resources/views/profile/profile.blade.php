
@role("admin")
<x-admin-layout>

    <x-slot name="header">

    </x-slot>

        @if(count($errors)>0)



            <div class="fixed  bg-red-600 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
                <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-red-800">
            {{__('عذرا !!')}}</span>
                    <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
                {{__('هناك بعض المعلومات الناقصة او غير الصحيحة')}}

                <ul>

                    @foreach($errors as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if( session()->get('stat')=='ok')

            <div class="fixed  bg-green-500 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
                <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-blue-600">
            {{__(session()->get('title'))}}</span>
                    <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
                {{__(session()->get('message'))}}
            </div>
        @endif
        <x-auth-card isprofile="{{true}}">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="post" action="{{route('updateNameEmail')}}">
                @csrf
    <div class="grid gap-6">
        <!-- Name -->
        <div class="space-y-2">
            <x-label for="name" :value="__('Name')" />
            <x-input-with-icon-wrapper>
                <x-slot name="icon">
                    <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                </x-slot>
                <x-input  withicon id="name" class="block w-full" type="text" name="name" :value="Auth::user()->name"
                         required autofocus placeholder="{{ __('Name') }}" />
            </x-input-with-icon-wrapper>
        </div>

        <!-- Email Address -->
        <div class="space-y-2">
            <x-label for="email" :value="__('Email')" />
            <x-input-with-icon-wrapper>
                <x-slot name="icon">
                    <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                </x-slot>
                <x-input withicon id="email" class="block w-full" type="email" name="email"
                         :value="Auth::user()->email" required placeholder="{{ __('Email') }}" />
            </x-input-with-icon-wrapper>
        </div>

        <div>
            <x-button class="justify-center w-full gap-2">
                <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                <span>{{ __('حفظ') }}</span>
            </x-button>
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
            </form>
        </x-auth-card>
        <x-auth-card isprofile="{{true}}">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="post" class="" action="{{route('profile.updatepassword')}}">
                @csrf

                <div class="space-y-2" x-data='{isshow:false}' >
                    <x-label for="password" class="text-right " :value="__(' كلمة المرورالحالية')" />
                    <x-input-with-icon-wrapper >
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon withrighticon id="password" class="block w-full"  x-bind:type=" isshow ? 'text' : 'password'" name="lastpassword" required
                            autocomplete="new-password"  placeholder="{{ __('كلمة المرور') }}" />
                            <x-slot name="righticon">
                                <button type="button" @click="isshow=!isshow" class="z-30 ">
                                    <x-heroicon-o-eye x-show="!isshow" aria-hidden="true" class="w-5 h-5 " />
                                    <x-heroicon-o-eye-off x-show="isshow" aria-hidden="true" class="w-5 h-5 " />
                                </button>
                            </x-slot>

                        </x-input-with-icon-wrapper>

                        @error("password")

                    <hr class="text-danger bg-danger border-2 border-danger"/>
                    <span class="text-danger text-xs ">{{$message}}</span>
                    @enderror

                </div>


                <div class="space-y-2" x-data='{isshow:false}' >
                    <x-label for="password" dir="rtl" class=" text-right" :value="__(' كلمة المرور الجديدة')" />
                    <x-input-with-icon-wrapper >
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon withrighticon id="password" class="block w-full"  x-bind:type=" isshow ? 'text' : 'password'" name="password" required
                            autocomplete="new-password"  placeholder="{{ __(' كلمة المرور الجديدة') }}" />
                            <x-slot name="righticon">
                                <button type="button" @click="isshow=!isshow" class="z-30 ">
                                    <x-heroicon-o-eye x-show="!isshow" aria-hidden="true" class="w-5 h-5 " />
                                    <x-heroicon-o-eye-off x-show="isshow" aria-hidden="true" class="w-5 h-5 " />
                                </button>
                            </x-slot>

                        </x-input-with-icon-wrapper>

                        @error("password")

                    <hr class="text-danger bg-danger border-2 border-danger"/>
                    <span class="text-danger text-xs ">{{$message}}</span>
                    @enderror

                </div>


                <div class="space-y-2" x-data='{isshow:false}' >
                    <x-label for="password" class=" text-right" :value="__(' تاكيد كلمة المرور الجديدة ')" />
                    <x-input-with-icon-wrapper >
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon withrighticon id="password" class="block w-full"  x-bind:type=" isshow ? 'text' : 'password'" name="password_confirmation" required
                            autocomplete="new-password"  placeholder="{{ __('كلمة المرور') }}" />
                            <x-slot name="righticon">
                                <button type="button" @click="isshow=!isshow" class="z-30 ">
                                    <x-heroicon-o-eye x-show="!isshow" aria-hidden="true" class="w-5 h-5 " />
                                    <x-heroicon-o-eye-off x-show="isshow" aria-hidden="true" class="w-5 h-5 " />
                                </button>
                            </x-slot>

                        </x-input-with-icon-wrapper>

                        @error("password")

                    <hr class="text-danger bg-danger border-2 border-danger"/>
                    <span class="text-danger text-xs ">{{$message}}</span>
                    @enderror

                </div>

                <!-- Confirm Password -->


                <div class="flex flex-col space-y-2 justify-center text-center">

                <x-button class="mx-auto">
                    حفظ التعديلات
                </x-button>

            </div>
            </form>

        </x-auth-card>










</x-admin-layout>


    @else

<x-app-layout>

    <x-slot name="header">

    </x-slot>

        @if(count($errors)>0)



            <div class="fixed  bg-red-600 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
                <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-red-800">
            {{__('عذرا !!')}}</span>
                    <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
                {{__('هناك بعض المعلومات الناقصة او غير الصحيحة')}}

                <ul>

                    @foreach($errors as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if( session()->get('stat')=='ok')

            <div class="fixed  bg-green-500 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
                <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-blue-600">
            {{__(session()->get('title'))}}</span>
                    <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
                {{__(session()->get('message'))}}
            </div>
        @endif
        <x-auth-card isprofile="{{true}}">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="post" action="{{route('updateNameEmail')}}">
                @csrf
    <div class="grid gap-6">
        <!-- Name -->
        <div class="space-y-2">
            <x-label for="name" :value="__('Name')" />
            <x-input-with-icon-wrapper>
                <x-slot name="icon">
                    <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                </x-slot>
                <x-input  withicon id="name" class="block w-full" type="text" name="name" :value="Auth::user()->name"
                         required autofocus placeholder="{{ __('Name') }}" />
            </x-input-with-icon-wrapper>
        </div>

        <!-- Email Address -->
        <div class="space-y-2">
            <x-label for="email" :value="__('Email')" />
            <x-input-with-icon-wrapper>
                <x-slot name="icon">
                    <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                </x-slot>
                <x-input withicon id="email" class="block w-full" type="email" name="email"
                         :value="Auth::user()->email" required placeholder="{{ __('Email') }}" />
            </x-input-with-icon-wrapper>
        </div>

        <div>
            <x-button class="justify-center w-full gap-2">
                <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                <span>{{ __('حفظ') }}</span>
            </x-button>
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
            </form>
        </x-auth-card>
        <x-auth-card isprofile="{{true}}">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="post" action="{{route('profile.updatepassword')}}">
                @csrf


                <div class="space-y-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password" class="block w-full" type="password" name="password" required
                                 autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password_confirmation" class="block w-full" type="password"
                                 name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>
            </form>
        </x-auth-card>










</x-app-layout>

@endrole

