<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Applicant
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $college
 * @property string $class
 * @property string $birthday
 * @property string $gender
 * @property string $cellphone
 * @property string $qq
 * @property Department $department
 * @property int $department_id
 * @property Carbon\Carbon $created_at
 * @property Carbon\Carbon $updated_at
 */
class Applicant extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
