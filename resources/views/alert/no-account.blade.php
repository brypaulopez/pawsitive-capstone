@if (session()->has('no-account'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('no-account')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif