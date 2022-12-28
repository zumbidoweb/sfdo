<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OptionResource\Pages;
use App\Filament\Resources\OptionResource\RelationManagers;
use App\Models\Option;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OptionResource extends Resource
{
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $model = Option::class;

    protected static ?string $navigationIcon = 'heroicon-s-check-circle';

    protected function getTableReorderColumn(): ?string
    {
        return 'order';
    }


    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('title')->required()->columnSpan('full')->rows(2)->maxLength(255),
                Forms\Components\Textarea::make('description')->columnSpan('full')->maxLength(255)->rows(2),
                Forms\Components\TextInput::make('score')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->columns([
                Tables\Columns\TextColumn::make('order'),
                Tables\Columns\TextColumn::make('question.title'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('score'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('question')->relationship('question', 'title')
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
            'index' => Pages\ListOptions::route('/'),
            'create' => Pages\CreateOption::route('/create'),
            'edit' => Pages\EditOption::route('/{record}/edit'),
        ];
    }
}
