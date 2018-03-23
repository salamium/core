<?php

namespace Salamium\Core;

use Nette\Forms\Form;

interface FormFactory
{

	/** @return Form */
	function create();

}