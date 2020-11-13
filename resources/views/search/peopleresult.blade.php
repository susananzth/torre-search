@extends('layouts.external')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><!-- END Container -->
<div class="container-fluid mb-5" style="margin-bottom: 150px !important">
    <div class="row mr-4">
        @foreach ($poples as $people)
        <div class="col-xl-3 col-md-6 mb-4 hvr-grow ">
            <a href="" class="text-muted">
                <div class="card shadow  py-0 rounded-lg ">
                    <div class="card-body py-2 px-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold mb-4 mt- 2 text-primary text-center text-uppercase mb-1">
                                    {{ $responseBody['person']['name'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection