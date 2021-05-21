@extends('layouts.app')

@section('previous')
    {{ route('allFiles.index') }}
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <div class="">
                    <div class="files__card card border"
                        filetype="{{ substr(strrchr($instructional->src_path, '.'), 1) }}">
                        <div class="card-body p-2">
                            <div class="card-img">
                            </div>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('allFiles.downloadResource', $instructional->src_path) }}"
                                    class="dt-button-contained link-disabled w-100" title="download">DOWNLOAD
                                    <i class="fa fa-download"></i>
                                </a>
                                @if (auth()->user()->usersInformation->userLevels->name === 'program dean' || auth()->user()->id === $instructional->user_id)
                                    <a href="#" class="dt-button dt-button-green text-decoration-none w-100" title="edit"
                                        data-toggle="modal" data-target="#base__modal-new" modal-type="update"
                                        modal-title="Update Instructional Material"
                                        modal-route="{{ route('allFiles.edit', $instructional->id) }}">
                                        EDIT
                                    </a>
                                    <a href="#" class="dt-button dt-button-red text-decoration-none w-100" title="delete"
                                        data-toggle="modal" data-target="#base__modal-new" modal-type="confirm"
                                        modal-title="Confirm Delete"
                                        modal-route="{{ route('allFiles.delete', $instructional->id) }}"> DELETE
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="d-flex">
                        <div class="information d-flex align-items-center">
                            <h3>{{ ucwords($instructional->name) }}</h3>
                            <small
                                class="ml-4 bg-primary text-white px-2 rounded">{{ ucwords($instructional->subjects->title) }}
                            </small>
                        </div>
                    </div>
                    <div class="details bg-light p-2 px-3">
                        <div class="d-flex">
                            <div class="information">
                                <small class="">
                                    Submitted By <b>{{ ucwords($instructional->users->usersInformation->fullname) }}</b>
                                    {{ $instructional->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="information">
                                <small class="">
                                    Resource Type <b>{{ ucwords($instructional->resourceTypes->name) }}</b> </small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="information">
                                <small class="">
                                    Belongs to <b>{{ ucwords($instructional->subjects->departments->abbv) }}</b>
                                    department</small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="information">
                                <small class="">
                                    File type is
                                    <b>{{ ucwords(substr(strrchr($instructional->src_path, '.'), 1)) }}</b></small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="information">
                                <small class="">
                                    Last Updated
                                    <b>{{ $instructional->updated_at->diffForHumans() }}</b></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>

    </script>
@endsection
