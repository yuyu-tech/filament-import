<?php

namespace YuyuTech\FilamentImport;

use YuyuTech\FilamentImport\Actions\ImportField as ActionsImportField;

/**
 * @deprecated moved into ```YuyuTech\FilamentImport\Actions\ImportField```
 */
class ImportField extends ActionsImportField
{
    public static function make(string $name): self
    {
        return new self($name);
    }
}
