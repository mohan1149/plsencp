<div class="border-bottom"></div>
@php($array=[])
@foreach($conversations as $conv)
    @if(in_array($conv->user_id,$array)==false)
        @php(array_push($array,$conv->user_id))
        @php($user=\App\User::find($conv->user_id))
        @php($unchecked=\App\Model\Conversation::where(['user_id'=>$conv->user_id,'checked'=>0])->count())

        @if(isset($user))
            <div
                class="sidebar_primary_div d-flex border-bottom pb-2 pt-2 pl-md-1 pl-0 justify-content-between align-items-center customer-list {{$unchecked!=0?'conv-active':''}}"
                onclick="viewConvs('{{route('admin.message.view',[$conv->user_id])}}','customer-{{$conv->user_id}}')"
                style="cursor: pointer; border-radius: 10px;margin-top: 2px;"
                id="customer-{{$conv->user_id}}">
                <div class="avatar avatar-lg avatar-circle">
                    <img class="avatar-img" style="width: 54px;height: 54px"
<<<<<<< HEAD
                         src="{{asset('storage/app/public/profile/'.$user['image'])}}"
                         onerror="this.src='{{asset('assets/admin')}}/img/160x160/img1.jpg'"
=======
<<<<<<< HEAD
                         src="{{asset('storage/profile/'.$user['image'])}}"
                         onerror="this.src='{{asset('public/assets/admin')}}/img/160x160/img1.jpg'"
=======
                         src="{{asset('storage/app/public/profile/'.$user['image'])}}"
                         onerror="this.src='{{asset('assets/admin')}}/img/160x160/img1.jpg'"
>>>>>>> beaaee64c0f936c7adcc316fa23d7d3c6f0980df
>>>>>>> 2cbe6baa85b1dcb6aeeab4536c7e05ed48084794
                         alt="Image Description">
                </div>
                <h5 class="sidebar_name mb-0 mr-3 d-none d-md-block">
                    {{$user['f_name'].' '.$user['l_name']}} <span
                        class="{{$unchecked!=0?'badge badge-info':''}}" id="counter-{{$conv->user_id}}">{{$unchecked!=0?$unchecked:''}}</span>
                </h5>
            </div>
        @endif

    @endif
@endforeach
