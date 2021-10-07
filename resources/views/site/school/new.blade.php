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
                        <h2>Nova Escola</h2>
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
                                    Nova Escola
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
                        <form action="{{route('site.school.store')}}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="input-style-1 col-lg-12">
                                    <label>Nome da Escola</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Ex.: Escola EMC" />
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- end input -->
                                <div class="input-style-1 col-6">
                                    <label>Endereço</label>
                                    <input type="text" name="address" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror" placeholder="Ex.: Rua Dr. Frederico, 325" />
                                    @error('address')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- end input -->
                                <div class="input-style-1 col-6">
                                    <label>Bairro</label>
                                    <input type="text" name="district" value="{{old('district')}}" class="form-control @error('district') is-invalid @enderror" placeholder="Ex.: Jardim das Rosas" />
                                    @error('district')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- end input -->
                                <div class="input-style-1 col-6">
                                    <label>Cidade</label>
                                    <input type="text" name="city" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror" placeholder="Ex.: Jardim das Rosas" />
                                    @error('city')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- end input -->
                                <div class="select-style-1 col-6">
                                    <label>Estado</label>
                                    <div class="select-position">
                                        <select name="state" class="custom-select @error('state') is-invalid @enderror">
                                            <option value="">Selecione</option>
                                            <option value="SP" @if (old('state') == 'SP') selected @endif>São Paulo</option>
                                            <option value="RJ" @if (old('state') == 'RJ') selected @endif>Rio de Janeiro</option>
                                            <option value="ES" @if (old('state') == 'ES') selected @endif>Espirito Santo</option>
                                        </select>
                                        @error('state')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                       
                                </div>
                                <!-- end select -->
                                <button type="submit" class="main-btn primary-btn rounded-md btn-hover col-12">Salvar</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card -->
                    <!-- ======= input style end ======= -->
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