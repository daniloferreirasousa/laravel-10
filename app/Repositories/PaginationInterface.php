<?php

namespace App\Repositories;

interface PaginationInterface
{
    /**
     * Undocumented function
     *
     * @return stdClass[]
     */
    public function item(): array;
    public function total():int;
    public function isFirstPage(): bool;
    public function isLastPage(): bool;
    public function currentPage(): int;
    public function getNumberNextPage(): int;
    public function getNumberPreviusPage(): int;
}