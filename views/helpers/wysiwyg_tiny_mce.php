<?php
	/**
	 * TinyMce Wysiwig Helper
	 *
	 * This is the helper to load and cofigure the tiny mce editor for infinitas
	 *
	 * Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 *
	 * @filesource
	 * @copyright Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * @link http://www.infinitas-cms.org
	 * @package tiny_mce
	 * @subpackage tiny_mce.helpers.tiny_mce
	 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
	 * @since v1.0
	 *
	 * @author Carl Sutton ( dogmatic69 )
	 *
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 */

	class WysiwygTinyMceHelper extends AppHelper {

		/**
		 * @var array
		 * @access protected
		 */
		var $_defaults = array(
			'mode' => 'textareas',
			'theme' => 'advanced',
			'theme_advanced_toolbar_location' => 'top',
			'theme_advanced_toolbar_align' => 'left',
		);

		/**
		 * Load the editor.
		 *
		 * This is the method that will replace the html element with the editor
		 *
		 * @param sring $fieldName the name of the field to replace.
		 *
		 * @return string the javascript code to load the editor.
		 */
		public function editor($field, $options = array()) {
			$options = array_merge($this->_defaults, $options);
			$lines = array();

			foreach ($options as $option => $value) {
				$lines[] .= Inflector::underscore($option) . ' : "' . $value . '"';
			}
			$lines = implode(', ', $lines);

			App::import('Helper', 'Html');
			$this->Html = new HtmlHelper();

			return $this->Html->scriptBlock("tinyMCE.init({ $lines });");
		}
	}
?>