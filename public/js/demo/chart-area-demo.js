// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
    datasets: [
      {
      label: "Nb Retraits",
      lineTension: 0.3,
      //backgroundColor: none,
      borderColor: "green",
      pointRadius: 5,
      pointBackgroundColor: "green",
      pointBorderColor: "green",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "green",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
    },
    {
      label: "Nb Dépots",
      lineTension: 0.3,
      //backgroundColor: none,
      borderColor: "red",
      pointRadius: 5,
      pointBackgroundColor: "red",
      pointBorderColor: "red",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "red",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [9000, 20162, 56263, 11394, 7287, 23682, 40274, 50259, 7849, 35159, 40651, 1984, 70451],
    }
    
  
  ],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 70000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
