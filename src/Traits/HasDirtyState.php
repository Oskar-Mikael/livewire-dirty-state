<?php

namespace OskarMikael\LivewireDirtyState\Traits;

trait HasDirtyState
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
        if ($field !== 'isDirty') {
            $this->setDirty();
        }
    }

    protected function setDirty(bool $dirty = true): void
    {
        $this->isDirty = $dirty;
    }
}
