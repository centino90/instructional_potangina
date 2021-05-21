@extends('layouts.app')

@section('content')

    <!-- Subjects -->
    <div class="options d-flex">
        <div class="d-flex align-items-end pr-2 mr-2">
            <h6 class="heading m-0">MY SUBJECTS</h6>
        </div>
    </div>

    <hr class="mt-2">

    <div class="folders card-deck collapse show">
        @foreach ($subjects as $subject)
            <div class="folders__folder card border mb-3">
                <div class="card-body px-2 pt-3 pb-0">
                    <a href="{{ route('subjects.show', $subject->id) }}" class="d-flex nav-link p-0">
                        <h1 class="fa fa-folder p-0 m-0 text-primary"></h1>
                        <div class="card-text ml-3">
                            <h6 class="card-text-title__folder m-0 p-0 text-dark">{{ ucwords($subject->title) }}</h6>
                            <small class="text-muted m-0 p-0"></small>
                        </div>
                    </a>
                    {{-- <button class="card-option btn btn-muted" id="folder_{{ $subject->title }}" data-toggle="dropdown">
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="folder_{{ $subject->title }}">
                        <a class="dropdown-item" href="#">View</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div> --}}
                </div>
            </div>
        @endforeach

    </div>

@endsection

@section('script')
    <script>
    </script>
@endsection
