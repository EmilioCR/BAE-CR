<?php

/* modular/allies-section.html.twig */
class __TwigTemplate_78a77bba40e7a6742ab7ebadaa3a5e4b66a8a6420f8e65fdea2e6f22d62f33af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"allies-section\">
\t<h2>Aliados</h2>
\t<p>Bandera Azul es posile garcias al apoyo de estas organizaciones</p>
\t<div class=\"allies-list\">
\t\t<ul>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "allies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["allies"]) {
            // line 7
            echo "\t\t\t    <li><img src=\"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["allies"], "allie_item", array())), "path", array());
            echo "\" alt=\"\"></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</ul>
\t</div>
</div>\t";
    }

    public function getTemplateName()
    {
        return "modular/allies-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"allies-section\">
\t<h2>Aliados</h2>
\t<p>Bandera Azul es posile garcias al apoyo de estas organizaciones</p>
\t<div class=\"allies-list\">
\t\t<ul>
\t\t\t{% for allies in header.allies %}
\t\t\t    <li><img src=\"{{(allies.allie_item|first).path}}\" alt=\"\"></li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
</div>\t", "modular/allies-section.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/allies-section.html.twig");
    }
}
