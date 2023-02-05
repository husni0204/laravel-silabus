<x-app-layout title="About">
    <p>Ini About Page</p>

    <form action="/about" method="POST">
        @csrf

        <button type="submit">Kirim</button>
    </form>
</x-app-layout>