CKEDITOR.dialog.add("hammermovieDialog", function(editor) {
    return {
        allowedContent: "p",
        title: "목록 추가",
        minWidth: 550,
        minHeight: 100,
        resizable: CKEDITOR.DIALOG_RESIZE_NONE,
        contents: [
            {
                id: 'HammerMovie',
                label: 'HammerMovie',
                elements: [
                    {
                        type: 'hbox',
                        id:'hbox1',
                        children: [
                            {
                                type: 'select',
                                id: 'type',
                                label: '종류',
                                items: [
                                    [ '유튜브', 'youtube' ],
                                    [ '비메오', 'vimeo' ]
                                ],
                                'default': 'youtube',
                                validate: CKEDITOR.dialog.validate.notEmpty("종류를 선택하세요")
                            }
                        ]
                    },
                    {
                        type: 'hbox',
                        id:'hbox2',
                        children: [
                            {
                                type: 'text',
                                id: 'movieKey',
                                label: '동영상 key',
                                'default': '',
                                validate: CKEDITOR.dialog.validate.notEmpty("동영상 key 값을 입력하세요")
                            }
                        ]
                    }
                ]
            }
        ],
        onOk: function() {
            var typeItems = this.getContentElement('HammerMovie', 'type').items,
                selectedTypeValue = this.getContentElement('HammerMovie', 'type').getValue(),
                movieKey = this.getContentElement('HammerMovie', 'movieKey').getValue(),
                element = editor.document.createElement('p'),
                selectedTypeName,
                obj,
                message;

            // 한글 명을 알기 위해 foreach 돌림
            typeItems.forEach(function(node) {
                if (node[1] == selectedTypeValue) {
                    selectedTypeName = node[0];
                }
            });

            obj = {};
            if (selectedTypeName) {
                obj['타입'] = selectedTypeName;
            }
            if (movieKey) {
                obj['동영상키'] = movieKey;
            }

            message = '!!!!' + JSON.stringify(obj) + '!!!!';

            element.appendText(message);
            editor.insertElement(element);
        }
    };
});

