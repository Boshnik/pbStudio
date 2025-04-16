<?php

namespace PageBlocks\App\Models;

use Boshnik\PageBlocks\Models\ResourceModel;
use Boshnik\PageBlocks\Builders\Block;
use Boshnik\PageBlocks\Builders\UTM;
use Boshnik\PageBlocks\Builders\Tab;
use Boshnik\PageBlocks\Builders\Panel;
use Boshnik\PageBlocks\Builders\Field;
use Boshnik\PageBlocks\Builders\Column;

class Resource extends ResourceModel
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

            Block::make('Hero')
                ->fields([
                    Field::make('Title')->required(),
                    Field::make('Description')
                        ->type('richtext')
                        ->required(),
                ]),

            Block::make('Team')
                ->fields([
                    Field::make('Team')
                        ->type('table')
                        ->fields([
                            Field::make('Type')
                                ->type('select')
                                ->options([
                                    'image' => 'Image',
                                    'text' => 'Text',
                                    'vacancy' => 'Vacancy',
                                ])
                                ->default('image')
                                ->required(),

                            Field::make('Image')
                                ->type('image')
                                ->sourcePath('/assets/images/')
                                ->required()
                                ->hidden('type', '!=', 'image'),

                            Field::make('Name')
                                ->width(50)
                                ->required()
                                ->hidden('type', '!=', 'image'),

                            Field::make('Position')
                                ->width(50)
                                ->required()
                                ->hidden('type', '!=', 'image'),

                            Field::make('Title')
                                ->required()
                                ->hidden('type', '=', 'image'),

                            Field::make('Description')
                                ->type('richtext')
                                ->required()
                                ->hidden('type', '=', 'image'),

                            Field::make('Button')
                                ->type('button')
                                ->required()
                                ->hidden('type', '!=', 'vacancy'),
                        ])
                        ->columns([
                            Column::make('Image')
                                ->label('Image / Title')
                                ->renderIf([
                                    Column::make('Image')->render('image'),
                                    Column::make('Title')
                                ]),

                            Column::make('Team')->group([
                                Column::make('Name'),
                                Column::make('Position')
                            ])
                        ])
                ]),

            Block::make('Portfolio')
                ->fields([
                    Field::make('Items')
                        ->type('table')
                        ->fields([
                            Field::make('Title')
                                ->required(),

                            Field::make('Image')
                                ->type('image')
                                ->sourcePath('/assets/images/')
                                ->required(),
                        ])
                        ->columns([
                            Column::make('Title'),
                            Column::make('Image')
                                ->render('image')
                                ->width(100),
                        ])
                ]),

            Block::make('Visual Impact')
                ->permissions([
                    'resource' => 4
                ])
                ->fields([
                    Field::make('Title')->required(),
                    Field::make('Description')
                        ->type('richtext')
                        ->required(),
                    Field::make('Image')
                        ->type('image')
                        ->sourcePath('/assets/images/')
                        ->width(80)
                        ->required(),
                    Field::make('Button')
                        ->type('button')
                        ->width(20)
                        ->required()
                ]),

            Block::make('Headline First')
                ->permissions([
                    'resource' => 4
                ])
                ->fields([
                    Field::make('Title')
                        ->width(80)
                        ->required(),
                    Field::make('Button')
                        ->type('button')
                        ->width(20)
                        ->required(),
                    Field::make('Description')
                        ->type('richtext')
                        ->required()
                ]),

            Block::make('Balanced Content')
                ->permissions([
                    'resource' => 4
                ])
                ->fields([
                    Field::make('Image')
                        ->type('image')
                        ->sourcePath('/assets/images/')
                        ->width(80)
                        ->required(),

                    Field::make('Button')
                        ->type('button')
                        ->width(20)
                        ->required(),

                    Field::make('Title')
                        ->required(),

                    Field::make('Description')
                        ->type('richtext')
                        ->required(),
                ]),

            Block::make('Key Benefits')
                ->permissions([
                    'resource' => 4
                ])
                ->fields([
                    Field::make('Title')->required(),
                    Field::make('Description')
                        ->type('richtext')
                        ->required(),
                    Field::make('Button')
                        ->type('button')
                        ->required(),
                ]),

            Block::make('Contacts')
                ->fields([
                    Field::make('Address')
                        ->required(),

                    Field::make('Phone')
                        ->width(50)
                        ->required(),

                    Field::make('Email')
                        ->width(50)
                        ->required(),

                    Field::make('Map')
                        ->type('map')
                        ->center('50.4500336,30.5241361')
                        ->layer('dark')
                        ->icon('/assets/images/logo.svg')
                        ->iconSize('25,25')
                        ->zoom(6)
                        ->required(),
                ])
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