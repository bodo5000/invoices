<div>
    <x-slot name="conentHeader">
        <x-conent-header title="invoice-list" main="Invoices" />
    </x-slot>

    <x-alert name="success" />
    <x-alert name="primary" />
    <x-alert name="warning" />
    <x-alert name="danger" />

    <livewire:invoices.create-invoice />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#invoice-create">
                        Add Invoice
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
                                <th>invoice_number</th>
                                <th>invoice_date</th>
                                <th>due_date</th>
                                <th>section</th>
                                <th>product</th>
                                <th>discount</th>
                                <th>rate_vat</th>
                                <th>value_vat</th>
                                <th>total</th>
                                <th>status</th>
                                <th>notes</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123at123</td>
                                <td>11-7-2014</td>
                                <td>11-8-2014</td>
                                <td>cc</td>
                                <td>ahly</td>
                                <td>3%</td>
                                <td><span class="tag tag-success">13%</span></td>
                                <td>2500</td>
                                <td>15000</td>
                                <td><span class="badge bg-success">paid Invoice</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>button</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
