<?php

namespace Theavuth9\FilamentShield\Resources\RoleResource\Pages;

use Theavuth9\FilamentShield\Resources\RoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRole extends ViewRecord
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
