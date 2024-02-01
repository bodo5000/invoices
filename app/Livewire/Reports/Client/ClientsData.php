<?php

namespace App\Livewire\Reports\Client;

use App\Models\Invoice;
use App\Models\Section;
use App\Repositories\Invoices\InvoiceRepository;
use App\Repositories\Sections\SectionRepository;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layout.dashboard.index')]
#[Title('client-report')]
class ClientsData extends Component
{
    use WithPagination;

    public $search = '';

    #[Computed()]
    public function invoices(SectionRepository $sectionRepository)
    {
        return $sectionRepository->getInvoicesBySection($this->search);
    }

    #[Computed()]
    public function sections(SectionRepository $sectionRepository)
    {
        return $sectionRepository->getAll();
    }

    public function render()
    {
        return view('livewire.reports.client.clients-data');
    }
}
