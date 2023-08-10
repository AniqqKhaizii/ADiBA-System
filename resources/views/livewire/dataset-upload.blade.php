<div>
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

    <form wire:submit.prevent="upload">
        <input type="file" wire:model="file">
        @error('file') <span class="text-red-500">{{ $message }}</span> @enderror

        <button type="submit">Upload</button>
    </form>
    <div x-data="{ create : false }">
        <div style="border: 1px solid #ccc; max-height: 500px; overflow-y: scroll;">
        @if ($values)
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        @foreach ($values[0] as $header)
                            <th style="border: 1px solid #ccc; padding: 8px;">{{ $header }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                @foreach ($values as $index => $value)
                    @if ($index > 0) <!-- Skip the first row (header) -->
                        <tr>
                            @foreach ($value as $cell)
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $cell }}</td>
                            @endforeach
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endif
        </div>

        <button @click="create = true" onclick="window.location.href='/ADiBA/public/datatype'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
                Next Step
        </button>
    </div>
</div>