CKEDITOR.plugins.add( 'HammerFootnote', {
    icons: 'hammerfootnote',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammerfootnote', new CKEDITOR.dialogCommand( 'hammerfootnoteDialog' ) );
        editor.ui.addButton( 'HammerFootnote', {
            label: '주석 넣기',
            icons: 'hammerfootnote',
            command: 'hammerfootnote'
        });

        CKEDITOR.dialog.add( 'hammerfootnoteDialog', this.path + 'dialogs/hammerfootnote.js' );
    }
});
