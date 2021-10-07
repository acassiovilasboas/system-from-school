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
                            <h2>Detalhe da Escola</h2>
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
                                    <li class="breadcrumb-item"><a href="{{route('site.school.index')}}">Todas Escolas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Detalhe da Escola
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
                            <h6 class="mb-25">Dados da Escola</h6>
                            <div class="row">
                                <div class="input-style-1 col-lg-12">
                                    <label>Nome da Escola</label>
                                    <input type="text" value="{{$result->name}}" disabled placeholder="Ex.: Escola EMC" />
                                </div>
                                <!-- end input -->
                                <div class="input-style-1 col-lg-6">
                                    <label>Endereço</label>
                                    <input type="text" value="{{$result->address}}" disabled placeholder="Ex.: Rua Dr. Frederico, 325" />
                                </div>
                                <!-- end input -->
                                <div class="input-style-1 col-lg-6">
                                    <label>Bairro</label>
                                    <input type="text" value="{{$result->district}}" disabled placeholder="Ex.: Jardim das Rosas" />
                                </div>
                                <!-- end input -->
                                <div class="input-style-1 col-lg-6">
                                    <label>Cidade</label>
                                    <input type="text" value="{{$result->city}}" disabled placeholder="Ex.: Jardim das Rosas" />
                                </div>
                                <!-- end input -->
                                <div class="select-style-1 col-lg-6">
                                    <label>Estado</label>
                                    <div class="select-position">
                                        <select disabled>
                                            <option value="">Selecione</option>
                                            <option value="SP" @if ($result->state == 'SP') selected @endif >São Paulo</option>
                                            <option value="RJ" @if ($result->state == 'RJ') selected @endif >Rio de Janeiro</option>
                                            <option value="ES" @if ($result->state == 'ES') selected @endif >Espirito Santo</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- end card -->
                        <!-- ======= input style end ======= -->

                        <a href="{{route('site.school.edit', $result->id)}}" class="main-btn primary-btn rounded-md btn-hover col-12">Editar</a>

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