<?php

namespace App\Filament\Panels\Tenant\Resources;

use App\Filament\Panels\Tenant\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Resources\Resource;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
        ];
    }
}
