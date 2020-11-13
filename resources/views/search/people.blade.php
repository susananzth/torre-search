@extends('layouts.external')

@section('content')
<div class="container d-flex h-100 align-items-center">
  <div class="mx-auto text-center row">
    <div class="torre-form-search col-sm-12 mx-auto">
        <a class="icon-stack lift" href="#">
          <i class="fas fa-id-card-alt icon-header"></i>
        </a>
    </div>
    <div class="col-sm-8 col-md-6 mx-auto">
      <form class="">
        <div class="input-group">
          <input type="text" class="form-control bg-light small" placeholder="Search People" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary btn-search" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><!-- END Container -->
@endsection
