/**
 * TODO : 에디터에 추가한 text 를 요리저리 맘대로 움직일 경우, 그런건 유효하지 않다고 명시적으로 띄워주기
 *       (예를들면, 이미지 string 형식을  한가운데로 넣기 위한 의도로 줄 한가운데로 넣는다든가..)
 */
CKEDITOR.dialog.add("hammerimageDialog", function(editor) {
    return {
        allowedContent: "img[src]",
        title: "이미지 넣기",
        minWidth: 550,
        minHeight: 100,
        resizable: CKEDITOR.DIALOG_RESIZE_NONE,
        contents:[
            {
                id: "hammerimage",
                label: "이미지",
                elements: [
                    {
                        type: 'hbox',
                        widths : ['35%', '65%'],
                        style: 'margin-bottom: 10px',
                        children: [
                            {
                                type: 'file',
                                id: 'upload'
                            },
                            {
                                type: 'fileButton',
                                id: 'uploadButton',
                                filebrowser: 'hammerimage:imageUrl',
                                label: '업로드',
                                'for' : ['hammerimage', 'upload']
                            }
                        ]
                    },
                    {
                        type: 'hbox',
                        children: [
                            {
                                type: 'text',
                                id: 'imageUrl',
                                label: '이미지 URL',
                                validate: CKEDITOR.dialog.validate.notEmpty( '이미지를 업로드하거나 경로를 입력하세요' )
                            }
                        ]
                    },
                    {
                        type: 'hbox',
                        children: [
                            {
                                type: 'text',
                                id: 'caption',
                                label: '캡션'
                            }
                        ]
                    }
                ]
            }
        ],
        onOk: function() {
            var imageUrl = this.getContentElement('hammerimage', 'imageUrl').getValue(),
                caption = this.getContentElement('hammerimage', 'caption').getValue(),
                element = editor.document.createElement('p'),
                obj,
                message;

            obj = {};
            if (imageUrl) {
                obj['URL'] = imageUrl;
            }
            if (imageCaption) {
                obj['캡션'] = caption;
            }

            message = '!!!' + JSON.stringify(obj) + '!!!';
            element.appendText(message);
            editor.insertElement(element);
        }
    };
});
