<?php

/* StcScraperBundle:Admin:index.html.twig */
class __TwigTemplate_ef10f28410684263f39ef4b35a004353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stcscraper/css/bootstrap.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Header -->
    <div id=\"top-nav\" class=\"navbar navbar-inverse navbar-static-top\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
            <span class=\"icon-list\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
        <div class=\"nav-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav navbar-nav pull-right\">

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        <strong>Admin</strong> <span class=\"caret\"></span></a>
                    <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">My Profile</a></li>
                    </ul>
                </li>

                <li><a href=\"#\">Log out</a></li>
            </ul>
        </div>
    </div>
    <!-- /Header -->

    <!-- Main -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col col-lg-3\">
                <!-- Left -->
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"nav-header\"></li>
                    <li class=\"active\"><a href=\"http://bootply.com\" title=\"The Bootstrap Playground\" target=\"ext\">Home</a></li>
                    <li><a href=\"/tagged/bootstrap-3\">Bootstrap 3</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"/61518\" title=\"Bootstrap 3 Panel\">Panels</a></li>
                    <li><a href=\"/61521\" title=\"Bootstrap 3 Icons\">Glypicons</a></li>
                    <li><a href=\"/61523\" title=\"Bootstrap 3 ListGroup\">List Groups</a></li>
                    <li><a href=\"#\">GitHub</a></li>
                    <li><a href=\"/61518\" title=\"Bootstrap 3 Slider\">Carousel</a></li>
                    <li><a href=\"/62603\">Layout</a></li>
                </ul>
            </div><!-- /span-3 -->
            <div class=\"col col-lg-9\">
                <!-- Right -->
                <div class=\"navbar-inner clearfix\">
                    <a class=\"navbar-brand\" href=\"#\"><span class=\"glyphicon glyphicon-dashboard icon-large\"></span> My Dashboard</a>
                    <ul class=\"nav nav-pills pull-right\">
                        <li class=\"active\"><a title=\"Add Widget\" data-toggle=\"modal\" href=\"#addWidgetModal\"><span class=\"glyphicon glyphicon-plus-sign icon-large\"></span> Add Widget</a></li>
                    </ul>
                </div>

                <hr>

                <div class=\"row\">
                    <div class=\"col col-lg-6\">
                        <div class=\"well\">Inbox Messages <span class=\"badge pull-right\">3</span></div>

                        <div class=\"panel\">
                            <div class=\"panel-heading\">
                                <i class=\"icon icon-chevron-up chevron\"></i>
                                <i class=\"icon icon-wrench pull-right\"></i> Quick Start
                            </div>
                            <div class=\"panel-content\">

                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn btn-primary col col-lg-3\">
                                        <i class=\"icon-laptop icon-large\"></i>
                                        <p>Service</p>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary col col-lg-3\">
                                        <i class=\"icon-cloud icon-large\"></i>
                                        <p>Cloud</p>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary col col-lg-3\">
                                        <i class=\"icon-github icon-large\"></i>
                                        <p>GitHub</p>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary col col-lg-3\">
                                        <span class=\"glyphicon glyphicon-question-sign icon-large\"></span>
                                        <p>Help</p>
                                    </a>
                                </div>
                            </div><!--/panel content-->
                        </div><!--/panel-->


                        <div class=\"panel\">
                            <div class=\"panel-heading\">Report</div>
                            <table class=\"table table-striped\">
                                <thead>
                                <tr><th>Col 1</th><th>Col 2</th><th>Col 3</th></tr></thead>
                                <tbody>
                                <tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
                                <tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
                                <tr><td>98</td><td>25%</td><td>Type</td></tr>
                                <tr><td>..</td><td>..</td><td>..</td></tr>
                                <tr><td>..</td><td>..</td><td>..</td></tr>
                                </tbody>
                            </table>
                        </div><!--/panel-->


                        <div class=\"panel\">
                            <div class=\"panel-heading\">Charts</div>
                            <div class=\"panel-content\"><img src=\"http://www.wired.com/playbook/wp-content/uploads/2012/08/data-tracking-run-chart.jpg\" class=\"img-responsive\"></div>
                        </div><!--/panel-->

                    </div>
                    <div class=\"col col-lg-6\">
                        <div class=\"panel\">
                            <div class=\"panel-heading\">Bootstrap 3</div>
                            This is a dashboard-style layout that uses Bootstrap 3 RC. You can follow the ongoing pre-release discussions about Bootstrap 3.0 on this <a href=\"https://github.com/twitter/bootstrap/pull/6342\">GitHub thread</a>.
                            <br><br>
                            This Bootstrap 3 dashboard layout is compliments of <a href=\"http://bootply.com\">Bootply</a>.
                        </div>

                        <div class=\"panel\">
                            <div class=\"panel-heading\"><i class=\"icon icon-chevron-up chevron\"></i>
                                <i class=\"icon icon-wrench pull-right\"></i> Form
                            </div>
                            <div class=\"panel-content form-horizontaL\">

                                <form class=\"form form-vertical\">

                                    <div class=\"control-group\">
                                        <label>Name</label>
                                        <div class=\"controls\">
                                            <input placeholder=\"Enter Name\" type=\"text\">

                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label>Label</label>
                                        <div class=\"controls\">
                                            <input placeholder=\"Password\" type=\"password\">

                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label>Text</label>
                                        <div class=\"controls\">
                                            <textarea></textarea>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label>Select</label>
                                        <div class=\"controls\">
                                            <select><option>options</option></select>
                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label></label>
                                        <div class=\"controls\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                Post
                                            </button>
                                        </div>
                                    </div>

                                </form>


                            </div><!--/panel content-->
                        </div><!--/panel-->

                        <div class=\"panel\">
                            <div class=\"panel-heading\">Engagement</div>
                            <div class=\"panel-content pull-center\">

                                <img src=\"http://placehold.it/90X90/CC2222/FFF\" class=\"img-circle\">

                                <img src=\"http://placehold.it/90X90/11CC22/FFF\" class=\"img-circle\">

                                <img src=\"http://placehold.it/90X90/EEEEEE/222\" class=\"img-circle\">

                            </div>
                        </div><!--/panel-->


                        <i class=\"icon-bar-chart icon-3x\"></i>
                        <i class=\"icon-plus icon-3x\"></i>
                        <i class=\"icon-facebook icon-3x\"></i>
                        <i class=\"icon-beaker icon-3x\"></i>
                        <i class=\"icon-twitter icon-3x\"></i>


                    </div><!--/col-span-6-->

                </div><!--/row-->
            </div><!--/col-span-9-->
        </div>
    </div>
    <!-- /Main -->

    <footer>This Bootstrap 3 dashboard layout is compliments of Bootply.com | <a href=\"http://www.bootply.com/61526\"><strong>Edit on Bootply</strong></a></footer>

    <div class=\"modal\" id=\"addWidgetModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\">Add Widget</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Add a widget stuff here..</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn\">Close</a>
                    <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->





";
    }

    public function getTemplateName()
    {
        return "StcScraperBundle:Admin:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  34 => 2,  31 => 1,  27 => 6,  23 => 4,  21 => 1,);
    }
}
