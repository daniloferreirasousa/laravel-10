<?php

namespace App\Repositories;

use App\Repositories\SupportRepositoryInterface;
use stdClass;
use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Models\Support;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function __construct(
        protected Support $model
    ) { }

    public function getAll(string $filter = null): array
    {
        return $this->model
                        ->where(function ($query) use ($filter) {
                            if ($filter) {
                                $query->where('subject', $filter);
                                $query->orWhere('body', 'like', "%{$filter}%");
                            }
                        })
                        ->all()
                        ->toArray();
    }
    public function findOne(string $id): stdClass|null
    {
        $support = $this->model->find($id);
        if(!$support) {
            return null;
        }

        return (object) $support->toArray();
    }

    public function new(CreateSupportDTO $dto): stdClass
    {

    }
    public function update(UpdateSupportDTO $dto): stdClass|null
    {

    }
    public function delete(string $id): void
    {
        $this->model->findOrFail($id)->delete();
    }
}