@extends('frontend.main_master')
@section('content')
<div class="body-content">
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))? 
                url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.png') }}" height="100%" width="100%"><br><br>
              
              <ul class="list-group list-group-flush">

                <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                <a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>

              </ul>
        </div>   {{--col-md-2-end--}}

        <div class="col-md-2">

        </div>   {{--col-md-2-end--}}

        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center">
                    <span class="text-danger">
                        Hi...
                    </span><strong>{{Auth::User()->name}}</strong>
                    Update Your Profile
                </h3>
                <div class="card-body">
                    <form action="{{ route('user.profile.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">User Name</label>
                            <input type="text"  name="name" value="{{ $user->name }}"class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">User Email</label>
                            <input type="email"  name="email" value="{{ $user->email }}"class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">User Phone</label>
                            <input type="text"  name="phone" value="{{ $user->phone }}"class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">User Image</label>
                            <input type="file"  name="profile_photo_path" value="{{ $user->profile_photo_path }}"
                            class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            
                        <button type="submit" class="btn btn-success">Update Profile</button>

                        </div>
                                                                

                        
                        
                    </form>
                </div>
            </div>
        </div>   {{--col-md-6-end--}}

    </div> {{-- row end--}}
</div>

</div>


@endsection