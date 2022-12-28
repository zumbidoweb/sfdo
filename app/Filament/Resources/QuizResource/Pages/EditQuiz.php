<?php

namespace App\Filament\Resources\QuizResource\Pages;

use App\Filament\Resources\QuizResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class EditQuiz extends EditRecord
{
    protected static string $resource = QuizResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('import')->label('Import content from xlsx')
                ->action(function (array $data) {
                    $collection = Excel::import(new \App\Imports\QuizImport(1), 'public/' . $data['upload']);
                    return redirect(request()->header('Referer'));
                })
                ->form([
                    Forms\Components\FileUpload::make('upload')->label('Upload Excel file')->columnSpan('full'),
                ]),
            Actions\DeleteAction::make()->label('Delete Quiz'),
        ];
    }
}
