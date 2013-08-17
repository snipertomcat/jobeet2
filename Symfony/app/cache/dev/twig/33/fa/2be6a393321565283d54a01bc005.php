<?php

/* StcScraperBundle:Default:index.html.twig */
class __TwigTemplate_33fa2be6a393321565283d54a01bc005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StcScraperBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StcScraperBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Scraper Bundle";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
        <!-- CONTENT
       =================================-->

        <div class=\"jumbotron text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-lg-12 col-sm-12\">
                        <h1>Bootstrap 3 - Flat style in action</h1>
                        <p>Bootstrap 3 provides modern flat style. This template based on Bootstrap 3 RC version.</p>
                        <div class=\"row\">

                            <div class=\"col col-lg-6 col-sm-6\"><p><a class=\"btn  btn-primary btn-block btn-large\" href=\"http://community.bootstraptor.com/categories/10088/bootstrap-3-version\" target=\"_blank\">Get more Bootstrap 3 examples</a></p></div>
                            <div class=\"col col-lg-6 col-sm-6\"><p><a class=\"btn btn-danger btn-block btn-large\" href=\"http://bootstrap-3.bootstraptor.com/post/53665815059/bootstrap-3-example-template-full-width\" target=\"_blank\"> Get this code</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /header container-->

        <!-- CONTENT
        =================================-->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col col-lg-12\"><div class=\"well\"><p>1</p></div></div>
            </div>
            <div class=\"row\">
                <div class=\"col col-lg-4\"><div class=\"well\"><p>4 cols</p></div></div>
                <div class=\"col col-lg-4\"><div class=\"well\"><p>4 cols</p></div></div>
                <div class=\"col col-lg-4\"><div class=\"well\"><p>4 cols</p></div></div>
            </div>
            <div class=\"row\">
                <div class=\"col col-lg-6 col-sm-6\"><div class=\"well\"><p>6 cols, 6 small cols</p></div></div>
                <div class=\"col col-lg-6 col-sm-6\"><div class=\"well\"><p>6 cols, 6 small cols</p></div></div>
            </div>



            <div class=\"row\">
                <div class=\"col col-lg-4 col-sm-6\"><div class=\"well\">4 cols, 6 small cols</div></div>
                <div class=\"col col-lg-4 col-sm-6\"><div class=\"well\">4 cols, 6 small cols</div></div>
                <div class=\"col col-lg-4 col-sm-12\"><div class=\"well\">4 cols, 12 small cols</div></div>
            </div>
        </div>

 <!-- /CONTENT
    =================================-->
";
    }

    public function getTemplateName()
    {
        return "StcScraperBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
