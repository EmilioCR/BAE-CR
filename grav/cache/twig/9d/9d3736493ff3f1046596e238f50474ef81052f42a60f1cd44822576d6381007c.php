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
        echo "<div class=\"section-pattern section-pattern-lightblue\">
\t<div class=\"limiter\">
\t\t<div class=\"intro-bae\">
\t\t\t\t<div class=\"intro-home-description\">
\t\t\t\t\t<h1>";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
\t\t\t\t\t<p>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "text", array());
        echo "</p>
\t\t\t\t\t<img class=\"photo-intro-bae\" src=\"";
        // line 7
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "image", array())), "path", array());
        echo "\">
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"intro-home-buttons\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"header.button_first_url\" class=\"button button-border-blue\">";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "button_first_text", array());
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"header.button_second_url\" class=\"button button-border-blue\">";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "button_second_text", array());
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"header.button_third_url\" class=\"button button-orange\">";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "button_third_text", array());
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t 
\t\t</div>
\t</div>
</div>
<div class=\"limiter\">
\t<div class=\"home-intro-categories\">
\t\t<h2>";
        // line 23
        echo $this->getAttribute(($context["header"] ?? null), "categories_title", array());
        echo "</h2>
\t\t<p>";
        // line 24
        echo $this->getAttribute(($context["header"] ?? null), "categories_content", array());
        echo "</p>
\t</div>
</div>
<div class=\"limiter\">
\t<div class=\"section-pattern-category section-pattern-category-blue section-intro-categories-list\">
\t\t<!-- tenemos que enlistar todas las categorías -->
\t\t<div class=\"categories-list\">
\t\t\t<ul class=\"list-content\">
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "list_content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "\t\t\t    <li><a class=\"underline\" href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($context["item"], "categorie_page", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "content_categorie", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</ul>
\t\t\t<div class=\"btn-categories\">
\t\t\t\t<a href=\"";
        // line 37
        echo ($context["base_url"] ?? null);
        echo "/landing-de-categorias\" class=\"button button-border-white\">Ver todas las categorías</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t";
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
        return array (  96 => 37,  92 => 35,  80 => 33,  76 => 32,  65 => 24,  61 => 23,  49 => 14,  45 => 13,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section-pattern section-pattern-lightblue\">
\t<div class=\"limiter\">
\t\t<div class=\"intro-bae\">
\t\t\t\t<div class=\"intro-home-description\">
\t\t\t\t\t<h1>{{ header.title }}</h1>
\t\t\t\t\t<p>{{ header.text }}</p>
\t\t\t\t\t<img class=\"photo-intro-bae\" src=\"{{(header.image|first).path}}\">
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"intro-home-buttons\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"header.button_first_url\" class=\"button button-border-blue\">{{header.button_first_text}}</a></li>
\t\t\t\t\t\t<li><a href=\"header.button_second_url\" class=\"button button-border-blue\">{{header.button_second_text}}</a></li>
\t\t\t\t\t\t<li><a href=\"header.button_third_url\" class=\"button button-orange\">{{header.button_third_text}}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t 
\t\t</div>
\t</div>
</div>
<div class=\"limiter\">
\t<div class=\"home-intro-categories\">
\t\t<h2>{{header.categories_title}}</h2>
\t\t<p>{{header.categories_content}}</p>
\t</div>
</div>
<div class=\"limiter\">
\t<div class=\"section-pattern-category section-pattern-category-blue section-intro-categories-list\">
\t\t<!-- tenemos que enlistar todas las categorías -->
\t\t<div class=\"categories-list\">
\t\t\t<ul class=\"list-content\">
\t\t\t{% for item in header.list_content %}
\t\t\t    <li><a class=\"underline\" href=\"{{base_url}}{{item.categorie_page}}\">{{item.content_categorie}}</a></li>
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<div class=\"btn-categories\">
\t\t\t\t<a href=\"{{base_url}}/landing-de-categorias\" class=\"button button-border-white\">Ver todas las categorías</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t", "modular/intro-home.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/intro-home.html.twig");
    }
}
