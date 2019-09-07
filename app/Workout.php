<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    public $week;
    public $totalWeeks;
    public $title;
    private $slug;
    private $userId;

    public $exercise;
    public $equipment = [
        'barbell', 'dumbell', 'free-weight', 'cable'
    ];

    public function __construct() {
        $this->exercise = [
            'upper' => [
                'shoulders' => [
                    'shoulder press', 'military press', 'front-raise', 'side-raise', 'reverse-peckdeck',
                    'shrug', 'face pull'
                ],
                'chest' => [
                    'bench press', 'fly', 'incline', 'peckdeck'
                ],
                'arms' => [
                    'bicep curl', 'hammer curl', 'concentration curl'
                ],
                'back' => ['row', 'deadlift', 'pullups'],
            ],
            'lower' => [
                'legs' => [
                    ''
                ],
                'abs' => [
                    ''
                ]
            ],
            'cardio' => ['bike']
        ];
    }

}
