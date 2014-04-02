=== Polling Widget: Ranker Lists ===
Contributors: paulranker
Donate link: http://www.ranker.com/
Tags: poll, polls, polling, survey, list, lists, rate, ranking, Ranker, vote, voting, community, sidebar
Requires at least: 3.4
Tested up to: 3.8.1
Stable tag: 2.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use Ranker to create a custom "ranking poll" -a highly engaging crowdsourced list that will increase time on page by 125% and commenting 3X.


== Description ==

Use Ranker's free widget to create a fully-customizable "ranking poll" - a list about any topic that your visitors impact by voting items up and down, reranking the list, or adding items. Use it as a "POLL: _____" blog post, to add instant community engagement to an existing "list" blog post as a "reader's version", or stick Ranker lists on your sidebar to increase time on site.

The plugin comes with a built in shortcode generator, you only need the URL of the list on Ranker, we'll do the rest. Setup defaults for your site including colors, fonts, size and layout.

= How it works =
1. Find a ranking you want your visitors to vote on from the [Ranker.com](http://www.ranker.com/ "Ranker") site, or create a new one there. 
2. Copy the URL 
3. Enter that URL into Settings->Ranker Options->Shortcodes
4. Put that shortcode into any post. 

Multiple shortcodes can be used per post.

For more information please see : [Ranker Widget FAQ](http://www.ranker.com/list/the-ranker-widget-frequently-asked-questions/ranker?limit=25 "Widget FAQ")


== Installation ==

1. Upload the 'rnkr-wp' folder to the '/wp-content/plugins/' directory (or install via the Plugins Add New menu).
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Set required options though admin menu.
4. Place generated short codes in your posts.

== Frequently Asked Questions ==

= How do I create a short code for my posts? =
That's easy! Once the plugin is installed and activated head to the settings page and switch to the 'shortcodes' tab. Now find the list you want to embed on [Ranker.com](http://Ranker.com/ "List the universe"), copy it's full URL (I.E. http://www.ranker.com/crowdranked-list/my-favorite-cartoons-of-all-time) and paste that into the input on the short codes page. We do some magic and then the usable short code for that list will be displayed below.

= Will my old V1 shortcodes work with the V2 plugin? =
Yes they will! Version 2 is fully backwards compatible, all older short codes will continue to work with the new widget.

= I've found styling errors with the widget, what should I do? =
Some themes are built to override global style definitions, sometimes these styles can cause layout issues with our widget. While we've done our best to avoid themes adjusting the widget display, on occasion one can slip through. If you find any styling errors with the widget in your theme, please leave a support ticket and we'll get them fixed as soon as possible.

= Are there any tips to building a Ranker List or Widget? =
For an in-depth FAQ on widget building please see the [Ranker Widget FAQ](http://www.ranker.com/list/the-ranker-widget-frequently-asked-questions/ranker?limit=25 "Widget FAQ")

= Wait a minute, what is Ranker, I've never heard of this service? =
Ranker has millions of items in its database - everything from universities to comic book heroes to candy brands to your favorite band's discography. To make a list, all you have to do is tell us the topic and pick the items you want to include. Ranker takes care of the rest. Once you've built your own lists, we give you the tools to share them with your friends, or to open them up for voting and let the community decide the rankings!

For a full rundown of the service please see the [Ranker FAQ](http://www.ranker.com/app/faq.htm "Full Ranker Serive FAQ"). 
For more information on using Ranker widgets please see the [Widget Info page](http://www.ranker.com/widget/info.htm "Widget Info")


== Screenshots ==

1. Example of the Ranker plugin options screen.
2. Example of the Ranker plugin short code creation screen.
3. Example of Ranker widget in post loaded via shortcode.
4. Example of customized widget in post loaded via shortcode.


== Changelog ==

= 2.1.1 =
- Added an option to the Ranker settings panel to allow turning item descriptions off for slideshow widgets.
- Removed reactive widget messaging.

= 2.1.0 =
The Slideshow/Mobile widget update! See below for a full list of features and changes;
- NEW! Slideshow widgets are now enabled in the plugin. Any list you embed that is defaulted to slideshow view will show in this new format. Older widget shortcodes will need to be updated to enable the new view (we chose this option to best serve your original embed intent).
- The widget code is now fully reactive and will adjust to your themes width, this allows for proper widget display on mobile platforms. This change will be rolled out to all lists, including your older embeds. To fix a widget at a specific size you should place the shortcode in a container (div, p etc).
- Related to the above: Widget width options have been removed from the settings panel. A note regarding the change is in its place and will be removed at a later date.
- Default properties have been updated to support Slideshow widgets.
- Thumbnail Gallery option added.
- Slide Background color option added.
- Adjusted settings section headers for clarity.

= 2.0.1 =
The version 2 polling widget has been completely rewritten from the ground up using HTML5. With this new release we are moving the plugin to a new home under a more searchable name. The old plugin will continue to be updated for sometime but it is recommended you update to this new location. Old plugin short codes will continue to work with this new plugin.


== Upgrade Notice ==

= 2.1.1 =
Minor update to slideshow widget display options, upgrade for additional slideshow control. Low priority patch, but recommended.

= 2.1.0 =
The Slideshow widget update! This release updates the plugin to enable our new Slideshow widget product. Widgets will now also properly display on mobile platforms. Recommended for all users!

= 2.0.1 =
This release updates the Ranker polling widget Wordpress plugin to our new HTML5 widget and moves it to a more searchable plugin name. Please see changelog for more info.

