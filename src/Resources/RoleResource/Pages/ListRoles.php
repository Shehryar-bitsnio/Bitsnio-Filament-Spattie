<?php

namespace Bitsnio\FilamentSpatieRolesPermissions\Resources\RoleResource\Pages;

use Bitsnio\FilamentSpatieRolesPermissions\Resources\RoleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
