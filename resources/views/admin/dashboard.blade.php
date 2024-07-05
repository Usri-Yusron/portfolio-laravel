<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Your Projek') }}
        </h2>
    </x-slot>

    <div class="table_deg">
        <div class="container py-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-3 col-xs-12">
                                    <h4 class="title">Projek <span>List</span></h4>
                                </div>
                                <div class="col-sm-9 col-xs-12 text-right">
                                    <div class="btn_group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="btn btn-default" title="Reload"><i class="fa fa-sync-alt"></i></button>
                                        <a href="{{ url('add_projek') }}" class="btn btn-default" title="Add"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Link</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                {{-- perulangan ngambil data projek --}}
                                @foreach ($projek as $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td><a  href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                                        <td>
                                            <img height="130" width="130" src="projek/{{ $item->image }}" alt="">
                                        </td>
                                        <td>
                                            <ul class="action-list">
                                                <li><a href="{{ url('edit_projek', $item->id) }}" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                                <li><a onclick="confirmation(event)" href="{{ url('delete_projek', $item->id) }}" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>                                    
                                @endforeach
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-6 col-xs-6">showing <b>2</b> out of <b>{{ $totalEntries }}</b> entries</div>
                                <div class="col-sm-6 col-xs-6">
                                    {{-- bikin page per produk --}}
                                    {{-- jgan lupa ubah di file App\providers\AppServiceProvider.php di dalam function boot --}}
                                    {{-- di dalam controller nya juga hrus di ubah menjadi ::paginate(3) --}}
                                <div class="link_deg">
                                    {{ $projek->links() }}
                                </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- bagian body selesai --}}
</x-app-layout>
