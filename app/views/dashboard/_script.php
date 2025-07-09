<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggler = document.getElementById('sidebarToggler');
        
        if (sidebarToggler) {
            sidebarToggler.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                document.body.classList.toggle('sidebar-open');
            });
        }

        document.addEventListener('click', function(event) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggler = sidebarToggler ? sidebarToggler.contains(event.target) : false;

            if (!isClickInsideSidebar && !isClickOnToggler && sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                document.body.classList.remove('sidebar-open');
            }
        });
    });
</script>