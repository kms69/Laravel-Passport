<x-app-layout>
    <x-slot name="header">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            var visitor = <?php echo $visitor; ?>;
            console.log(visitor);
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable(visitor);


                var options = {
                    title: 'Publisher chart',
                    curveType: 'function',
                    legend: { position: 'middle' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('linechart'));
                chart.draw(data, options);
            }
        </script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>

        <div id="linechart" style="width: 900px; height: 500px"></div>
    </div>
</x-app-layout>
