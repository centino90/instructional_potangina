@extends('layouts.app')

@section('content')

    <div class="options d-flex">
        <div class="d-flex align-items-end border-right pr-2 mr-2">
            <h6 class="heading m-0">UPLOADED FILES</h6>
        </div>

        @if ($view === 'list')
            <a href="{{ route('allFiles.index') }}" class="options__btn btn btn-light active" title="grid view">
                <i class="options__icon fas fa-th-large"></i>
            </a>
        @elseif($view === 'grid')
            <a href="{{ route('allFiles.index', ['view' => 'list']) }}" class="options__btn btn btn-light active"
                title="list view">
                <i class="options__icon fas fa-list"></i>
            </a>
        @endif
    </div>

    <hr class="mt-2">

    @if ($view === 'list')
        <table class="files display table-view bg-white" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>TITLE</th>
                    <th>BY</th>
                    <th>SUBMITTED</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instructionals as $instructional)
                    <tr class="">
                        <td class="w-25">
                            <div class="d-flex">
                                <div class="col">
                                    <a href="{{ route('allFiles.downloadResource', $instructional->src_path) }}"
                                        class="dt-button-contained link-disabled w-100 mb-1" title="download">
                                        <i class="fa fa-download"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="dropright">
                                        <a href="#" class="dt-button dt-button-green text-decoration-none w-100"
                                            title="preview" aria-labelledby="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>

                                        <div class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('allFiles.show', $instructional->id) }}"
                                                class="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        dropdown-item"
                                                title="view">
                                                <i class="fa fa-eye"></i>
                                                View
                                            </a>
                                            @if (auth()->user()->usersInformation->userLevels->name === 'program dean' || auth()->user()->id === $instructional->user_id)

                                                <div class="dropdown-divider"></div>

                                                <a href="#" class="dropdown-item" title="edit" data-toggle="modal"
                                                    data-target="#base__modal-new" modal-type="update"
                                                    modal-title="Update Instructional Material"
                                                    modal-route="{{ route('allFiles.edit', $instructional->id) }}">
                                                    <i class="fa fa-pen"></i>
                                                    Update
                                                </a>
                                                <a href="#" class="delete-option dropdown-item" title="delete"
                                                    data-toggle="modal" data-target="#base__modal-new" modal-type="confirm"
                                                    modal-title="Confirm Delete"
                                                    modal-route="{{ route('allFiles.delete', $instructional->id) }}">

                                                    <i class=" fa fa-trash"></i>
                                                    Delete
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
                        </td>
                        <td>{{ $instructional->name . '.' . substr(strrchr($instructional->src_path, '.'), 1) }}</td>
                        <td>
                            <span
                                class="{{ auth()->user()->id === $instructional->user_id ? 'bg-light' : '' }}">{{ $instructional->users->usersInformation->fullname }}
                            </span>
                        </td>
                        <td>{{ $instructional->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @elseif($view === 'grid')

        <div class="files grid-view d-flex flex-wrap mb-4 collapse show">
            @foreach ($instructionals as $instructional)
                <div class="mr-4 mb-3">
                    <div class="files__card card border"
                        filetype="{{ substr(strrchr($instructional->src_path, '.'), 1) }}">
                        <div class="card-body p-2">
                            <div class="card-img">
                            </div>
                            <div class="card-text my-2">
                                <span class="card-text-title text-dark d-block">{{ $instructional->name }}</span>
                                <small class="text-muted">
                                    {{ auth()->user()->id === $instructional->user_id ? 'You' : $instructional->users->usersInformation->fullname }}</small>
                            </div>
                            <small class="text-muted">
                                Uploaded {{ $instructional->created_at->diffForHumans() }}
                            </small>
                            <div class="options-wrapper">
                                <a href="{{ route('allFiles.show', $instructional->id) }}" class="preview-btn btn">
                                </a>
                                <div class="more-options">
                                    <a href="{{ route('allFiles.downloadResource', $instructional->src_path) }}"
                                        class="download-btn btn btn-muted" title="download">
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
            @if ($rowCount > 10)
                <div class="mb-3">
                    <div class="files__card files__card-more card border shadow" filetype='load-more'>
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="text-primary d-block text-center">Click to load more</span>

                                <small class="file-count text-muted text-center d-block">(10 out of<span
                                        class="ml-1">{{ $rowCount }})</span></small>

                            </div>
                            <small class="text-muted"></small>
                            <div class="options-wrapper-active">
                                <a href="#" class="load-more preview-btn btn">
                                    <form action="{{ route('allFiles.loadMoreFiles') }}" method="post">
                                        @csrf
                                        <button type="submit" class="invisible"></button>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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

        let loadCount = 0;
        let currentRows = 20;

        function loadMoreAjax() {
            $('.load-more').click(function(event) {
                event.preventDefault();
                let form = $(this).find('form');

                $.ajax({
                        method: "POST",
                        url: $(this).find('form').attr('action'),
                        data: {
                            amount: currentRows,
                            _token: "{{ csrf_token() }}",
                            _route: $(this).find('form').attr('action')
                        },
                        beforeSend: function(xhr) {
                            xhr.overrideMimeType("text/plain; charset=x-user-defined");
                            form.closest('.files__card').toggleClass('loading')
                        }
                    })
                    .done(function(data) {
                        if (data) {
                            let html = jQuery.parseJSON(data).html
                            loadCount = jQuery.parseJSON(data).amount

                            console.log(data)

                            // console.log(jQuery.parseJSON(data).rowCount)
                            $('.files.grid-view').html(html);

                            loadMoreAjax();

                            $('.files__card').hover(
                                function() {
                                    $(this).find('.options-wrapper').css('display', 'flex');
                                },
                                function() {
                                    $(this).find('.options-wrapper').css('display', 'none')
                                }
                            );

                            $('.file-count').html('(' + loadCount +
                                ' out of <span class="ml-1">{{ $rowCount }})</span>')

                            currentRows += 10;
                        }
                    })
                    .fail(function() {
                        alert("error");
                    })
                    .always(function() {
                        form.closest('.files__card').toggleClass('loading')
                    });

            })
        }
        loadMoreAjax()


        $(document).ready(function() {
            let allFilesTb = $('.table-view').DataTable({
                "pageLength": 5,
                "language": {
                    "paginate": {
                        "previous": "<i class='fas fa-arrow-left'></i>",
                        "next": "<i class='fas fa-arrow-right'></i>"
                    }
                },
                "aaSorting": [],
                dom: '<"toolbar">frtip',
                autofill: true,
            });

            $("div.toolbar").html(
                '<label class="material-form-filled mt-3 mb-0">' +
                '<input type="text" name=search" class="data-table-search w-100" placeholder = " " aria-controls="DataTables_Table_0">' +
                '<span ><i class="fa fa-search"></i> Search</span></label>'
            );

            $('.data-table-search').on('keyup', function() {
                console.log('hey')
                allFilesTb.search(this.value).draw();
            });
        });

    </script>
@endsection
