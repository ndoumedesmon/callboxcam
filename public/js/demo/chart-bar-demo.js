// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [
      {
        label: "benefices",
        borderColor: "red",
        data: [3215, 1312, 7251, 5841, 5821, 10984],
        type : 'line'
        },
        {
        label: "Dépots",
        backgroundColor: "rgba(2,117,216,1)",
        //borderColor: "blue",
        data: [1215, 7312, 8251, 3841, 4821, 11984],
        },
        {
          label: "Retraits",
          backgroundColor: "yellow",
          //borderColor: "blue",
          data: [4215, 5312, 6251, 7841, 9821, 14984],
          },
      

  ],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
