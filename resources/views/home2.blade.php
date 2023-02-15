<x-app-layout>
    {{-- @section('styles')
        <style>
            body {
                background-color: indigo;
            }
        </style>
    @endsection --}}

    @slot('styles')
        <style>
            body {
                background-color: indigo;
            }
        </style>
    @endslot

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Selamat Datang
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eveniet cupiditate ratione odio perferendis aspernatur, deleniti dolore, inventore accusantium ad fugiat distinctio a possimus voluptatum. At earum asperiores laborum dicta?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>