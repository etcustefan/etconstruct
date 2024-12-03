<?php

namespace App\Filament\Resources\MainGalleryResource\Pages;

use App\Filament\Resources\MainGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainGalleries extends ListRecords
{
    protected static string $resource = MainGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
