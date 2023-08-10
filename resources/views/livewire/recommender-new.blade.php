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
                    <option value="" selected enabled hidden>-</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="finance">Finance</option>
                </select>
            </div>
            <div class="ml-[50px] flex flex-col mt-[10px]">
                <span class="text-xl font-semibold ">What is your position?</span>
                <select wire:model.defer="position" class="mt-[5px] border border-black rounded" name="position">
                    <option value="" selected enabled hidden>-</option>
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
        The suitable type of dashboard that you can use:
    </div>
    <div class="mt-[15px] font-semibold text-2xl text-[#cf3434]">
        {{ $dashboardType }}
    </div>

    @if (!is_null($dashboardType))
    <div class="mt-[20px] text-xl font-bold">
        List of possible metrics:
    </div>
    <div class="mt-[10px] text-l font-semibold">
        Select the metrics below for further explanation and graph example in the dashboard.
    </div>
    @endif

    <!----Cards appear when submit---->
    @if ($industry == "healthcare" && $position == "manager")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false, explore: false}">
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

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Patient Satisfaction
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To measure patient satisfaction with the care they receive using surveys or other feedback mechanisms, and display it as a line chart over time with separate lines for different departments or clinics, you can follow these steps:
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/patientSatisfaction.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
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
                            Patient Wait Times
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/patientWait.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To track the average time patients spend waiting for appointments, tests, and procedures, you can create a line chart over time with separate lines for different departments or clinics. Here's how you can set it up:
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Time Period: The x-axis of the line chart represents the time period you want to analyze, such as days, weeks, or months.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Average Wait Time: The y-axis represents the average wait time in minutes. Each data point on the line chart will correspond to the average wait time for a specific time period.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. Separate Lines: Create separate lines on the chart for different departments or clinics. Assign a unique color or pattern to each line to differentiate them visually.
                        </span>
                        <span class="text-md my-[10px] ">
                        4. Data Points: Collect data on a regular basis (e.g., daily, weekly) for each department or clinic. Calculate the average wait time for each time period and plot the data points accordingly.
                        </span>
                        <span class="text-md my-[10px] ">
                        5. Tooltip Information: Provide additional information when hovering over a data point, such as the exact average wait time for that time period and the department or clinic it represents.
                        </span>
                        <span class="text-md my-[10px]">
                        6. Legend: Include a legend to identify each line with the corresponding department or clinic.
                        </span>
                        <span class="text-md mb-[15px]">
                        By visualizing the average wait time over time for different departments or clinics, you can identify trends, compare performance, and take appropriate actions to manage and reduce waiting times effectively.
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
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Patient Satisfaction
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/patientSatisfaction.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To measure patient satisfaction with the care they receive using surveys or other feedback mechanisms, and display it as a line chart over time with separate lines for different departments or clinics, you can follow these steps:
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
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
                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                            Appointment Cancellation
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/appointment.png') }}">
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

        </div>
    </div>

    <button @click="generate = true" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Generate Dashboard
    </button>

    <!----Dashboards---->
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

    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>

    </div>
    @endif




    <!----Cards appear when submit---->
    @if ($industry == "healthcare" && $position == "analyst")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Hospital Readmission Rate
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Track the rate of hospital readmissions using a line graph to monitor performance and identify areas for improvement. A line graph can display the trend of hospital readmission rates over time. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/ReadmissionRate.jpg') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Medication Error Rates
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Display the percentage of medication errors over time using a line graph to monitor the effectiveness of interventions and protocols. A line graph can effectively demonstrate the trend of medication error rates over time. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/MedicationRatesError.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Surgical Site Infection Rate
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Track the rate of surgical site infections using a line graph or a stacked bar graph to monitor compliance with infection control protocols. For tracking the rate of surgical site infections (SSI) over time and monitoring compliance with infection control protocols, a stacked bar graph can be effective visualization options. A stacked bar graph can provide a comparative view of SSI rates across different surgical procedures or departments.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/SSI.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Bed Occupancy Rate
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                To visualize the percentage of occupied beds in different departments or units over time, a bar graph can be an effective choice.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/BOR.png') }}">
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
                        Hospital Readmission Rate
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/ReadmissionRate.jpg') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Track the rate of hospital readmissions using a line graph to monitor performance and identify areas for improvement. A line graph can display the trend of hospital readmission rates over time. 
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. The x-axis represents the time period (e.g., months, quarters, years)
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The y-axis represents the readmission rate percentage.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. Each data point on the line graph represents the readmission rate for a specific time period.
                        </span>
                        <span class="text-md mb-[15px]">
                        This graph allows you to observe the changes in readmission rates over time and identify any patterns or trends.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Medication Error Rates
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/MedicationRatesError.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Display the percentage of medication errors over time using a line graph to monitor the effectiveness of interventions and protocols. A line graph can effectively demonstrate the trend of medication error rates over time.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. The x-axis represents the time period (e.g., months, quarters, years)
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The y-axis represents the percentage of medication errors.
                        </span>
                        <span class=" text-md my-[10px]">
                            3. Each data point on the line graph represents the medication error rate for a specific time period
                        </span>
                        <span class="text-md mb-[15px]">
                        This graph enables you to track the changes in medication error rates over time and assess the effectiveness of interventions and protocols implemented to reduce errors.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Surgical Site Infection Rate
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/SSI.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Track the rate of surgical site infections using a line graph or a stacked bar graph to monitor compliance with infection control protocols. For tracking the rate of surgical site infections (SSI) over time and monitoring compliance with infection control protocols, a stacked bar graph can be effective visualization options. A stacked bar graph can provide a comparative view of SSI rates across different surgical procedures or departments.
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
                        1. Each surgical procedure or department is represented by a separate bar, and within each bar
                    <span class="text-md my-[10px] mx-[30px]">
                        2. The segments represent the percentage of SSIs attributed to different causes or factors.
                    </span>
                    <span class="text-md mx-[30px] mb-[15px]">
                    This graph allows you to compare SSI rates across various categories and assess compliance with infection control protocols within different areas. You can identify procedures or departments with higher SSI rates and focus on improving compliance and implementing targeted interventions.
                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Bed Occupancy Rate
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/BOR.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    To visualize the percentage of occupied beds in different departments or units over time, a bar graph can be an effective choice.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Each department is represented by a separate bar in different colors or patterns.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The y-axis represents the percentage of bed occupancy.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. The x-axis represents the time period.
                        </span>
                        <span class="text-md my-[10px] ">
                        4. The height of each bar indicates the corresponding bed occupancy rate for that department during a specific time period.
                        </span>
                        <span class="text-md mb-[15px]">
                        By visualizing the bed occupancy rates over time for different departments or units, you can quickly compare the occupancy levels, identify trends, and make informed decisions regarding resource allocation and capacity planning in healthcare facilities.
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
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/ReadmissionRate.jpg') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/MedicationRatesError.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/SSI.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/BOR.png') }}">
                </template>
            </div>        
    </div>

    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>

    </div>
    @endif


    <!----Cards appear when submit---->
    @if ($industry == "healthcare" && $position == "executive")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Revenue by Service Line
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Displaying the revenue generated by different service lines, such as surgeries, laboratory services, or diagnostic imaging, can provide valuable insights into the contribution of each service to the overall financial performance of a healthcare organization. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/RBSL.png') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Cost per Patient
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Track the average cost per patient and present it as a line chart or bar chart. This metric provides insights into cost management and resource allocation efficiency. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/CPP.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Patient Demographics
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md mx-[10px] my-[10px]">
                This metric aids in understanding the patient population and identifying potential target segments for marketing or service expansion.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/PD.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Physician and Nurse Turnover Rate
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Monitor the turnover rate of physicians and nurses and represent it as a stacked bar chart or line chart. This metric helps assess staff retention and satisfaction.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/BOR.png') }}">
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
                        Revenue by Service Line
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/RBSL.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Display the revenue generated by different service lines, such as surgeries, laboratory services, or diagnostic imaging, using a stacked bar chart or pie chart. This metric highlights the contribution of different services to the overall financial performance. 
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Choose the time period: The x-axis represents the selected time period, such as months, quarters, or years.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Revenue Breakdown: Create a stacked bar chart where each bar represents the total revenue generated for that specific time period.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. Service Line Categories: Divide each bar into sections, with each section representing a different service line (e.g., surgeries, laboratory services, diagnostic imaging).
                        </span>
                        <span class=" text-md my-[10px] ">
                            4. Revenue Contribution: The height of each section within the bar represents the revenue contribution of that particular service line.
                        </span>
                        <span class=" text-md my-[10px] ">
                            5. Color Representation: Assign distinct colors to each service line category to differentiate them visually.
                        </span>
                        <span class=" text-md my-[10px] ">
                            6. Tooltip Information: Provide additional information when hovering over each section of the bar, displaying the revenue generated by that specific service line category.
                        </span>
                        <span class=" text-md my-[10px] ">
                            7. Legend: Include a legend that maps each color to its corresponding service line category.
                        </span>
                        <span class="text-md mb-[15px]">
                        This stacked bar chart visually illustrates the revenue breakdown by service line, allowing for easy comparison and identification of the most significant contributors to the organization's financial performance.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Cost per Patient
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/CPP.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Tracking the average cost per patient and presenting it as a line chart or bar chart can provide valuable insights into cost management and resource allocation efficiency. Here's how you can represent this metric using either a line chart or a bar chart:
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. Time Period: The x-axis represents the selected time period, such as months, quarters, or years.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Average Cost: The y-axis represents the average cost per patient for each time period.
                        </span>
                        <span class=" text-md my-[10px]">
                            3. Data Collection: Calculate the average cost per patient for each time period based on the total cost and the number of patients served.
                        </span>
                        <span class=" text-md my-[10px]">
                            4. Line Plot: Plot the average cost per patient as data points and connect them with a line to show the trend over time.
                        </span>
                        <span class=" text-md my-[10px]">
                            5. Tooltip Information: Provide additional information when hovering over each data point, such as the exact average cost per patient for that time period.
                        </span>
                        <span class=" text-md my-[10px]">
                            6. Labeling: Label the axes of the chart to indicate the time period and the average cost per patient.
                        </span>
                        <span class="text-md mb-[15px]">
                        The line chart enable stakeholders to track and analyze the average cost per patient over time, providing insights into cost management, resource allocation, and identifying any potential cost-saving opportunities.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Patient Demographics
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/PD.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Representing patient demographics using a pie chart can provide valuable insights into the characteristics of the patient population and aid in identifying potential target segments for marketing or service expansion. Here's how you can present patient demographics using either a pie chart:
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
                        1. Demographic Categories: Identify the demographic categories you want to analyze, such as age groups, gender distribution, or geographic location.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        2. Data Collection: Collect the relevant data on patient demographics and categorize them accordingly.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        3. Calculate Proportions: Calculate the proportion or percentage of patients belonging to each demographic category.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        4. Pie Chart: Create a pie chart where each slice represents a demographic category, and the size of each slice represents the proportion or percentage of patients in that category.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        5. Color Representation: Assign different colors to each slice of the pie chart to make them visually distinguishable.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        6. Labeling: Label each slice with the corresponding demographic category and the proportion or percentage it represents.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        7. Legend: Include a legend that maps each color to its corresponding demographic category.
                    </span>
                    <span class="text-md mx-[30px] mb-[15px]">
                    The pie chart provides a clear visual representation of the distribution of patients across different demographic categories, allowing for easy comparison and understanding of the patient population.
                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Physician and Nurse Turnover Rate
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/BOR.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Monitoring the turnover rate of physicians and nurses is crucial for assessing staff retention and satisfaction within a healthcare organization. Representing this metric as a stacked bar chart or line chart can provide a visual depiction of the turnover rates over time.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Time Period: The x-axis represents the selected time period, such as months, quarters, or years.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Turnover Rate Categories: Divide each bar into sections, with each section representing a different staff category, such as physicians and nurses.
                        </span>
                        <span class=" text-md my-[10px] ">
                            3. Data Collection: Collect data on the number of turnovers for each staff category within each time period.
                        </span>
                        <span class="text-md my-[10px] ">
                        4. Stacked Bar Chart: Create a stacked bar chart where each bar represents the total turnover rate for a specific time period.
                        </span>
                        <span class="text-md my-[10px] ">
                        5. Color Representation: Assign different colors to each staff category to differentiate them visually.
                        </span>
                        <span class="text-md my-[10px] ">
                        6. Tooltip Information: Provide additional information when hovering over each section of the bar, displaying the turnover rate for that specific staff category within that time period.
                        </span>
                        <span class="text-md my-[10px] ">
                        7. Legend: Include a legend that maps each color to its corresponding staff category.
                        </span>
                        <span class="text-md mb-[15px]">
                        The stacked bar chart visually represents the turnover rates of physicians and nurses over time, enabling easy comparison between the two categories and identifying trends or patterns in staff retention.
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
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/RBSL.png') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/CPP.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/PD.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/BOR.png') }}">
                </template>
            </div>        
    </div>

    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>
    
    </div>
    @endif

    <!----Cards appear when submit---->
    @if ($industry == "finance" && $position == "analyst")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Revenue Trends
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Analyzing revenue trends over time helps identify growth patterns and potential seasonality. <br>
                Suitable Graph: Line chart or area chart to show revenue fluctuations over a specific period. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/RevenueTrend.jpg') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Expense Breakdown
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Understanding the breakdown of expenses allows businesses to identify cost-saving opportunities and allocate resources efficiently.<br>
                Suitable Graph: Pie chart or stacked bar chart to visualize the proportion of expenses in different categories. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/BreakdownExpenses.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Market Performance
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Analyzing market trends and benchmarking against industry peers can help identify competitive advantages.<br>
                Suitable Graph: Line chart or bar chart to compare company performance against market indices or competitors.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/MarketPerformance.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Cash Flow Analysis
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Monitoring cash flow helps ensure sufficient liquidity to meet financial obligations.<br>
                Suitable Graph: Cash flow waterfall chart to show the movement of cash from different sources and uses.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/CashFlow.png') }}">
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
                        Revenue Trends
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/RevenueTrend.jpg') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Analyzing revenue trends over time helps identify growth patterns and potential seasonality. <br>
                    Suitable Graph: Line chart or area chart to show revenue fluctuations over a specific period.  
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. The X-axis (horizontal axis) should represent the time period (e.g., date, month, or year).
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The Y-axis (vertical axis) should represent the revenue values.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Expense Breakdown
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/BreakdownExpenses.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Understanding the breakdown of expenses allows businesses to identify cost-saving opportunities and allocate resources efficiently.<br>
                    Suitable Graph: Pie chart or stacked bar chart to visualize the proportion of expenses in different categories. 
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. The X-axis (horizontal axis) should represent the different expense categories.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The Y-axis (vertical axis) should represent the total expense values.
                        </span>
                        <span class=" text-md my-[10px]">
                            3. Customize the appearance of the stacked bar chart, such as colors, labels, and the title.
                        </span>
                        <span class="text-md mb-[15px]">
                        Add data labels to show the total expense values for each category.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Market Performance
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/MarketPerformance.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Analyzing market trends and benchmarking against industry peers can help identify competitive advantages. <br>
                    Suitable Graph: Line chart or bar chart to compare company performance against market indices or competitors.
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
                        1. X-axis: Time Period: This could be months, quarters, or years, depending on the desired level of granularity for the analysis. It represents the timeline over which the performance is measured.
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        2. Y-axis: Performance Metric: This represents the specific measure of performance that is being compared. It could be any relevant financial metric, such as:
                            - Stock Price: The price of the company's stock over time. <br>
                            - Revenue: The company's revenue generated over time.<br>
                            - Market Share: The percentage of the market that the company occupies over time.<br>
                            - Profit Margin: The profit margin of the company's products or services over time.<br>
                            - Return on Investment (ROI): The return on investment achieved by the company over time.<br>
                    </span>
                    <span class="text-md mx-[30px] mb-[15px]">
                    In summary, the graph would show how the performance metric (Y-axis) changes over time (X-axis) for the company, market index, or competitors, allowing a visual comparison to identify competitive advantages or areas of improvement.
                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Cash Flow Analysis
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/CashFlow.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Monitoring cash flow helps ensure sufficient liquidity to meet financial obligations.<br>
                    Suitable Graph: Cash flow waterfall chart to show the movement of cash from different sources and uses.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Time Period (X-axis): List the time periods for which you are analyzing the cash flow. For example, you might have monthly data for a year or quarterly data for multiple years.
                        </span>
                        <span class="text-md my-[10px] ">
                            2. Cash Sources and Uses (Y-axis): On the y-axis, you'll have positive values for cash inflows (sources) and negative values for cash outflows (uses).
                        </span>
                        <span class="text-md mb-[15px]">
                        The cash flow waterfall chart will then visually illustrate how cash moves in and out of the business over time. Each bar will start from the previous period's ending cash balance, and the bars will either rise for cash inflows or fall for cash outflows, resulting in a cumulative representation of the cash flow changes throughout the analyzed time period.
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
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/RevenueTrend.jpg') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/BreakdownExpenses.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/MarketPerformance.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/CashFlow.png') }}">
                </template>
            </div>        
    </div>
    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>

    </div>
    @endif

    <!----Cards appear when submit---->
    @if ($industry == "finance" && $position == "manager")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Customer Segmentation
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Analyzing customer data to segment clients based on profitability and other relevant criteria. <br>
                Suitable Graph: Scatter plot or bubble chart to show customer segments based on different attributes. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/CustSegmentation.png') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Profitability Metrics
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Analyzing profitability ratios such as gross profit margin, net profit margin, and operating margin.<br>
                Suitable Graph: Waterfall chart or horizontal bar chart to compare and visualize different profitability metrics. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/ProfMetrics.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Revenue and Sales Performance
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Monitoring revenue and sales performance over time, comparing actuals to targets, and identifying trends.<br>
                Suitable Graph: Line chart or area chart for visualizing revenue and sales trends over time.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/Rev&Sales.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Portfolio Performance
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Monitoring the performance of investment portfolios and comparing against benchmarks.<br>
                Suitable Graph: Heatmap or treemap for visualizing portfolio allocation and performance.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/Portfolio.png') }}">
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
                        Customer Segmentation
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/CustSegmentation.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Analyzing customer data to segment clients based on profitability and other relevant criteria. <br>
                    Suitable Graph: Scatter plot or bubble chart to show customer segments based on different attributes.  
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. the x-axis could represent customer lifetime value (CLV)
                        </span>
                        <span class="text-md my-[10px] ">
                            2.  the y-axis could represent the average purchase amount per customer.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Profitability Metrics
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/ProfMetrics.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Analyzing profitability ratios such as gross profit margin, net profit margin, and operating margin.<br>
                    Suitable Graph: Waterfall chart or horizontal bar chart to compare and visualize different profitability metrics.  
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. Each profitability metric is represented as a separate horizontal bar
                        </span>
                        <span class="text-md my-[10px] ">
                            2.  the length of each bar corresponds to the value of the metric
                        </span>
                        <span class=" text-md my-[10px]">
                            3. Horizontal bar charts are especially useful when you have multiple profitability metrics to compare simultaneously.
                        </span>
                        <span class="text-md mb-[15px]">
                        Horizontal bar charts enable a quick comparison of multiple profitability metrics, allowing stakeholders to identify which metrics are performing well and which ones may require attention or improvement.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Revenue and Sales Performance
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/Rev&Sales.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Monitoring revenue and sales performance over time, comparing actuals to targets, and identifying trends.<br>
                    Suitable Graph: Line chart or area chart for visualizing revenue and sales trends over time.
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
                        1. The x-axis represents time (e.g., months, quarters, or years)
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        2. the y-axis represents revenue or sales values.
                    </span>
                    <span class="text-md mx-[30px] mb-[15px]">
                    Using a line chart, you can easily spot trends, seasonality, and fluctuations in revenue or sales performance. It helps in identifying growth patterns, assessing performance against targets, and detecting any deviations that may require attention or corrective actions.

                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Portfolio Performance
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/Portfolio.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Monitoring the performance of investment portfolios and comparing against benchmarks.<br>
                    Suitable Graph: Heatmap or treemap for visualizing portfolio allocation and performance.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Each row in the heatmap represents an investment asset in the portfolio, and each column represents a specific metric or time period
                        </span>
                        <span class="text-md my-[10px] ">
                            2. The metrics can include returns, risk measures (e.g., volatility), or any other relevant performance indicators.
                        </span>
                        <span class="text-md mb-[15px]">
                        Time periods can be different points in time (e.g., monthly or quarterly) or different benchmarks for comparison.
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
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/CustSegmentation.png') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/ProfMetrics.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/Rev&Sales.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/Portfolio.png') }}">
                </template>
            </div>        
    </div>
    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>

    </div>
    @endif
    
    <!----Cards appear when submit---->
    @if ($industry == "finance" && $position == "executive")
    <div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Profit Margin and Cost Breakdown
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Analyze profit margins and identify cost components affecting profitability.<br>
                Suitable Graph: Pie chart or stacked bar chart to display the breakdown of costs as a percentage of revenue. 
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/PMB.png') }}">
            </div>
        </button>
    
        <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Cash Flow Forecasting
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Predict future cash flows to ensure liquidity and financial stability.<br>
                Suitable Graph: Line chart or area chart to demonstrate projected cash inflows and outflows over time.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/CFF.png') }}">
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="3rd" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Return on Investment (ROI)
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Evaluate the performance of investments and compare them with benchmarks.<br>
                Suitable Graph: Bar chart or bullet chart to present ROI figures for different investment portfolios or projects.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/ROI.png') }}">
            </div>
            
            
        </button>

        <button name="4th" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
            Market Share and Growth
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Insight: Monitor market share and track the growth rate compared to competitors.<br>
                Suitable Graph: Area chart or line chart to display the market share and growth trend over time.
                </span>
                <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ asset('images/MSG.png') }}">
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
                        Profit Margin and Cost Breakdown
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/PMB.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Analyze profit margins and identify cost components affecting profitability.<br>
                    Suitable Graph: Pie chart or stacked bar chart to display the breakdown of costs as a percentage of revenue.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. Each "slice" of the pie represents a cost component (e.g., materials, labor, overhead, etc.)
                        </span>
                        <span class="text-md my-[10px] ">
                            2.  its size relative to the whole pie shows the proportion of that cost to the total revenue
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Cash Flow Forecasting
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/CFF.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Predict future cash flows to ensure liquidity and financial stability.<br>
                    Suitable Graph: Line chart or area chart to demonstrate projected cash inflows and outflows over time. 
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class=" text-md my-[10px] ">
                            1. The x-axis represents the time period (e.g., months, quarters, or years)
                        </span>
                        <span class="text-md my-[10px] ">
                            2.  the y-axis represents the amount of cash
                        </span>
                        <span class=" text-md my-[10px]">
                            3. The lines plot the values for each time period, and their trends over time can be easily observed
                        </span>
                        <span class="text-md mb-[15px]">
                        Using line charts or area charts for cash flow forecasting provides businesses with a clear and visual representation of their future cash position. It empowers decision-makers to take proactive steps to maintain sufficient liquidity and ensure financial stability in the face of changing economic conditions or business circumstances.
                        </span>
                    </div>
                </div>
            </div>
            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Return on Investment (ROI)
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[470px] my-[10px]" src="{{ asset('images/ROI.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Evaluate the performance of investments and compare them with benchmarks.<br>
                    Suitable Graph: Bar chart or bullet chart to present ROI figures for different investment portfolios or projects.
                    </span>
                    <div class="flex flex-col px-[10px]">
                    <span class=" text-md my-[10px] mx-[30px]">
                        1.  the x-axis would represent the ROI percentage
                    </span>
                    <span class="text-md my-[10px] mx-[30px]">
                        2. the y-axis would represent different investment portfolios or projects
                    </span>
                    <span class="text-md mx-[30px] mb-[15px]">
                    Labels can be used to provide additional information about each data point.

                    </span>
                    </div>
                </div>
            </div>
            <div x-show="fourth" >
            <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                    <div class="flex flex-row">
                        <div class="font-bold text-3xl my-[90px] mx-[10px]">
                        Market Share and Growth
                        </div>
                        <img class="w-[350px] h-[230px] border rounded-md ml-[300px] my-[10px]" src="{{ asset('images/MSG.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Insight: Monitor market share and track the growth rate compared to competitors.<br>
                    Suitable Graph: Area chart or line chart to display the market share and growth trend over time.
                    </span>
                    <div class="flex flex-col px-[10px]">
                        <span class="text-md my-[10px] ">
                            1. the x-axis would represent time periods (e.g., months, quarters, or years)
                        </span>
                        <span class="text-md my-[10px] ">
                            2. the y-axis would represent market share percentages or growth rates
                        </span>
                        <span class="text-md mb-[15px]">
                        Each line or area on the graph would represent a different competitor's market share or growth trend.
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
        <div class="mt-[10px] ml-[20px] text-white font-semibold text-2xl">
            Example Dashboard
        </div>
            <div class="flex flex-row">
                <template x-if="first">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/PMB.png') }}">
                </template>
                <template x-if="second">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/CFF.png') }}">
                </template>
            </div>
            <div class="flex flex-row">
                <template x-if="third">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/ROI.png') }}">
                </template>
                <template x-if="fourth">
                    <img class="w-[488px] h-[277px] border rounded-md my-[10px] ml-[50px] mt-[50px]" src="{{ asset('images/MSG.png') }}">
                </template>
            </div>        
    </div>
    <button onclick="window.location.href='/ADiBA/public/dataset-upload'" class="mt-[20px] flex border-md text-2xl mx-[480px] bg-red-500 py-[5px] px-[5px] rounded-md text-white font-semibold">
        Use your Real Data !
    </button>

    </div>
    @endif
</div>  