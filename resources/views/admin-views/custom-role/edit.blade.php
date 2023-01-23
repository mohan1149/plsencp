@extends('layouts.admin.app')

@section('title', translate('update employee role'))

@push('css_or_js')

@endpush

@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <h1 class="page-header-title">
            <span class="page-header-icon">
                <img src="{{asset('assets/admin/img/employee.png')}}" class="w--24" alt="mail">
            </span>
            <span>
                {{translate('Employee Role Setup')}}
            </span>
        </h1>
    </div>

    <!-- Content Row -->
    <div class="card">
        <div class="card-body">
            <form id="submit-create-role" action="{{route('admin.custom-role.update',[$role['id']])}}" method="post"
                    style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                @csrf
                <div class="max-w-500px">
                    <div class="form-group">
                        <label class="form-label">{{translate('role_name')}}</label>
                        <input type="text" name="name" value="{{$role['name']}}" class="form-control" id="name"
                                aria-describedby="emailHelp"
                                placeholder="{{translate('Ex')}} : {{translate('Store')}}">
                    </div>
                </div>

<!--                <div class="d-flex">
                    <h5 class="input-label m-0 text-capitalize">{{translate('module_permission')}} : </h5>
                    <div class="check-item pb-0 w-auto">
                        <div class="form-group form-check form&#45;&#45;check m-0 ml-2">
                            <input type="checkbox" name="modules[]" value="account" class="form-check-input"
                                    id="select-all">
                            <label class="form-check-label ml-2" for="select-all">{{ translate('Select All') }}</label>
                        </div>
                    </div>
                </div>-->

                <div class="d-flex">
                    <h5 class="input-label m-0 text-capitalize">{{translate('module_permission')}} : </h5>
                    <div class="check-item pb-0 w-auto">
                        <input type="checkbox" id="select_all">
                        <label class="title-color mb-0 pl-2" for="select_all">{{ translate('select_all')}}</label>
                    </div>
                </div>

                <div class="check--item-wrapper">
                    @foreach(MANAGEMENT_SECTION as $section)
                        <div class="check-item">
                            <div class="form-group form-check form--check">
                                <input type="checkbox" name="modules[]" value="{{$section}}" class="form-check-input module-permission"
                                        {{in_array($section,(array)json_decode($role['module_access']))?'checked':''}}
                                        id="{{$section}}">
                                <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="{{$section}}">{{translate($section)}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="btn--container justify-content-end mt-4">
                    <button type="reset" class="btn btn--reset">{{translate('reset')}}</button>
                    <button type="submit" class="btn btn--primary">{{translate('update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script_2')
<script>

    $('#submit-create-role').on('submit',function(e){

        var fields = $("input[name='modules[]']").serializeArray();
        if (fields.length === 0)
        {
            toastr.warning('{{ translate('select_minimum_one_selection_box') }}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
            return false;
        }else{
            $('#submit-create-role').submit();
        }
    });
</script>


<script>
    /*$('#select-all').on('change', function(){
        if(this.checked === true) {
            $('.check--item-wrapper .check-item .form-check-input').attr('checked', true)
        } else {
            $('.check--item-wrapper .check-item .form-check-input').attr('checked', false)
        }
    })*/
    $("#select_all").on('change', function (){
        if($("#select_all").is(":checked") === true){
            //console.log($("#select_all").is(":checked"));
            $(".module-permission").prop("checked", true);
        }else{
            $(".module-permission").removeAttr("checked");
        }
    });
</script>

@endpush
