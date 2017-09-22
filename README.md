# Gallery plugin

Gallery is a lightweight WordPress Plugin that displays a simple gallery.

## Features

This plugin includes the following features:

- Displays gallery on an archive page

## Installation

To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/plugins` folder of your project.
2. Then type in terminal: `git clone git@github.com:purpleprodigy/Gallery.git`.
3. Log in to your WordPress website.
4. Go to Plugins and activate the Gallery plugin.

## Requirements

To use this Gallery plugin, you also need to install the [Polestar Must-Use Plugin.](https://github.com/purpleprodigy/Polestar.git) To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/mu-plugins` folder of your project or create the 'mu-plugins' folder if it does not already exist.
2. Then type in terminal: `git@github.com:purpleprodigy/Polestar.git`.

## Disable Automatic Enqueueing

If you wish to enqueue the stylesheet and dashicons within your theme files, use the following code to remove the automatic enqueueing within this plugin:

`remove_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );`
