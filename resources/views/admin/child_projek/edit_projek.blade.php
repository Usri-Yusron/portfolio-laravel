<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Your Projek') }}
        </h2>
    </x-slot>

    {{-- form add projek --}}
    <div class="div_deg">
        <div class="form-container col-md-10">
            <form class="form" action="{{ url('saveEdit_projek', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input required="" name="title" id="title" type="text" value="{{ $data->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea required="" cols="50" rows="10" id="textarea" name="description">{{ $data->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input required="" name="link" id="link" type="text" value="{{ $data->link }}">
            </div>
            <div class="form-group">
                <label for="link">Image Before</label>
                <img width="150" src="/projek/{{ $data->image }}" alt="">
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
