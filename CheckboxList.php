<?php

class CheckboxList extends FormWidget {

	private $name;
	private $keys;
	private $values;
	private $options;
	private $checked;

	public function __construct($name, array $keys, array $values, array $options, array $checked) {
		$this->name = $name;
		$this->keys = $keys;
		$this->options = $options;
		$this->checked = $checked;
		parent::__construct($name, array());
	}
	
	protected function getElementHtml() {
		$html = array();
		foreach ($this->keys as $index => $key) {
			$html[] = checkbox_tag(
				$this->name . '[]', $this->values[$index], in_array($key, $this->checked), $this->options[$index]
			);
		}
	}

}
