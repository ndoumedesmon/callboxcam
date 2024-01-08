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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                            </div>
                                Dashboard
                                
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
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
                <div class="container-fluid px-4 pt-4">
                     <!--div class row-->
</div>
                    <div class="container-fluid px-4 vw-100">
                        <!--<h1 class="mt-4">Dashboard</h1>-->
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard

                           
                            </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4 h-4">
                                    <div class="card-body">Total Depots <span style="float:right;">{{$nbDep}}</span></div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Transferts <span style="float:right;">{{$nbTrans}} </span></div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Benefices</div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Pertes</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-4">
                                    <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-chart-area me-1"></i>
                                                Suivie Des Transactions
                                                <div class="select float-end">
                                                  
                                                    <select name="datetrans" id="datetrans" onchange="changePeriod(this.value)"  >
                                                            <option value="d">Daily</option>
                                                            <option value="w" selected>Week</option>
                                                            <option value="y">Year</option>
                                                    </select>
                                                  
                                                    
                                                   
                                                </div>
                                            </div>
                                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                        Performances Par Zones
                                        <div class="select float-end">
                                           
                                            <select name="typetrans" id="typetrans" onchange="changeVal(this.value)">
                                                            <option value="all">all</option>
                                                            <option value="retrait">Retraits</option>
                                                            <option value="depot">Depots</option>  
                                                    </select>

                                            
                                                    
                                                    
                                                   
                                                </div>
                                        </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                        Montants Transactions
                                        <div class="select float-end" name="mtnTrans">
                                                    <select name="datetrans" id="datetrans">
                                                    <option value="d">Daily</option>
                                                    <option value="w">Week</option>
                                                    <option value="y">Year</option>
                                                    </select>
                                                   
                                                </div>
                                        </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>

                       

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                               
                            </div>
                            <div class="card-body">
                    
                            <div>{{$clust ?? ''}}</div>
                    
                    <!--Ici je vais mettre les données de la BD-->
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            
                                            <th>Cluster</th>
                                            <th>Sale ID</th>
                                            <th>user Name</th>
                                            <th>Transaction Type</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Cluster</th>
                                            <th>Sale ID</th>
                                            <th>User Name</th>
                                            <th>Transaction Type</th>
                                            <th>Date</th>
                                            <th>AMount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($REQUEST as $dbs)
                                        
                                        <tr>
                                            
                                            <td>{{ $dbs-> clusterName}}</td>
                                            <td>{{ $dbs-> sale_id}}</td>
                                            <td>{{ $dbs-> username}}</td>
                                            <td>{{ $dbs-> type}}</td>
                                            <td>{{ $dbs-> created_at}}</td>
                                            <td>{{ $dbs-> amount}} FCFA</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
        <script>

            // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var dataAll = {!! str_replace("'", "\'", json_encode($dataPoints )) !!};
//var dati = dataAll[0]["date"].toString().split('T')[0];
var dati =[] ;
var amo = [] ;


for(let k=0 ; k<dataAll.length ; k++)
{
   
    //dati.push(dataAll[k]["date"].toString().split('T')[0].split(" ")[0]) ;
    dati.push(dataAll[k]["date"]);
    amo.push(dataAll[k]["amount"]) ;
    
}
var dato = new Date ("October 13, 2014 11:13:00");
console.log(dataAll);





var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Monday", "Tuesday", "Wednesday", "thursday", "friday"],
    
    //labels : dati.sort(), // ici les dates venants de la base de donnée
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
      data : [23,15,19,20,78]
      //data : amo
      //data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
    },
    /*{
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
    }*/
    
  
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


        </script>
        <script src="{{url('js/demo/chart-bar-demo.js')}}"></script>
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
   var dataAll = {!! str_replace("'", "\'", json_encode($dataPoints )) !!};
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
//console.log([allc1,allc2,allc3,allc4])


}
    </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/datatables-simple-demo.js')}}"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
