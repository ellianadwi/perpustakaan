<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Sekolah! | </title>

    <!-- Bootstrap core CSS -->

    <link href="{!! asset('assets//css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('assets//fonts/css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets//css/animate.min.css') !!}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{!! asset('assets/css/custom.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css') !!}" href="{!! asset('assets/css/maps/jquery-jvectormap-2.0.3.css') !!}"/>
    <link href="{!! asset('assets/css/icheck/flat/green.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('assets/css/floatexamples.css') !!}" rel="stylesheet" type="text/css"/>

    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/js/nprogress.js') !!}"></script>

    <!--[if lt IE 9]>
    <script src="{!! asset('assets/../assets/js/ie8-responsive-file-warning.js') !!}"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{!! asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}"></script>
    <script src="{!! asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">

    <?php

    if(session('id') == "" || empty(session('id'))){

        echo '<script language="javascript">document.location="../api/v1/logout";</script>';

    }
    ?>
    <div class="main_container">

        <div class="col-md-3 left_col">
            @include('includes.sidebaradmin')
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                @include('includes.headeradmin')
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')
            @include('includes.footer')
        </div>
        <!-- /page content -->
        {{--<div class="col-md-10  right_col row">--}}
      {{----}}
        {{--</div>--}}
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>

<!-- bootstrap progress js -->
<script src="{!! asset('assets/js/progressbar/bootstrap-progressbar.min.js') !!}"></script>
<!-- icheck -->
<script src="{!! asset('assets/js/icheck/icheck.min.js') !!}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{!! asset('assets/js/moment/moment.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('assets/js/datepicker/daterangepicker.js') !!}"></script>
<!-- chart js -->
<script src="{!! asset('assets/js/chartjs/chart.min.js') !!}"></script>

<script src="{!! asset('assets/js/custom.js') !!}"></script>

<!-- flot js -->
<!--[if lte IE 8]>
<script type="text/javascript" src="{!! asset('assets/js/excanvas.min.js') !!}"></script><![endif]-->
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.pie.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.orderBars.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.time.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/date.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.spline.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.stack.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/curvedLines.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/flot/jquery.flot.resize.js') !!}"></script>

<!-- worldmap -->
<script type="text/javascript" src="{!! asset('assets/js/maps/jquery-jvectormap-2.0.3.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/maps/gdp-data.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/maps/jquery-jvectormap-world-mill-en.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/maps/jquery-jvectormap-us-aea-en.js') !!}"></script>
<!-- pace -->
<script src="{!! asset('assets/js/pace/pace.min.js') !!}"></script>
<script>
    $(function () {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="{!! asset('assets/js/skycons/skycons.min.js') !!}"></script>
<script>
    var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- Doughnut Chart -->
<script>
    $('document').ready(function () {
        var options = {
            legend: false,
            responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
    });
</script>
<!-- /Doughnut Chart -->

{{--<!-- datepicker -->--}}
{{--<script type="text/javascript">--}}
{{--$(document).ready(function () {--}}

{{--var cb = function (start, end, label) {--}}
{{--console.log(start.toISOString(), end.toISOString(), label);--}}
{{--$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));--}}
{{--//alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");--}}
{{--}--}}

{{--var optionSet1 = {--}}
{{--startDate: moment().subtract(29, 'days'),--}}
{{--endDate: moment(),--}}
{{--minDate: '01/01/2012',--}}
{{--maxDate: '12/31/2015',--}}
{{--dateLimit: {--}}
{{--days: 60--}}
{{--},--}}
{{--showDropdowns: true,--}}
{{--showWeekNumbers: true,--}}
{{--timePicker: false,--}}
{{--timePickerIncrement: 1,--}}
{{--timePicker12Hour: true,--}}
{{--ranges: {--}}
{{--'Today': [moment(), moment()],--}}
{{--'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],--}}
{{--'Last 7 Days': [moment().subtract(6, 'days'), moment()],--}}
{{--'Last 30 Days': [moment().subtract(29, 'days'), moment()],--}}
{{--'This Month': [moment().startOf('month'), moment().endOf('month')],--}}
{{--'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]--}}
{{--},--}}
{{--opens: 'left',--}}
{{--buttonClasses: ['btn btn-default'],--}}
{{--applyClass: 'btn-small btn-primary',--}}
{{--cancelClass: 'btn-small',--}}
{{--separator: ' to ',--}}
{{--locale: {--}}
{{--applyLabel: 'Submit',--}}
{{--cancelLabel: 'Clear',--}}
{{--fromLabel: 'From',--}}
{{--toLabel: 'To',--}}
{{--customRangeLabel: 'Custom',--}}
{{--daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],--}}
{{--monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],--}}
{{--firstDay: 1--}}
{{--}--}}
{{--};--}}
{{--$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));--}}
{{--$('#reportrange').daterangepicker(optionSet1, cb);--}}
{{--$('#reportrange').on('show.daterangepicker', function () {--}}
{{--console.log("show event fired");--}}
{{--});--}}
{{--$('#reportrange').on('hide.daterangepicker', function () {--}}
{{--console.log("hide event fired");--}}
{{--});--}}
{{--$('#reportrange').on('apply.daterangepicker', function (ev, picker) {--}}
{{--console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));--}}
{{--});--}}
{{--$('#reportrange').on('cancel.daterangepicker', function (ev, picker) {--}}
{{--console.log("cancel event fired");--}}
{{--});--}}
{{--$('#options1').click(function () {--}}
{{--$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);--}}
{{--});--}}
{{--$('#options2').click(function () {--}}
{{--$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);--}}
{{--});--}}
{{--$('#destroy').click(function () {--}}
{{--$('#reportrange').data('daterangepicker').remove();--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--<!-- /datepicker -->--}}
        <!-- /footer content -->
@yield('scripts')
</body>

</html>
