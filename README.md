Snicker Plus
============

Snicker Plus is a modern, fixed fork of the original Snicker plugin for the Content Management System [Bludit](https://github.com/bludit/bludit). It allows users to write and publish comments using basic HTML or Markdown. The plugin offers a rich set of features, extensive customization options, and remains fully compliant with the GDPR.

This fork resolves PHP 8 compatibility issues, replaces deprecated patterns, and aims to keep the plugin stable and maintained for modern Bludit installations.

Features
--------
- Level-Based, AJAX-enabled Commenting for Guests and Users
- Many Configurations and adaptable Strings and Themes
- Guest Management for Not-Logged-In Comment Authors
- Moderatable Comments (Pending, Approved, Rejected, Spam)
- Extensive Backend with many possibilities
- Compliant with the European GDPR

Requirements
------------
- PHP v8.0+ (Tested with 8.2)
- Bludit v3.14.1+ (Tested with 3.16.2)

Dependencies
------------
- Snicker Plus uses the awesome [Captcha PHP Library](https://github.com/Gregwar/Captcha) made by Grégoire Passault
- It also includes the [PureCaptcha PHP Library](https://github.com/OWASP/PureCaptcha) as a fallback, by Abbas Naderi
- The avatars are served by default using [Gravatar](https://en.gravatar.com/), provided by Automattic / WordPress
- **Alternatively**, you can use [Identicons](http://identicon.net)...
- ... via the [Identicon PHP Library](https://github.com/yzalis/Identicon) from Benjamin Laugueux
- ... and the [Identicon JavaScript Library](https://github.com/stewartlord/identicon.js) by Stewart Lord
- ... which itself depends on the [PNG JavaScript Library](https://www.xarg.org/2010/03/generate-client-side-png-files-using-javascript/) by Robert Eisele

Thanks to these awesome libraries and developers!

Installation
------------
- Download or clone the [Snicker Plus Plugin](https://github.com/harrislineage/snicker-plus)
- Upload it to your `bl-plugins` folder in your Bludit site
- Visit the Bludit Administration and enable "Snicker Plus" under "Settings" → "Plugins"

License
-------
Published under the MIT License  
Originally created by SamBrishes, pytesNET © 2019  
This fork maintained by harrislineage © 2025  
Repository: https://github.com/harrislineage/snicker-plus