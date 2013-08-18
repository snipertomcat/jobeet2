<?php

/* StcScraperBundle::layout.html.twig */
class __TwigTemplate_69698ae54d536069322d4cf77a3d2db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stcscraper/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stcscraper/css/bootstrap_min.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundle/stcscraper/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundle/stcscraper/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Scraper Bundle";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"block\">
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "    </div>



";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
            <!-- Wrap all page content here -->
            <div id=\"wrap\">

                <div class=\"navbar navbar-fixed-top navbar-inverse\">
                    <div class=\"container\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Title</a>
                        <div class=\"nav-collapse collapse navbar-responsive-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Action</a></li>
                                        <li><a href=\"#\">Another action</a></li>
                                        <li><a href=\"#\">Something else here</a></li>
                                        <li class=\"divider\"></li>
                                        <li class=\"nav-header\">Nav header</li>
                                        <li><a href=\"#\">Separated link</a></li>
                                        <li><a href=\"#\">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class=\"navbar-form pull-left\" action=\"\">
                                <input class=\"col col-lg-8\" placeholder=\"Search\" type=\"text\">
                            </form>
                            <ul class=\"nav navbar-nav pull-right\">
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Action</a></li>
                                        <li><a href=\"#\">Another action</a></li>
                                        <li><a href=\"#\">Something else here</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /.container -->
                </div><!-- /.navbar -->


                <!-- Footer
                =================================-->
                <div id=\"footer\">
                    <div class=\"container\">
                        <!-- MARKETING LINE-->
                        <div class=\"row\">
                            <div class=\"well\">
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">
                                        <p class=\"lead \">

                                            Bootstrap 3 Upgrader: Get your HTML from 2.3 to 3.0! Free Bootstrap 2 =&gt; 3 migration service now alive!
                                        </p>
                                    </div>
                                    <div class=\"col-lg-4\">
                                        <a class=\"btn btn-large btn-danger btn-block\" href=\"http://bootstrap3.kissr.com/\" target=\"_blank\"> Start upgrade ?</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /MARKETING LINE-->
                        <hr>
                        <div class=\"row\">
                            <p class=\"lead\" style=\"padding-top:10px;\">Get more Bootstrap 3 themes, templates and Bootstrap 3 version tutorial <a class=\"btn btn-danger\" href=\"http://bootstrap-3.bootstraptor.com\">Bootstrap 3 tutorial</a></p>
                        </div>
                    </div>
                </div>
                <!-- /Footer -->

            </div><!-- end: Wrap all page content here -->

        ";
    }

    public function getTemplateName()
    {
        return "StcScraperBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  76 => 15,  68 => 101,  66 => 15,  62 => 13,  59 => 12,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
