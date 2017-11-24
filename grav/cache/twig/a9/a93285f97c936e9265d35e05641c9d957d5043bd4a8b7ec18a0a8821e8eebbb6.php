<?php

/* category-page.html.twig */
class __TwigTemplate_a99072aa8c806f93e8fc040fa3ced6a505294e94ec06b45c287d4029a27ff683 extends Twig_Template
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
        $this->loadTemplate("category-page.html.twig", "category-page.html.twig", 1, "581925440")->display($context);
    }

    public function getTemplateName()
    {
        return "category-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t
\t{% block content %}

\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"list-categories\">
\t\t\t<h5>Seleccione la categoría que corresponde a su comité</h5>
\t\t\t<ul id=\"content\" class=\"grid\">
\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"all\">Todas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Playas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"company\">Empresa</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"church\">Iglesia</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Comunidad</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"house\">Hogar</a></li>
\t\t\t</ul>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t{% set sum = 1 %} 
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t<li data-type=\"{{child.header.commitee_type}}\" data-id =\"{{sum}}\" class=\"card-categories\">
\t\t\t        \t\t{% include 'categories.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t        \t\t{% set sum = sum + 1 %}
\t\t\t    \t\t</li>
\t\t\t  \t\t{% endfor %}
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "category-page.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/category-page.html.twig");
    }
}


/* category-page.html.twig */
class __TwigTemplate_a99072aa8c806f93e8fc040fa3ced6a505294e94ec06b45c287d4029a27ff683_581925440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "category-page.html.twig", 1);
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
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "page_title", array());
        echo "</h1>
\t\t\t\t";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"list-categories\">
\t\t\t<h5>Seleccione la categoría que corresponde a su comité</h5>
\t\t\t<ul id=\"content\" class=\"grid\">
\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"all\">Todas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Playas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"company\">Empresa</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"church\">Iglesia</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Comunidad</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"house\">Hogar</a></li>
\t\t\t</ul>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t";
        // line 29
        $context["sum"] = 1;
        echo " 
\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "\t\t\t\t\t\t<li data-type=\"";
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "commitee_type", array());
            echo "\" data-id =\"";
            echo ($context["sum"] ?? null);
            echo "\" class=\"card-categories\">
\t\t\t        \t\t";
            // line 32
            $this->loadTemplate("categories.html.twig", "category-page.html.twig", 32)->display(array_merge($context, array("category" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
            // line 33
            echo "\t\t\t        \t\t";
            $context["sum"] = (($context["sum"] ?? null) + 1);
            // line 34
            echo "\t\t\t    \t\t</li>
\t\t\t  \t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "category-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 36,  183 => 34,  180 => 33,  178 => 32,  171 => 31,  154 => 30,  150 => 29,  127 => 9,  123 => 8,  118 => 5,  115 => 4,  111 => 1,  109 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t
\t{% block content %}

\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"list-categories\">
\t\t\t<h5>Seleccione la categoría que corresponde a su comité</h5>
\t\t\t<ul id=\"content\" class=\"grid\">
\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"all\">Todas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Playas</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"company\">Empresa</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"church\">Iglesia</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"community\">Comunidad</a></li>
  \t\t\t\t<li><a href=\"#\" class=\"house\">Hogar</a></li>
\t\t\t</ul>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t{% set sum = 1 %} 
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t<li data-type=\"{{child.header.commitee_type}}\" data-id =\"{{sum}}\" class=\"card-categories\">
\t\t\t        \t\t{% include 'categories.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t        \t\t{% set sum = sum + 1 %}
\t\t\t    \t\t</li>
\t\t\t  \t\t{% endfor %}
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "category-page.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/category-page.html.twig");
    }
}
