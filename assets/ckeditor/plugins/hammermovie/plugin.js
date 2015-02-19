CKEDITOR.plugins.add( 'HammerMovie', {
    icons: 'hammermovie',
    hidpi: true,
    init: function( editor ) {
        editor.addCommand( 'hammermovie', new CKEDITOR.dialogCommand( 'hammermovieDialog' ) );
        editor.ui.addButton( 'HammerMovie', {
            label: '동영상 넣기',
            icons: 'hammermovie',
            command: 'hammermovie'
        });

        CKEDITOR.dialog.add( 'hammermovieDialog', this.path + 'dialogs/hammermovie.js' );
    }
});
