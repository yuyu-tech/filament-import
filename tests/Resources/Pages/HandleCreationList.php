<?php

namespace YuyuTech\FilamentImport\Tests\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use YuyuTech\FilamentImport\Actions\ImportAction;
use YuyuTech\FilamentImport\Actions\ImportField;
use YuyuTech\FilamentImport\Tests\Resources\Models\Post;
use YuyuTech\FilamentImport\Tests\Resources\PostResource;

class HandleCreationList extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            ImportAction::make('import')
                ->fields([
                    ImportField::make('title'),
                    ImportField::make('slug'),
                    ImportField::make('body'),
                ])
                ->handleRecordCreation(function ($data) {
                    return Post::create($data);
                }),
        ];
    }
}
