CKEDITOR.plugins.add( 'HammerObjectItem', {
    icons: 'hammerobjectitem',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammerobjectitem', new CKEDITOR.dialogCommand( 'hammerobjectitemDialog' ) );
        editor.ui.addButton( 'HammerObjectItem', {
            label: '객체 넣기',
            icons: 'hammerobjectitem',
            command: 'hammerobjectitem'
        });

        CKEDITOR.dialog.add( 'hammerobjectitemDialog', this.path + 'dialogs/hammerobjectitem.js' );
    }
});
