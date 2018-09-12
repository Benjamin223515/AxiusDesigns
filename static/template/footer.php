<? if($verification == 1){}else{Header("Location: https://axius.design/404"); die();} ?>


<footer id="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content text-center">
                    <h4><? echo $name; ?></h4>
                    <ul class="list-inline">


                        <?



                                $str = file_get_contents('api/social.json');



                                $socialmedia = json_decode($str, true);



                            if (is_array($socialmedia)) {



                                foreach ($socialmedia as $obj) {



                                    $link = $obj['link'];

                                    $icon = $obj['icon'];



                                    echo "<li class='list-inline-item'><a href='" . $link . "'><i class='" . $icon . "'></i></a></li>";

                                }

                            }else{

                                // Error

                            }



                            ?>

                    </ul>
                    <p>Copyright <? echo date('Y'); ?> &copy; <span><? echo $name; ?>. All Rights Reserved. <br> Designed by <a href="https://chaottiic.com">Chaottiic</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>



        <script src="static/js/jquery.min.js"></script>
        <script src="static/js/popper.min.js"></script>
        <script src="static/js/bootstrap.min.js"></script>
        <script src="static/js/owl.carousel.min.js"></script>
        <script src="static/js/isotope.pkgd.min.js"></script>
        <script src="static/js/jquery.easing.1.3.min.js"></script>

        <script src="static/js/custom.js"></script>

</body>

</html>
