@extends('layouts.external')

@section('content')
<div class="container">
  <div class="card">
      <div class="row">
          <div class="col-sm-6 col-md-4">
              <img class="card-img-top" src="{{ $peoples['person']['picture'] }}" alt="{{ $peoples['person']['name'] }}">
          </div>
          <div class="card-body col-sm-12">
            <div class="d-inline"><h4 class="card-title mb-2 d-inline">{{ $peoples['person']['name'] }}</h4></div>
            <div class="d-inline">{!! $peoples['person']['verified'] ? '<i class="far fa-check-circle text-primary"></i>' : '' !!}</div>
            <div class=""><h5 class="card-title mb-2 d-inline">{{ $peoples['person']['professionalHeadline'] }}</h5></div>
            <p class="card-text">De {{ $peoples['person']['location']['name'] }}</p>
          </div>
          <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
              <div class="small text-primary">
                RRSS
              </div>
          </div>
      </div>
  </div>
</div><!-- END Container -->
@endsection
