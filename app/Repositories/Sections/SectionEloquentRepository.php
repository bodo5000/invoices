<?php

namespace App\Repositories\Sections;

use App\Repositories\BaseEloquentRepository;

class SectionEloquentRepository extends BaseEloquentRepository implements SectionRepository
{
    public function createSection(array $data)
    {
        $data['created_by'] = auth()->user()->name;

        $this->create($data);
    }
}
