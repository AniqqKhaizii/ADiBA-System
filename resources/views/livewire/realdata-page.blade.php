<div>
    Real Data Page

    <form wire:submit.prevent="submit1">
        <div class="flex flex-row">
            <div class="ml-[50px] flex flex-col mt-[10px]">
                <span class="text-xl font-semibold ">Choose your target user</span>
                <select wire:model.defer="target" class="mt-[5px] border border-black rounded" name="target">
                    <option value="" selected disabled hidden>-</option>
                    <option value="operational">Head Of Department/Programme Coordinator/Library Admin/Operational Manager</option>
                    <option value="analytical">Deputy Dean/Dean/Research Centre/Marketing Manager</option>
                    <option value="strategical">Deputy Vice Chancellor/Vice Chancellor/Executive/CEO/Senior Management</option>
                </select>
            </div>
            <button wire:click="submit1" class="text-white mt-[30px] ml-[50px] border rounded-md hover:border-black border-blue-700 bg-blue-500 w-[100px] h-[40px]">
                Submit
            </button>
        </div>
    </form>


    <div class="mt-[15px] font-semibold text-2xl">
        The suitable type of dashboard that you can use:
    </div>
    <div class="mt-[15px] font-semibold text-2xl text-[#cf3434]">
        {{ $dashboardType }}
    </div>
</div>
