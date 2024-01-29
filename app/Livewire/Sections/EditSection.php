<?php

namespace App\Livewire\Sections;

use App\Repositories\Sections\SectionRepository;
use Livewire\Attributes\On;
use Livewire\Component;

class EditSection extends Component
{

    public $section;
    public $name;
    public $description;


    #[On('getData')]
    public function getData($id, SectionRepository $sectionRepository)
    {
        $this->section = $sectionRepository->find($id);
        $this->name = $this->section->name;
        $this->description = $this->section->description;
    }


    public function update(SectionRepository $sectionRepository)
    {
        $sectionRepository->update($this->section, $this->validate());

        return redirect(route('section-list'))->with('primary', 'section has been updated');
    }

    public function render()
    {
        return view('livewire.sections.edit-section');
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'description' => 'nullable'
        ];
    }
}
