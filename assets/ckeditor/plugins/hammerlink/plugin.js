CKEDITOR.plugins.add( 'HammerLink', {
    icons: 'hammerlink',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammerlink', new CKEDITOR.dialogCommand( 'hammerlinkDialog' ) );
        editor.ui.addButton( 'HammerLink', {
            label: '외부 사이트 링크 넣기',
            icons: 'hammerlink',
            command: 'hammerlink'
        });

        CKEDITOR.dialog.add( 'hammerlinkDialog', this.path + 'dialogs/hammerlink.js' );
    }
});
