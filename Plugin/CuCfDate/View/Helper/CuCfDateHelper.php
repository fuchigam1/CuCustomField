<?php
/**
 * CuCustomField : baserCMS Custom Field Date Plugin
 * Copyright (c) Catchup, Inc. <https://catchup.co.jp>
 *
 * @copyright        Copyright (c) Catchup, Inc.
 * @link             https://catchup.co.jp
 * @package          CuCfDate.View.Helper
 * @license          MIT LICENSE
 */

/**
 * Class CuCfDateHelper
 *
 * @property CuCustomFieldHelper $CuCustomField
 * @property BcTimeHelper $BcTime
 */
class CuCfDateHelper extends AppHelper {

	public $helpers = ['BcTime'];

	/**
	 * Input
	 *
	 * @param string $fieldName
	 * @param array $options
	 * @return string
	 */
	public function input ($fieldName, $options) {
		$options['type'] = 'datepicker';
		$options['class'] = 'bca-textbox__input';
		return $this->CuCustomField->BcForm->input($fieldName, $options);
	}

	/**
	 * Get
	 *
	 * @param mixed $fieldValue
	 * @param array $fieldDefinition
	 * @return mixed
	 */
	public function get($fieldValue, $fieldDefinition, $options) {
		$options = array_merge([
			'format' => 'Y/m/d',
		], $options);
		return $this->BcTime->format($options['format'], $fieldValue);
	}

}
