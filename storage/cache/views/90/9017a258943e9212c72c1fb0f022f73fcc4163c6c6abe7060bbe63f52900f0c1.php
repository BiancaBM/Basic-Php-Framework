<?php

/* user/show.html */
class __TwigTemplate_b7890a1cb3d3ded50ed0f075286b12a2aff108628d2212766ed701598c6e5156 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "user/show.html", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["pageTitle"] = "User details";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"user.css\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h1>User ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
<ul>
    <li>Email: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</li>
    <li>Registered: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "created_at", array()), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "user/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 10,  50 => 8,  47 => 7,  39 => 4,  36 => 3,  32 => 2,  30 => 1,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/show.html", "/var/www/app/Views/user/show.html");
    }
}
