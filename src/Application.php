<?php

/*
 * This file is part of the hongyukeji/package-builder.
 *
 * (c) hongyukeji <i@hongyukeji.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hongyukeji\PackageBuilder;

use Hongyukeji\PackageBuilder\Commands\BuildCommand;
use Hongyukeji\PackageBuilder\Commands\UpdateCommand;
use Symfony\Component\Console\Application as BasicApplication;

/**
 * Class Application.
 *
 * @author hongyukeji <i@hongyukeji.me>
 */
class Application extends BasicApplication
{
    /**
     * Application constructor.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name, $version)
    {
        parent::__construct($name, $version);

        $this->add(new BuildCommand());
    }
}
