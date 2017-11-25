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
\t<div class=\"hero-header\">
\t\t<h2 class=\"title-allies\">Aliados</h2>
\t\t<p>Bandera Azul es posible gracias al apoyo de estas organizaciones.</p>
\t</div>
\t<div class=\"allies-list\">
\t\t
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "allies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["allies"]) {
            // line 9
            echo "\t\t\t<figure class=\"our-allies\">
\t\t\t    <img src=\"";
            // line 10
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["allies"], "allie_item", array())), "path", array());
            echo "\" alt=\"\">
\t\t\t</figure>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t
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
        return array (  44 => 13,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
\t<div class=\"hero-header\">
\t\t<h2 class=\"title-allies\">Aliados</h2>
\t\t<p>Bandera Azul es posible gracias al apoyo de estas organizaciones.</p>
\t</div>
\t<div class=\"allies-list\">
\t\t
\t\t\t{% for allies in header.allies %}
\t\t\t<figure class=\"our-allies\">
\t\t\t    <img src=\"{{(allies.allie_item|first).path}}\" alt=\"\">
\t\t\t</figure>
\t\t\t{% endfor %}
\t\t
\t</div>
</div>\t", "modular/allies-section.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/allies-section.html.twig");
    }
}
