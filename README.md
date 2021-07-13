# Introduction
This extension is based on the [mediatis/formrelay](https://github.com/mediatis/formrelay) package and you and use it to send the data of any TYPO3/form (or other form extensions that are supported by formrelay) via JSON HTTP requests to various endpoints. The most common usage is webhooks using JSON data.

You should checkout  https://github.com/mediatis/formrelay to find more detail how use the plugin.

# Installation

`composer require mediatis/formrelay-jsonrequest`

# Support
If you have any question, please contact us voehringer@mediatis.de

# Submit bug reports or feature requests

Look at the [Issues](https://github.com/mediatis/formrelay_jsonrequest/issues)
for what has been planned to be implemented in the (near) future.

# Setup

All basic settings, explained in EXT:formrelay, (including the overwrite mechanics) apply to this extension as well.  

## plugin.tx_formrelay_jsonrequest.settings.enabled

Default: `0`.

Set to `1` to enable the extension.

## plugin.tx_formrelay_jsonrequest.settings.url

Default: none.

Set the URL of the webhook or other endpoint to receive the JSON HTTP request.

## plugin.tx_formrelay_jsonrequest.settings.cookies

Default: empty array.

Set a list of cookie names that should be passed to the endpoint.  
Regular expressions are possible.
