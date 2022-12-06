@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">×</button>
        <h5>
            <i class="icon fas fa-ban"></i>
            {{ M::t('Oops Something went wrong') }}
        </h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
