<?php

namespace Bitsnio\FilamentSpatieRolesPermissions\Resources\RoleResource\Pages;

use Bitsnio\FilamentSpatieRolesPermissions\Resources\RoleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return config('filament-spatie-roles-permissions.should_redirect_to_index.roles.after_create', false)
            ? $resource::getUrl('index')
            : parent::getRedirectUrl();
    }
}
