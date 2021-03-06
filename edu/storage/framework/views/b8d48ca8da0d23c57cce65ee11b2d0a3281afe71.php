<?php if($lang == 'en'): ?>
    <header class="header" >
        <!--start navbar-->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#myNavbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="index.html">
                            <img src="index/img/LOGOwhite.png"  height="60" alt="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a class="page-scroll" href="#hero">Home</a></li>
                            <li><a class="page-scroll" href="#features">Features</a></li>
                            <li><a class="page-scroll" href="#faqs">FAQS</a></li>
                            <li><a class="page-scroll" href="#news">News</a></li>
                            <li><a class="page-scroll" href="#contact">Contact </a></li>
                            <li><a class="page-scroll" href="<?php echo e(route('lang','ar')); ?>">arabic</a></li>
                            

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!--end navbar-->
    </header>

<?php else: ?>
<header class="header" >
    <!--start navbar-->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html">
                        <img src="index/img/LOGOwhite.png"  height="60" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="page-scroll" href="#hero">????????????????</a></li>
                        <li><a class="page-scroll" href="#features">????????????????</a></li>
                        <li><a class="page-scroll" href="#faqs">?????????????? ??????????????</a></li>
                        <li><a class="page-scroll" href="#news">??????????????</a></li>
                        <li><a class="page-scroll" href="#contact">???????? ??????</a></li>
                        <li><a class="page-scroll" href="<?php echo e(route('lang','en')); ?>">????????????????????</a></li>
                        

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!--end navbar-->
</header>
<?php endif; ?>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/index/header.blade.php ENDPATH**/ ?>