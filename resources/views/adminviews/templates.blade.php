<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{url('css/adminStyle.css')}}" rel="stylesheet" />
       <link rel="stylesheet">
                  .context-menu { 
                        position: absolute; 
                        z-index: -1 ;
                    } 
            .context-menu form .menu {
              display: flex;
              flex-direction: column;
              background-color: #fff;
              border-radius: 10px;
              box-shadow: 0 10px 20px rgb(64 64 64 / 5%);
              padding: 10px 0;
              
            }
      </link>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
        <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        
    </head>
    <body class="sb-nav-fixed" onload="changeVal('all')">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-info">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" >
                                @csrf
                                <a class="dropdown-item" href="route('logout')" 
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                                    
                                </a>
                            </form>
                        
                    
                    </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('adminpage')}}"> <!--ici afficher le contenu du dashboard-->
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                            </div>
                                Dashboard
                                
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="{{route('usersPage')}}">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                           
                            <a class="nav-link collapsed" href="www.google.com">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                           
                            <div class="sb-sidenav-menu-heading">Addons</div>
                         
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">

                        <!-- Ici mettre le nom de l'utilisateur loggé-->
                        <div class="small">Logged in as: {{ Auth::user()->username }}</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

                    @yield('contenu')


                </main>
                <footer class="py-4 bg-light mt-auto mb-0">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
 
        <script src="{{url('js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script>

            // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// Area Chart Example
var ctx = document.getElementById("myAreaChart");

var dataAll = {!! str_replace("'", "\'", json_encode($dataPoints )) !!};



var datesss = {!! str_replace("'", "\'", json_encode($dates)) !!};
var yearsss = {!! str_replace("'", "\'", json_encode($years)) !!};


var nbRet = {!! str_replace("'", "\'", json_encode($Nbret)) !!};
var nbRetY = {!! str_replace("'", "\'", json_encode($NbretY)) !!};
var nbRetData = new Array(datesss.length).fill(0) ;
var nbRetDataY = new Array(yearsss.length).fill(0) ;

//console.log(nbRetY);

var nbDep = {!! str_replace("'", "\'", json_encode($Nbdep)) !!};
var nbDepY = {!! str_replace("'", "\'", json_encode($NbdepY)) !!};
var nbDepData = new Array(datesss.length).fill(0)  ;
var nbDepDataY = new Array(yearsss.length).fill(0)  ;


var label = datesss.sort();
var label = yearsss.sort();







// ici je verifie si il y a eu un retrait dans les 5 derniers jours et dernière années
Object.keys(nbRet).forEach(function(key,i) {
        if(datesss.includes(key)) nbRetData[datesss.indexOf(key)]=nbRet[key];
})
Object.keys(nbRetY).forEach(function(key,i) {
        if(yearsss.includes(key)) nbRetDataY[yearsss.indexOf(key)]=nbRetY[key];
})



// ici je verifie si il y a eu un depot dans les 5 derniers jours
Object.keys(nbDep).forEach(function(key,i) {
if(datesss.includes(key)) nbDepData[datesss.indexOf(key)]=nbDep[key];

})

Object.keys(nbDepY).forEach(function(key,i) {
if(yearsss.includes(key)) nbDepDataY[yearsss.indexOf(key)]=nbDepY[key];
})


var myLineeChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: datesss.sort(), // les 5 derniers jours de la semaine

    datasets: [
      {
      label: "Nb Retraits",
      lineTension: 0.3,
      borderColor: "green",
      pointRadius: 5,
      pointBackgroundColor: "green",
      pointBorderColor: "green",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "green",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data : nbRetData // les jours ou il y a eu retrait

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
      data: nbDepData // les jours ou il y a eu depot
    }
    
  
  ],
  },
  config : {
    scales: {
        scaleLabel :{
            display : true
        },
     
      y : {
        beginAtZero : true
      },
    },

  },
  
  options: {
    legend: {
      display: true
    }
  }
});


function changePeriod(d) {

if(d == "d") {

 myLineeChart.config.data.labels = datesss.sort();
 myLineeChart.config.data.datasets[0].data = nbRetData ;
 myLineeChart.config.data.datasets[1].data = nbDepData ;
 myLineeChart.update();

} else {

 myLineeChart.config.data.labels = yearsss.sort();
 myLineeChart.config.data.datasets[0].data = nbRetDataY ;
 myLineeChart.config.data.datasets[1].data = nbDepDataY ;
 myLineeChart.update();
}
}


//console.log(yearsss);

        </script>
        <!--<script src="{{url('js/demo/chart-bar-demo.js')}}">-->

        <script>

        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var Months = {!! str_replace("'", "\'", json_encode($months)) !!};
var monthlyDep = {!! str_replace("'", "\'", json_encode($amtTotdep)) !!};
var monthlyDepData = new Array(Months.length).fill(0)
var monthlyRet = {!! str_replace("'", "\'", json_encode($amtTotret)) !!};
var monthlyRetData = new Array(Months.length).fill(0);
var benefices = new Array(Months.length).fill(0);
Months.reverse()

Array.prototype.diff = function(a) {
    return this.filter(function(i) {return a.indexOf(i) < 0;});
};

Object.keys(monthlyDep).forEach(function(key,i) {
if(Months.includes(key)) monthlyDepData[Months.indexOf(key)]=monthlyDep[key];
})

Object.keys(monthlyDep).forEach(function(key,i) {
if(Months.includes(key)) monthlyRetData[Months.indexOf(key)]=monthlyRet[key];
})

benefices = monthlyDepData.diff(monthlyRetData) ;

console.log(benefices)

var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: Months,
    datasets: [
      {
        label: "benefices",
        borderColor: "red",
        data: benefices,
        type : 'line'
        },
        {
        label: "Dépots",
        backgroundColor: "rgba(2,117,216,1)",
        //borderColor: "blue",
        data: monthlyDepData,
        },
        {
          label: "Retraits",
          backgroundColor: "yellow",
          //borderColor: "blue",
          data: monthlyRetData,
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


        </script>
        <script>

                // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

   let total = 0 ;
   let dataArr = [];
   let valc1 =0.0 ;
   let valc2 =0.0 ;
   let valc3 =1.0 ;
   let valc4 =0.0 ;
   var damier = 2 ;
   var jas = [23,27,10,16];
    var $dataPoints = $dataPoints ?? '' ;
 
   var dataAll = {!! str_replace("'", "\'", json_encode($dataPoints)) !!};
   let cty = document.getElementById("myPieChart");
   let myPieChart = new Chart(cty, {
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
      
      //data: [valc1,valc2,valc3,valc4],
      data : jas,
    },
  
  ],
  },
});

// 



function changeVal (vali){
    valc1 =0.0 ;
    valc2 =0.0 ;
    valc3 =0.0 ;
    valc4 =0.0 ;
    allc1 = 0.0 ;
    allc2 = 0.0 ;
    allc3 = 0.0 ;
    allc4 = 0.0 ;

    if(vali != "all") {
        for (let i =0 ; i< dataAll.length; i++)
        {
    
            if(dataAll[i].type == vali)
                {
           
            switch (dataAll[i].cluster)
             {
                case 1 : 
                    //valc1 += dataAll[i].amount;
                    valc1++;
                    break;
                case 2 :
                    //valc2 += dataAll[i].amount;
                    valc2++ ;
                    break;
                case 3 :
                    //valc3 += dataAll[i].amount;
                    valc3++ ;
                    break;
                case 4 :
                    //valc4 += dataAll[i].amount;
                    valc4++;
                    break;
                default :
                break;
                

            }
        }
      
}

    } 
    else  {
        for (let i =0 ; i< dataAll.length; i++) {

            if(dataAll[i].type == "retrait" || dataAll[i].type == "depot" ) {

                switch (dataAll[i].cluster)
             {
                case 1 : 
                    //valc1 += dataAll[i].amount;
                    allc1++;
                    break;
                case 2 :
                    //valc2 += dataAll[i].amount;
                    allc2++ ;
                    break;
                case 3 :
                    //valc3 += dataAll[i].amount;
                    allc3++ ;
                    break;
                case 4 :
                    //valc4 += dataAll[i].amount;
                    allc4++;
                    break;
                default :
                break;
                

            }

            }

        }

    }



jas = vali == "all" ? [allc1,allc2,allc3,allc4] : [valc1,valc2,valc3,valc4] ;

// modification des données au niveau de la variable config du dataset de notre chart
myPieChart.config.data.datasets[0].data = jas;
// puis mise a jour du chart
myPieChart.update();



}
    </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/datatables-simple-demo.js')}}"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script>

      document.onclick = hideMenu; 
      document.oncontextmenu = rightClick; 

        function hideMenu() { 
            document.getElementById("contextMenu").style.display = "none" 
        } 

        function rightClick(e) { 
            e.preventDefault(); 
            alert("hello !!!"+e) ;
            if (document.getElementById("contextMenu").style.display == "block"){ 
                hideMenu(); 
            }else{ 
                var menu = document.getElementById("contextMenu")      
                menu.style.display = 'block'; 
                menu.style.left = e.pageX + "px"; 
                menu.style.top = e.pageY + "px"; 
            } }

        </script>
    </body>
</html>
