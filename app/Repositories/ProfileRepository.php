<?php

use App\Models\Profile;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class ProfileRepository extends BaseRepository
{
    protected Model $model;

    public function __construct()
    {
        $this->model = new Profile();
    }
}
