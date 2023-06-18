<div>
    <div x-show="generate" class="mt-[20px] w-[1180px] h-fill bg-red-500 flex flex-col border rounded-md">
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/patientWait.png') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/staffingLevels.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/patientSatisfaction.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/appointment.png') }}">
                </template>
            </div>        
    </div>
</div>
