<?php

/* base.html */
class __TwigTemplate_7a5b67b8e479f97e9beea28c91294da4bbb113dabbe90458baee88903bf78c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottomscript' => array($this, 'block_bottomscript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"components/bootstrap/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"components/fontawesome/css/font-awesome.min.css\">
    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "    \t<div class=\"container\">
    \t\t";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "    \t</div>

        ";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "       \t<script type=\"text/javascript\" src=\"components/jquery/dist/jquery.min.js\"></script>
       \t<script type=\"text/javascript\" src=\"components/bootstrap/dist/js/bootstrap.min.js\"></script>
        ";
        // line 27
        $this->displayBlock('bottomscript', $context, $blocks);
        // line 30
        echo "    </body>
</html>";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "
        ";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t\t<h1>Content Here</h1>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "
        ";
    }

    // line 27
    public function block_bottomscript($context, array $blocks = array())
    {
        // line 28
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  88 => 27,  83 => 23,  80 => 22,  71 => 14,  68 => 13,  63 => 10,  60 => 9,  55 => 30,  53 => 27,  49 => 25,  47 => 22,  43 => 20,  41 => 13,  38 => 12,  36 => 9,  28 => 4,  23 => 1,);
    }
}
