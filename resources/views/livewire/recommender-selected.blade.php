<div>
    <div class="mt-[20px] flex flex-col">
        <span class="text-2xl text-red font-semibold">Selected Metrics:</span>
        <div class="mt-[10px] flex flex-col space-y-5">
            <div x-show="first" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                            {{$metrics->name}}
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ $metrics->image }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    {{$metrics->description}}
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            {{$metrics->first}}
                        </span>
                        <span class="text-md my-[10px] ">
                        {{$metrics->second}}
                        </span>
                        <span class=" text-md my-[10px] ">
                        {{$metrics->third}}
                        </span>
                        <span class="text-md my-[10px] ">
                        {{$metrics->fourth}}
                        </span>
                        <span class="text-md my-[10px] ">
                        {{$metrics->fifth}}
                        </span>
                        <span class="text-md my-[10px]">
                        {{$metrics->sixth}}
                        </span>
                        <span class="text-md mb-[15px]">
                        {{$metrics->conclusion}}
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                            Staffing Levels
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/staffingLevels.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                        Keep track of the number of appointments that are cancelled or rescheduled by patients. This could be displayed as a pie chart, with different colors representing different reasons for cancellation (e.g. patient illness, scheduling conflicts
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. Time Period: The x-axis of the chart represents the selected time period, such as hours, shifts, or days.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Number of Staff: The y-axis represents the total count of staff members on duty at a specific time.
                        </span>
                        <span class=" text-md my-[10px]">
                            3. Stacked Bar Chart: Create a stacked bar chart to represent the data. Each bar on the chart corresponds to a specific time period, and the height of the bar represents the total number of staff members on duty.
                        </span>
                        <span class="text-md my-[10px] ">
                        4. Different Types of Staff: Assign a unique color or pattern to each type of staff (e.g., doctors, nurses, administrative staff).
                        </span>
                        <span class="text-md my-[10px] ">
                        5. Data Collection: Collect data on staff attendance or presence at regular intervals (e.g., every hour, every shift).
                        </span>
                        <span class=" text-md my-[10px] ">
                        6. Tooltip Information: Provide the specific count of staff members for that type during that time period.
                        </span>
                        <span class=" text-md my-[10px] ">
                        7. Legend: Include a legend that maps each color or pattern to the corresponding type of staff (e.g., doctors, nurses, administrative staff).
                        </span>
                        <span class="text-md mb-[15px]">
                            By using this stacked bar chart, you can visualize the number of staff members on duty over time, track the distribution of different staff types, and identify any patterns or imbalances in staffing levels throughout the selected time period.
                        </span>
                    </div>
                </div> -->
            </div>
    </div>

    <button @click="generate = true" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Generate Dashboard
    </button>
</div>
