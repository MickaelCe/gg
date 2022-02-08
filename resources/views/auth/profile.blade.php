@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid profil">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="card">

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body profilbg">

                                <div class="input-group mb-3 border-0">
                                    <input type="text" name="name"
                                           class="form-control border-0 bg-transparent loginput secondary @error('name') is-invalid @enderror"
                                           placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required>
                                    <div class="input-group-append loginput secondary">
                                        <div class="input-group-text secondary bg-transparent border-0">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    @error('name')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="email" name="email"
                                           class="form-control border-0 bg-transparent loginput secondary @error('email') is-invalid @enderror"
                                           placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                                    <div class="input-group-append loginput secondary">
                                        <div class="input-group-text secondary bg-transparent border-0">
                                            <span class="fas fa-envelope border-0"></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" name="password"
                                           class="form-control border-0 bg-transparent loginput secondary @error('password') is-invalid @enderror"
                                           placeholder="{{ __('New password') }}">
                                    <div class="input-group-append loginput secondary">
                                        <div class="input-group-text secondary bg-transparent border-0">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" name="password_confirmation"
                                           class="form-control  border-0 bg-transparent loginput secondary @error('password_confirmation') is-invalid @enderror"
                                           placeholder="{{ __('New password confirmation') }}"
                                           autocomplete="new-password">
                                    <div class="input-group-append loginput secondary">
                                        <div class="input-group-text secondary bg-transparent border-0">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="input-group mb-3 d-flex flex-column align-items-center">
                                <div class="imgprofile action">
                                    <label>{{ __('New profile picture') }}</label>
                                    <label>{{ __('Current profile picture :') }}</label>
                                </div>    
                                <div class="imgprofile">
                                    <input type="file" name="img_prfl"
                                           class="@error('img_prfl') is-invalid @enderror">
                                    <img src="{{asset('/storage/'.Auth::user()->img_prfl)}}" width='70px'>
                                </div>
                                </div>
                            </div>
                            <div class="card-footer profilbg">
                                <button type="submit" class="btn btn-action">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('scripts')
    @if ($message = Session::get('success'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            toastr.success('{{ $message }}')
        </script>
    @endif
@endsection