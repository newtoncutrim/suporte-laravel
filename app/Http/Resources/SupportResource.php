<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => (int) $this->id,
            'assunto' => $this->subject,
            'status' => $this->status,
            'corpo' => $this->body,
            'data_criacao' => Carbon::make($this->created_at)->format('Y-m-d')

        ];
    }
}
