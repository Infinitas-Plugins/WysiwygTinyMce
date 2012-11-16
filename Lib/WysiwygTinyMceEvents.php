<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygTinyMceEvents {
		function onRegisterWysiwyg(Event $Event) {
			return 'tiny_mce';
		}

		function onRequireJavascriptToLoad(Event $Event, $data) {
			if(Configure::read('Wysiwyg.editor') != 'tiny_mce') {
				return false;
			}

			if(isset($Event->Handler->request->params['admin']) && $Event->Handler->request->params['admin']) {
				if(in_array($Event->Handler->request->params['action'], array('admin_edit', 'admin_add'))) {
					return array(
						'WysiwygTinyMce.tiny_mce'
					);
				}
			}
		}
	}
