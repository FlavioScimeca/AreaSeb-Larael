@if (session('successMessage'))
    <div class="alert bg-success text-center  mx-auto w-75">
        {{ session('successMessage') }}
    </div>
@endif

@if (session('errorMessage'))
    <div class="alert alert-danger text-center  mx-auto w-75">
        {{ session('errorMessage') }}
    </div>
@endif