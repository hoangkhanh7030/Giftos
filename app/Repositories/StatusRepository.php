<?php

namespace App\Repositories;

use App\Models\Status;
use App\Repositories\Interfaces\StatusRepositoryInterface;

/**
 * Class StatusRepository
 * @package App\Repositories
 */
class StatusRepository implements StatusRepositoryInterface
{
    public function getStatusById($id)
    {
        $status = Status::find($id);
        return $status;
    }
}
