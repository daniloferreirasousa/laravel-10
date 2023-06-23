<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

class PaginationPresenter implements PaginationInterface
{
    public function __construct(
        protected LengthAwarePaginator $paginator,
    ) {}

    /**
     * Undocumented function
     *
     * @return stdClass[]
     */
    public function item(): array
    {

    }

    public function total():int
    {

    }

    public function isFirstPage(): bool
    {

    }

    public function isLastPage(): bool
    {

    }

    public function currentPage(): int
    {

    }

    public function getNumberNextPage(): int
    {

    }

    public function getNumberPreviusPage(): int
    {

    }
}
