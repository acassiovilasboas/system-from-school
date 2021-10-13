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
    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Todos Alunos</h2>
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
                      Todos Alunos
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
            <a
            href="{{route('site.student.new')}}"
            class="main-btn primary-btn rounded-md btn-hover"
            >Novo Aluno</a
          >
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
                <h6 class="text-medium mb-30">Alunos</h6>
              </div>
            </div>
            <!-- End Title -->
            <div class="table-responsive">
              <table class="table top-selling-table">
                <thead>
                  <tr>
                    <th>
                      <h6 class="text-sm text-medium">Nome</h6>
                    </th>
                    <th class="min-width">
                      <h6 class="text-sm text-medium">
                        Idade <i class="lni lni-arrows-vertical"></i>
                      </h6>
                    </th>
                    <th class="min-width">
                      <h6 class="text-sm text-medium">
                        Escola <i class="lni lni-arrows-vertical"></i>
                      </h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($result))
                  @foreach($result as $item)
                  <tr>
                    <td>
                      <div class="product">
                        <p class="text-sm"><a href="{{route('site.student.show', $item->id)}}">{{$item->name}}</a></p>
                      </div>
                    </td>
                    <td>
                      <div class="product">
                        <p class="text-sm">{{$item->age}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="product">
                        <p class="text-sm">{{$item->school}}</p>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  @endif
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