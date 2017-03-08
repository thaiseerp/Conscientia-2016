    <footer class="footer" role="contentinfo" style="margin:0 auto -25px auto">
    <div id="inner-footer" class="wrap clearfix">
        <div class="explore" style="border-bottom:1px solid #616A7A;margin-bottom:10px">
            <ul style="margin-left:-50px;">
                <?php if($this->ion_auth->logged_in()) { ?>
                <li style="display: inline;"><a href="<?=base_url()?>mathematrix/">Questions</a></li>
                <?php } ?>
                <li style="display: inline;"><a href="<?=base_url()?>mathematrix/rules">Rules</a></li>
                <li style="display: inline;"><a href="<?=base_url()?>mathematrix/leaderboard">Leaderboard</a></li>
            </ul>
            <p style="font-size:22px">Explore Conscientia 2016</p>
            <ul style="margin-left:-50px;">
                <li style="display: inline;"><a href="<?=base_url()?>">Home</a></li>
                <li style="display: inline;"><a href="<?=base_url()?>events/">Events</a></li>
                <li style="display: inline;"><a href="<?=base_url()?>workshops/">Workshops</a></li>
                <li style="display: inline;"><a href="<?=base_url()?>team/">Contact us</a></li>
            </ul>
        </div>
    <p class="source-org copyright"> Conscientia 2016</p>
    </div>
    </footer>  
    <script data-cfasync="false" src="<?=base_url()?>contents/js/jquery.min.js"></script>   
    <script src="<?=base_url();?>contents/js/bootstrap.min.js"></script>
    <script data-cfasync="false" src="<?=base_url()?>contents/js/bootstrap-dropdownhover.min.js"></script>
    <script>
        $(window).load(function() {
            $('body').addClass('loaded');
        });
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
        }
    </script>
</body>
</html>