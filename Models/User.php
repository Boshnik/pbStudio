<?php

namespace PageBlocks\App\Models;

use Boshnik\PageBlocks\Models\UserModel;
use Boshnik\PageBlocks\Builders\Block;
use Boshnik\PageBlocks\Builders\UTM;
use Boshnik\PageBlocks\Builders\Tab;
use Boshnik\PageBlocks\Builders\Panel;
use Boshnik\PageBlocks\Builders\Field;
use Boshnik\PageBlocks\Builders\Column;

class User extends UserModel
{
    public static function getBlocks(): array
    {
        return [];
    }

    public static function getTabs(): array
    {
        return [];
    }

    public static function getPanels(): array
    {
        return [];
    }

    public static function getUTM(): array
    {
        return [];
    }
}