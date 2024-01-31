<?php

namespace App\Repositories\Invoices;

use App\Repositories\BaseRepository;

interface InvoiceRepository extends BaseRepository
{
    public function createInvoice(array $data, $value_vat, $total);
}
