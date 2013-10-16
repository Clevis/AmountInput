<?php

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @covers Clevis\AmountInput
 */
class AmountInput_Test extends PHPUnit_Framework_TestCase
{

	public function testSetValue()
	{
		$form = new Nette\Application\UI\Form;
		$form['input'] = $input = new Clevis\AmountInput;
		$input->setValue(12345.67);
		$this->assertSame('12 345,67', $input->control->attrs['value']);
		$this->assertSame(12345.67, $input->getValue());
	}

	public function testSetValueRoundsToTwoPlaces()
	{
		$form = new Nette\Application\UI\Form;
		$form['input'] = $input = new Clevis\AmountInput;
		$input->setValue(12345.67890);
		$this->assertSame(12345.68, $input->getValue());
	}

	public function testSetDefaultValue()
	{
		$form = new Nette\Application\UI\Form;
		$form['input'] = $input = new Clevis\AmountInput;
		$input->setDefaultValue(12345);
		$this->assertSame('12 345,00', $input->control->attrs['value']);
		$this->assertSame(12345.00, $input->getValue());
	}

	public function testEmptyStringSetsNull()
	{
		$form = new Nette\Application\UI\Form;
		$form['input'] = $input = new Clevis\AmountInput;
		$input->setValue('');
		$this->assertSame(NULL, $input->getValue());
	}

}
