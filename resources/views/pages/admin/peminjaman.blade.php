@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
    <body onload="Index()" xmlns="http://www.w3.org/1999/html">
    <div id="Index">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Peminjaman</h2>
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
                                            <th>Kode Peminjaman</th>
                                            <th>Buku</th>
                                            <th>Anggota</th>
                                            <th>Tanggal Pinjaman</th>
                                            <th>Tanggal Kembali Pinjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody id="data-example">
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
                    <h2>Tambah Peminjam</h2>
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
                                                    Kelas</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_kelas" id="id_kelas"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12"
                                                            onchange="getAnggota()">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Anggota</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_anggota" id="id_anggota"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Kategori</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_kategori" id="id_kategori"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12"
                                                            onchange="getBuku()">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Buku</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_buku" id="id_buku"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tanggal Peminjam</label>
                                                <div class="col-sm-7">
                                                    {{--<input type="text" name="peminjam_tgl" id="datepicker"--}}
                                                    {{--required="required" class="date-picker form-control col-md-7 col-xs-12">--}}
                                                    <input data-parsley-id="7216" id="birthday"
                                                           name="peminjam_tgl" readonly
                                                           class="date-picker form-control col-md-7 col-xs-12 active"
                                                           required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tanggal Kembali Peminjam</label>
                                                <div class="col-sm-7">
                                                    {{--<input type="text" name="peminjam_tgl_kembali"--}}
                                                    {{--id="peminjam_tgl_kembali"--}}
                                                    {{--required="required" class="form-control col-md-12 col-xs-12">--}}
                                                    <input data-parsley-id="7216" id="peminjam_tgl_kembali"
                                                           name="peminjam_tgl_kembali" readonly
                                                           class="date-picker form-control col-md-7 col-xs-12 active"
                                                           required="required" type="text">
                                                </div>
                                            </div>
                                            {{--<div class="form-group">--}}
                                            {{--<label class="control-label col-sm-3">--}}
                                            {{--Buku Kembali Peminjam</label>--}}
                                            {{--<div class="col-sm-7">--}}
                                            {{--<input type="text" name="buku_tgl_kembali" id="buku_tgl_kembali"--}}
                                            {{--required="required" class="form-control col-md-12 col-xs-12">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

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
                    <h2>Edit Peminjaman</h2>
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
                                                    Kode Peminjaman </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="kode_peminjaman" id="kode_peminjaman"
                                                           readonly
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            {{--<div class="form-group">--}}
                                            {{--<label class="control-label col-sm-3">--}}
                                            {{--Kelas</label>--}}
                                            {{--<div class="col-sm-7">--}}
                                            {{--<select type="text" name="kelas" id="kelas"--}}
                                            {{--required="required"--}}
                                            {{--class="form-control col-md-12 col-xs-12"--}}
                                            {{--onchange="getAnggota()">--}}
                                            {{--<option>Pilih Kelas</option>--}}
                                            {{--<option value="10">X</option>--}}
                                            {{--<option value="11">XI</option>--}}
                                            {{--<option value="12">XII</option>--}}
                                            {{--</select>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Anggota</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_anggota" id="id_anggota"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Buku</label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_buku" id="id_petugas"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tanggal Peminjam</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="peminjam_tgl" id="peminjam_tgl"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tanggal Kembali Peminjam</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="peminjam_tgl_kembali"
                                                           id="peminjam_tgl_kembali"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            {{--<div class="form-group">--}}
                                            {{--<label class="control-label col-sm-3">--}}
                                            {{--Buku Kembali Peminjam</label>--}}
                                            {{--<div class="col-sm-7">--}}
                                            {{--<input type="text" name="buku_tgl_kembali" id="buku_tgl_kembali"--}}
                                            {{--required="required" class="form-control col-md-12 col-xs-12">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
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
        </div>
    </div>
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

    {{--<script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>--}}
    <script>
        $(document).ready(function () {
            $('.date-picker').daterangepicker({
                startDate: moment(),
                singleDatePicker: true,
                format: "YYYY-MM-DD",
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();

            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        kode_peminjaman = $form.find("input[name='kode_peminjaman']").val(),
                        id_buku = $form.find("select[name='id_buku']").val(),
                        id_anggota = $form.find("select[name='id_anggota']").val(),
                        peminjam_tgl = $form.find("input[name='peminjam_tgl']").val(),
                        peminjam_tgl_kembali = $form.find("input[name='peminjam_tgl_kembali']").val();
//                buku_tgl_kembali = $form.find("input[name='buku_tgl_kembali']").val();
//                $("#Form-Create").reset();
                var posting = $.post('api/v1/peminjaman', {
                    kode_peminjaman: kode_peminjaman,
                    id_buku: id_buku,
                    id_anggota: id_anggota,
                    peminjam_tgl: peminjam_tgl,
                    peminjam_tgl_kembali: peminjam_tgl_kembali,
//                    buku_tgl_kembali: buku_tgl_kembali
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
                        kode_peminjaman = $form.find("input[name='kode_peminjaman']").val(),
                        id_buku = $form.find("select[name='id_buku']").val(),
                        id_anggota = $form.find("select[name='id_anggota']").val(),
                        peminjam_tgl = $form.find("input[name='peminjam_tgl']").val(),
                        peminjam_tgl_kembali = $form.find("input[name='peminjam_tgl_kembali']").val(),
//                        buku_tgl_kembali = $form.find("input[name='buku_tgl_kembali']").val();


                        currentRequest = $.ajax({
                            method: "PUT",
                            url: '/api/v1/peminjaman/' + id,
                            data: {
                                kode_peminjaman: kode_peminjaman,
//                                id_petugas: id_petugas,
                                id_buku: id_buku,
                                id_anggota: id_anggota,
                                peminjam_tgl: peminjam_tgl,
                                peminjam_tgl_kembali: peminjam_tgl_kembali,
//                        buku_tgl_kembali: buku_tgl_kembali
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
            $(document).ready(function () {
                $('#datepicker').daterangepicker({
                    singleDatePicker: true,
                    calender_style: "picker_4"
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getKategori();
            getKelas();

//            getAnggota();
        }

        function getKategori() {
            $('#id_kategori').children().remove();
            $.getJSON("data-kategori", function (data) {
                var jumlah = data.length;
                $("#id_kategori").append("<option value=''>Pilih Kategori</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_kategori").append("<option value='" + data.id + "'>" + data.nama_kategori + "</option>");
                })
            });
        }
        function getBuku() {
            var $form = $("#Form-Create"),
                    id_kategori = $form.find("select[name='id_kategori']").val();
            $('#id_buku').children().remove();
            $.getJSON("/data-buku-by-kategori/" + id_kategori, function (data) {
                var jumlah = data.length;
                $("#id_buku").append("<option selected>Pilih Buku</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_buku").append("<option value='" + data.id + "'>" + data.judul_buku + "</option>");
                })
            });
        }

        function getAnggota() {
            var $form = $("#Form-Create"),
                    id_kelas = $form.find("select[name='id_kelas']").val();
            $('#id_anggota').children().remove();
            $.getJSON("/data-anggota-by-kelas/" + id_kelas, function (data) {
                var jumlah = data.length;
                $("#id_anggota").append("<option selected>Pilih Anggota</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_anggota").append("<option value='" + data.id + "'>" + data.nama_anggota + "</option>");
                })
            });
        }

        function getKelas() {
            $('#id_kelas').children().remove();
            $.getJSON("data-kelas", function (data) {
                var jumlah = data.length;
                $("#id_kelas").append("<option value=''>Pilih Kelas</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_kelas").append("<option value='" + data.id + "'>" + data.kelas + " " + data.jurusan + "</option>");
                })
            });
        }
        function getAjax() {
            $("#data-example").children().remove();

            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/api/v1/peminjaman", function (data) {
                    var jumlah = data.data.length;
                    $.each(data.data.slice(0, jumlah), function (i, data) {
                        if (data.status == 1) {
                            $("#data-example").append("" +
                                    "<tr>" +
                                    "<td>" + data.kode_peminjaman + "</td>" +
                                    "<td>" + data.buku.judul_buku + "</td>" +
//                                        "<td>" + data.petugas.nama_petugas + "</td>" +
                                    "<td>" + data.anggota.nama_anggota + "</td>" +
                                    "<td>" + data.peminjam_tgl + "</td>" +
                                    "<td>" + data.peminjam_tgl_kembali + "</td>" +
                                    "<td class='col-md-1'>" +
                                     "<span class='label orange-800 ng-scope' " +
                                    "'>Belum Dikembalikan</span> " +
                                    "</td>" +
                                    "</tr>");
                        }
                        if (data.status == 0) {
                            $("#data-example").append("" +
                                    "<tr>" +
                                    "<td>" + data.kode_peminjaman + "</td>" +
                                    "<td>" + data.buku.judul_buku + "</td>" +
//                                        "<td>" + data.petugas.nama_petugas + "</td>" +
                                    "<td>" + data.anggota.nama_anggota + "</td>" +
                                    "<td>" + data.peminjam_tgl + "</td>" +
                                    "<td>" + data.peminjam_tgl_kembali + "</td>" +
                                    "<td class='col-md-1'>" +
                                    "<span class='btn btn-outline btn-primary'" +
                                    "'>Sudah Dikembalikan</span> " +

                                    "</td>" +
                                    "</tr>");
                        }
                    })
                });
            }, 2200);
        }

        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            $('#list').addClass('hide');
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();

            $.ajax({
                        method: "Get",
                        url: '/api/v1/peminjaman/' + id,
                        data: {}
                    })
                    .done(function (data_edit) {
                        console.log(data_edit.id);
//                    var $form = $(this),
                        $("input[name='id']").val(data_edit.id);
                        $("input[name='kode_peminjaman']").val(data_edit.kode_peminjaman);
//                                $("input[name='id_petugas']").val(data_edit.id_petugas);
                        $("input[name='id_anggota']").val(data_edit.id_anggota);
                        $("input[name='peminjam_tgl']").val(data_edit.peminjam_tgl);
                        $("input[name='peminjam_tgl_kembali']").val(data_edit.peminjam_tgl_kembali);
//                        $("input[name='buku_tgl_kembali']").val(data_edit.buku_tgl_kembali);
                        $.getJSON("/data-buku", function (data) {
                            var jumlah = data.length;
                            $.each(data.slice(0, jumlah), function (i, data) {
                                if (data_edit.buku.id == data.id) {
                                    $("select[name='id_buku']").append("<option value='" + data.id + "' selected>" + data.judul_buku + "</option>");
                                }
                                else {
                                    $("select[name='id_buku']").append("<option value='" + data.id + "'>" + data.judul_buku + "</option>");
                                }
                            })
                        });
                        $.getJSON("/data-anggota-by-kelas", function (data) {
                            var jumlah = data.length;
                            $.each(data.slice(0, jumlah), function (i, data) {
                                if (data_edit.anggota.id == data.id) {
                                    $("select[name='id_anggota']").append("<option value='" + data.id + "' selected>" + data.kelas + "</option>");
                                }
                                else {
                                    $("select[name='id_anggota']").append("<option value='" + data.id + "'>" + data.kelas + "</option>");
                                }
                            })
                        });

                        $('#Edit').show();
                    });
        }

        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/peminjaman/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append(
                            "<tr><td> Kode Peminjaman </td><td> : </td><td>" + data.kode_peminjaman + "</td></tr>" +
//                                    "<tr><td> Petugas </td><td> : </td><td>" + data.id_petugas + "</td></tr>" +
                            "<tr><td> Anggota </td><td> : </td><td>" + data.id_anggota + "</td></tr>" +
                            "<tr><td> Tanggal Peminjam </td><td> : </td><td>" + data.peminjam_tgl + "</td></tr>" +
                            "<tr><td> Tanggal Kembali Peminjam </td><td> : </td><td>" + data.peminjam_tgl_kembali + "</td></tr>"
                    );
                }
            });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin Ingin Menghapus ? ");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/hapus-peminjaman/' + id,
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