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
                        <h2>Novo Aluno</h2>
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
                                <li class="breadcrumb-item"><a href="{{route('site.student.index')}}">Todos Alunos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Novo Aluno
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
                        <h6 class="mb-25">Novo Aluno</h6>
                        <form action="{{route('site.student.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-style-1 col-lg-6">
                                    <label>Nome</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Ex.: Fernanda da Silva" />
                                    @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-style-1 col-lg-6">
                                    <label>Ano</label>
                                    <input type="text" name="year" placeholder="Ex.: 2021" value="{{old('year')}}"  class="form-control @error('year') is-invalid @enderror" />
                                    @error('year')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-style-1 col-lg-6">
                                    <label>E-mail</label>
                                    <input type="text" name="email" placeholder="Ex.: fernanda.silva@email.com.br"  class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" />
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-style-1 col-lg-6">
                                    <label>N??mero de Telefone</label>
                                    <input type="text" name="telphone" placeholder="Ex.: (11) 9 9898 6677"  class="form-control @error('telphone') is-invalid @enderror" value="{{old('telphone')}}" />
                                    @error('telphone')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-style-1 col-lg-6">
                                    <label>Data de Nascimento</label>
                                    <input type="text" name="birth_date" placeholder="Ex.: 14/02/1990"  class="form-control @error('birth_date') is-invalid @enderror" value="{{old('birth_date')}}" />
                                    @error('birth_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="select-style-1 col-lg-6">
                                    <label>Sexo</label>
                                    <div class="select-position">
                                        <select name="genre"  class="form-control @error('genre') is-invalid @enderror">
                                            <option value="">Selecione</option>
                                            <option value="male" @if(old('genre')=="male" ) selected @endif>Masculino</option>
                                            <option value="female" @if(old('genre')=="female" ) selected @endif>Feminino</option>
                                            <option value="outhers" @if(old('genre')=="outhers" ) selected @endif>Outro</option>
                                        </select>
                                        @error('genre')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="select-style-1 col-lg-6">
                                    <label>Escola</label>
                                    <div class="select-position">
                                        <select name="school" id="schools"  class="form-control @error('school') is-invalid @enderror">
                                            <option value="">Selecione</option>
                                            @foreach($result as $item)
                                            @if(!empty($item))
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('school')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="select-style-1 col-lg-6">
                                    <label>Turma</label>
                                    <div class="select-position">
                                        <select name="school_class" id="classes" disabled  class="form-control @error('school_class') is-invalid @enderror">
                                            <option value="">Selecione uma escola</option>
                                        </select>
                                        @error('school_class')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="main-btn primary-btn rounded-md btn-hover col-12">Incluir Aluno</button>
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
<script>
    window.addEventListener('load', () => {
        let school = document.querySelector('#schools')
        school.addEventListener('change', (e) => {
            let index = e.target.selectedIndex
            let option = e.target.options[index].value
            request(option)
        })
    })

    function populateSelect(data) {
        let classes = document.querySelector("#classes")
        classes.disabled = false
        classes.innerText = ""
        let options = "<option>Selecione uma classe</option>"
        Array.from(data.school_classes).forEach((e) => {
            options += `<option value="${e.id}">${e.year} - ${e.level_education}</option>`
        })
        classes.innerHTML = options
    }

    function request(school_id) {
        if (school_id !== null && school_id !== undefined && school_id !== '') {
            let request = {
                url: "http://localhost:8000/school/classes/" + school_id
            }
            fetch(request.url)
                .then(res => res.json())
                .then(json => populateSelect(json))

        } else {
            console.log(" deu ruim ")
        }

    }
</script>
@endsection