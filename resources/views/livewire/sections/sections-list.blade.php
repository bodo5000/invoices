<div>
    <x-slot name="conentHeader">
        <x-conent-header title="sections" main="Settings" />
    </x-slot>

    <x-alert name="success" />

    <livewire:sections.create-section />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#section-create">
                        Add Section
                    </button>


                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>section_name</th>
                                <th>created_by</th>
                                <th>description</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($this->allSections as $index => $section)
                                <tr wire:key{{ $section->id }}>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $section->name }}</td>
                                    <td>{{ $section->created_by }}</td>
                                    <td>{{ $section->description ?? 'no description' }}</td>
                                    <td>{{ date_format($section->created_at, 'd/m/Y') }}</td>
                                    <td>{{ date_format($section->updated_at, 'd/m/Y H:i:s') }}</td>
                                    <td>
                                        <button wire:click="edti({{ $category->id }})" title="edit" type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button title="delete" type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>there is no section yet</tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    {{ $this->allSections->links() }}

</div>
