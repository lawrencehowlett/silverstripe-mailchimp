<?php
/**
 * Extension to page controller to allow calling of the MailChimp Form
 * 
 * @author Julius Caamic <julius@greenbrainer.com>
 * @copyright Copyright (c) 2014, Julius Caamic
 */
class MailChimpPageControllerExtension extends Extension {
	
	/**
	 * Set allowed action
	 * 
	 * @var array
	 */
	private static $allowed_actions = array('MailChimpForm');

	/**
	 * Get the mailchimp form
	 *
	 * @return Form
	 */
	public function MailChimpForm() {
		$form = new MailChimpForm($this->owner, 'MailChimpForm');

		$form->loadDataFrom($this->owner->request->postVars());

		return $form;
	}
}