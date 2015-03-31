## MAILCHIMP MODULE

Creates a newsletter form that links to MailChimp API. 

Features:
- 
Shortcode to be embeded in htmltext editor field

Can work even without javascript support 

AJAX submission of the form


### How to use by shortcode
Just write the shortcode [MailChimp] to htmltexteditor

### How to use via template
Just add the variable $MailChimpForm on the template

### How to extend 

To add more fields and pass the created fields to the API just make an extension to MailChimpForm class

i.e

config.yml
  	
  	MailChimpForm:
  		extensions:
  		  - MailChimpFormExtension

MailChimpFormExtension.php

	class MailChimpFormExtension extends Extension {
		
		// extend the field
		public function updateFields($fields) {
			$fields->push(new TextField::create('Name', Name));
		}
	}
	
	
### How to override the template 

Just create a MailChimpForm.ss in your theme directory to override the existing MailChimpForm.ss