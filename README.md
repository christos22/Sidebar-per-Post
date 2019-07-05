# Sidebar per Post

Generate a sidebar/widget area for each post/page you create.

## Description

This plugin generates a sidebar for each post/page you create. No need to write a single line of code!

### What does this plugin do?

* **Generates a sidebar for each post/page you create**. No need to write a single line of code!
* **Live customizer widget preview**: Your sidebars are available in the WordPress Customizer allowing you to add widgets in realtime with live preview
* **Seamless WordPress Integration:**  Live preview is integrated into the WordPress Customizer and the settings page follows core WordPress design guidelines.
* Uses the **WordPress Options API** to store and retrieve options.
* **No settings**. Just install it and all your pages will have registered sidebars visible in the widget area.

## Installation

### As a plugin
1. Download the plugin
2. Unzip the package and upload to your /wp-content/plugins/ directory or upload in the admin area.
3. Log into WordPress and navigate to the "Plugins" panel.
4. Activate the plugin labeled "Sidebar per Post".

### As a mu-plugin

For maximum compatibily upload the main plugin file (SidebarPerPost.php) in *wp-content/mu-plugins*.

Add a *mu-plugins* folder if your theme does not have one.

[Find out more about mu-plugins](https://wordpress.org/support/article/must-use-plugins/).

## FAQ

**How do I use it?**

Create a new post or page. Got to appearance->widgets and you will see a new sidebar been registered.

**I don't see the sidebar in my page**

This plugin at the moment just registers the sidebars. You will need to display them in your templates manually.

Add the following code in the page/post template where you want the page sidebar to be displayed:

``` 
<?php get_sidebar(get_the_ID()); ?>
```


## Further Development

The plugin is under active development. More features are going to be added soon. Existing features will be optimized further.

Feedback (positive or negative) is always welcome.
