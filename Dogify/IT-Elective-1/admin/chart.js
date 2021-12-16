
	
    $(document).ready(function(){
    
    
        makechart();
    
        function makechart()
        {
            $.ajax({
                url:"API/chart.php",
                method:"POST",
                data:{action:'fetch'},
                dataType:"JSON",
                success:function(data)
                {
                    var pet_breed = [];
                    var total = [];
                    var color = [];
    
                    for(var count = 0; count < data.length; count++)
                    {
                        pet_breed.push(data[count].pet_breed);
                        total.push(data[count].total);
                        color.push(data[count].color);
                    }
    
                    var chart_data = {
                        labels:pet_breed,
                        datasets:[
                            {
                                label:'Quantity',
                                backgroundColor:color,
                                color:'#fff',
                                data:total
                            }
                        ]
                    };
    
                    var options = {
                        responsive:true,
                        scales:{
                            yAxes:[{
                                ticks:{
                                    min:0
                                }
                            }]
                        }
                    };
					var group_chart1 = $('#pie_chart');

					var graph1 = new Chart(group_chart1, {
						type:"pie",
						data:chart_data
					});
    
                    var group_chart3 = $('#bar_chart');
    
                    var graph3 = new Chart(group_chart3, {
                        type:'bar',
                        data:chart_data,
                        options:options
                    });
                }
            })
        }
    
    });