<?php

namespace NF_FU_VENDOR\Composer\Installers;

class Concrete5Installer extends \NF_FU_VENDOR\Composer\Installers\BaseInstaller
{
    protected $locations = array('core' => 'concrete/', 'block' => 'application/blocks/{$name}/', 'package' => 'packages/{$name}/', 'theme' => 'application/themes/{$name}/', 'update' => 'updates/{$name}/');
}
