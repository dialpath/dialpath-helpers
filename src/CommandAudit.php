<?php namespace Dialpath;

use Dialpath\Eloquent\Model;

class CommandAudit extends Model {

	protected $fillable = ['user_id', 'command', 'parameters', 'result'];

}
