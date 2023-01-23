
<div class="product-card card" onclick="quickView('{{$product->id}}')">
    <div class="card-header inline_product clickable p-0">
    @if (!empty(json_decode($product['image'],true)))
<<<<<<< HEAD
        <img src="{{asset('storage/app/public/product')}}/{{json_decode($product['image'], true)[0]}}"
            onerror="this.src='{{asset('assets/admin/img/160x160/2.png')}}'" class="w-100 h-100 object-cover aspect-ratio-80">
=======
<<<<<<< HEAD
        <img src="{{asset('storage/product')}}/{{json_decode($product['image'], true)[0]}}"
            onerror="this.src='{{asset('public/assets/admin/img/160x160/2.png')}}'" class="w-100 h-100 object-cover aspect-ratio-80">
=======
        <img src="{{asset('storage/app/public/product')}}/{{json_decode($product['image'], true)[0]}}"
            onerror="this.src='{{asset('assets/admin/img/160x160/2.png')}}'" class="w-100 h-100 object-cover aspect-ratio-80">
>>>>>>> beaaee64c0f936c7adcc316fa23d7d3c6f0980df
>>>>>>> 2cbe6baa85b1dcb6aeeab4536c7e05ed48084794
    @else
        <img src="{{asset('assets/admin/img/160x160/2.png')}}" class="w-100 h-100 object-cover aspect-ratio-80"
        >
    @endif
    </div>

    <div class="card-body inline_product text-center p-1 clickable">
        <div style="position: relative;" class="product-title1 text-dark font-weight-bold">
            {{ Str::limit($product['name'], 12) }}
        </div>
        <div class="justify-content-between text-center">
            <div class="product-price text-center">
                {{ Helpers::set_symbol($product['price']- \App\CentralLogics\Helpers::discount_calculate($product, $product['price'])) }}
            </div>
        </div>
    </div>
</div>

