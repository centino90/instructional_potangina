@extends('layouts.app')
@section('title')
    All Files
@endsection
@section('content')

    @if (auth()->user()->usersInformation->user_level_id === 2 || auth()->user()->usersInformation->user_level_id === 3)

        <!-- Files -->
        <h6 class="heading">RECENTLY UPLOADED FILES</h6>
        <div class="files d-flex">
            @foreach ($instructionals as $instructional)
                <div class="mr-5 mb-3">
                    <div class="files__card card border"
                        filetype="{{ substr(strrchr($instructional->src_path, '.'), 1) }}">
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="card-text-title text-dark d-block">{{ $instructional->name }}</span>
                                <small
                                    class="text-muted">{{ auth()->user()->id === $instructional->user_id ? 'You' : $instructional->users->usersInformation->fullname }}</small>
                            </div>
                            <small class="text-muted">Uploaded
                                {{-- {{ date('m-d-Y', strtotime($instructional->created_at)) }} --}}
                                {{ $instructional->created_at->diffForHumans() }}
                            </small>
                            <div class="options-wrapper">
                                <a href="{{ route('allFiles.show', $instructional->id) }}" class="preview-btn btn">
                                </a>
                                <div class="more-options">
                                    <a href="{{ route('allFiles.downloadResource', $instructional->src_path) }}"
                                        class="download-btn btn btn-muted">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    @if (auth()->user()->usersInformation->userLevels->name === 'program dean' || auth()->user()->id === $instructional->user_id)
                                        <a href="#" class="download-btn btn btn-muted" title="edit" data-toggle="modal"
                                            data-target="#base__modal-new" modal-type="update"
                                            modal-title="Update Instructional Material"
                                            modal-route="{{ route('allFiles.edit', $instructional->id) }}">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a href="#" class="download-btn btn btn-muted" title="delete" title="delete"
                                            data-toggle="modal" data-target="#base__modal-new" modal-type="confirm"
                                            modal-title="Confirm Delete"
                                            modal-route="{{ route('allFiles.delete', $instructional->id) }}">
                                            <i class="fa fa-trash"></i>
                                            <form action="{{ route('allFiles.destroy', $instructional->id) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <input type="submit" class="d-none" />
                                            </form>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mb-3">
                <div class="files__card files__card-more card border shadow" filetype='more'>
                    <div class="card-body p-2">
                        <div class="card-img"></div>
                        <div class="card-text my-2">
                            <span class="text-primary d-block text-center">Click to view more</span>
                            <small class="text-muted"></small>
                        </div>
                        <small class="text-muted"></small>
                        <div class="options-wrapper-active">
                            <a href="{{ route('allFiles.index') }}" class="preview-btn btn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subjects -->
        <h6 class="heading">SUBJECTS</h6>
        <div class="folders card-deck">
            @foreach ($subjects as $subject)
                <div class="folders__folder card border mb-3">
                    <div class="card-body px-2 pt-3 pb-0">
                        <a href="{{ route('subjects.show', $subject->id) }}" class="d-flex nav-link p-0">
                            <h1 class="fa fa-folder p-0 m-0 text-primary"></h1>
                            <div class="card-text ml-3">
                                <h6 class="card-text-title__folder m-0 p-0 text-dark">{{ $subject->title }}</h6>
                                <small class="text-muted m-0 p-0"></small>
                            </div>
                        </a>
                        {{-- <button class="btn btn-muted card-option" id="folder1" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h text-muted"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="folder1">
                            <a class="dropdown-item" href="#">View</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Remove</a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>

    @elseif(auth()->user()->usersInformation->userLevels->id === 1)

        <h6 class="heading mb-0">SUBMISSION OF SYLLABUS</h6>
        <div class="d-flex my-0">
            <table class="border">
                <thead>
                    <tr>
                        <th>Submitted</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($syllabiStatus as $syllabiStat)
                        {{-- $subjects[$syllabiStat->id] --}}
                        <tr>
                            <td>{{ $syllabiStat->title }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <table class="border">
                <thead>
                    <tr>
                        <th>Remaining</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($haveNotSubmitted as $row)
                        <tr>
                            <td>{{ $row->title }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    @endif

@endsection

@section('script')
    <script>
        $('.files__card').hover(
            function() {
                $(this).find('.options-wrapper').css('display', 'flex');
            },
            function() {
                $(this).find('.options-wrapper').css('display', 'none')
            }
        );

    </script>
@endsection
