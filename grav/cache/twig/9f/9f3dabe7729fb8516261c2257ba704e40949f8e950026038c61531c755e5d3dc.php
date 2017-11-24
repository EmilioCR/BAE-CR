<?php

/* winners.html.twig */
class __TwigTemplate_a21290ba0d9bd953ea4f455946c66c367e19770e289481d3bca07afd3433641f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "winners.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"section-pattern section-pattern-lightblue\">
\t\t<div class=\"all-info-winners\">
\t\t\t<div class=\"intro-winners-info\">
\t\t\t\t";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t<a class= \"button button-white\" href=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "winners_file_select", array()), array(), "array"), "cache", array()), "url", array());
        echo "\">Ver lista de galardonados</a>
\t\t\t</div>
\t\t\t<div class=\"intro-winners\">
\t\t\t\t<h1>";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
\t\t\t\t<h2>";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "summary_winners", array());
        echo "</h2>
\t\t\t\t<h2>";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "summary_time_winners", array());
        echo "</h2>
\t\t\t\t<img class=\"header-winners-image\"src='";
        // line 15
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "winners_image", array())), "path", array());
        echo "'>\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"section-indicators\">
\t\t<h1>";
        // line 20
        echo $this->getAttribute(($context["header"] ?? null), "title_indicators", array());
        echo "</h1>
\t\t<p>";
        // line 21
        echo $this->getAttribute(($context["header"] ?? null), "description_indicators", array());
        echo "</p>
\t\t<div class=\"indicators\">
\t\t\t<div>
\t\t\t\t<span>";
        // line 24
        echo $this->getAttribute(($context["header"] ?? null), "kpi_first", array());
        echo "</span>
\t\t\t\t<p>Aumento de participantes</p>
\t\t\t</div> 
\t\t\t<div>
\t\t\t\t<span>";
        // line 28
        echo $this->getAttribute(($context["header"] ?? null), "kpi_second", array());
        echo "</span>
\t\t\t\t<p>Aumento de ganadores</p>
\t\t\t</div>
\t\t\t<div class= \"category-indicator\">
\t\t\t\t<span>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "firstCategory", array());
        echo "</li>
\t\t\t\t\t\t<li>";
        // line 35
        echo $this->getAttribute(($context["header"] ?? null), "secondCategory", array());
        echo "</li>
\t\t\t\t\t\t<li>";
        // line 36
        echo $this->getAttribute(($context["header"] ?? null), "thirdCategory", array());
        echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t</span>
\t\t\t\t<p>Categorías con más galardones</p>\t
\t\t\t</div>\t\t\t\t\t\t
\t\t</div>\t
\t</section>
\t<div class=\"section-pattern section-pattern-green\">
\t\t<div class=\"closing\">
\t\t\t<h3> Sea parte del cambio <br> con Bandera Azul Ecológica Costa Rica</h3>
\t\t\t<a class=\"button button-white\" href=\"#\">Conozca como aplicar</a>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "winners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  97 => 35,  93 => 34,  84 => 28,  77 => 24,  71 => 21,  67 => 20,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

\t<div class=\"section-pattern section-pattern-lightblue\">
\t\t<div class=\"all-info-winners\">
\t\t\t<div class=\"intro-winners-info\">
\t\t\t\t{{ page.content }}
\t\t\t\t<a class= \"button button-white\" href=\"{{ page.media[header.winners_file_select].cache.url }}\">Ver lista de galardonados</a>
\t\t\t</div>
\t\t\t<div class=\"intro-winners\">
\t\t\t\t<h1>{{ header.title }}</h1>
\t\t\t\t<h2>{{ header.summary_winners }}</h2>
\t\t\t\t<h2>{{ header.summary_time_winners }}</h2>
\t\t\t\t<img class=\"header-winners-image\"src='{{ (header.winners_image|first).path }}'>\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<section class=\"section-indicators\">
\t\t<h1>{{ header.title_indicators }}</h1>
\t\t<p>{{header.description_indicators}}</p>
\t\t<div class=\"indicators\">
\t\t\t<div>
\t\t\t\t<span>{{ header.kpi_first }}</span>
\t\t\t\t<p>Aumento de participantes</p>
\t\t\t</div> 
\t\t\t<div>
\t\t\t\t<span>{{ header.kpi_second }}</span>
\t\t\t\t<p>Aumento de ganadores</p>
\t\t\t</div>
\t\t\t<div class= \"category-indicator\">
\t\t\t\t<span>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>{{ header.firstCategory }}</li>
\t\t\t\t\t\t<li>{{ header.secondCategory }}</li>
\t\t\t\t\t\t<li>{{ header.thirdCategory }}</li>
\t\t\t\t\t</ul>
\t\t\t\t</span>
\t\t\t\t<p>Categorías con más galardones</p>\t
\t\t\t</div>\t\t\t\t\t\t
\t\t</div>\t
\t</section>
\t<div class=\"section-pattern section-pattern-green\">
\t\t<div class=\"closing\">
\t\t\t<h3> Sea parte del cambio <br> con Bandera Azul Ecológica Costa Rica</h3>
\t\t\t<a class=\"button button-white\" href=\"#\">Conozca como aplicar</a>
\t\t</div>
\t</div>

{% endblock %}
", "winners.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/winners.html.twig");
    }
}
