@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()" xmlns="http://www.w3.org/1999/html">
    <div id="Index">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Buku</h2>
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
                            <button md-ink-ripple class="btn btn-sm btn-default" onclick="getAjax(0)">
                                <i class="glyphicon glyphicon-refresh"></i>
                            </button>
                              </span>

                                        <div class="col-sm-4">
                                            <select id="id_kategori"
                                                    class="form-control"
                                                    aria-controls="example" size="1"
                                                    name="category_main"
                                                    onchange="getAjax(this.value)">
                                            </select>
                                        </div>
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
                                            <th>Kode Buku</th>
                                            <th>Kategori</th>
                                            <th>Judul Buku</th>
                                            <th>Jumlah Buku</th>
                                            <th>Rak</th>
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
                    <h2>Tambah Buku</h2>
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
                                                    Kode Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="kode_buku" id="kode_buku"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Kategori </label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_kategori" id="id_kategori"
                                                            required="required"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Judul Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="judul_buku" id="judul_buku"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Jumlah Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="jumlah_buku" id="jumlah_buku"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Rak </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="rak" id="rak"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Deskripsi Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="diskripsi_buku" id="diskripsi_buku"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Pengarang Buku</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="pengarang_buku" id="pengarang_buku"
                                                           required="required" class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tahun Terbit Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="tahun_terbit_buku" id="tahun_terbit_buku"
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
                    <h2>Edit Buku</h2>
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
                                                    Kode Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="kode_buku" id="kode_buku"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Kategori </label>
                                                <div class="col-sm-7">
                                                    <select type="text" name="id_kategori" id="id_kategori"
                                                            class="form-control col-md-12 col-xs-12">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Judul Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="judul_buku" id="judul_buku"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Jumlah Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="jumlah_buku" id="jumlah_buku"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Rak </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="rak" id="rak"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Deskripsi Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="diskripsi_buku" id="diskripsi_buku"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Pengarang Buku</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="pengarang_buku" id="pengarang_buku"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">
                                                    Tahun Terbit Buku </label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="tahun_terbit_buku" id="tahun_terbit_buku"
                                                           class="form-control col-md-12 col-xs-12">
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

    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();
            getKategori();
            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        kode_buku = $form.find("input[name='kode_buku']").val(),
                        id_kategori = $form.find("select[name='id_kategori']").val(),
                        judul_buku = $form.find("input[name='judul_buku']").val(),
                        jumlah_buku = $form.find("input[name='jumlah_buku']").val(),
                        rak = $form.find("input[name='rak']").val(),
                        diskripsi_buku = $form.find("input[name='diskripsi_buku']").val(),
                        pengarang_buku = $form.find("input[name='pengarang_buku']").val(),
                        tahun_terbit_buku = $form.find("input[name='tahun_terbit_buku']").val();
//                $("#Form-Create").reset();
                var posting = $.post('/api/v1/buku/', {

                    kode_buku: kode_buku,
                    id_kategori: id_kategori,
                    judul_buku: judul_buku,
                    jumlah_buku: jumlah_buku,
                    rak: rak,
                    diskripsi_buku: diskripsi_buku,
                    pengarang_buku: pengarang_buku,
                    tahun_terbit_buku: tahun_terbit_buku

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
                        kode_buku = $form.find("input[name='kode_buku']").val(),
                        id_kategori = $form.find("select[name='id_kategori']").val(),
                        judul_buku = $form.find("input[name='judul_buku']").val(),
                        jumlah_buku = $form.find("input[name='jumlah_buku']").val(),
                        rak = $form.find("input[name='rak']").val(),
                        diskripsi_buku = $form.find("input[name='diskripsi_buku']").val(),
                        pengarang_buku = $form.find("input[name='pengarang_buku']").val(),
                        tahun_terbit_buku = $form.find("input[name='tahun_terbit_buku']").val();

                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/api/v1/buku/' + id,
                    data: {
                        kode_buku: kode_buku,
                        id_kategori: id_kategori,
                        judul_buku: judul_buku,
                        jumlah_buku: jumlah_buku,
                        rak: rak,
                        diskripsi_buku: diskripsi_buku,
                        pengarang_buku: pengarang_buku,
                        tahun_terbit_buku: tahun_terbit_buku
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
            $('#menu-buku').addClass('active');

        });

        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
            $("#data-example").children().remove();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getAjax(0);
        }

        function Create() {
            $('#Edit').hide();
            $('#Index').hide();
            $('#Create').show();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getKategori();
        }
        function getKategori() {
            $('#id_kategori').children().remove();
            $.getJSON("/data-kategori", function (data) {
                var jumlah = data.length;
                $("#id_kategori").append("<option selected>Pilih Kategori</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#id_kategori").append("<option value='" + data.id + "'>" + data.nama_kategori + "</option>");
                })
            });
        }

        function getAjax(id) {
            if(id=="" || id==0){

                $("#data-example").children().remove();

                $("#loader2").delay(2000).animate({
                    opacity: 0,
                    width: 0,
                    height: 0
                }, 500);
                setTimeout(function () {
                    $.getJSON("/data-buku", function (data) {
                        var jumlah = data.length;
                        $.each(data.slice(0, jumlah), function (i, data) {
                            $("#data-example").append("" +
                                    "<tr>" +
                                    "<td>" + data.kode_buku + "</td>" +
                                    "<td>" + data.kategori.nama_kategori + "</td>" +
                                    "<td>" + data.judul_buku + "</td>" +
                                    "<td>" + data.jumlah_buku + "</td>" +
                                    "<td>" + data.rak + "</td>" +
//                                "<td>" + data.diskripsi_buku + "</td>" +
//                                "<td>" + data.pengarang_buku + "</td>" +
//                                "<td>" + data.tahun_terbit_buku + "</td>" +

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
            }else{

                $("#data-example").children().remove();

                $("#loader2").delay(2000).animate({
                    opacity: 0,
                    width: 0,
                    height: 0
                }, 500);
                setTimeout(function () {
                    $.getJSON("/data-buku-by-kategori/"+id, function (data) {
                        var jumlah = data.length;
                        $.each(data.slice(0, jumlah), function (i, data) {
                            $("#data-example").append("" +
                                    "<tr>" +
                                    "<td>" + data.kode_buku + "</td>" +
                                    "<td>" + data.kategori.nama_kategori + "</td>" +
                                    "<td>" + data.judul_buku + "</td>" +
                                    "<td>" + data.jumlah_buku + "</td>" +
                                    "<td>" + data.rak + "</td>" +
//                                "<td>" + data.diskripsi_buku + "</td>" +
//                                "<td>" + data.pengarang_buku + "</td>" +
//                                "<td>" + data.tahun_terbit_buku + "</td>" +

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
                        url: '/api/v1/buku/' + id,
                        data: {}
                    })
                    .done(function (data_edit) {
//                    var $form = $(this),
                        $("input[name='id']").val(data_edit.id);
                        $("input[name='kode_buku']").val(data_edit.kode_buku);
//                        $("input[name='id_kategori']").val(data.id_kategori);
                        $("input[name='judul_buku']").val(data_edit.judul_buku);
                        $("input[name='jumlah_buku']").val(data_edit.jumlah_buku);
                        $("input[name='rak']").val(data_edit.rak);
                        $("input[name='diskripsi_buku']").val(data_edit.diskripsi_buku);
                        $("input[name='pengarang_buku']").val(data_edit.pengarang_buku);
                        $("input[name='tahun_terbit_buku']").val(data_edit.tahun_terbit_buku);
                        $.getJSON("/data-kategori", function (data) {
                            var jumlah = data.length;
                            $.each(data.slice(0, jumlah), function (i, data) {
                                if (data_edit.kategori.id == data.id) {
                                    $("select[name='id_kategori']").append("<option value='" + data.id + "' selected>" + data.nama_kategori + "</option>");
                                }
                                else {
                                    $("select[name='id_kategori']").append("<option value='" + data.id + "'>" + data.nama_kategori + "</option>");
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
                url: '/api/v1/buku/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append(
                            "<tr><td> Kode Buku </td><td> : </td><td>" + data.kode_buku + "</td></tr>" +
                            "<tr><td> Kategori </td><td> : </td><td>" + data.kategori.nama_kategori + "</td></tr>" +
                            "<tr><td> Judul Buku </td><td> : </td><td>" + data.judul_buku + "</td></tr>" +
                            "<tr><td> Jumlah Buku </td><td> : </td><td>" + data.jumlah_buku + "</td></tr>" +
                            "<tr><td> Rak </td><td> : </td><td>" + data.rak + "</td></tr>" +
                            "<tr><td> Diskripsi Buku </td><td> : </td><td>" + data.diskripsi_buku + "</td></tr>" +
                            "<tr><td> Pengarang Buku </td><td> : </td><td>" + data.pengarang_buku + "</td></tr>" +
                            "<tr><td> Tahun Terbit Buku </td><td> : </td><td>" + data.tahun_terbit_buku + "</td></tr>"
                    );
                }
            });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin Ingin Menghapus ? ");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/api/v1/buku/' + id,
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