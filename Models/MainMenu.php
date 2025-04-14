<?php

namespace PageBlocks\App\Models;

use Boshnik\PageBlocks\Models\MenuModel;
use Boshnik\PageBlocks\Builders\Menu;
use Boshnik\PageBlocks\Builders\Tab;
use Boshnik\PageBlocks\Builders\Field;
use Boshnik\PageBlocks\Builders\Column;
use Boshnik\PageBlocks\Builders\Filter;

class MainMenu extends MenuModel
{
    public static function getMenu(): array
    {
        return [
            Menu::make('Forms')
                ->title('Сохраненные формы')
                ->description('Сохраненные формы')
                ->fields([
                    Field::make('Forms')
                        ->type('table')
                        ->fields([
                            Field::make('formname')
                                ->type('hidden'),
                            Field::make('createdon')
                                ->label('Date')
                                ->type('date')
                                ->width(50)
                                ->storage('timestamp')
                                ->dateFormat('Y-m-d, H:i')
                                ->readOnly(),
                            Field::make('IP')
                                ->width(50)
                                ->readOnly(),
                            Field::make('Name'),
                            Field::make('Email'),
                            Field::make('Message')
                                ->type('textarea')
                                ->height(50),
                            Field::make('File')->type('file'),
                        ])
                        ->columns([
                            Column::make('Name'),
                            Column::make('Email'),
                            Column::make('Createdon')
                                ->render('date')
                                ->format('Y-m-d, H:i'),
                            Column::make('Editedon')
                                ->render('date')
                                ->format('Y-m-d, H:i'),
                            Column::make('IP')
                        ])
                        ->filters([
                            Filter::make('formName')
                                ->label('Form name')
                                ->type('select')
                                ->options([
                                    'Job' => 'Job',
                                    'Contact' => 'Contact',
                                ]),
                            Filter::make('createdon')
                                ->label('Date'),
                        ]),
                ])
        ];
    }
}