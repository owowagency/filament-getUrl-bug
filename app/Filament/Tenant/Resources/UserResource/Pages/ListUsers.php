<?php

namespace App\Filament\Panels\Tenant\Resources\UserResource\Pages;

use App\Filament\Panels\Tenant\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
}
