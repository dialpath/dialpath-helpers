<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Form Builder - default form, label and field attributes
	|--------------------------------------------------------------------------
	*/

    'formAttributes'  => ['novalidate' => true],
    'labelAttributes' => ['class' => 'form-label'],
    'fieldAttributes' => ['class' => 'form-control', '_template' => 'dialpath::field-decorator', '_span' => '8'],


	/*
	|--------------------------------------------------------------------------
	| Exception Handler - include stack trace at DialpathException log?
	|--------------------------------------------------------------------------
	*/
	'logDialpathExceptionStackTrace' => false,

];
