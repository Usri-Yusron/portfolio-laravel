<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Your Certificate') }}
        </h2>
    </x-slot>

    {{-- form add projek --}}
    <div class="div_deg">
        <div class="form-container col-md-10">
            <form class="form" action="{{ url('saveEdit_sertifikat', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input required="" name="title" id="title" type="text" value="{{ $data->title }}">
            </div>
            <div class="form-group">
                <label for="link">Di Keluarkan Oleh</label>
                <input required="" name="by" id="by" type="text" value="{{ $data->by }}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input required="" name="link" id="link" type="text" value="{{ $data->link }}">
            </div>
            <div class="form-group">
                <label for="link">Image Before</label>
                <img width="150" src="/sertifikat/{{ $data->image }}" alt="">
                {{-- <input required="" name="link" id="link" type="text" value="{{ $data->link }}"> --}}
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input  name="image" id="image" accept="image/*" type="file" value="{{ $data->image }}">
            </div>
            <button type="submit" value="Add projek" class="form-submit-btn">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
