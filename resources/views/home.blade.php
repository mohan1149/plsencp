@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        @php($restaurant_logo=\App\Model\BusinessSetting::where(['key'=>'logo'])->first()->value)
                        <img class="" style="width: 200px!important"
<<<<<<< HEAD
=======
<<<<<<< HEAD
                             onerror="this.src='{{asset('public/assets/admin/img/160x160/img2.jpg')}}'"
                             src="{{asset('storage/restaurant/'.$restaurant_logo)}}"
=======
>>>>>>> 2cbe6baa85b1dcb6aeeab4536c7e05ed48084794
                             onerror="this.src='{{asset('assets/admin/img/160x160/img2.jpg')}}'"
                             src="{{asset('storage/app/public/restaurant/'.$restaurant_logo)}}"
>>>>>>> beaaee64c0f936c7adcc316fa23d7d3c6f0980df
                             alt="Logo">
                        <br><hr>

                        <a class="btn btn-primary" href="{{route('admin.dashboard')}}">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
