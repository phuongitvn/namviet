<script type="text/javascript">
$(function() {

	//$.getJSON('index.php?module=AnalyticsPlus&view=DataJson&type=r4', function(data) {
		// Create the chart
		$('#container').highcharts('StockChart', {
            legend: {
                enabled: true,
                backgroundColor: '#FCFFC5',
                borderColor: '#F75E88',
                borderWidth: 2,
                shadow: true
            },
			rangeSelector: {
                buttonSpacing: 5,
                inputDateFormat: '%e/%m/%Y',
                buttonTheme: { // styles for the buttons
                    width:70
                },
                buttons: [{
                    type: 'month',
                    count: 1,
                    text: 'Trong tháng'
                }, {
                    type: 'month',
                    count: 3,
                    text: 'Trong quý'
                }, {
                    type: 'ytd',
                    text: 'Từ đầu năm'
                }, {
                    type: 'year',
                    count: 2,
                    text: '2 năm'
                },{
                    type: 'year',
                    count: 3,
                    text: '3 năm'
                },{
                    type: 'year',
                    count: 5,
                    text: '5 năm'
                }, {
                    type: 'all',
                    text: 'Tất cả'
                }],
                inputStyle: {
                    color: '#039'
                },
                labelStyle: {
                    fontWeight: 'bold'
                },
                selected: 0
            },

			title : {
				text : '{$title}'
			},
			xAxis: {
                type: 'date'
            },

            yAxis : {
                title : {
                    text : 'VNĐ'
                }
            },
            tooltip: {
                style: {
                    width: '200px'
                },
                valueDecimals: 0,
                valueSuffix: 'VNĐ'

            },
            series : {$series}
			/* series : [{
				name : 'VND',
				data : data,
				tooltip: {
					valueDecimals: 2
				}
			}] */
		});
	//});

});
/* function getDSTT(data){
    var time_min = $(".highcharts-input-group g:eq(1)").find("tspan").text();
    var time_max = $(".highcharts-input-group g:eq(3)").find("tspan").text();
    var n = time_min.split("/");
    time_min = Date.UTC(parseInt(n[2]), parseInt(n[1]-1), parseInt(n[0]));
    var m = time_max.split("/");
    time_max = Date.UTC(parseInt(m[2]),parseInt(m[1]-1),parseInt(m[0]+1));
    var dsk = 0;
    var dst = 0;
    if(data.DSK){
        var arr = [];
        for(var i = 0; i <= (data.DSK.length-1); i++){
            if( (time_min< data.DSK[i][0] )&& (data.DSK[i][0] < time_max)){
                arr.push(i);
            }
        }
        if(arr.length){
            if(arr[0] >= 1){
                dsk = data.DSK[arr[arr.length-1]][1]-data.DSK[arr[0]-1][1];
            }
            else{
                dsk = data.DSK[arr[arr.length-1]][1];
            }
        }
    }
    if(data.DST){
        var arr = [];
        for(var i = 0; i <= (data.DST.length-1); i++){
            if( (time_min<= data.DST[i][0] )&& (data.DST[i][0] <= time_max)){
                arr.push(i);
            }
        }
        if(arr.length){
            if(arr[0] >= 1){
                dst = data.DST[arr[arr.length-1]][1]-data.DST[arr[0]-1][1];
            }
            else{
                dst = data.DST[arr[arr.length-1]][1];
            }
        }
    }
    $(".view_dsk span:first-child").text(dsk);
    $(".view_dst span:first-child").text(dst);
} */
		</script>
{strip}
<div id="container" style="height: 500px; min-width: 500px"></div>
{/strip}