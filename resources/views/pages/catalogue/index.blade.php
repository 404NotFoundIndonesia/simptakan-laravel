@extends('layouts.app')

@section('body')
<h1 class="h3 mb-3">Katalog</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>

<div class="row">
    @foreach ($items as $item)
    <div class="col-12 col-md-6 col-xl-4">
        <div class="card mb-3" style="height: 275px; max-height: 300px">
            <div class="row g-0 h-100">
              <div class="col-12 col-lg-6 col-xl-5">
                <div class="img-fluid rounded-start bg-dark w-100 h-100"></div>
              </div>
              <div class="col-12 col-lg-6  col-xl-7">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text"><small class="text-body-secondary">{{ $item->isbn }}</small></p>
                  <p class="card-text">{{ $item->summary_limit }}</p>
                </div>
                <div class="card-footer">
                    @foreach ($item->genres as $genre)
                        <span class="badge bg-secondary">{{ $genre->name }}</span>
                    @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{!! $items->links() !!}

@endsection
