<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
    <x-slot name="logo">
        <x-authentication-card-logo />
        <h1>저랑 친구가 되어 많은 이야기를 들려주세요.</h1>
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="flex justify-center items-center h-screen">
        <div class="m-0 m-auto container max-w-lg bg-gradient-to-b from-cyan-300 to-blue-400 rounded-xl p-8 border-4 border-white shadow-lg m-8">
            <div class="heading text-center font-bold text-3xl text-blue-600">Sign In</div>
            <form method="POST" action="{{ route('login') }}" class="form mt-8">
            @csrf
    
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="input w-full bg-white border-none px-5 py-4 rounded-lg mt-5 shadow-md placeholder-gray-500 focus:outline-none focus:border-blue-500 block" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="E-mail" />
                </div>
            
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="input w-full bg-white border-none px-5 py-4 rounded-lg mt-5 shadow-md placeholder-gray-500 focus:outline-none focus:border-blue-500 block" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>
                
                @if (Route::has('password.request'))
                <span class="forgot-password block mt-3 ml-auto"><a href="#" class="text-xs text-blue">Forgot Password ?</a></span>
                @endif
                <input class="
                    login-button block w-full font-bold bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-indigo-500 from-10% hover:via-sky-500 via-30% hover:to-emerald-500 to-90%
                    text-white py-[15px] my-[20px] mx-auto rounded-lg
                    shadow-md border-none transition-all duration-[0.2s]
                    hover:transform hover:scale-[1.03] hover:shadow-xl
                    active:transform active:scale-[0.95] active:shadow-sm"
                    type ="submit"
                    value = "로그인"
                />
            </form>
            @if (Route::has('register'))
                <a href="{{url('/register')}}">
                    <input class="
                        login-button block w-full font-bold bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-indigo-500 from-10% hover:via-sky-500 via-30% hover:to-emerald-500 to-90%
                        text-white py-[15px] my-[20px] mx-auto rounded-lg
                        shadow-md border-none transition-all duration-[0.2s]
                        hover:transform hover:scale-[1.03] hover:shadow-xl
                        active:transform active:scale-[0.95] active:shadow-sm"
                        type ="button"
                        value = "회원가입 하기"
                    />
                </a>
            @endif
            <div class = "social-account-container mt-[25px]">
                <span class = "title block text-center text-xs text-gray">Or Sign in with</span>
                <div class = "social-account-container social-button flex justify-center gap-x-[15px] mt-[5px]">
                    <button
                        class="
                            social-button google bg-gradient-to-r from-black to-gray p-[5px]
                            border-solid border-white rounded-full w-[40px]
                            aspect-w-square grid place-items-center
                            shadow-md transition-all duration-[0.2s]
                            hover:scale-[1.2]"
                    >
                        <!-- Google SVG 코드 -->
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                            <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                        </svg>
                    </button>
                    <button
                        class="
                            social-button apple bg-gradient-to-r from-black to-gray p-[5px]
                            border-solid border-white rounded-full w-[40px]
                            aspect-w-square grid place-items-center
                            shadow-md transition-all duration-[0.2s]
                            hover:scale-[1.2]"
                            >
                        <!-- Apple SVG 코드 -->
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                        </svg>
                    </button>
                    <button
                        class="
                            social-button twitter bg-gradient-to-r from-black to-gray p-[5px]
                            border-solid border-white rounded-full w[40x]
                            aspect-w-square grid place-items-center
                            shadow-md transition-all duration[-0.2s]]
                            hover-scale[1,2]"
                    >
                        <!-- Twitter SVG 코드 -->
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- 사용자 라이선스 동의 링크 -->
            <span clasS = "agreement block texT-Center mt [15PX]" ><a href="#" clasS ="text-xs texT-BLue no-underLine">Learn user license agreement</a></span>
        </div>
    </div>