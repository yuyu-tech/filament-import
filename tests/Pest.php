<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use YuyuTech\FilamentImport\Tests\Resources\Pages\CommonTestList;
use YuyuTech\FilamentImport\Tests\TestCase;
use Livewire\Livewire;

uses(TestCase::class)->in(__DIR__);

function livewire($list = null)
{
    return Livewire::test($list ?? CommonTestList::class);
}

function csvFiles($rows = 10, $extraRow = [])
{
    Storage::fake('uploads');

    $content = collect('Title,Slug,Body');
    for ($i = 0; $i < $rows; $i++) {
        $content = $content->push(implode(',', [
            fake()->title,
            fake()->slug,
            fake()->text(500),
        ]));
    }

    if (count($extraRow) > 0) {
        $content = $content->push(collect($extraRow)->join(','));
    }

    return UploadedFile::fake()
        ->createWithContent(
            name: 'file.csv',
            content: $content->join("\n")
        );
}
