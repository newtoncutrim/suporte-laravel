<?php
namespace App\DTO;

use App\Http\Requests\StoreCreateRequest;

class CreateSupportDTO {
    public function __construct(/* public string $id,  */public string $subject, public string $status, public string $body)
    {}

    public static function makeFromRequest(StoreCreateRequest $request): self
    {
        return new self($request->subject, $request->status, $request->body);
    }
}
?>
