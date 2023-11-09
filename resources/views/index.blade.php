<x-layout bodyClass="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-navbars.navs.guest signup='register' signin='login'></x-navbars.navs.guest>
            </div>
        </div>
    </div>
    <section id="hero" class="page-header d-flex align-items-center min-vh-100" style="background-image: url('{{ asset('assets') }}/img/2901-demokrat.jpeg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Kelurahan Cibabat</p>
                                <h4 class="mb-0">{{number_format($total['totcibabat'],0,",",".") }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">0 </span>rw <span class="text-info text-sm font-weight-bolder">0 </span>rt 
                                <span class="text-warning text-sm font-weight-bolder">0 </span>tps </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Konstituen</p>
                                <h4 class="mb-0">{{number_format($total['konscibabat'],0,",",".") }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">0 </span>rw <span class="text-info text-sm font-weight-bolder">0 </span>rt</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Kelurahan Pasirkaliki</p>
                                <h4 class="mb-0">{{number_format($total['totpaskal'],0,",",".") }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">0 </span>rw <span class="text-info text-sm font-weight-bolder">0 </span>rt 
                                <span class="text-warning text-sm font-weight-bolder">0 </span>tps </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Konstituen</p>
                                <h4 class="mb-0">{{number_format($total['konspaskal'],0,",",".") }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">0 </span>rw <span class="text-info text-sm font-weight-bolder">0 </span>rt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="stat-cibabat" class="stat bg-dark">
        <div class="container">
            <div class="row pt-5">   
                <div class="col-md-4 text-sm text-center">
                    <div class="card">
                        <div class="card-header p-1">
                            <h4>Kelurahan Cibabat</h4>    
                        </div>   
                        <div class="card-body p-2">
                            <table class="table table-striped">
                                <thead>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Total Konstituen</th>
                                </thead>
                                <tbody>
                                    @foreach ( $total['totalbyrt'] as $byrt)
                                    <tr>
                                        <td>{{$byrt->rw}}</td>
                                        <td>{{$byrt->rt}}</td>
                                        <td>{{$byrt->total}}</td>
                                    </tr> 
                                    @endforeach   
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>     
                <div class="col-md-8">     
                    <div class="col-12 mb-3"> 
                        <div class="card">
                            <div class="card-body p-2">          
                                <div class="chart-1">
                                    <canvas id="chart-1" class="chart-canvas" height="300px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        @foreach ($total['totalrw'] as $totrt)
                        
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body p-2">    
                                    <div class="chart">
                                        <canvas id="chart-{{ $totrt->rw }}" class="chart-canvas" height="175px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>  
                            
                        @endforeach

                    </div>                    
                </div>
            </div>

        </div>        
    </section>
    <section id="stat-paskal" class="stat bg-dark">
        <div class="container">
            <div class="row pt-5">   
                <div class="col-md-4 text-sm text-center">
                    <div class="card">
                        <div class="card-header p-1">
                            <h4>Kelurahan Pasirkaliki</h4>    
                        </div>   
                        <div class="card-body p-2">
                            <table class="table table-striped">
                                <thead>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Total Konstituen</th>
                                </thead>
                                <tbody>
                                    @foreach ( $total['totalbyrtp'] as $byrtp)
                                    <tr>
                                        <td>{{$byrtp->rw}}</td>
                                        <td>{{$byrtp->rt}}</td>
                                        <td>{{$byrtp->total}}</td>
                                    </tr> 
                                    @endforeach   
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>     
                <div class="col-md-8">     
                    <div class="col-12 mb-3"> 
                        <div class="card">
                            <div class="card-body p-2">          
                                <div class="chart-1">
                                    <canvas id="chart-2" class="chart-canvas" height="300px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        @foreach ($total['totalrwp'] as $totrtp)
                        
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body p-2">    
                                    <div class="chart">
                                        <canvas id="chart-p{{ $totrtp->rw }}" class="chart-canvas" height="175px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>  
                            
                        @endforeach

                    </div>                    
                </div>
            </div>

        </div>        
    </section>
    
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <script>
        const totrt=@json($trw);
        const totrtp=@json($trwp);
        const gdata = @json($total['totalbyrw']);
        const pdata = @json($total['totalbyrwp']);
        
        const rw002 = @json($total['002']);
        const rw003 = @json($total['003']);
        const rw004 = @json($total['004']);
        const rw005 = @json($total['005']);
        const rw006 = @json($total['006']);
        const rw008 = @json($total['008']);
        const rw010 = @json($total['010']);
        const rw011 = @json($total['011']);
        const rw018 = @json($total['018']);
        const rw019 = @json($total['019']);
        const rw020 = @json($total['020']);
        const rw021 = @json($total['021']);
        const rw012p = @json($total['012p']);
   
    var ctx1 = document.getElementById("chart-1").getContext("2d");
    var ctx2 = document.getElementById("chart-2").getContext("2d");
    const bgcolor=['rgb(92, 137, 48)',
                  'rgb(52, 153, 219)',
                  'rgb(218, 165, 32)',
                  'rgb(150, 150, 132)',
                  'rgb(7, 91, 130)',
                  'rgb(200, 20, 86)'];
 const config = 
   {
    responsive: true,
    parsing: {
        xAxisKey: 'rt',
        yAxisKey: 'total'
         },
    plugins: {
      legend: {
        display: false,
      }
    }
  };


        Object.keys(totrt).forEach(function(key) {
           // const a=totrt[key];
            const data=[rw002,rw003,rw004,rw005,rw006,rw008,rw010,rw011,rw018,rw019,rw020,rw021];
            b='chart-'+ totrt[key];
      //console.log('rw' + key + ', rw' + totrt[key]);
      //console.log(a);
      new Chart(document.getElementById(b).getContext("2d"), {
        type: "bar",
        data: {
        datasets: [{
        data: data[key],
        backgroundColor: bgcolor
        }]},
        options: {
    responsive: true,
    parsing: {
        xAxisKey: 'rt',
        yAxisKey: 'total'
         },
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: true,
        text: 'Jumlah Konstituen per RT : RW ' +totrt[key]
      }
    }
  },
    });
});          
Object.keys(totrtp).forEach(function(key) {
            const datap=[rw012p];
            c='chart-p'+ totrtp[key];
      //console.log('rw' + key + ', rw' + totrt[key]);
      new Chart(document.getElementById(c).getContext("2d"), {
        type: "bar",
        data: {
        datasets: [{
        data: datap[key],
        backgroundColor: bgcolor
        }]},
        options: {
    responsive: true,
    parsing: {
        xAxisKey: 'rt',
        yAxisKey: 'total'
         },
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: true,
        text: 'Jumlah Konstituen per RT : RW ' +totrt[key]
      }
    }
  },
    });
});    
new Chart(ctx1, {
            type: "bar",
            data: {
              datasets: [{
                data: gdata,
                backgroundColor: bgcolor,
                  hoverOffset: 8
                  }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                parsing: {
                xAxisKey: 'rw',
                yAxisKey: 'total'
                },
                plugins: {
                  legend: {
                    display: false,
                    },
      title: {
        display: true,
        text: 'Jumlah Konstituen per RW '
      }
                },
            },
        });
new Chart(ctx2, {
            type: "bar",
            data: {
              datasets: [{
                data: pdata,
                backgroundColor: bgcolor,
                  hoverOffset: 8
                  }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                parsing: {
                xAxisKey: 'rw',
                yAxisKey: 'total'
                },
                plugins: {
                  legend: {
                    display: false,
                    },
      title: {
        display: true,
        text: 'Jumlah Konstituen per RW '
      }
                },
            },
        });


    </script>
    @endpush
    <x-plugins></x-plugins>
</x-layout>