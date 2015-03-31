<?php
/**
 * Extension to page for mailchimp enabling / disabling
 * 
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright (c) 2014, Julius Caamic
 */
class MailChimpPageExtension extends DataExtension {
	
	/**
	 * Set properties
	 * 
	 * @var array
	 */
	private static $db = array(
		'EnableMailChimp' => 'Boolean'
	);

	/**
	 * Add the checkbox to enable/disable the mailchimp to a certain page
	 * 
	 * @param  FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.MailChimp', CheckboxField::create('EnableMailChimp', 'Show MailChimp on this page?'));
	}
}