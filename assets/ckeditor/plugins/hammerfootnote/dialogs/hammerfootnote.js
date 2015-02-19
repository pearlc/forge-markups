/**
 * TODO : 선택된 텍스트가 없을때에는 버튼을 비활성화 시키거나, 대상을 선택하라는 얼럿 띄워야함.
 *        선택된 텍스트가 있을때 해당 내용에 대해 data-footnote-target 을 설정해야함
 *        현재는 텍스트 선택한채로 실행을 시키면 선택 영역이 지워짐. (선택영역 바로 뒤로 붙여넣으면 될거 같은데, 그게 쉽지 않은거 같음)
 *        http://stackoverflow.com/questions/4401469/how-to-select-a-text-range-in-ckeditor-programatically
 *        위 링크 참고해서 해결할것
 *
 * TODO : ​&#8203; 문자가 <sup> 태그 뒤에 들어가고 있음. 이거 어떻게 없애지? (simplelink 도 똑같은 현상)
 *
 * 일단 선택영역 없을때에만 제대로 동작되는중
 *
 */

CKEDITOR.dialog.add("hammerfootnoteDialog", function(editor) {
    return {
        allowedContent: "sup[contentEditable,data-content,data-target]",
        title: "주석 넣기",
        minWidth: 550,
        minHeight: 100,
        resizable: CKEDITOR.DIALOG_RESIZE_NONE,
        contents:[{
            id: "HammerFootnote",
            label: "HammerFootnote",
            elements:[{
                type: "text",
                label: "주석 내용",
                id: "edp-content",
                validate: CKEDITOR.dialog.validate.notEmpty( "내용을 넣어주세요" ),
                setup: function( element ) {
                    // Do nothing yet.
                },
                commit: function(element) {
                    element.setAttribute("contentEditable", false);
                    element.setAttribute("data-footnote-content", this.getValue());
                    element.setText('[x]');
                }
            }]
        }],
        onShow: function() {
            var selection = editor.getSelection();
            var element;

            element = editor.document.createElement( 'sup' );

            if(selection) {
                element.setAttribute("data-footnote-target", selection.getSelectedText());
            }
            this.insertMode = true;
            this.element = element;

            this.setupContent(this.element);
        },
        onOk: function() {
            this.commitContent(this.element);
            editor.insertElement(this.element);
        }
    };
});
