<?php

namespace App\Livewire\Sections;

use App\Repositories\Sections\SectionRepository;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layout.dashboard.index')]
#[Title('sections-list')]
class SectionsList extends Component
{

    use WithPagination;

    #[Computed()]
    public function allSections(SectionRepository $sectionRepository)
    {
        return $sectionRepository->getDesc_Paginating(5);
    }

    public function render()
    {
        return view('livewire.sections.sections-list');
    }
}
