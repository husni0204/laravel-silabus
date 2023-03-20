<x-app-layout title="About">
    <p>Ini About Page</p>

    <form action="/about" method="POST">
        @csrf

        <button type="submit">Send</button>
    </form>
</x-app-layout>