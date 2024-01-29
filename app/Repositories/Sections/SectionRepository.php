<?php

namespace App\Repositories\Sections;

use App\Repositories\BaseRepository;

interface SectionRepository extends BaseRepository
{
    public function createSection(array $data);
}
