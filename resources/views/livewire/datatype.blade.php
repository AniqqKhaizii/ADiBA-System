<div class="ml-[0px] mr-[0px] h-fill border bg-gray-100 text-black">
    What type of data that you have?
</div>


<div x-data="{ first: false, second: false, third:false, fourth:false, generate: false }">
    <div class="flex flex-row ">
        <button name="first" @click="first = !first" :class="first == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Categorical Data
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Categorical data is a collection of information that is divided into groups. I.e, if an organisation or agency is trying to get a biodata of its employees, the resulting data is referred to as categorical. This data is called categorical because it may be grouped according to the variables present in the biodata such as sex, state of residence, etc.
                </span>
            </div>
        </button>
    
        <button name="second" @click="second = !second" :class="second == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Time Series Data
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Time series data is a sequence of data points collected and recorded over a time interval. It represents how a variable changes over time. Examples include stock prices, temperature readings, and sales data over months or years.
                </span>
            </div>
            
        </button>
    </div>

    <div class="flex flex-row ">
        <button name="third" @click="third = !third" :class="third == true ? 'ring-green-400 ring-4 flex flex-col pb-[30px] ml-[300px] mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]' : 'flex flex-col pb-[30px] ml-[300px] mt-[20px] w-[575px] h-fill border rounded-lg bg-gray-100 text-black sapce-y-[20px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Spatial Data
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                Spatial data represents geographic or spatial information associated with specific locations or areas. It can include coordinates, maps, satellite images, and demographic data related to regions or addresses.
                </span>
            </div>
            
            
        </button>

        <!-- <button name="fourth" @click="fourth = !fourth" :class="fourth == true ? 'ring-green-400 ring-4 flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]' : 'flex flex-col mt-[20px] w-[569px] h-fill border rounded-lg bg-gray-100 ml-[30px]'">
            <div class="font-bold text-3xl my-[20px] mx-[10px]">
                Distributions
            </div>
            <div class="flex flex-row">
                <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                A distribution provides information about the frequencies or probabilities of different values or intervals within a dataset. It helps to understand the central tendency, variability, and any patterns or outliers present in the data.
                </span>
            </div>
        </button> -->
</div>

<!----Metrics appear when selected---->
<div class="mt-[20px] flex flex-col">
        <span class="text-2xl text-red font-semibold">Selected Metrics:</span>
        <div class="mt-[10px] flex flex-col space-y-5">
            <div x-show="first" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                        <div class="font-bold text-3xl my-[30px] mx-[10px]">
                        Visualizing Categorical Data
                        </div>
                        <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            1. Vertical Bar chart
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[700px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/VerticalBarChart.png') }}">
                        <img class="w-[350px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/StackedVerticalBarChart.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    The X-Axis represent the category of the data, while the bars represent the value for each category.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            2. Horizontal Bar chart
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[700px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/HorizontalBarChart.png') }}">
                        <img class="w-[350px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/StackHoriBarChart.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    The Y-Axis represent the category of the data, while the bars represent the value for each category.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            3. Table & Heatmap
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[700px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/Table.png') }}">
                        <img class="w-[350px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/Heatmap.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Table: The cells represent the values for each category <br>
                    Heatmap: The cells represent the values for each category and the color represent the magnitude of the individual values.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            4. Piechart
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[500px] h-[270px] border rounded-md ml-[50px] my-[10px]" src="{{ asset('images/Piechart.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Pie chart is a circular statistical chart which is divided into slices to illustrate numerical proportion. The arch length of each slice and consequently its central angle and area is proportional to the quantity it represents.
                    </span>

                    <button onclick="window.location.href='/ADiBA/public/graph-selection'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Visualize your data
                    </button>
                </div>
            </div>


            <div x-show="second" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                        <div class="font-bold text-3xl my-[30px] mx-[10px]">
                        Visualizing Time Series Data
                        </div>
                        <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            1. Bar Graph
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/Bargraph.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Useful for discrete points in time.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            2. Line Chart
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/linechart.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Line can make it easier to see the trends.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            3. Dot Plot
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[600px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/dotchart.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    - Show distincts point <br>
                    - Might need line to show trend if not much data.
                    </span>
                    <button onclick="window.location.href='/ADiBA/public/tsSelection'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Visualize your data
                    </button>
                </div>
            </div>

            <div x-show="third" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                        <div class="font-bold text-3xl my-[30px] mx-[10px]">
                        Visualizing Spatial Data
                        </div>
                        <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            1. Location Map
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/locationmap.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    A location map is a direct translation of latitude and longitude to two-dimensional space. Points represent locations and can be scales by metric.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            2. Connection Map
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/connectionmap.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    A connection map points can be connected to show relationship between locations.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            3. Cloropleth Map
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/cloroplethmap.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    A cloropleth map defines regions colored by data and meaning can change based on scale. The chart uses color and regions are filled base don the data.
                    </span>

                    <button onclick="window.location.href='/ADiBA/public/spatialSelection'" class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Visualize your data
                    </button>
                </div>
            </div>

            <!-- <div x-show="fourth" >
                <div class="flex flex-col mt-[20px] w-[1180px] h-fill border rounded-lg bg-gray-100">
                        <div class="font-bold text-3xl my-[30px] mx-[10px]">
                        Visualizing Distributions Data
                        </div>
                        <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            1. Box Plot
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[700px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/boxplot.png') }}">
                        <img class="w-[350px] h-[230px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/boxplot1.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Box plots are used to show distributions of numeric data values, especially when we want to compare them between multiple groups. They can show range, median and quartiles values.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            2. Violin Plot
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/violinplot.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    A violin plot is a combination of a box plot and density plot. It shows the shape of a data set by using a Probability Density Function (PDF). The width of the PDF describes how frequently that value occurs in the data set. The wider regions of the density plot indicate values that occur more frequently.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            3. Histogram
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[30px] my-[10px]" src="{{ asset('images/histogram.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    A histogram is a graph used to represent the frequency distribution of a few data points of ne variable. Histograms classify data into various ‘bins’ or range groups and count how many data points belong to each of those bins.
                    </span>
                    <div class="font-semibold text-xl my-[10px] mx-[10px]">
                            4. Density Plot
                        </div>
                    <div class="flex flex-row">
                        <img class="w-[1100px] h-[500px] border rounded-md ml-[50px] my-[10px]" src="{{ asset('images/densityplot.png') }}">
                    </div>
                    <span class="text-left font-semibold text-md my-[10px] mx-[10px]">
                    Density plot visualizes the distribution of data over a continuous interval or time period. It looks like a histogram but continuous instead of bins.
                    </span>

                    <button class="bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Visualize your data
                    </button>
                </div>
            </div> -->

        </div>
    </div>
</div>


