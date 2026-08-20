<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\RoleResource;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Resources\Json\JsonResource;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'is_email_verified' => $this->isEmailVerified(),
            'roles' =>  RoleResource::collection($this->roles),
            'permissions' => PermissionResource::collection($this->permissions),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
