<?php
include("header.php")
?>
<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li><a href="#">위키</a></li>
                <li class="active" title="문서 편집">문서 편집</li>
            </ol>
        </div>

        <div class="row">

            <header class="page-header col-md-10 col-md-offset-1">

                <h2 class="page-title full-page-title">
                    "마이클 드 산타" 문서 편집하기
                </h2>

            </header>

            <article class="entry style-single style-single-full type-post col-md-10 col-md-offset-1">

                <div class="entry-content">

                    <form id="editor-form" action="submit.php" method="post">
                        <p>

    <textarea name="editor1" id="editor1">
        <p>This is my textarea to be replaced with CKEditor.</p>
        <p>Hello how are you</p>
        <p>I'm Fine Thank you and YOU?</p>
    </textarea>
                        </p>
                        <p>
                            <input type="submit" class="btn btn-primary" value="문서 저장">
                            <input type="button" class="btn btn-default" value="취소">
                        </p>
                    </form>

                    <script src="../assets/ckeditor/ckeditor.js"></script>
                    <script>

                        CKEDITOR.replace( 'editor1', {
                            extraPlugins: 'HammerFootnote,HammerImage,HammerInternalLink,HammerLink,HammerMovie,HammerObjectItem,HammerObjectList',
                            filebrowserUploadUrl: "/upload.php",
                            toolbar: [
                                { name: 'basicstyles', items: [ 'Bold', 'Underline', 'Strike' ] },
                                { name: 'footnote', items: ['HammerFootnote']},
                                { name: 'paragraph', items: ['NumberedList', 'BulletedList', /*'-', 'Outdent', 'Indent',*/ '-', 'Blockquote']},
                                { name: 'multimedia', items: ['HammerImage', 'HammerMovie']},
                                { name: 'link', items: ['Link', 'HammerInternalLink', 'HammerLink', 'Anchor', '-', 'Unlink']},    // external, anchor 아이콘으로 바꿀것
                                { name: 'database', items: ['HammerObjectItem', 'HammerObjectList']},
                            ],
                            forcePasteAsPlainText : true
                        });
                    </script>
                </div>

            </article>

        </div><!--/.col-md-8.col-lg-8.col-xl-9-->

    </div><!--/#content-->

</div><!--#main.container-->

<?php
include("footer.php");
?>
