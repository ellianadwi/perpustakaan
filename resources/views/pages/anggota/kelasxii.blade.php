@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()" xmlns="http://www.w3.org/1999/html">
    <div id="Index">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Anggota Kelas XII</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div class="col-sm-8 m-b-xs">
                             <span tooltip="Tambah Data">
                                <a onclick="Create()" md-ink-ripple class="btn btn-sm btn-default"><i
                                            class="glyphicon glyphicon-plus-sign"></i>
                                </a>
                                </span>
                                    <span tooltip="Refresh data">
                            <button md-ink-ripple class="btn btn-sm btn-default" onclick="getAjax()">
                                <i class="glyphicon glyphicon-refresh"></i>
                            </button>
                              </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group pull-right">
                                            <input type="text" class="input-sm form-control" placeholder="Search"
                                                   ng-model="main.term"
                                                   ng-disabled="disUtama.txtCari" ng-enter="getData()">
                <span class="input-group-btn" tooltip="Cari Data">
                    <button md-ink-ripple class="btn btn-sm btn-default" type="button" ng-click="getData()"
                            ng-disable="main.term ==''">Cari
                    </button>
                </span>
                                        </div>
                                    </div>
                                    </p>
                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                        <tr>
                                            <th>Kode Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>Kelas</th>
                                            <th>Alamat Anggota</th>
                                            <th>Telepon Anggota</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody id="data-example">
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Create">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Anggota Kelas XII</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form id="Form-Create" class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">
                                            Kode Anggota </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="kode_anggota" id="kode_anggota"
                                                   required="required" class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">
                                            Nama Anggota </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nama_anggota" id="nama_anggota"
                                                   required="required" class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">
                                            Kelas </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="kelas" id="kelas"
                                                   required="required" class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">
                                            Alamat Anggota </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="alamat_anggota" id="alamat_anggota"
                                                   required="required" class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">
                                            Telepon Anggota </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="telp_anggota" id="telp_anggota"
                                                   required="required" class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="row row-sm form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <input class="btn btn-outline btn-info" type="submit" id="Submit"
                                               value="Simpan">
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="Index()">Kembali
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        </div>

    <div id="Edit">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Anggota Kelas XII</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form id="Form-Edit" class="form-horizontal form-label-left">
                                        <input type="hidden" name="id">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">
                                                Kode Anggota </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="kode_anggota" id="kode_anggota"
                                                       required="required" class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">
                                                Nama Anggota </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="nama_anggota" id="nama_anggota"
                                                       required="required" class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">
                                                Kelas </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="kelas" id="kelas"
                                                       required="required" class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">
                                                Alamat Anggota </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="alamat_anggota" id="alamat_anggota"
                                                       required="required" class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">
                                                Telepon Anggota </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="telp_anggota" id="telp_anggota"
                                                       required="required" class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="row row-sm form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                            <input class="btn btn-outline btn-info" type="submit"
                                                   value="Simpan">
                                            {{--onclick="location.href='/makanan/{{$data->id}}';">Simpan--}}
                                            {{--</button>--}}
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="Index();">Kembali
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
            </div></div>

    {{--Modal--}}

    {{--Detail Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="Bernard MT"></font></h4>
                </div>
                <div class="modal-body">
                    {{--<p>Some text in the modal.</p>--}}
                    <div id="loader-wrapper">
                        <div id="loader"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="modal-body">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();

            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        kode_anggota = $form.find("input[name='kode_anggota']").val(),
                        nama_anggota = $form.find("input[name='nama_anggota']").val(),
                        kelas = $form.find("input[name='kelas']").val(),
                        alamat_anggota = $form.find("input[name='alamat_anggota']").val(),
                        telp_anggota = $form.find("input[name='telp_anggota']").val();
//                $("#Form-Create").reset();
                var posting = $.post('/api/v1/anggota/', {

                    kode_anggota: kode_anggota,
                    nama_anggota: nama_anggota,
                    kelas: kelas,
                    alamat_anggota: alamat_anggota,
                    telp_anggota: telp_anggota

                });
                //Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
//                    getAjax();
                    Index();
                });
                return false;
            });

            $("#Form-Edit").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                       kode_anggota = $form.find("input[name='kode_anggota']").val(),
                        nama_anggota = $form.find("input[name='nama_anggota']").val(),
                        kelas = $form.find("input[name='kelas']").val(),
                        alamat_anggota = $form.find("input[name='alamat_anggota']").val(),
                        telp_anggota = $form.find("input[name='telp_anggota']").val();

                        currentRequest = $.ajax({
                            method: "PUT",
                            url: '/api/v1/anggota/' + id,
                            data: {
                                kode_anggota: kode_anggota,
                                nama_anggota: nama_anggota,
                                kelas: kelas,
                                alamat_anggota: alamat_anggota,
                                telp_anggota: telp_anggota
                            },
                            beforeSend: function () {
                                if (currentRequest != null) {
                                    currentRequest.abort();
                                }
                            },
                            success: function (data) {
                                window.alert(data.result.message);
                                Index();
                            },
                            error: function (data) {
                                window.alert(data.result.message);
                                Index();
                            }
                        });
            });
        });

        $(function () {
            //tambah class active
            $('#menu-kelasx').addClass('active');

        });

        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
            $("#data-example").children().remove();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getAjax();
        }

        function Create() {
            $('#Edit').hide();
            $('#Index').hide();
            $('#Create').show();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
        }

        function getAjax() {
            $("#data-example").children().remove();

            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-anggota-xii", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("" +
                                "<tr>" +
                                "<td>" + data.kode_anggota + "</td>" +
                                "<td>" + data.nama_anggota + "</td>" +
                                "<td>" + data.kelas + "</td>" +
                                "<td>" + data.alamat_anggota + "</td>" +
                                "<td>" + data.telp_anggota + "</td>" +

                                "<td>" +
//                                "<button type='button' class='btn btn-outline btn-primary' data-toggle='modal' data-target='#myModal'  " +
//                                "onclick='Detail(" + data.id + ")'>Detail</button> " +
                                "<button type='button' class='btn btn-outline btn-info' " +
                                "onclick='Edit(\"" + data.id + "\")'>" +
                                "<i class='glyphicon glyphicon-edit'></i></button> " +
                                "<button type='button' class='btn btn-outline btn-danger'  " +
                                "onclick='Hapus(\"" + data.id + "\")'> " +
                                "<i class='glyphicon glyphicon-trash'></i></button>" +
                                "</td>" +
                                "</tr>");
                    })
                });
            }, 2200);
        }

        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
//            $('#list').addClass('hide');
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();

            $.ajax({
                        method: "Get",
                        url: '/api/v1/anggota/' + id,
                        data: {}
                    })
                    .done(function (data) {
//                    var $form = $(this),
                        $("input[name='id']").val(data.id);
                        $("input[name='kode_anggota']").val(data.kode_anggota);
                        $("input[name='nama_anggota']").val(data.nama_anggota);
                        $("input[name='kelas']").val(data.kelas);
                        $("input[name='alamat_anggota']").val(data.alamat_anggota);
                        $("input[name='telp_anggota']").val(data.telp_anggota);

                        $('#Edit').show();
                    });
        }

        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/api/v1/anggota/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append(
                            "<tr><td> Kode Anggota </td><td> : </td><td>" + data.kode_anggota + "</td></tr>" +
                            "<tr><td> Nama Anggota </td><td> : </td><td>" + data.nama_anggota + "</td></tr>" +
                            "<tr><td> Kelas </td><td> : </td><td>" + data.kelas + "</td></tr>" +
                            "<tr><td> Alamat Anggota </td><td> : </td><td>" + data.alamat_anggota + "</td></tr>" +
                            "<tr><td> Telepon Anggota </td><td> : </td><td>" + data.telp_anggota + "</td></tr>"
                    );
                }
            });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin Ingin Menghapus ? ");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/api/v1/anggota/' + id,
                            data: {}
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            Index();
                        });
            }
        }
    </script>
    </body>
@endsection