<footer id="footer" class="footer-area">

    <div class="footer-bottom">

        <div class="container aligncenter">

<!--            <p>&copy;2013 by <a href="http://coolorize.com">Coolorize Network</a>. All Right Reserved. <p>-->
            <p>대장간 위키는 게임에 대한 정보를 제공하는 웹서비스입니다</p>

        </div>

    </div>

</footer>

<script src="../assets/vendor/jquery-1.10.1.min.js"></script>
<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/vendor/jquery-1.10.1.min.js"><\/script>')</script>
-->

<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="../assets/vendor/jquery.unveil.min.js"></script>

<!-- 데이터테이블 -->
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<script src="../assets/vendor/fluidvids/fluidvids.min.js"></script>

<script src="../assets/js/main.js"></script>

<!-- inline js code (데이터테이블 테스트용) -->
<script>

    $(document).ready(function() {

        // data tables
        $.extend($.fn.dataTable.defaults, {
            "paging":   true,
            "ordering": true,
            "info":     true,
            "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
            language: {
                processing:     "처리중...",
                search:         "검색:",
                lengthMenu:     "페이지당 줄수 _MENU_",
                info:           "_START_ - _END_ / _TOTAL_",
                infoEmpty:      "0 - 0 / 0",
                infoFiltered:   "(총 _MAX_ 개)",
                infoPostFix:    "",
                loadingRecords: "읽는중...",
                zeroRecords:    "검색 결과가 없습니다",
                emptyTable:     "데이터가 없습니다",
                paginate: {
                    first:      "&lt;&lt;",
                    previous:   "&lt;",
                    next:       "&gt;",
                    last:       "&gt;&gt;"
                },
                aria: {
                    sortAscending:  ": 오름차순 정렬",
                    sortDescending: ": 내림차순 정렬"
                }
            }
        });
        $('#example').dataTable();

        // fluid vids
        fluidvids.init({
            selector: ['iframe'],
            players: ['www.youtube.com', 'player.vimeo.com']
        });
    });

</script>

</body>
</html>
