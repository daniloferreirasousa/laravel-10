<?php

namespace App\DTO\Supports;

use App\Http\Requests\StoreUpdateSupport;
use App\Enums\SupportStatus;

class UpdateSupportDTO 
{
    public function __construct(
        public string $id,
        public string $subject,
        public SupportStatus $status,
        public string $body,
    ) {}

    public static function makeFromRequest(StoreUpdateSupport $request, string $id = null): self
    {
        return new self(
            $id ?? $request->id,
            $request->subject,
            SupportStatus::A,
            $request->body
        );
    }
}