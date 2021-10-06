    @extends('layouts.site')

    @section('content')
    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Dashboard</h2>
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
              <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{route('site.home')}}">Dashboard</a>
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
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon purple">
                <i class="lni lni-cart-full"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Escolas</h6>
                <h3 class="text-bold mb-10">12</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +2
                  <span class="text-gray">(30 dias)</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon success">
                <i class="lni lni-dollar"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Turmas</h6>
                <h3 class="text-bold mb-10">75</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +5
                  <span class="text-gray">(30 dias)</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon primary">
                <i class="lni lni-credit-cards"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Alunos</h6>
                <h3 class="text-bold mb-10">254</h3>
                <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -15
                  <span class="text-gray">(30 dias)</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
        </div>
        <!-- End Row -->

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
                <h6 class="text-medium mb-30">Resumo das Escolas</h6>
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
                    <th>
                      <h6 class="text-sm text-medium">Turmas</h6>
                    </th>
                    <th>
                      <h6 class="text-sm text-medium">Alunos</h6>
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
                  <tr >
                    <td>
                      <div class="product">
                        <p class="text-sm">Escola EMC</p>
                      </div>
                    </td>
                    <td>
                      <div class="product">
                        <p class="text-sm">15</p>
                      </div>
                    </td>
                    <td>
                      <div class="product">
                        <p class="text-sm">235</p>
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