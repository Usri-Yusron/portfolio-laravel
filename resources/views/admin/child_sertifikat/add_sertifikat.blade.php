<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add your Sertifikat') }}
        </h2>
    </x-slot>

    {{-- form add projek --}}
    <div class="div_deg">
        <div class="form-container col-md-10">
            <form class="form" action="{{ url('upload_sertifikat') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input required="" name="title" id="title" type="text">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input required="" name="link" id="link" type="text">
            </div>
            <div class="form-group">
                <label for="by">Dikeluarkan Oleh</label>
                <input required="" name="by" id="by" type="text">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input required="" name="image" id="image" accept="image/*" type="file">
            </div>
            <button type="submit" value="Add projek" class="form-submit-btn">Submit</button>
            </form>
        </div>
    </div>


</x-app-layout>
