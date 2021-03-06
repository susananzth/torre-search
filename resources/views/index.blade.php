@extends('layouts.external')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card card-torre o-hidden border-0 my-5">
        <div class="card-body p-0">
          <!-- Row -->
          <div class="row">
            <!-- A Opportunities -->
              <a class="col-sm-12 col-md-6 text-center icon-stack lift" href="{{ url('opportunities') }}">
                <i class="fas fa-briefcase icon-header"></i>
              </a>
            <!-- A People -->
              <a class="col-sm-12 col-md-6 text-center icon-stack lift" href="{{ url('people') }}">
                <i class="fas fa-id-card-alt icon-header-2"></i>
              </a>
          </div><!-- END Row -->
        </div>
      </div><!-- END Card-torre -->
    </div>
  </div>
</div><!-- END Container -->
@endsection
