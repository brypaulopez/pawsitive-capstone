<div class="sidebar">
    <a id="" class="image" href="/dogs-admin"><img src="/img/pawsitive-logo2.webp" alt="pawsitive-logo" class="w-100"></a>
    @if (url()->current()==url('/dogs-admin'))
        <a id="admin-dogs" class="active" href="/dogs-admin">Dogs</a>
    @else
        <a id="admin-dogs" class="" href="/dogs-admin">Dogs</a>
    @endif
    @if (url()->current()==url('/vet-admin'))
        <a id="admin-partners" class="active" href="/vet-admin">Partners</a>
    @else
        <a id="admin-partners" class="" href="/vet-admin">Partners</a>
    @endif
    <a id="admin-btn" href="/logout">Logout</a>
</div>  