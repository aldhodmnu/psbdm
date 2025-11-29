<!-- Footer container -->
<footer class="bg-white border-top mt-5 py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="mb-0 text-muted small">
                    &copy; <?php echo date('Y'); ?> <strong>Pondok Pesantren Darul Ma'arif</strong><br>
                    Kaplongan, Karangampel, Indramayu.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <a href="https://www.facebook.com/pontrendarulmaarif/" class="text-secondary mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="https://www.instagram.com/pontrendarulmaarif/" class="text-secondary mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="https://www.youtube.com/channel/UCexample" class="text-secondary mx-2"><i class="fab fa-youtube fa-lg"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/c48877bd36.js" crossorigin="anonymous"></script>

<!-- import jQuery -->
<script type="text/javascript" src="styles/jquery/jquery.min.js"></script>

<!-- import Js Bootstrap -->
<script type="text/javascript" src="styles/bootstrap/js/bootstrap.min.js"></script>

<!-- import DataTables -->
<script type="text/javascript" src="styles/DataTables/datatables.min.js"></script>

<!-- fungsi Setting DataTables -->
<script>
    $(document).ready(function() {
        // Initialize DataTable if element exists
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true,
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    paginate: {
                        first: "Awal",
                        last: "Akhir",
                        next: "Lanjut",
                        previous: "Kembali"
                    }
                }
            });
        }
        
        // Add active class to current nav item
        var currentLocation = window.location.href;
        $('.navbar-nav .nav-link').each(function() {
            if(this.href === currentLocation) {
                $(this).addClass('active font-weight-bold');
            }
        });
    });
</script>
</body>
</html>