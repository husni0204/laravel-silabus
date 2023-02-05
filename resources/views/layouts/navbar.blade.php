{{-- <ul class="navbar">
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</li>
    <li><a href="/profile">Profile</li>
    <li><a href="/post">Post</li>
</ul> --}}

{{-- menggunakan url dimanis --}}

<ul class="navbar">
    @foreach($navigations as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
</ul>