<?php

namespace App\Services;

use App\Repositories\Interfaces\StatusRepositoryInterface;
use App\Services\Interfaces\StatusServiceInterface;

/**
 * Class StatusService
 * @package App\Services
 */
class StatusService implements StatusServiceInterface
{
    protected $statusRepository;

    public function __construct(StatusRepositoryInterface $statusRepository) {
        $this->statusRepository = $statusRepository;
    }

    public function getNameStatusById($id) {
        $status = $this->statusRepository->getStatusById($id);
        return $status->name;
    }
}
