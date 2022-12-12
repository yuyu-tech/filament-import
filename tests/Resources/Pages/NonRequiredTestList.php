<?php

namespace YuyuTech\FilamentImport\Tests\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use YuyuTech\FilamentImport\Actions\ImportAction;
use YuyuTech\FilamentImport\Actions\ImportField;
use YuyuTech\FilamentImport\Tests\Resources\PostResource;

class NonRequiredTestList extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            ImportAction::make('import')
                ->fields([
                    ImportField::make('title'),
                    ImportField::make('slug')
                        ->rules('min:6')
                        ->required(),
                    ImportField::make('body')
                        ->required(),
                ])
                ->mutateBeforeCreate(function ($data) {
                    $data['title'] = '';

                    return $data;
                }),
        ];
    }
}
