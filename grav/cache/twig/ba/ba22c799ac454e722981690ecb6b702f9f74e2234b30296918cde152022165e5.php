<?php

/* modular/go-category.html.twig */
class __TwigTemplate_3190dbf585f5e0e15b65d99f68d9256053ee3eeaefe2b95977d0da35f85574a8 extends Twig_Template
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
        echo "<div class=\"section-pattern section-pattern-green section-go-category\">
    ";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    
    <h3>";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
     <a class=\"button button-white\" href=\"";
        // line 5
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute(($context["header"] ?? null), "goCategory", array());
        echo "\">Descubra su Categoría</a>      
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/go-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section-pattern section-pattern-green section-go-category\">
    {{ page.content}}
    
    <h3>{{ page.header.title }}</h3>
     <a class=\"button button-white\" href=\"{{base_url}}{{header.goCategory}}\">Descubra su Categoría</a>      
</div>
", "modular/go-category.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/go-category.html.twig");
    }
}
