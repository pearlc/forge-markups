/**
 * TODO : 여러개의 조건을 검색할수 있도록 ui 변경하기.
 * TODO : 필터링 조건 json 파일에서 입력 받을것. : http://stackoverflow.com/questions/5293920/ckeditor-dynamic-select-in-a-dialog
 * TODO : 필터링 validate 체크 제대로 할것
 */
CKEDITOR.dialog.add("hammerobjectlistDialog", function(editor) {
    return {
        allowedContent: "p",
        title: "목록 추가",
        minWidth: 550,
        minHeight: 100,
        resizable: CKEDITOR.DIALOG_RESIZE_NONE,
        contents: [
            {
                id: 'HammerObjectList',
                label: 'HammerObjectList',
                elements: [
                    {
                        type: 'hbox',
                        id:'hbox1',
                        widths: [ '25%', '75%' ],
                        children: [
                            {
                                type: 'select',
                                id: 'type',
                                label: '종류',
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
                                validate: CKEDITOR.dialog.validate.notEmpty("종류를 선택하세요"),
                                setup: function( type, element ) {

                                },
                                commit: function( type, element ) {

                                }
                            }
                        ]
                    },
                    {
                        type: 'hbox',
                        id:'hbox2',
                        widths: [ '25%', '75%'],
                        children: [
                            {
                                type: 'select',
                                id: 'filterType',
                                label: '필터링 조건',
                                items: [
                                    [ editor.lang.common.notSet, '' ],
                                    [ '이름', 'name' ],
                                    [ '공격력', 'damage' ],
                                    [ '레벨', 'level' ],
                                    [ '이동속도', 'movement' ]
                                ],
                                validate: CKEDITOR.dialog.validate.notEmpty("필터링 조건을 선택하세요"),
                                setup: function( type, element ) {

                                },
                                commit: function( type, element ) {

                                }
                            },
                            {
                                type: 'text',
                                id: 'filterValue',
                                label: '조건',
                                'default': '',
                                validate: CKEDITOR.dialog.validate.notEmpty("필터링 값을 선택하세요"),
                                onChange: function() {

                                },
                                setup: function( type, element ) {
                                },
                                commit: function( type, element ) {
                                }
                            }
                        ]
                    }
                ]
            }
        ],
        onShow: function() {
            var element = editor.document.createElement('p');

            this.element = element;
        },
        onOk: function() {

            var typeItems = this.getContentElement('HammerObjectList', 'type').items,
                selectedTypeValue = this.getContentElement('HammerObjectList', 'type').getValue(),
                selectedTypeName,

                filterItems = this.getContentElement('HammerObjectList', 'filterType').items,
                filterTypeValue = this.getContentElement('HammerObjectList', 'filterType').getValue(),
                filterTypeName,
                filterValue = this.getContentElement('HammerObjectList', 'filterValue').getValue(),
                message;

            // 한글 명을 알기 위해 foreach 돌림
            typeItems.forEach(function(node) {
                if (node[1] == selectedTypeValue) {
                    selectedTypeName = node[0];
                }
            });

            filterItems.forEach(function(node) {
                if (node[1] == filterTypeValue) {
                    filterTypeName = node[0];
                }
            });

            if (selectedTypeName) {

                var obj = {};
                if (selectedTypeName) {
                    obj['타입'] = selectedTypeName;
                }

                if (filterTypeName) {
                    obj[filterTypeName] = filterValue;
                }

                message = '!!' + JSON.stringify(obj) + '!!';

                this.element.appendText(message);
                this.commitContent(this.element);
                editor.insertElement(this.element);
            }
        }
    };
});
