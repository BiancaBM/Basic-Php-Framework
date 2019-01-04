<?php

/* layout.html */
class __TwigTemplate_f4ca33927bfcaff5373f867e5bcbf3a72c542bf2b7c00ad49639c1ad7e6b6e13 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"content\">";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <link rel=\"stylesheet\" href=\"style.css\" />
            <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</title>
        ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo "Default content";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  50 => 6,  47 => 5,  44 => 4,  36 => 10,  32 => 8,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/var/www/app/Views/layout.html");
    }
}
