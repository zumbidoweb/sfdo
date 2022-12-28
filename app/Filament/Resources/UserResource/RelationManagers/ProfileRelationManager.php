<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileRelationManager extends RelationManager
{
    protected static string $relationship = 'profile';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('afm'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\Textarea::make('address')->columnSpan('full')->rows(2),
                Forms\Components\TextInput::make('number'),
                Forms\Components\TextInput::make('postcode'),
                Forms\Components\TextInput::make('city'),
                Forms\Components\TextInput::make('country')->default('GR')

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
