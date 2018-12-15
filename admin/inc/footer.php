 <!-- Required common Js -->
 <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <script>
        $(document).ready(function () {
          $("#department_1").change(function () {
            //alert($('#department_1').find(":selected").val());
             $.ajax({
                type: 'POST',
                url: 'ajax_view.php',
                data: {selectedType: $('#department_1').find(":selected").val() },
                dataType: 'html',
                success: function(data){
                    $('#result_by_ajax_1').html(data);
                },
                error: function ()
                {
                    alert('Error');
                }
            });
        });
          $("#department_2").change(function () {
            //alert($('#department_2').find(":selected").val());
             $.ajax({
                type: 'POST',
                url: 'ajax_view_3.php',
                data: {selectedType: $('#department_2').find(":selected").val() },
                dataType: 'html',
                success: function(data){
                    $('#result_by_ajax_3').html(data);
                },
                error: function ()
                {
                    alert('Error');
                }
            });
        });
          $("#c_name").change(function () {
            //alert($('#c_name').find(":selected").val());
             $.ajax({
                type: 'POST',
                url: 'ajax_view_2.php',
                data: {selectedType: $('#c_name').find(":selected").val() },
                dataType: 'html',
                success: function(data){
                    $('#result_by_ajax_2').html(data);
                },
                error: function ()
                {
                    alert('Error');
                }
            });
          });
          $("#course_name").change(function () {
            //alert($('#c_name').find(":selected").val());
             $.ajax({
                type: 'POST',
                url: 'ajax_select.php',
                data: {selectedType: $('#course_name').find(":selected").val() },
                dataType: 'html',
                success: function(data){
                    $('#options').html(data);
                },
                error: function ()
                {
                    alert('Error');
                }
            });
          });
        });
    </script>
    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
