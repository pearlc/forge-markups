ckeditor-plugin-myimage
=====================

This plugin brings Attaching image feature for KR Lol2.0 web editor

Installation
------------

1. Clone/copy this repository contents in a new "plugins/myimage" folder in your CKEditor installation.
2. Enable the "myimage" plugin in the CKEditor configuration file (config.js):

        config.extraPlugins = 'myimage';

3. This plugin is optimized with [summoner skin](https://gh.riotgames.com/rchung/ckeditor-skin-summoner).
4. This plugin needs filebrowser plugin.
5. Enable Uploading images in the CKEditor configuration file (config.js)

        config.filebrowserMyimageUploadUrl: "http://localhost/image_upload_script.php?type=Images"
