CKEDITOR.plugins.add( 'HammerImage', {
    icons: 'hammerimage',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammerimage', new CKEDITOR.dialogCommand( 'hammerimageDialog' ) );
        editor.ui.addButton( 'HammerImage', {
            label: '이미지 넣기',
            icons: 'hammerimage',
            command: 'hammerimage'
        });

        CKEDITOR.dialog.add( 'hammerimageDialog', this.path + 'dialogs/hammerimage.js' );
    }
});
