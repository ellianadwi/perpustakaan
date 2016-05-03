@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <body onload="Index()" xmlns="http://www.w3.org/1999/html">
    <div id="Index">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Kategori</h2>
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
                            <button md-ink-ripple class="btn btn-sm btn-default" ng-click="refreshData()">
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
                                            <th>Peminjaman</th>
                                            <th>Buku</th>
                                            <th>Detail Tanggal kembali</th>
                                            <th>Detail Denda</th>
                                            <th>Detail status Kembali</th>
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

        $(function () {
            //tambah class active
            $('#menu-detail-pinjam').addClass('active');

        });

        function Index() {
            $('#Index').show();
            $("#data-example").children().remove();
            getAjax();
        }

        function getAjax() {
            $("#data-example").children().remove();

            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-detail-pinjam", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("" +
                                "<tr>" +
                                "<td>" + data.id_peminjaman + "</td>" +
                                "<td>" + data.id_buku + "</td>" +
                                "<td>" + data.detail_tgl_kembali + "</td>" +
                                "<td>" + data.detail_denda + "</td>" +
                                "<td>" + data.detail_status_kembali + "</td>" +

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

        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/api/v1/detail-pinjam/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append(
                            "<tr><td> Peminjaman </td><td> : </td><td>" + data.id_peminjaman + "</td></tr>" +
                            "<tr><td> Buku </td><td> : </td><td>" + data.id_buku + "</td></tr>" +
                            "<tr><td> Detail tanggal Kembsli </td><td> : </td><td>" + data.detail_tgl_kembali + "</td></tr>" +
                            "<tr><td> Detail denda </td><td> : </td><td>" + data.detail_denda + "</td></tr>" +
                            "<tr><td> Detail status kembali </td><td> : </td><td>" + data.detail_status_kembali + "</td></tr>"

                    );
                }
            });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin Ingin Menghapus ? ");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/hapus-kategori/' + id,
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