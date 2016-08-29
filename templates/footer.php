<footer class="content-info">
    <div class="container">
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
</footer>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Adresse</h3>
                    <p>
                        Dream Musical Company <br>
                        5 chemin neuf<br>1207, Genève
                    </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <p>
                            <a href="mailto:<?= get_option('admin_email') ?>"><?= get_option('admin_email') ?></a>
                        </p>
                        <!-- <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Clochette</h3>
                        <p>
                            Composer | Pianist | Vocalist
                        </p>
                        <!-- <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <?php bloginfo('name'); ?> 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
