<?php

namespace App\Services;

use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class SupportService 
{
    public function __construct(
        protected SupportRepositoryInterface $repository
    ) { }

    public function getAll(string|int $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string|int $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->new($dto);
    }

    public function delete(string $id): bool|null
    {
        return $this->repository->delete($id);
    }


}