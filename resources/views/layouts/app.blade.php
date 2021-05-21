<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" /> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans antialiased">
    <!-- Base Header -->
    @include('layouts.shared.baseheader')

    <div class="d-flex">
        @empty($title)
            {{ $title = null }}
        @endempty
        <!-- Left Sidebar Navigation -->
        @include('layouts.shared.left-sidebar-nav')

        <!-- Page Content -->
        <main class="app__content container-fluid mt-4 pt-2">
            <div class="app__content-main px-2">
                <div class=" m-0 p-0">
                    <!-- Title -->
                    <h1 id="app__title" class="app__content-main__heading mb-4">
                        @if (substr_count(url()->current(), '/') > 3)
                            <span class="border-right px-1 mr-2" style="font-size: 13px">
                                <a class="text-decoration-none text-muted bg-light rounded p-2"
                                    href="@yield('previous')">
                                    <i class="fa fa-arrow-left"></i>
                                    Go back
                                </a>
                            </span>
                        @endif
                        {{ ucwords($title ?? 'default title') }}
                        {{ session('old') }}
                    </h1>

                    <!-- Main Content -->
                    @yield('content')

                    <!-- Footer -->
                    {{-- <div class="app__content-footer bg-white mt-5">Footer</div> --}}
                </div>
            </div>
        </main>
    </div>

    <!-- Offscreens -->

    <!-- Scroller -->
    <button class="scroller border shadow-lg collapse" title="Scroll Up">
        <i class="fa fa-arrow-up"></i>
    </button>

    <!-- Toast -->
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div id="successToast" class="toast hide position-fixed" role="alert" aria-live="assertive" aria-atomic="true"
            data-delay="6000" style="min-width:340px;z-index: 1500;top: 1%;right: 1%">
            <div class="toast-header">
                <i id="toast-header-icon" class="mr-3"></i>
                <strong id="toast-header-title" class="mr-auto"></strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                @if ($errors->any)
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                @endif

                @if (session('status'))
                    {{ session('status') }}
                @endif
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal" id="base__modal-new" tabindex="-1" role="dialog" aria-labelledby="base__modal-new"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Dynamic markup here -->
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            /* root */
            $('html').contextmenu(function(event) {
                event.preventDefault();
            })

            $('.toggler__sidebar-left').click(function() {
                $('html').toggleClass('sideber-left-toggled')
            });

            $('#base-search').keyup(function() {
                if (this.value == "") {
                    $('.app__subheader__searchresults').removeClass('show')
                    $('.app__subheader__searchresults .list-group').hide()
                    return
                }
                if ($('.app__subheader__searchresults .card:hidden')) {
                    $('.app__subheader__searchresults .spinner').remove()
                }

                $('.app__subheader__searchresults').addClass('show')
                $('.app__subheader__searchresults .list-group').hide()
                $('.app__subheader__searchresults .card-body')
                    .append(`<div class="spinner list-group">
                                <span class="text-muted">Searching: ${this.value}
                                </span>
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                    `)

                setTimeout(() => {
                    $('.app__subheader__searchresults .spinner').remove()
                    $('.app__subheader__searchresults .list-group').show()
                }, 2000);
            })
        })

        /* Scroller */
        $(document).scroll(function(event) {
            if ($(this).scrollTop() >= 200) {
                $('.scroller').addClass('show')
            } else {
                $('.scroller').removeClass('show')
            }
        })
        $('.scroller').click(function() {
            window.scrollTo(0, 0);
        })

        /* Validation Messages */
        let status = {!! json_encode(session('status'), JSON_HEX_TAG) !!} ?? {!! json_encode($errors->all(), JSON_HEX_TAG) !!};

        if (status.length !== 0) {
            $('#successToast').toast('show');
            $('#successToast').on('shown.bs.toast', function() {
                if (typeof(status) === 'string') {
                    $(this).find('.toast-header').addClass('bg-success')
                    $(this).find('#toast-header-title').text('Success Alert!')
                    $(this).find('#toast-header-icon').addClass('fa fa-check')
                    return
                }
                $(this).find('.toast-header').addClass('bg-danger text-white')
                $(this).find('#toast-header-title').text('Error Alert!')
                $(this).find('#toast-header-icon').addClass('fa fa-times-circle')
            });

        }

        /* Modal */
        // let errors = {!! json_encode($errors->all(), JSON_HEX_TAG) !!} ?? ''
        $('#base__modal-new').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget)
            let type = button.attr('modal-type')
            let route = button.attr('modal-route')
            let modalBody = $(this).find('.modal-body');
            let title = $(this).find('.modal-title');

            title.text(button.attr('modal-title'))

            $.ajax({
                    method: "GET",
                    url: route,
                    data: {
                        reqType: type,
                        _token: "{{ csrf_token() }}"
                    },
                    beforeSend: function(xhr) {
                        xhr.overrideMimeType("text/plain; charset=x-user-defined");
                        modalBody.html(`<div class="my-5 py-5 text-center w-100">
                                            <div class="spinner-grow text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <br>
                                            Loading...
                                        </div>
                                        `);
                    }
                })
                .done(function(data) {
                    if (data) {
                        modalBody.html(data);

                        modalBody.find('button[type="submit"]').text(type)

                        //Update Instructional Form
                        $('.update-file-switch').click(function() {
                            $('input[name="ir_file"]').toggle()
                            $('input[name="ir_file_placeholder"]').toggle()
                            $(this).find('small').is(':visible') ?
                                $(this).find('small').toggle() : ''
                        })

                        //Delete Instructional Form
                        $('.password-toggler').click(function() {
                            let $inp = $(this).parent().parent().find('input[name="password"]')

                            $inp.attr('type') === 'password' ?
                                $inp.attr('type', 'text') :
                                $inp.attr('type', 'password')
                        })
                    }
                })
                .fail(function() {
                    alert("error");
                })
                .always(function() {});

        })

    </script>
</body>

</html>
