/**
 *
 * TODO : 객체 종류 json 파일에서 입력 받을것. : http://stackoverflow.com/questions/5293920/ckeditor-dynamic-select-in-a-dialog
 *
 */
CKEDITOR.dialog.add("hammerobjectitemDialog", function(editor) {
    return {
        allowedContent: "p",
        title: "객체 추가",
        minWidth: 550,
        minHeight: 100,
        resizable: CKEDITOR.DIALOG_RESIZE_NONE,
        contents:[{
            id: "HammerObjectItem",
            label: "HammerObjectItem",
            elements:[
                {
                    type: "select",
                    label: "종류",
                    id: "edp-type",
                    validate: CKEDITOR.dialog.validate.notEmpty( "종류를 선택하세요" ),
                    items: [
                        [ editor.lang.common.notSet, '' ],
                        [ '탈것', 'vehicle' ],
                        [ '무기', 'weapon' ],
                        [ '인물', 'character' ],
                        [ '라디오 방송국', 'radio-station' ],
                        [ '갱단', 'gangs' ],
                        [ '웹사이트', 'website' ],
                        [ '미션', 'mission' ],
                        [ '지역', 'locations'],
                        [ '기타', 'etc' ]
                    ],
                    setup: function(element) {

                    },
                    commit: function (element) {

                    }
                },
                {
                    type: "text",
                    label: "이름",
                    id: "edp-title",
                    validate: CKEDITOR.dialog.validate.notEmpty( "이름을 입력하세요" ),
                    setup: function( element ) {
                        var href = element.getAttribute("href");
                        var isExternalURL = /^(http|https):\/\//;
                        if(href) {
                            if(!isExternalURL.test(href)) {
                                href = "http://" + href;
                            }
                            this.setValue(href);
                        }
                    },
                    commit: function(element) {

                    }
                }
            ]
        }],
        onShow: function() {
            var element = editor.document.createElement('p');

            this.element = element;
        },
        onOk: function() {

            var typeItems = this.getContentElement('HammerObjectItem', 'edp-type').items,
                selectedTypeValue = this.getContentElement('HammerObjectItem', 'edp-type').getValue(),
                titleValue = this.getContentElement('HammerObjectItem', 'edp-title').getValue(),
                selectedTypeItem,
                message;

            // 한글 명을 알기 위해 foreach 돌림
            typeItems.forEach(function(node) {
                if (node[1] == selectedTypeValue) {
                    selectedTypeItem = node[0];
                }
            });

            if (selectedTypeItem) {

                var obj = {};
                if (selectedTypeItem) {
                    obj[selectedTypeItem] = titleValue;
                }

                message = '!' + JSON.stringify(obj) + '!';

                this.element.appendText(message);
                this.commitContent(this.element);
                editor.insertElement(this.element);
            }
        }
    };
});
