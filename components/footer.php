    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#sidebarCollapse').on('click', function () {
          // Sidebar
        $('#sidebar').toggleClass('active');
        $('.content').toggleClass('ml');
        $('.btn-menu').toggleClass('close');  
        });

        $('#showBtn').on('click', function () {
          // Sidebar
        $('#next').toggle();
        $('#prev').toggle();
        $('#sidebar').toggleClass('open');
        $('.content').toggleClass('pl');
        $('.show-icon').toggle();
        });

        $(function () {
            $('select').selectpicker();
        });
        
        // Map Content
        $('.btn-tornado').click(function(){
            $('.p-tornado').show();
            $('.p-hail').hide();
            $('.p-wind').hide();
        });
        $('.btn-hail').click(function(){
            $('.p-tornado').hide();
            $('.p-hail').show();
            $('.p-wind').hide();
        });
        $('.btn-wind').click(function(){
            $('.p-tornado').hide();
            $('.p-hail').hide();
            $('.p-wind').show();
        });

        // Chart Option
        $('.btn-option-1').click(function(){
            $('.img-option-1').show();
            $('.img-option-2').hide();
            $('.img-option-3').hide();
        });
        $('.btn-option-2').click(function(){
            $('.img-option-1').hide();
            $('.img-option-2').show();
            $('.img-option-3').hide();
        });
        $('.btn-option-3').click(function(){
            $('.img-option-1').hide();
            $('.img-option-2').hide();
            $('.img-option-3').show();
        });
    });
</script>
</body>
</html>