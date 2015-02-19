CKEDITOR.plugins.add( 'HammerObjectList', {
    icons: 'hammerobjectlist',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammerobjectlist', new CKEDITOR.dialogCommand( 'hammerobjectlistDialog' ) );
        editor.ui.addButton( 'HammerObjectList', {
            label: '객체 목록 넣기',
            icons: 'hammerobjectlist',
            command: 'hammerobjectlist'
        });

        CKEDITOR.dialog.add( 'hammerobjectlistDialog', this.path + 'dialogs/hammerobjectlist.js' );
    }
});
