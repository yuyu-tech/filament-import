<?php

namespace YuyuTech\FilamentImport\Concerns;

trait HasActionUniqueField
{
    protected bool|string $uniqueField = false;

    public function uniqueField(bool|string $uniqueField): static
    {
        $this->uniqueField = $uniqueField;

        return $this;
    }
}
