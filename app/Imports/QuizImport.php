<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\Quiz;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Option;

class QuizImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
     * @param Collection $collection
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $quiz_id = $this->id;

        $subject = NULL;
        $section = NULL;
        $question = NULL;

        foreach ($rows as $row) {
            $title = $row['title'];
            switch ($row['type']) {
                case 'SUBJECT':
                    $subject = Subject::updateOrCreate(
                        ['title', $title],
                        [
                            'title' => $title,
                            'quiz_id' => $quiz_id
                        ]
                    );
                    break;
                case 'SECTION':
                    if (!$subject) break;
                    $section = Section::updateOrCreate(
                        ['title', $title],
                        [
                            'title' => $title,
                            'subject_id' => $subject->id,
                            'quiz_id' => $quiz_id
                        ]
                    );
                    break;
                case 'QUESTION':
                    $question = Question::updateOrCreate(
                        ['title', $title],
                        [
                            'title' => $title,
                            'quiz_id' => $quiz_id,
                        ]
                    );
                    $section->questions()->syncWithoutDetaching($question->id);
                    break;
                case 'OPTION':
                    if (!$question) break;
                    $option = Option::updateOrCreate(
                        ['title', $title],
                        [
                            'title' => $title,
                            'question_id' => $question->id,
                            'quiz_id' => $quiz_id,
                            'score' => $row['score']
                        ]
                    );
                    break;
            }
        }
    }
}
