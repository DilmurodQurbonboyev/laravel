<div class="form-group">
    <a class="btn btn-danger" href="{{ url()->previous() }}">
        <i class="fa fa-angle-double-left"></i>
        {{ M::t('Back')}}
    </a>
    <button type="reset" class="btn btn-warning">
        <i class="fas fa-sync-alt"></i>
        {{ M::t('Clear All')}}
    </button>
    <button type="submit" class="btn btn-primary">
        {{ M::t('Add') }}
    </button>
</div>
