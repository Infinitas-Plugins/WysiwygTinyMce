<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygTinyMceEvents{
		function onRegisterWysiwyg(&$event){
			return 'tiny_mce';
		}

		function onRequireJavascriptToLoad(&$event, $data){
			if(Configure::read('Wysiwyg.editor') != 'tiny_mce'){
				return false;
			}

			switch(true){
				case isset($data['admin']) && $data['admin']:
				case $data['action'] == 'edit':
					return '/wysiwyg_tiny_mce/js/tiny_mce';
					break;
			}

			return false;
		}
	}