<?php

/* modular/intro-home.html.twig */
class __TwigTemplate_55c40e96faad8ec74eed664bf649ad96cee8d721c138f9e1acbdb7496c223541 extends Twig_Template
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
        echo "<div class=\"intro-bae\">
\t\t<h1>";
        // line 2
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
\t\t";
        // line 3
        echo $this->getAttribute(($context["header"] ?? null), "text", array());
        echo "
\t\t<a href=\"header.button_first_url\" class=\"button button-border-blue
\">";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "button_first_text", array());
        echo "</a>
\t\t<a href=\"header.button_second_url\" class=\"button button-border-blue
\">";
        // line 7
        echo $this->getAttribute(($context["header"] ?? null), "button_second_text", array());
        echo "</a>
\t\t<a href=\"header.button_third_url\" class=\"button button-border-blue
\">";
        // line 9
        echo $this->getAttribute(($context["header"] ?? null), "button_third_text", array());
        echo "</a>
</div>

<div class=\"categories\">
\t<h2>";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "categories_title", array());
        echo "</h2>
\t";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "categories_content", array());
        echo "
</div>

<div class=\"categories-list\">
\t<!-- tenemos que enlistar todas las categorías -->
\t<ul>
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "list_content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "\t    <li><a href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($context["item"], "categorie_page", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "content_categorie", array());
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</ul>
\t<a href=\"";
        // line 24
        echo ($context["base_url"] ?? null);
        echo "/landing-de-categorias\" class=\"button button-border-white\">Ver todas las categorías</a>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/intro-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  77 => 23,  65 => 21,  61 => 20,  52 => 14,  48 => 13,  41 => 9,  36 => 7,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"intro-bae\">
\t\t<h1>{{ header.title }}</h1>
\t\t{{ header.text }}
\t\t<a href=\"header.button_first_url\" class=\"button button-border-blue
\">{{header.button_first_text}}</a>
\t\t<a href=\"header.button_second_url\" class=\"button button-border-blue
\">{{header.button_second_text}}</a>
\t\t<a href=\"header.button_third_url\" class=\"button button-border-blue
\">{{header.button_third_text}}</a>
</div>

<div class=\"categories\">
\t<h2>{{header.categories_title}}</h2>
\t{{header.categories_content}}
</div>

<div class=\"categories-list\">
\t<!-- tenemos que enlistar todas las categorías -->
\t<ul>
\t{% for item in header.list_content %}
\t    <li><a href=\"{{base_url}}{{item.categorie_page}}\">{{item.content_categorie}}</a></li>
\t{% endfor %}
\t</ul>
\t<a href=\"{{base_url}}/landing-de-categorias\" class=\"button button-border-white\">Ver todas las categorías</a>
</div>", "modular/intro-home.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/intro-home.html.twig");
    }
}
