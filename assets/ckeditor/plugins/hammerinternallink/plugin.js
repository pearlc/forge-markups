/**
 * 선택된 텍스트에 내부 링크 생성해주는 플러그인.
 * 영역을 선택한채로 이 플러그인을 선택하면 해당 영역의 url 로 링크가 걸림.
 *
 *
 * 각 상황에 따라 이 플러그인이 동작하는 방식
 *
 * 1. 텍스트가 선택되어 있는채로 실행 : 해당 텍스트에 링크 걸기
 *
 * 2. 선택영역 없는상태로 실행 : http://ckeditor.com/forums/Support/Text-around-cursor
 *      - 현재는 아무 동작하지 않음
 *      - : 추후 현재 커서가 속한 단어에 링크 걸도록 변경할것
 *        여기 참고해서 구현할것 : http://stackoverflow.com/questions/16835365/set-cursor-to-specific-position-in-ckeditor
 *        만약 커서 근처에 적당한 단어가 없는 경우에는 아무일도 일어나지 않게할것
 *
 * 3. 이미 링크가 걸려있는채로 실행 : 현재 선택영역에 맞게 href 값 변경
 *
 * 4. TODO 이미 링크 걸려있는 링크의 일부만 선택한채로 실행
 *
 * 5. TODO 선택 영역에 링크가 포함되 있는 상태로 실행
 *
 * 6. TODO 이미지가 선택된 상태로 실행
 *
 * 7. TODO 이미지와 텍스트가 동시에 선택된 상태로 실행 (혹은 세개의 다른 엘리먼트, 블럭에 대해 링크 걸려고 시도)
 *
 * 8. TODO 뭔가 다른것들이랑 충돌날 만한 상황에 대한 대처도 할것
 *
 * 6. TODO 이 외 텍스트가 아닌 모든 경우에 대해서 링크 걸면 안됨. 생각해볼것. (띄어쓰기 선택하고 링크 걸려는 경우)
 *
 * 7. 선택된 텍스트의 앞뒤로 공백이 있으면 trim
 *
 *
 * TODO : 만약 다른 이름의 문서로 링크를 걸고 싶으면 어떻게 할지 생각해볼것. 다이얼로그 띄워야 하나?
 *
 * TODO : 기본적으로 들어있는 unlink 플러그인 보면 링크된 영역 안에 커서가 들어갓을때만 버튼이 활성화 되는데, 이런것도 구현해야 할듯.
 *         -> 링크를 걸수 있는 조건을 메서드로 분리하고 커서가 해당 영역에 있다면 매서드 이용해서 유효한지 검사.
 *
 * @type {*|CKEDITOR.dom.selection|Selection}
 *
 * 참고 : http://docs.ckeditor.com/#!/api/CKEDITOR.dom.selection
 * http://stackoverflow.com/questions/27348572/enable-ckeditor-toolbar-button-only-with-valid-text-selection
 *
 */

CKEDITOR.plugins.add( 'HammerInternalLink', {
    icons: 'hammerinternallink',
    hidpi: true, // %REMOVE_LINE_CORE%
    init: function( editor ) {

        // 여기부턴 원래 코드

        var buttonName = 'HammerInternalLink',
            buttonLabel = '위키 문서로 링크 넣기',
            commandName = 'hammerinternallink';


        // Create the command that can be used to apply the style.
        //editor.addCommand( commandName, new CKEDITOR.styleCommand( style, {
        //    //contentForms: forms
        //} ) );
        editor.addCommand( commandName, {
            exec: function(editor) {

                var selection = editor.getSelection();
                var selector = selection.getStartElement()
                var element;
                var insertMode;
                var text;

                console.log(selection);
                console.log(selector);

                if(selection && (selection.getRanges()[0].collapsed === false)) {
                    element = selector.getAscendant( 'a', true );
                } else {
                    // 선택 영역이 없는경우 : 추후 구현
                }

                if (selection.getSelectedText()) {
                    text = selection.getSelectedText().trim();
                }

                if (!text) {
                    return false;
                }

                if ( !element || element.getName() != 'a' ) {

                    element = editor.document.createElement( 'a' );
                    element.setAttribute("target","_blank");
                    if(selection) {
                        element.setText(text);
                    }
                    insertMode = true;
                }
                else {
                    insertMode = false;
                }

                element.setAttribute("href", text);

                if (insertMode) {
                    editor.insertElement(element);
                    editor.getSelection().selectElement(element);
                }
            }
        });

        // Register the button, if the button plugin is loaded.
        if ( editor.ui.addButton ) {
            editor.ui.addButton( buttonName, {
                label: buttonLabel,
                command: commandName,
                toolbar: 'hammerinternallink,' + ( 10 )
            } );
        }

        editor.setKeystroke( [
            [ CKEDITOR.CTRL + 75 /*K*/, 'hammerinternallink' ]
            // [ CKEDITOR.CTRL + 76 /*L*/, 'hammerinternallink' ]
        ] );
        return;
    }
});
