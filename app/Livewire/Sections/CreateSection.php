<?php

namespace App\Livewire\Sections;

use App\Models\Section;
use App\Repositories\Sections\SectionRepository;
use Livewire\Component;

class CreateSection extends Component
{
    public $name;
    public $description;
    public $created_by;


    public function create(SectionRepository $sectionRepository)
    {
        $data = $this->validate();
        $sectionRepository->createSection($data);
        $this->reset('name', 'description');

        return redirect(route('section-list'))->with('success', 'new section has been added');
    }

    public function resetModal()
    {
        $this->resetValidation();
        $this->reset('name', 'description');
    }

    public function render()
    {
        return view('livewire.sections.create-section');
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:sections,name|min:3|max:50',
            'description' => 'nullable'
        ];
    }
}
