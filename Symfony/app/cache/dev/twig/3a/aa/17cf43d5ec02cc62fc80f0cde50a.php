<?php

/* StcScraperBundle::layout.html.twig */
class __TwigTemplate_3aaa17cf43d5ec02cc62fc80f0cde50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/srcscraper/js/bootstrap.js"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stcscraper/js/jquery-1.9.1.js"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Scraper Bundle";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<!-- Wrap all page content here -->
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
                            <a class=\"btn btn-large btn-danger btn-block\" href=\"http://bootstrap3.kissr.com/\" target=\"_blank\"> Start upgrade →</a>

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
        return array (  74 => 17,  65 => 14,  62 => 13,  57 => 12,  54 => 11,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
