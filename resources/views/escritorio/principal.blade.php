@extends('layouts.escritorio')

@section('content')

<!-- Page Title -->
<div class="pagetitle">
    <h1>Escritorio</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Escritorio</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start"><h6>Filtro</h6></li>
                                <li><a class="dropdown-item" href="#">Hoy</a></li>
                                <li><a class="dropdown-item" href="#">Esta semana</a></li>
                                <li><a class="dropdown-item" href="#">Este año</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Encuestas <span>| Hoy</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start"><h6>Filtro</h6></li>
                                <li><a class="dropdown-item" href="#">Hoy</a></li>
                                <li><a class="dropdown-item" href="#">Esta semana</a></li>
                                <li><a class="dropdown-item" href="#">Este año</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Revenue <span>| This Month</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>$3,264</h6>
                                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start"><h6>Filtro</h6></li>
                        <li><a class="dropdown-item" href="#">Hoy</a></li>
                        <li><a class="dropdown-item" href="#">Esta semana</a></li>
                        <li><a class="dropdown-item" href="#">Este año</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                        </div>
                    </div>

                    </div>
                </div>

                </div><!-- End Customers Card -->

                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start"><h6>Filtro</h6></li>
                                <li><a class="dropdown-item" href="#">Hoy</a></li>
                                <li><a class="dropdown-item" href="#">Esta semana</a></li>
                                <li><a class="dropdown-item" href="#">Este año</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Reportes <span>| Semana</span></h5>

                            <!-- Line Chart -->
                            <div id="reportsChart"></div>

                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                    series:
                                    [{
                                        name: 'Encuestas',
                                        data: [31, 40, 32, 51, 42, 82, 56],
                                    }, {
                                        name: 'Quejas',
                                        data: [11, 32, 45, 32, 34, 52, 41]
                                    }, {
                                        name: 'Customers',
                                        data: [15, 11, 28, 18, 9, 24, 11]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'area',
                                        toolbar: {
                                            show: false
                                        },
                    },
                    markers: {
                    size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                    }
                    },
                    dataLabels: {
                    enabled: false
                    },
                    stroke: {
                    curve: 'smooth',
                    width: 2
                    },
                    xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                    }
                }).render();
                });
            </script>
            <!-- End Line Chart -->

            </div>

        </div>
        </div><!-- End Reports -->


        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Grupos Etarios -->
        <div class="card">
            <div class="card-body pb-0">
            <h5 class="card-title">Grupos Etarios <span>| Hoy</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                    trigger: 'item'
                    },
                    legend: {
                    top: '5%',
                    left: 'center'
                    },
                    series: [{
                    name: 'Grupo Etario',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [{
                        value: 108,
                        name: 'G.E. I'
                        },
                        {
                        value: 135,
                        name: 'G.E. II'
                        },
                        {
                        value: 180,
                        name: 'G.E. III'
                        },
                        {
                        value: 84,
                        name: 'G.E. IV'
                        },
                        {
                        value: 60,
                        name: 'G.E. V'
                        },
                        {
                        value: 30,
                        name: 'G.E. VI'
                        }
                    ]
                    }]
                });
                });
            </script>
            </div>
        </div><!-- End Website Traffic -->

        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/news-1.jpg" alt="">
                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-2.jpg" alt="">
                <h4><a href="#">Quidem autem et impedit</a></h4>
                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-3.jpg" alt="">
                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-4.jpg" alt="">
                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-5.jpg" alt="">
                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
              </div>

            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

@endsection

@push('scripts')

@endpush
