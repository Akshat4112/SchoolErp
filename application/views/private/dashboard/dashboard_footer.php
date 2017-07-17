 <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="<?= site_url('home/feedback')?>">
                        Feedback
                    </a>

                <li>
                    <a href="<?= site_url('home/query')?>">
                        Query
                    </a>

                <li>
                    <a href="<?= site_url('home/suggestions')?>">
                        Suggestions
                    </a>

                <li>
                    <a href="<?= site_url('home/help')?>">
                        Help
                    </a>

            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
            <a href="http://www.futureheadtech.com">Futurehead Technologies</a>
        </p>
    </div>
 </body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public//assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?= base_url() ?>public//assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>public//assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?= base_url() ?>public//assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>public//assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</html>