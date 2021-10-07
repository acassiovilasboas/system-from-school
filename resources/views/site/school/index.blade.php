@extends('layouts.site')
@section('content')
@if(session('success'))

    <div class="alert alert-success alert-dismissible mt-3" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<!-- end alert-box -->
@endif
<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Todas Escolas</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('site.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Todas Escolas
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>

        <div class="row mb-30">
            <div class="col-12">
                <a href="{{route('site.school.new')}}" class="main-btn primary-btn rounded-md btn-hover">Nova Escola</a>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="
                  title
                  d-flex
                  flex-wrap
                  align-items-center
                  justify-content-between
                ">
                    <div class="left">
                        <h6 class="text-medium mb-30">Escolas</h6>
                    </div>
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Escola</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Cidade <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Estado <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product">
                                        <p class="text-sm">Escola EMC</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">São Paulo</p>
                                </td>
                                <td>
                                    <p class="text-sm">SP</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product">
                                        <p class="text-sm">Escola EMC</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">São Paulo</p>
                                </td>
                                <td>
                                    <p class="text-sm">SP</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product">
                                        <p class="text-sm">Escola EMC</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">São Paulo</p>
                                </td>
                                <td>
                                    <p class="text-sm">SP</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product">
                                        <p class="text-sm">Escola EMC</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">São Paulo</p>
                                </td>
                                <td>
                                    <p class="text-sm">SP</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        <!-- End Col -->

    </div>
    <!-- end container -->
</section>
<!-- ========== section end ========== -->
@endsection