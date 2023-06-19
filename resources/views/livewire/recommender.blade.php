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
                <select wire:model.defer="inds" class="mt-[5px] border border-black rounded" name="industry">
                    <option value="" selected disabled hidden>-</option>
                @foreach ($industry as $industries)
                    <option value="{{$industries->id}}">{{$industries->name}}</option>
                @endforeach
                </select>
                
            </div>
            <div class="ml-[50px] flex flex-col mt-[10px]">
                <span class="text-xl font-semibold ">What is your position?</span>
                
                <select wire:model.defer="pos" class="mt-[5px] border border-black rounded" name="position">
                    <option value="" selected disabled hidden>-</option>
                @foreach ($position as $positions)
                    <option value="{{$positions->id}}">{{$positions->name}}</option>
                @endforeach
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
    @if ($inds == !NULL && $pos == !NULL)
    <form wire:submit.prevent="select">
    @foreach ($metric as $metrics)
    @if ($inds == $metrics->industry_id && $pos == $metrics->position_id)
    <div class="flex flex-row ">
        
            <div class="flex flex-row ">
                <div type="radio" value="waitTimes" name="1st" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
                    <div class="font-bold text-3xl my-[20px] mx-[10px]">
                        {{$metrics->name}}
                    </div>
                    <div class="flex flex-row">
                        <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                        {{$metrics->description}}
                        </span>
                        <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ $metrics->image }}">
                    </div>
                    <input wire:model.defer="met"  type="checkbox" class="w-[50px] h-[50px]" value="{{ $metrics->id }}">                
                </div>
            
                <!-- <button name="2nd" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
                    <div class="font-bold text-3xl my-[20px] mx-[10px]">
                        {{$metrics->name}}
                    </div>
                    <div class="flex flex-row">
                        <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                        {{$metrics->description}}
                        <img class="w-[272px] h-[172px] border rounded-md mx-[30px]" src="{{ $metrics->image  }}">
                    </div>
                    <input name="metrics" type="checkbox" class="w-[50px] h-[50px]" value="staffingLevels">
                </button> -->
            </div>
            
    </div>
    @endif
    @endforeach
        <!-- <button onclick="{{ url('selected', ['id' => $metrics['id']]) }}" class="text-white mt-[30px] ml-[50px] border rounded-md hover:border-black border-blue-700 bg-blue-500 w-[100px] h-[40px]">
            Submit
        </button> -->
        <button type="submit" class="text-white mt-[30px] ml-[50px] border rounded-md hover:border-black border-blue-700 bg-blue-500 w-[100px] h-[40px]">
            Submit
        </button>
    </form>
    @endif

    

</div>  

