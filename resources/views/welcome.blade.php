@extends('layouts.app')

@section('main')
    <main class="bg-secondary">
        <div class="container">
            <div class="row py-4 g-5">

                @forelse ($all_trains as $train)
                    <div class="col-4">
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4>
                                    Company: {{ $train->company }}
                                </h4>
                                <h6 class="py-2">
                                    Train Code: {{ $train->train_code }}
                                </h6>
                                <div class="d-flex">
                                    <h6>{{ $train->departure_station }}</h6>
                                    <span class="px-3">
                                        <i class="fa-solid fa-angles-right"></i>
                                    </span>
                                    <h6>{{ $train->arrival_station }}</h6>
                                </div>
                            </div>
                            <div class="card-body rounded-bottom bg-dark text-light">
                                <p>
                                    Departures: {{ $train->departure_time }}
                                </p>
                                <p>
                                    Arrival: {{ $train->arrival_time }}
                                </p>

                            </div>
                        </div>
                    </div>


                @empty
                    <h2>
                        No trains
                    </h2>
                @endforelse

            </div>
        </div>
    </main>
@endsection
