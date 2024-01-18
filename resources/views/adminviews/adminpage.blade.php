@extends('adminviews.templates')

@section('contenu')
 <!------------------------------------------------------------------------------------------>               
                    <div class="container-fluid px-4 vw-100">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboardelle

                           
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
                                                            <!--<option value="w" selected>Week</option>-->
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
                                Transactions History
                               
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
<!----------------------------------------------------------------------------------------------------------->

@endsection
               