@if (Session::has('success'))
<p class="alert alert-success">
    {{ Session::get('success') }}
</p>
@endif
