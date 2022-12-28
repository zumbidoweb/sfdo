<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizResource\Pages;
use App\Filament\Resources\QuizResource\RelationManagers;
use App\Models\Quiz;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuizResource extends Resource
{
    protected static ?string $model = Quiz::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';


    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->required()->maxLength(255),
                    Forms\Components\TextInput::make('subtitle')->maxLength(255),
                    Forms\Components\Textarea::make('description')->rows(3)->maxLength(255),
                    Forms\Components\RichEditor::make('content')->disableToolbarButtons([
                        'attachFiles', 'codeBlock', 'undo', 'redo'
                    ]),
                ])->columnSpan(2),
                Forms\Components\Section::make('Settings')->schema([
                    Forms\Components\Toggle::make('is_published'),
                    Forms\Components\TextInput::make('code')->required()->maxLength(50),
                    Forms\Components\Select::make('access')->options(['restrict' => 'Restrict', 'public' => 'Public'])->default('restrict'),
                    Forms\Components\DatePicker::make('opens_at'),
                    Forms\Components\DatePicker::make('closes_at'),
                    Forms\Components\FileUpload::make('image')->label('Cover Image')->image()->maxSize(4000)->imageResizeTargetWidth('1400')->imageCropAspectRatio('16:9'),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')->sortable()->toggleable()->searchable(true)->limit(50),
                Tables\Columns\BadgeColumn::make('is_published')->label('Status')->enum([
                    1 => 'Published',
                    0 => 'Draft',
                ])->colors([
                    'primary' => static fn ($state): bool => $state === 1,
                ])
                    ->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('submissions_count')->counts('submissions'),
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
            RelationManagers\SubjectsRelationManager::class,
            RelationManagers\SubmissionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuizzes::route('/'),
            'create' => Pages\CreateQuiz::route('/create'),
            'edit' => Pages\EditQuiz::route('/{record}/edit'),
        ];
    }
}
