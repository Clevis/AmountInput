<?php

namespace Clevis;

use Nette\Forms\Controls\TextInput;

/**
 * TextInput pro zadávání částky zaokrouhlené na 2 desetinná místa.
 *
 * Formátuje číslo do/z tvaru 12 345,67.
 */
class AmountInput extends TextInput
{

	public function setValue($value)
	{
		if (is_float($value) || is_int($value))
		{
			$value = number_format($value, 2, ',', ' ');
		}
		return parent::setValue($value);
	}

	public function getValue()
	{
		$value = parent::getValue();
		if ($value === '')
		{
			return NULL;
		}
		if (is_string($value))
		{
			$value = str_replace(' ', '', $value);
			$value = str_replace(',', '.', $value);
			$value = floatval($value);
		}
		return $value;
	}
}
