<div class="flex flex-col">
    <div class="text-4xl font-bold">
        Recommender
    </div>
    <span class="w-fill mt-[20px] text-xl">Welcome to our dashboard recommendation system.Our dashboard recommendation system is designed to help users make informed decisions by recommending the most suitable type of dashboard and graph for their data. The system analyzes various factors such as the type and size of data, the user's goals, and the target audience to determine the most appropriate dashboard and graph.</span>
    <span class="mt-[20px] text-2xl text-[#cf3434] font-bold">
        Data Analytics Dashboard Recommendation
    </span>
    <form wire:submit.prevent="submit">
        <div class="flex flex-row">
            <div class="flex flex-col mt-[10px]">
                <span class="text-xl font-semibold">What industry are you in?</span>
                <select wire:model.defer="industry" class="mt-[5px] border border-black rounded" name="industry">
                    <option value="" selected disabled hidden>-</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="finance">Finance</option>
                    <option value="retail">Retail</option>
                    <option value="technology">Technology</option>
                </select>
            </div>
            <div class="ml-[50px] flex flex-col mt-[10px]">
                <span class="text-xl font-semibold ">What is your position?</span>
                <select wire:model.defer="position" class="mt-[5px] border border-black rounded" name="position">
                    <option value="" selected disabled hidden>-</option>
                    <option value="analyst">Analyst</option>
                    <option value="manager">Manager</option>
                    <option value="executive">Executive</option>
                </select>
            </div>
            <button wire:click="submit" class="text-white mt-[30px] ml-[50px] border rounded-md hover:border-black border-blue-700 bg-blue-500 w-[100px] h-[40px]">
                Submit
            </button>
        </div>
    </form>
    <div class="mt-[15px] font-semibold text-2xl">
        Result:
    </div>
    <div class="mt-[15px] font-semibold text-2xl text-[#cf3434]">
        {{ $dashboardType }}
    </div>

    @if (!is_null($dashboardType))
    <div class="mt-[20px] text-xl font-semibold">
        List of possible metrics:
    </div>
    @endif

    <!----Cards appear when submit---->
    @if ($industry == "healthcare" && $position == "manager")
    <div x-data="{ first: false, second: false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Patient Wait Times
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To track the average time patients spend waiting for appointments, tests, and procedures, you can create a line chart over time with separate lines for different departments or clinics. Here's how you can set it up:
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/patientWait.png') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Staffing Levels
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                To monitor the number of staff members on duty at any given time using a stacked bar chart, with different colors representing different types of staff, follow these steps:
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/staffingLevels.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row">
        <button name="3rd" class="flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Patient Satisfaction
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To measure patient satisfaction with the care they receive using surveys or other feedback mechanisms, and display it as a line chart over time with separate lines for different departments or clinics, you can follow these steps:
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/patientSatisfaction.png') }}">
            </div>
            
            <!-- <span class=" text-md my-[10px] mx-[30px]">
                1. Time Period: The x-axis of the line chart represents the time period, such as months, quarters, or years, during which patient satisfaction is measured.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
                2. Satisfaction Score: The y-axis represents the satisfaction score, which could be a numerical scale (e.g., 1-5) or a percentage. Each data point on the line chart corresponds to the satisfaction score for a specific time period.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
                3. Separate Lines: Create separate lines on the chart for different departments or clinics. Assign a unique color or pattern to each line to differentiate them visually.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            4. Data Collection: Conduct surveys or gather feedback from patients regularly for each department or clinic. Calculate the average satisfaction score for each time period and plot the data points on the line chart accordingly.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            5. Tooltip Information: Provide additional information when hovering over a data point, such as the exact satisfaction score for that time period and the department or clinic it represents.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            6. Legend: Include a legend to identify each line with the corresponding department or clinic.
            </span>
            <span class="text-md mx-[30px] mb-[15px]">
            By visualizing patient satisfaction scores over time for different departments or clinics, you can assess trends, compare performance, and identify areas of improvement. This allows healthcare organizations to focus on enhancing patient experience and delivering better care based on the feedback received.
            </span> -->
        </button>

        <button name="4th" class="flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Appointment Cancellation
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Keep track of the number of appointments that are cancelled or rescheduled by patients. This could be displayed as a pie chart, with different colors representing different reasons for cancellation (e.g. patient illness, scheduling conflicts
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/appointment.png') }}">
            </div>
            <!-- <span class="text-md my-[10px] mx-[30px]">
                1. Reasons for Cancellation: Identify the different reasons for appointment cancellations, such as patient illness, scheduling conflicts, or other reasons that are relevant to your healthcare organization.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
                2. Data Collection: Collect data on the number of appointments cancelled or rescheduled for each reason. Make sure to categorize and record the data accurately.
            </span>
            <span class=" text-md my-[10px] mx-[30px]">
                3. Pie Chart: Create a pie chart to represent the data. Each slice of the pie will correspond to a specific reason for cancellation, and the size of each slice will be proportional to the number of appointments cancelled for that reason.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            4. Color Representation: Assign different colors to each slice of the pie chart, with each color representing a specific reason for cancellation. Ensure that the colors are distinct and easily differentiable.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            5. Labeling: Label each slice with the corresponding reason for cancellation and the number or percentage of appointments cancelled for that reason. This will provide clear information to viewers.
            </span>
            <span class="text-md my-[10px] mx-[30px]">
            6. Legend: Include a legend that maps each color to its corresponding reason for cancellation. The legend will help viewers understand the meaning behind each color in the pie chart.
            </span>
            <span class="text-md mx-[30px] mb-[15px]">
                By using a pie chart, you can quickly visualize the distribution of appointment cancellations by reasons, identify any predominant reasons, and gain insights into potential areas for improvement or intervention.
            </span> -->
        </button>
    </div>

    <!----Metrics appear when selected---->
    <div class="mt-[20px] flex flex-col">
        <span class="text-2xl text-red font-semibold">Selected Metrics:</span>
        <div class="mt-[10px] flex flex-col space-y-5">
            <div x-show="first" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                            Appointment Cancellation
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/patientWait.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                        Keep track of the number of appointments that are cancelled or rescheduled by patients. This could be displayed as a pie chart, with different colors representing different reasons for cancellation (e.g. patient illness, scheduling conflicts
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Reasons for Cancellation: Identify the different reasons for appointment cancellations, such as patient illness, scheduling conflicts, or other reasons that are relevant to your healthcare organization.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Data Collection: Collect data on the number of appointments cancelled or rescheduled for each reason. Make sure to categorize and record the data accurately.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. Pie Chart: Create a pie chart to represent the data. Each slice of the pie will correspond to a specific reason for cancellation, and the size of each slice will be proportional to the number of appointments cancelled for that reason.
                        </span>
                        <span class="text-md my-[10px] ">
                        4. Color Representation: Assign different colors to each slice of the pie chart, with each color representing a specific reason for cancellation. Ensure that the colors are distinct and easily differentiable.
                        </span>
                        <span class="text-md my-[10px] ">
                        5. Labeling: Label each slice with the corresponding reason for cancellation and the number or percentage of appointments cancelled for that reason. This will provide clear information to viewers.
                        </span>
                        <span class="text-md my-[10px]">
                        6. Legend: Include a legend that maps each color to its corresponding reason for cancellation. The legend will help viewers understand the meaning behind each color in the pie chart.
                        </span>
                        <span class="text-md mb-[15px]">
                            By using a pie chart, you can quickly visualize the distribution of appointment cancellations by reasons, identify any predominant reasons, and gain insights into potential areas for improvement or intervention.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
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
                </div>
            </div>
        </div>
    </div>

    <button @click="generate = true" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Generate Dashboard
    </button>

    <!----Dashboards---->
    <div x-show="generate" class="mt-[20px] w-[1180px] h-fill bg-red-500 flex flex-col border rounded-md">
        <div class="px-[350px] flex flex-col">
            <template x-if="first">
                <img class="w-[488px] h-[277px] border rounded-md my-[10px]" src="{{ asset('images/patientWait.png') }}">
            </template>
            <template x-if="second">
                <img class="w-[488px] h-[277px] border rounded-md my-[10px]" src="{{ asset('images/staffingLevels.png') }}">
            </template>
        </div>           
    </div>

    </div>
    @endif

    
</div>  

