
<div class="card-header border-0 order-header-shadow">
    <h5 class="card-title d-flex justify-content-between flex-grow-1">
        <span>{{translate('top_customer')}}</span>
        <a href="{{route('admin.customer.list')}}" class="fz-12px font-medium text-006AE5">{{translate('view_all')}}</a>
    </h5>
</div>

<!-- Body -->
<div class="card-body">
    <div class="top--selling">
        @foreach($top_customer as $key=>$item)
            @if(isset($item->customer))
                <a class="grid--card" href="{{route('admin.customer.view',[$item['user_id']])}}">
<<<<<<< HEAD
                <img src="{{asset('storage/app/public/profile/'.$item->customer->image  ?? '' )}}"
                        onerror="this.src='{{asset('assets/admin/img/admin.jpg')}}'"
=======
<<<<<<< HEAD
                <img src="{{asset('storage/profile/'.$item->customer->image  ?? '' )}}"
                        onerror="this.src='{{asset('public/assets/admin/img/admin.jpg')}}'"
=======
                <img src="{{asset('storage/app/public/profile/'.$item->customer->image  ?? '' )}}"
                        onerror="this.src='{{asset('assets/admin/img/admin.jpg')}}'"
>>>>>>> beaaee64c0f936c7adcc316fa23d7d3c6f0980df
>>>>>>> 2cbe6baa85b1dcb6aeeab4536c7e05ed48084794
                        alt="{{$item->customer->name}} image">
                <div class="cont pt-2">
                    <h6>{{$item->customer['f_name']??'Not exist'}}</h6>
                    <span>{{$item->customer['phone']}}</span>
                </div>
                <div class="ml-auto">
                    <span class="badge badge-soft">{{ translate('Orders') }} : {{$item['count']}}</span>
                </div>
            </a>
            @endif
        @endforeach
    </div>
</div>
<!-- End Body -->

