<?php

namespace PageBlocks\App\Models;

use Boshnik\PageBlocks\Builders\Block;
use Boshnik\PageBlocks\Builders\Column;
use Boshnik\PageBlocks\Builders\Field;
use Boshnik\PageBlocks\Builders\Panel;
use Boshnik\PageBlocks\Builders\Tab;
use Boshnik\PageBlocks\Builders\UTM;

class Resource extends Model
{
    public static function getBlocks(): array
    {
        return [
            Block::make('Slider')
                ->fields([
                    Field::make('Slider')
                    ->type('table')
                    ->fields([
                        Field::make('Background')
                            ->type('image')
                            ->sourcePath('/assets/images/')
                            ->required(),
                        Field::make('Title')->required(),
                        Field::make('Description')->type('textarea'),
                    ])
                    ->columns([
                        Column::make('Background')
                            ->width(100)
                            ->render('image'),
                        Column::make('Title')
                    ])
                    ->pageSize(10)
                ]),
            Block::make('Services')
                ->fields([
                    Field::make('Services')
                        ->type('table')
                        ->fields([
                            Field::make('Background')
                                ->type('colorpicker')
                                ->width(50)
                                ->required(),
                            Field::make('Color')
                                ->type('colorpicker')
                                ->width(50)
                                ->default('#ffffff')
                                ->required(),
                            Field::make('Type')
                                ->type('select')
                                ->options([
                                    'image' => 'Image',
                                    'text' => 'Text',
                                ])
                                ->required(),
                            Field::make('Image')
                                ->type('image')
                                ->sourcePath('/assets/images/')
                                ->required()
                                ->hidden('type', '!=', 'image'),
                            Field::make('Title')
                                ->required()
                                ->hidden('type', '!=', 'text'),
                            Field::make('Position')
                                ->type('select')
                                ->options([
                                    '' => 'Center',
                                    'mt-auto' => 'Bottom'
                                ])
                                ->required()
                                ->hidden('type', '!=', 'text'),
                            Field::make('Description')
                                ->type('richtext')
                                ->hidden('type', '!=', 'text'),
                            Field::make('resource_id')
                                ->label('Resource')
                                ->type('resourcelist')
                                ->hidden('type', '=', ''),
                        ])
                        ->columns([
                            Column::make('Colors')->group([
                                Column::make('Background')
                                    ->render('color')
                                    ->withLabel(),
                                Column::make('Color')
                                    ->width(100)
                                    ->render('color')
                                    ->withLabel('Color text'),
                            ]),
                            Column::make('Title / Image')
                                ->renderIf([
                                    Column::make('Title'),
                                    Column::make('Image')->render('image')
                                ])
                                ->default('---')
                        ])
                ]),
        ];
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