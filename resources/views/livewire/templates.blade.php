<div class="flex flex-col">
    <div class="text-4xl font-bold">
        Data Analytics Dashboard Gallery
    </div>
    <span class="mt-[20px] text-xl">A business dashboard is an information management tool that is used to track KPIs, metrics, and other key data points relevant to a business, department, or specific process. Through the use of data visualizations, dashboards simplify complex data sets to provide users with at a glance awareness of current performance, revenue and profit.</span>
    <form wire:submit.prevent="submit">
    <div class="flex flex-row">
        <div class="flex flex-col mt-[10px]">
            <span class="text-xl font-semibold">Industry:</span>
            <select wire:model.defer="industry" class="w-[120px] mt-[5px] border border-black rounded" name="industry">
                <option value=" " selected disabled hidden>-</option>
                <option value="healthcare">Healthcare</option>
                <option value="finance">Finance</option>
            </select>
        </div>
        <div class="ml-[50px] flex flex-col mt-[10px]">
            <span class="text-xl font-semibold ">Dashboard Type:</span>
            <select wire:model.defer="dashboardType" class="mt-[5px] border border-black rounded" name="position">
                <option value=" " selected disabled hidden>-</option>
                <option value="operational">Operational</option>
                <option value="strategic">Strategic</option>
                <option value="analytical">Analytical</option>
            </select>
        </div>
        <button wire:click="submit" class="text-white mt-[30px] ml-[50px] border rounded-md hover:border-black border-blue-700 bg-blue-500 w-[100px] h-[40px]">
            Submit
        </button>
    </div>
    </form>

    @if ($templates == "financeOperational")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/finance-operational-1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/finance-operational-2.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/finance-operational-3.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/finance-operational-4.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/finance-operational-5.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/finance-operational-6.png') }}">
        </div>
    </div>
    @endif
    @if ($templates == "financeAnalytical")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FS1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FS2.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FS3.jpg') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FS4.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FS5.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FS6.png') }}">
        </div>
    </div>
    @endif
    @if ($templates == "financeStrategic")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FA1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FA2.jpg') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FA3.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FA4.jpg') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/FA5.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/FA6.png') }}">
        </div>
    </div>
    @endif
    @if ($templates == "healthcareOperational")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HO1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HO2.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HO3.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HO4.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HO5.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HO6.jpg') }}">
        </div>
    </div>
    @endif
    @if ($templates == "healthcareAnalytical")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HA1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HA2.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HA3.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HA4.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HA5.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HA6.png') }}">
        </div>
    </div>
    @endif
    @if ($templates == "healthcareStrategic")
    <div class="flex flex-col">
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HS1.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HS2.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HS3.png') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HS4.png') }}">
        </div>
        <div class="flex flex-row mt-[50px]">
            <img class="w-[550px] h-[400px] border rounded-md " src="{{ asset('images/HS5.jpg') }}">
            <img class="w-[550px] h-[400px] border rounded-md ml-[50px]" src="{{ asset('images/HS6.png') }}">
        </div>
    </div>
    @endif
</div>