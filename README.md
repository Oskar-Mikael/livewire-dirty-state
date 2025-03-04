
# Livewire Dirty State

[](https://github.com/GinoPane/composer-package-template/blob/master/README.md#composer-package-template)

[![Latest Stable Version](https://camo.githubusercontent.com/0b70d3ac3d9d0efbc7ee34fca2e6d5daf35da7041facd5b6c8dfae0384cd4206/68747470733a2f2f706f7365722e707567782e6f72672f67696e6f2d70616e652f636f6d706f7365722d7061636b6167652d74656d706c6174652f762f737461626c65)](https://packagist.org/packages/gino-pane/composer-package-template)  [![License](https://camo.githubusercontent.com/f2fa85409c37d9787a1858c28ea7c4e949742efe35763ea3d0741d698c4e23f7/68747470733a2f2f706f7365722e707567782e6f72672f67696e6f2d70616e652f636f6d706f7365722d7061636b6167652d74656d706c6174652f6c6963656e7365)](https://packagist.org/packages/gino-pane/composer-package-template)  [![composer.lock](https://camo.githubusercontent.com/33a85fa0998929f1cc9b5a814249f79bf4717dcf0543164f326523de068e7b7b/68747470733a2f2f706f7365722e707567782e6f72672f67696e6f2d70616e652f636f6d706f7365722d7061636b6167652d74656d706c6174652f636f6d706f7365726c6f636b)](https://packagist.org/packages/gino-pane/composer-package-template) 

Implements dirty states to your Livewire component, and automatically prompts your frontend on page refreshes.

## Requirements

-   PHP >= 8.1
-   Livewire >=3.6


# Installation

```
composer require oskar-mikael/livewire-dirty-state
```

# Usage
### Example
```
<?php

namespace App\Livewire;

use Livewire\Component;
use OskarMikael\LivewireDirtyState\Traits\HasDirtyState;

class TestComponent extends Component
{
    use HasDirtyState;

    public string $name;

    public string $email;

    public function render()
    {
        return view('livewire.test-component');
    }
}

```

State will be made dirty upon a property values' updated.

### Manually update the dirty state
```
// Set state to dirty
$this->setDirty()

// Remove dirty state
$this->setDirty(false)
```

# Useful Tools

[](https://github.com/GinoPane/composer-package-template/blob/master/README.md#useful-tools)

## Running Tests:

[](https://github.com/GinoPane/composer-package-template/blob/master/README.md#running-tests)

```
php vendor/bin/phpunit

```

or

```
composer test

```

# Contributing

1.  Fork it.
2.  Create your feature branch (git checkout -b my-new-feature).
3.  Make your changes.
4.  Run the tests, adding new ones for your own code if necessary (phpunit).
5.  Commit your changes (git commit -am 'Added some feature').
6.  Push to the branch (git push origin my-new-feature).
7.  Create new pull request.


# License

[](https://github.com/GinoPane/composer-package-template/blob/master/README.md#license)

The MIT License (MIT).  [License File](https://github.com/Oskar-Mikael/livewire-dirty-state/blob/main/README.md)
