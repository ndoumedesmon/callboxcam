// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// 
var ctx = document.getElementById("myPieChart");
var damier = 2 ;
let donnee = [16.37,15.58,11.25,13.8,43];


var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Cluster1", "CLuster2", "Cluster3","Cluster4","Cluster5"],
    
    clip:0,
    datasets: [
      {
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(155, 205, 86)',
          'rgb(45, 5, 86)',
          'rgb(255, 235, 186)'
        ],
      label : "#Zone1",
      
      data: donnee,
    },
  
  ],
  },
});



function changeVal (d){

  let val = [23.37,20.58,11.25,3.8,43];
  var ctx = document.getElementById("myPieChart");
var damier = 2 ;
let donnee = [16.37,15.58,11.25,13.8,43];
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Cluster1", "CLuster2", "Cluster3","Cluster4","Cluster5"],
    
    clip:0,
    datasets: [
      {
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(155, 205, 86)',
          'rgb(45, 5, 86)',
          'rgb(255, 235, 186)'
        ],
      label : "#Zone1",
      
      data: val,
    },
  
  ],
  },
});


  return val ;
 
};


