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
                        <h2>Editando Aluno</h2>
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
                                    Editando Aluno
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
                        <h6 class="mb-25">Detalhe do Aluno</h6>
                        <div class="row">
                            <div class="input-style-1 col-lg-6">
                                <label>Nome</label>
                                <input type="text" name="name" placeholder="Ex.: Fernanda da Silva" value="{{$result->name}} "/>
                            </div>

                            <div class="input-style-1 col-lg-6">
                                <label>Ano</label>
                                <input type="text" name="year" placeholder="Ex.: 2021" value="{{$result->year}}" />
                            </div>

                            <div class="input-style-1 col-lg-6">
                                <label>E-mail</label>
                                <input type="text" name="email" placeholder="Ex.: fernanda.silva@email.com.br" value="{{$result->email}}" />
                            </div>

                            <div class="input-style-1 col-lg-6">
                                <label>Número de Telefone</label>
                                <input type="text" name="telphone" placeholder="Ex.: (11) 9 9898 6677" value="{{$result->telphone}}" />
                            </div>

                            <div class="input-style-1 col-lg-6">
                                <label>Data de Nascimento</label>
                                <input type="text" name="birth_date" placeholder="Ex.: 14/02/1990" value="{{$result->birth_date}}"  />
                            </div>

                            <div class="select-style-1 col-lg-6">
                                <label>Sexo</label>
                                <div class="select-position">
                                    <select name="genre">
                                        <option value="">Selecione</option>
                                        <option value="male" @if($result->genre == "male") selected @endif >Masculino</option>
                                        <option value="female" @if($result->genre == "female") selected @endif >Feminino</option>
                                        <option value="outhers" @if($result->genre == "outhers") selected @endif >Outro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="select-style-1 col-lg-6">
                                <label>Escola</label>
                                <div class="select-position">
                                    <select name="school" id="schools">
                                        <option value="">Selecione</option>
                                        @foreach($result->schools as $school)
                                        @if(!empty($school))
                                        <option value="{{$school->id}}" >{{$school->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="select-style-1 col-lg-6">
                                <label>Turma</label>
                                <div class="select-position">
                                    <select name="school_class" id="classes" disabled>
                                        <option value="">Selecione uma escola</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- ======= input style end ======= -->

                    <a href="{{route('site.student.edit', $result->id)}}" class="main-btn primary-btn rounded-md btn-hover col-12">Salvar</a>

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

    function populateSelect(data)
    {
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