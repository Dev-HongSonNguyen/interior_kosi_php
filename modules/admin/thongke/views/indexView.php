<?php get_header('', 'Thống kê số liệu') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Thống kê số liệu</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Thống kê số liệu
                            <span class="d-block text-muted pt-2 font-size-sm">Thống kê số liệu về dữ liệu thực trong hệ thống</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                    <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

                    <script>
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    ['Decor Phòng Khách',55],
                    ['Decor Phòng Ngủ',49],
                    ['Spain',44],
                    ['USA',24],
                    ]);

                    var options = {
                    title:'Biểu đồ sản phẩm theo danh mục trong hệ thống'
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>