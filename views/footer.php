        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12 footer">
                Copyright &copy; <?php echo date("Y"); ?> <span>Rick Ryan Medillo.</span> All Rights Reserved.
                </div>
            </div>
        </div> -->

        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../assets/js/sweetalert2.min.js"></script>
        <script type="text/javascript" src="../assets/js/custom_controller_public.js"></script>
		
    <!-- javascript goes here  -->
    <script>
        // var base_url = window.location.origin;

        $(document).ready( function () {
			$('#myTable').DataTable();
            $('[data-tooltip="tooltip"]').tooltip();

            // remove display link if visited
            var url = window.location;
            var element = $('.dropdown-menu a').filter(function() {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }).addClass('d-none').parent().parent().addClass('in').parent();
        });
    </script>
    <!-- end of javascript -->

    </body>
</html>