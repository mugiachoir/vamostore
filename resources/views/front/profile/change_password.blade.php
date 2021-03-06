@extends('front.master')
@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">

                @include('front.common.user_sidebar')

                <div class="col-md-2">

                </div> <!-- // end col md 2 -->


                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Change Password</span><strong> </strong> </h3>

                        <div class="card-body">
                            <form method="post" action="{{ url('/user/profile/change-password/' . $user->id) }}"
                                novalidate>
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label class="info-title" for="current_password">Current Password <span>
                                        </span></label>
                                    <input type="password" id="current_password" name="current_password"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="password">New Password <span>
                                        </span></label>
                                    <input type="password" id="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror">
                                    @error('password')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label class="info-title" for="password_confirmation">Confirm Password <span>
                                        </span></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control">
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update password</button>
                                </div>



                            </form>
                        </div>



                    </div>

                </div> <!-- // end col md 6 -->

            </div> <!-- // end row -->

        </div>

    </div>
@endsection
