<?php
namespace TypiCMS\Models;

use Illuminate\Database\Eloquent\Model;
use TypiCMS\Modules\History\Traits\Historable;

abstract class BaseTranslation extends Model
{

    use Historable;

    protected $touches = ['owner'];
}
