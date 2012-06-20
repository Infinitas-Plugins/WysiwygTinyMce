<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygTinyMceEvents{
		function onRegisterWysiwyg($event) {
			return 'tiny_mce';
		}

		function onRequireJavascriptToLoad($event, $data) {
			if(Configure::read('Wysiwyg.editor') != 'tiny_mce') {
				return false;
			}

			switch(isset($data['admin']) && $data['admin']) {
				case $data['action'] == 'admin_edit':
				case $data['action'] == 'admin_add':
					return 'WysiwygTinyMce.tiny_mce';
					break;
			}

			return false;
		} 
	}
