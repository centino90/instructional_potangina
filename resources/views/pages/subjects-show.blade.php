@extends('layouts.app')

@section('previous')
    {{ route('subjects.index') }}
@endsection
@section('content')

    <!-- Subject info -->
    <div class="row">
        @foreach ($g_instructionals as $g_instructional)
            <div class="col-6 {{ $loop->index < 2 ? '' : 'mt-4' }}">
                <h6 class="heading">{{ Str::upper($g_instructional) }}</h6>
                <table class="subjects-table bg-white" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>NAME</th>
                            <th>BY</th>
                            <th>SUBMITTED</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subject->instructionalResources as $instructional)
                            @if ($instructional->resourceTypes->name === $g_instructional)
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
                                                        title="preview" aria-labelledby="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu animate slideIn"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a href="{{ route('allFiles.show', $instructional->id) }}"
                                                            class="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            dropdown-item"
                                                            title="view">
                                                            <i class="fa fa-eye"></i>
                                                            View
                                                        </a>
                                                        @if (auth()->user()->usersInformation->userLevels->name === 'program dean' || auth()->user()->id === $instructional->user_id)

                                                            <div class="dropdown-divider"></div>

                                                            <a href="#" class="dropdown-item" title="edit"
                                                                data-toggle="modal" data-target="#base__modal-new"
                                                                modal-type="update"
                                                                modal-title="Update Instructional Material"
                                                                modal-route="{{ route('allFiles.edit', $instructional->id) }}">
                                                                <i class="fa fa-pen"></i>
                                                                Update
                                                            </a>
                                                            <a href="#" class="delete-option dropdown-item" title="delete"
                                                                data-toggle="modal" data-target="#base__modal-new"
                                                                modal-type="confirm" modal-title="Confirm Delete"
                                                                modal-route="{{ route('allFiles.delete', $instructional->id) }}">

                                                                <i class=" fa fa-trash"></i>
                                                                Delete
                                                                <form
                                                                    action="{{ route('allFiles.destroy', $instructional->id) }}"
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
                                    <td>{{ $instructional->name }}
                                        {{-- {{ $instructional->name . '.' . substr(strrchr($instructional->src_path, '.'), 1) }} --}}
                                    </td>
                                    <td>
                                        <span>
                                            {{ auth()->user()->id === $instructional->user_id ? 'You' : $instructional->users->usersInformation->fullname }}
                                        </span>
                                    </td>
                                    <td>{{ $instructional->created_at->diffForHumans() }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.subjects-table').DataTable({
                "pageLength": 5,
                dom: 'frtip',
                "language": {
                    "paginate": {
                        "previous": "<i class='fas fa-arrow-left'></i>",
                        "next": "<i class='fas fa-arrow-right'></i>"
                    }
                },
                autofill: true,
                "initComplete": function() {
                    if ($(this).find('tbody tr').length < 5) {
                        $(this).siblings('.dataTables_paginate').hide();
                    }
                },
                responsive: true,
                "aaSorting": []
            });
        });

        $('.delete-option').click(function(e) {
            e.preventDefault();

        })

    </script>
@endsection
