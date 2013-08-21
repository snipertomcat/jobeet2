<?php

/* StcScraperBundle::layout.html.twig */
class __TwigTemplate_3aaa17cf43d5ec02cc62fc80f0cde50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "


";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stcscraper/css/bootstrap.css"), "html", null, true);
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
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
";
        // line 150
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"navbar navbar-fixed-top navbar-inverse\">
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
    ";
    }

    public function getTemplateName()
    {
        return "StcScraperBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  73 => 12,  68 => 150,  65 => 59,  62 => 12,  59 => 11,  53 => 9,  46 => 4,  43 => 3,  39 => 11,  36 => 10,  34 => 9,  29 => 6,  27 => 3,  23 => 1,);
    }
}
