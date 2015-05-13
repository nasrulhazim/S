<?php

/* index.html */
class __TwigTemplate_ec87c95b75e70e668e7e8091ed5a821c9acfa1a03a964d52ac317914bcb8180b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottomscript' => array($this, 'block_bottomscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"page-header\">
\t\t<h1>S. much slimer.</h1>
\t</div>
    <p class=\"lead\">Loose more!</p>
";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <p class=\"text-muted\">&copy; 2015.Prepared by <a href=\"http://nasrulhazim.com\" target=\"_blank\">nasrulhazim.m</a></p>
  </div>
</footer>
";
    }

    // line 21
    public function block_bottomscript($context, array $blocks = array())
    {
        // line 22
        echo "<style type=\"text/css\">
\t/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
.container .text-muted {
  margin: 20px 0;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  62 => 21,  53 => 14,  50 => 13,  42 => 7,  39 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }
}
