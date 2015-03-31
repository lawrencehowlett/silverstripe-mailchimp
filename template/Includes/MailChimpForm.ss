<form $FormAttributes>
	<% if $Message %>
		<p id="{$FormName}_error" class="message $MessageType">$Message</p>
	<% else %>
		<p id="{$FormName}_error" class="message $MessageType" style="display: none"></p>
	<% end_if %>
     
	<fieldset>
		<legend>Subscribe to our newsletter</legend>

		<div id="Email" class="field email">
			<label class="left" for="{$FormName}_Email">Email</label>
			$Fields.dataFieldByName(Email)
		</div>		

		$Fields.dataFieldByName(SecurityID)

		<% if $Actions %>
		<div class="Actions">
			<% loop $Actions %>$Field<% end_loop %>
		</div>
		<% end_if %>
	</fieldset>
</form>