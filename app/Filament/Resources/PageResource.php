<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Toggle;
use Closure;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    protected static ?int $navigationSort = 10;


    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\Group::make()->schema([

                    Forms\Components\Card::make()->schema([
                        TextInput::make('title')->label('SEO Title')->required()->maxLength(255),
                        Forms\Components\Textarea::make('description')->label('SEO description')->columnSpan('full')->rows(2)->maxLength(255),

                    ])->columns(1),
                    Builder::make('content')
                        ->blocks([

                            Builder\Block::make('hero')
                                ->schema([
                                    Forms\Components\Group::make()->schema([
                                        TextInput::make('title')->columnSpan('full'),
                                        RichEditor::make('text')->toolbarButtons(['bold', 'italic', 'link'])->disableLabel()->columnSpan('full'),
                                        TextInput::make('label'),
                                        TextInput::make('link'),
                                    ])->columns(2),
                                    FileUpload::make('image')->label('Image')->image(),
                                ])->columns(2),

                            Builder\Block::make('editor')->label('Text Editor')
                                ->schema([
                                    RichEditor::make('content')->disableToolbarButtons([
                                        'redo',
                                        'undo',
                                        'codeBlock',
                                    ])
                                ]),

                            Builder\Block::make('quizzes')->label('Quizzes List')
                                ->schema([
                                    Toggle::make('open_only'),
                                    TextInput::make('title')->columnSpan('full'),
                                    RichEditor::make('text')->toolbarButtons(['bold', 'italic', 'link'])->disableLabel()->columnSpan('full'),
                                ]),

                            Builder\Block::make('faq')->label('Faq')
                                ->schema([
                                    TextInput::make('title')->columnSpan('full'),
                                    RichEditor::make('text')->toolbarButtons(['bold', 'italic', 'link'])->disableLabel()->columnSpan('full'),
                                ]),

                            Builder\Block::make('cover')->label('Cover')
                                ->schema([
                                    FileUpload::make('url')->label('Url')->image()->columnSpan('full'),
                                    RichEditor::make('text')->toolbarButtons(['h2', 'h3', 'bold', 'italic', 'link'])->disableLabel()->columnSpan('full'),
                                    TextInput::make('label'),
                                    TextInput::make('link'),
                                ])->columns(2),

                            Builder\Block::make('contact_form')
                                ->schema([
                                    TextInput::make('title')->columnSpan('full'),
                                    RichEditor::make('text')->toolbarButtons(['bold', 'italic', 'link'])->disableLabel()->columnSpan('full'),
                                ]),
                        ])
                ])->columnSpan(2),
                Forms\Components\Section::make('Settings')->schema([
                    Forms\Components\Toggle::make('is_published'),
                    Forms\Components\Select::make('access')->label('Access Control')->options(['restrict' => 'Restrict', 'public' => 'Public'])->default('restrict'),
                    Forms\Components\Select::make('menu')->label('Show in menu')
                        ->multiple()
                        ->options([
                            'main' => 'Main',
                            'footer' => 'Footer',
                        ])->reactive(),
                    TextInput::make('icon')->placeholder('eg. home')->label('Menu Icon')->helperText('Enter an icon name from www.heroicons.com')->maxLength(255)->hidden(fn (Closure $get) => !$get('menu')),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->toggleable()->searchable(true)->limit(70),
                Tables\Columns\TextColumn::make('slug')->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
