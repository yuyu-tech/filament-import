<?php

namespace YuyuTech\FilamentImport\Actions;

use YuyuTech\FilamentImport\Concerns\HasFieldHelper;
use YuyuTech\FilamentImport\Concerns\HasFieldLabel;
use YuyuTech\FilamentImport\Concerns\HasFieldMutation;
use YuyuTech\FilamentImport\Concerns\HasFieldPlaceholder;
use YuyuTech\FilamentImport\Concerns\HasFieldRequire;
use YuyuTech\FilamentImport\Concerns\HasFieldValidation;

class ImportField
{
    use HasFieldMutation;
    use HasFieldHelper;
    use HasFieldPlaceholder;
    use HasFieldLabel;
    use HasFieldRequire;
    use HasFieldValidation;

    public function __construct(private string $name)
    {
    }

    public static function make(string $name): self
    {
        return new self($name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
