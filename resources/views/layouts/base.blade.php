@props(['page'])

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.js"></script>
  <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.js"></script>

  @livewireStyles
</head>
<body>
<div class="flex flex-col">
    <div class="flex flex-row h-[100px]">
       <div class="mt-[10px]">
            <img src="{{ asset('images/Logo.png') }}">
       </div>
       <div>
            <div class="flex flex-row pt-[30pt] pl-[340px] text-[#cf3434] font-sans font-bold text-xl">
                <a href="{{ url('/') }}" class="underline underline-offset-8">
                    Home
                </a>
                <div class="pl-[60px] underline underline-offset-8">
                    About
                </div>
                <a href="{{ url('/introduction') }}" class="pl-[60px] underline underline-offset-8">
                    Services
                </a>
                <div class="pl-[50px] underline underline-offset-8">
                    Contact
                </div>
            </div>
       </div>
    </div>
    <div class="bg-[#cf3434] h-[100px] w-fill">
        <div class="text-white font-bold my-[27px] ml-[40px] text-4xl">
            Services
        </div>
    </div>
    <div class="flex flex-row">
        <div class="bg-zinc-800 w-[300px]">
            <div class="flex flex-col mx-[20px] my-[30px]">
                <button class="flex flex-row text-xl text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M3 5v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3z"></path></svg>
                    <a href="{{ url('introduction') }}" class="{{  (Route::getCurrentRoute()->uri() == 'introduction') ? 'text-[#cf3434] ml-[15px]' : 'hover:text-[#cf3434] ml-[15px]' }}">Introduction</a>
                </button>

                <button class="flex flex-row text-md text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg class="ml-[40px] mt-[3px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                    <a href="{{ url('operational') }}" class="{{  (Route::getCurrentRoute()->uri() == 'operational') ? 'text-[#cf3434] ml-[13px]' : 'hover:text-[#cf3434] ml-[13px]' }}">Operational Dashboard</a>
                </button>

                <button class="flex flex-row text-md text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg class="ml-[40px] mt-[3px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                    <a href="{{ url('analytical') }}" class="{{  (Route::getCurrentRoute()->uri() == 'analytical') ? 'text-[#cf3434] ml-[15px]' : 'hover:text-[#cf3434] ml-[15px]' }}">Analytical Dashboard</a>
                </button>

                <button class="flex flex-row text-md text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg class="ml-[40px] mt-[3px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                    <a href="{{ url('strategic') }}" class="{{  (Route::getCurrentRoute()->uri() == 'strategic') ? 'text-[#cf3434] ml-[15px]' : 'hover:text-[#cf3434] ml-[15px]' }}">Strategic Dashboard</a>
                </button>

                <div class="my-[20px] w-[248px] border border-stone-300"></div>
                <button class="flex flex-row text-xl text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z"></path></svg>
                    <a href="{{ url('recommender') }}" class="{{  (Route::getCurrentRoute()->uri() == 'recommender') ? 'text-[#cf3434] ml-[15px]' : 'hover:text-[#cf3434] ml-[15px]' }}">Recommender</a>
                </button>

                <button class="my-[20px] flex flex-row text-xl text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg class="mt-[4px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255,255,255,255);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h4l-1.8 2.4 1.6 1.2 2.7-3.6h3l2.7 3.6 1.6-1.2L16 18h4c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 13h4v2H5v-2z"></path></svg>
                    <a href="{{ url('templates') }}" class="{{  (Route::getCurrentRoute()->uri() == 'templates') ? 'text-[#cf3434] ml-[15px]' : 'hover:text-[#cf3434] ml-[15px]' }}">Templates</a>
                </button>

                <button class="my-[5px] flex flex-row text-xl text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="pr-[3px] w-[30px] h-[30px]">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-[9px]">Forum & Community</span>
                </button>

                <button class="my-[20px] flex flex-row text-xl text-white text-center font-bold py-[10px] rounded-lg w-fill h-[50px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mt-[3px] w-6 h-6">
                    <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-[15px]">Tools & Software</span>
                </button>
            </div>
        </div>
        <div class="w-screen h-fill bg-[#d9d9d9]">
            <div class="ml-[50px] mt-[30px]">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

  @livewireScripts
</body>
</html>