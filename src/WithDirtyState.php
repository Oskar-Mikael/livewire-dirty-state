<?php

namespace OskarM\LivewireDirtyState;

use ReflectionClass;

trait WithDirtyState
{
    public bool $isDirty = false;

    public function renderedHasDirtyState(): void
    {
        $this->js(
            '
            window.addEventListener("beforeunload", function (e) {
                if ($wire.get("isDirty")) {
                    e.preventDefault();
                    e.returnValue = "";
                }
            });
            '
        );
    }

    public function updatingHasDirtyState($field, $value): void
    {
        $property = (new ReflectionClass($this))->getProperty($field);

        if (!empty($property->getAttributes(\OskarM\LivewireDirtyState\Attributes\IgnoreDirtyState::class))) {
            return;
        }
        
        if ($field !== 'isDirty') {
            $this->setDirty();
        }
    }

    protected function setDirty(bool $dirty = true): void
    {
        $this->isDirty = $dirty;
    }
}
