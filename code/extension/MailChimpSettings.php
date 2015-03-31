<?php
class MailChimpSettings extends DataExtension {

	private static $db = array(
		'APIKey' => 'Text',
		'ListID' => 'Varchar'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.MailChimp', TextareaField::create('APIKey', 'API Key'));
		$fields->addFieldToTab('Root.MailChimp', TextField::create('ListID', 'List ID'));
	}
}