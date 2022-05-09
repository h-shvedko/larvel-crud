<?php

namespace Modules\FormGenerator\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fields extends Model
{
    use HasFactory;

    const UPDATED_AT = 'modified_at';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fields';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\FormGenerator\Database\factories\FieldsFactory::new();
    }
}
