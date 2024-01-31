<?php

namespace App\Repositories\Invoices;

use App\Repositories\BaseEloquentRepository;

class InvoiceEloquentRepository extends BaseEloquentRepository implements InvoiceRepository
{
    public function createInvoice(array $data, $value_vat, $total)
    {
        $data['created_by'] = auth()->user()->email;
        $data['value_vat'] = $value_vat;
        $data['total'] = $total;
        $this->create($data);
    }
}
