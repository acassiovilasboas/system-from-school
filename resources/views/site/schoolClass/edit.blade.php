@extends('layouts.site')
@section('content')
<!-- ========== tab components start ========== -->
<section class="tab-components">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Editando Turma</h2>
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
                                <li class="breadcrumb-item"><a href="{{route('site.class.index')}}">Todas as Turmas</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Editando Turma
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== form-elements-wrapper start ========== -->
        <div class="form-elements-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- input style start -->
                    <div class="card-style mb-30">
                        <h6 class="mb-25">Dados da Turma</h6>
                        <div class="row">
                            <div class="select-style-1 col-lg-12">
                                <label>Escola</label>
                                <div class="select-position">
                                    <select>
                                        <option value="">Selecione</option>
                                        <option value="">Escola EMC</option>
                                        <option value="">Escola Militar</option>
                                        <option value="">Escola Belas Artes</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                            <div class="input-style-1 col-lg-6">
                                <label>Ano</label>
                                <input type="text" placeholder="Ex.: 2021" />
                            </div>
                            <!-- end input -->
                            <div class="select-style-1 col-lg-6">
                                <label>N??vel de Ensino</label>
                                <div class="select-position">
                                    <select>
                                        <option value="">Selecione</option>
                                        <option value="">Fundamental</option>
                                        <option value="">M??dio</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                            <div class="input-style-1 col-lg-6">
                                <label>S??rie</label>
                                <input type="text" placeholder="Ex.: 5 S??rie" />
                            </div>
                            <!-- end input -->
                            <div class="select-style-1 col-lg-6">
                                <label>Turno</label>
                                <div class="select-position">
                                    <select>
                                        <option value="">Selecione</option>
                                        <option value="">Matutino</option>
                                        <option value="">Vespertino</option>
                                        <option value="">Noturno</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- ======= input style end ======= -->

                    <a href="#0" class="main-btn primary-btn rounded-md btn-hover col-12">Salvar</a>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== form-elements-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
<!-- ========== tab components end ========== -->
@endsection