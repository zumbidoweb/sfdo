<?php

namespace App\Filament\Resources\AnswerResource\Pages;

use App\Filament\Resources\AnswerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAnswer extends ViewRecord
{
    protected static string $resource = AnswerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
