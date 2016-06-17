<?php
use fronttheme\blomag\web\BlomagAsset;
use yii\bootstrap\Nav;
use yii\helpers\Html;


!empty($viewPath) || $viewPath = '@vendor/fronttheme/yii2-blomag/src/views/layouts';
BlomagAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title . ' :: ' . Yii::$app->name) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>

<div class="wrapper">

<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-9">
                <a href="./index.html" class="logo"><img src="images/logo.png" class="img-responsive" alt=""/></a>
            </div>
            <div class="col-md-8">
                <div class="search-content">
                    <form>
                        <input type="text" placeholder="Search text here...">
                    </form>
                </div>
                <div class="top-post">
                    <span>latest Post</span>
                    <h4><a href="#">5 Off-Page SEO Techniques that Aren't about Backlinks</a></h4>
                </div>
            </div>
            <div class="col-md-1 col-xs-3">
                <div class="search-trigger"><img src="images/ico/search.png" alt=""/></div>
            </div>
        </div>
        <div class="freebie-btn">
            <a href="#"></a>
        </div>
    </div>
</header>
<!-- HEADER -->

<!-- MENU -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Navmenu -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="active" href="#">Home</a></li>
                <li><a class="active" href="#">Профиль</a></li>
                <li><a class="active" href="#">Сообщения</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- MENU -->

<!-- MAIN CONTENT -->
<div class="inner-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- BLOG POST -->
                <div class="home-blog">
                    <div class="full-post">
                        <a href="blog.html"><img src="images/home/1/1.jpg" class="post-thumb img-responsive" alt=""/></a>
                        <div class="post-meta">
                            <span class="post-author">Lesly Quintella</span>
                            <span class="post-tags"><a href="#">Search Engine Optimization</a></span>
                        </div>
                        <h4><a href="blog.html">8 Essential Tools to Simplify SEO for Content Marketing</a></h4>
                        <p>Finding a real star requires going beyond "Tell me about yourself." Here are the questions that will tell you what you really want to know.</p>
                    </div>
                    
                    <div class="half-post">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="blog.html"><img src="images/home/1/2.jpg" class="post-thumb img-responsive" alt=""/></a>
                            </div>
                            <div class="col-md-6">
                                <h4><a href="blog.html">4 Elements You Need to Include in Your Online Marketing Campaigns</a></h4>
                                <div class="post-meta">
                                    <span class="post-author">Lavonne Flynn</span>
                                    <span class="post-tags"><a href="#">Online Marketing</a></span>
                                </div>
                                <p>Finding a real star requires going beyond "Tell me about yourself." Here are the questions that will tell you what you really</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="sep"></div>
                    
                    
                    
                    
                </div>
                
                <div class="free-course">
                    <h5>Free Course, valued at $299</h5>
                    <h3>&quot;Double Your Traffic in 30 days&quot; + Secret Bonus</h3>
                    <p>This amazing course will teach you, step by step, how to double if not triple your traffic over the next 30 days.</p>
                    <form>
                        <input type="text" placeholder="Email...">
                        <button type="submit">Yes, let's Start</button>
                    </form>
                    <div class="clearfix"></div>
                    <span>100% Privacy. We will never spam you!</span>
                </div>
                        
                <!-- PAGINATION -->
                <div class="page_nav">
                    <ul>
                        <li class="active"><a href="./index.html">1</a></li>
                        <li><a href="./index.html">2</a></li>
                        <li><a href="./index.html">3</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- SIDEBAR -->
            <aside class="col-md-4">
                <div class="free-course free-course-aside side-widget">
                    <h5>Free Course</h5>
                    <h3>&quot;Double Your Traffic in 30 days&quot; + Secret Bonus</h3>
                    <h5>valued at $299</h5>
                    <p>This amazing course will teach you, step by step, how to double if not triple your traffic over the next 30 days.</p>
                    <form>
                        <input type="text" placeholder="Email...">
                        <button type="submit">Yes, let's Start</button>
                    </form>
                    <span>100% Privacy. We will never spam you!</span>
                </div>
                <div class="recent-posts side-widget">
                    <h4>Today's Must Reads</h4>
                    <ul>
                        <li>
                            <a href="./blog.html" class="rp-title">9 Things Warren Buffett Says You Should Do to Be Happy and Successful</a>
                            <div class="rp-meta">
                                <span class="post-author">Pearlie Giles</span>
                                <span class="post-tags"><a href="#">Startup</a></span>
                            </div>
                        </li>
                        <li>
                            <a href="./blog.html" class="rp-title">The Dating App That's Hacking Fate Within a 250-Meter Radius</a>
                            <div class="rp-meta">
                                <span class="post-author">Cathleen Rolph</span>
                                <span class="post-tags"><a href="#">Development</a></span>
                            </div>
                        </li>
                        <li>
                            <a href="./blog.html" class="rp-title">MassRoots Becomes the Biggest hit in the Marijuana Business</a>
                            <div class="rp-meta">
                                <span class="post-author">Nigella Esta</span>
                                <span class="post-tags"><a href="#">Online Business</a></span>
                            </div>
                        </li>
                        <li>
                            <a href="./blog.html" class="rp-title">Steal These 5 Secrets From Google, Netflix, Amazon to Improve Your Customer Service</a>
                            <div class="rp-meta">
                                <span class="post-author">Katelynn Sheree</span>
                                <span class="post-tags"><a href="#">Tips & Tricks</a></span>
                            </div>
                        </li>
                        <li>
                            <a href="./blog.html" class="rp-title">8 Stealth Interview Questions That Reveal True Character</a>
                            <div class="rp-meta">
                                <span class="post-author">Zackary Norah</span>
                                <span class="post-tags"><a href="#">Human Resources</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ad-block side-widget">
                    <img src="images/home/other/ad-300.jpg" class="img-responsive" alt=""/>
                    <a href="#">Advertise Here</a>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- MAIN CONTENT -->

<!-- ARTICLES -->
<div class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Articles on Seo</h5>
                <p>Search Engine Optimization (SEO) tactics, tools, and news on website crawling, indexing and ranking, link building, algorithm changes, keyword research and more.</p>
            </div>
            <div class="col-md-4">
                <ul class="articles-list">
                    <li>
                        <h4><a href="./blog.html">How to Get Your Slice of Reddit's 150 Million Pageviews</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Farley Jonty</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                    <li>
                        <h4><a href="./blog.html">The Power of Social Advertising and Custom Website Audiences for Panda and Penguin Victims</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Dayton Liana</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                    <li>
                        <h4><a href="./blog.html">Facebook Drops Microsoft's Bing to Do Its Own Search Thing</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Ainslie Perce</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="articles-list">
                    <li>
                        <h4><a href="./blog.html">Come On, Google. Let the Little Guy Earn a Link!</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Sky Whitaker</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                    <li>
                        <h4><a href="./blog.html">Tracking the Evolution of Google Panda Updates - From Monthly to Tremors to Missing in Action</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Tyron Callista</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                    <li>
                        <h4><a href="./blog.html">Why I Will Continue to Use the Term Link Building</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Helena Dale</span>
                            <span class="post-tags"><a href="#">SEO</a></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ARTICLES -->

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-widget footer-about">
                <h5>About</h5>
                <p>BloMag HTML Template was built exclusively for Blog Marketers that own a blog or a News Magazine.</p>
            </div>
            <div class="col-md-3 footer-widget footer-subscribe">
                <h5>Subscribe</h5>
                <form>
                    <input type="text" placeholder="Email...">
                    <button type="submit">Subscribe to Newsletter</button>
                    <span>We will never spam you!</span>
                </form>
            </div>
            <div class="col-md-6 footer-widget">
                <h5>Featured</h5>
                <div class="row footer-news">
                    <div class="col-md-4">
                        <a href="./blog.html"><img src="images/home/other/1.jpg" class="img-reponsive" alt=""/></a>
                    </div>
                    <div class="col-md-8">
                        <h4><a href="./blog.html">4 Elements You Need to Include in Your Online Marketing Campaigns</a></h4>
                        <div class="post-meta">
                            <span class="post-author">Matt Morgan</span>
                            <span class="post-tags"><a href="#">Development</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

<!-- FOOTER - COPYRIGHT -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2015 BloMag HTML Template. Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER - COPYRIGHT -->

</div>
<!-- Javascript 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/jquery.sticky.js"></script>
<script src="js/bs-header.js"></script>
<script src="js/main.js"></script>
-->
    </body>
    <?php $this->endBody() ?>
    </html>

<?php $this->endPage() ?>


    


