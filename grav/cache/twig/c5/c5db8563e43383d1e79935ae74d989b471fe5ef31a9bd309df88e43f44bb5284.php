<?php

/* about.html.twig */
class __TwigTemplate_579fa30b87e3f57f8cf765c35514d8806fe19183802324a7eb53d6581d7ebf63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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
\t<div class=\"intro section-pattern section-pattern-lightblue section-how-is-BAE\">
\t\t<div class=\"howIsBAE\">
\t\t\t<h1>";
        // line 7
        echo $this->getAttribute(($context["header"] ?? null), "about_title", array());
        echo "</h1>
\t\t\t<p>";
        // line 8
        echo $this->getAttribute(($context["header"] ?? null), "about_text", array());
        echo "</p>\t\t\t
\t\t</div>
\t\t<div>
\t\t\t";
        // line 11
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "about_image", array()));
        // line 12
        echo "\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 13
        echo "\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 14
        echo "
\t\t\t";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 600), "method"), "html", array(), "method");
        echo "\t\t
\t\t</div>

\t</div>

\t<div class=\"section-pattern section-pattern-lightblue-left goal\">
\t\t<div class=\"goal-info\">
\t\t\t<h2>";
        // line 22
        echo $this->getAttribute(($context["header"] ?? null), "goal_title", array());
        echo "</h2>
\t\t\t<p>";
        // line 23
        echo $this->getAttribute(($context["header"] ?? null), "goal_content", array());
        echo "</p>\t\t\t
\t\t</div>

\t\t<div>
\t\t\t";
        // line 27
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "goal_image", array()));
        // line 28
        echo "\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 29
        echo "\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 30
        echo "
\t\t\t";
        // line 31
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 600), "method"), "html", array(), "method");
        echo "
\t\t</div>
\t</div>

    <div class=\"tabs\">
        <h2>Logros</h2>
        <ul>
            <li>";
        // line 38
        echo $this->getAttribute(($context["header"] ?? null), "achieve_first_title", array());
        echo "</li>
            <li>";
        // line 39
        echo $this->getAttribute(($context["header"] ?? null), "achieve_second_title", array());
        echo "</li>
            <li>";
        // line 40
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_title", array());
        echo "</li>
            <li>";
        // line 41
        echo $this->getAttribute(($context["header"] ?? null), "achieve_fourth_title", array());
        echo "</li>
        </ul>
    
        <div class=\"tabs-content\">
            <article>
                <img src=\"";
        // line 46
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "achieve_first_image", array())), "path", array());
        echo "\" alt=\"\">
                <p>";
        // line 47
        echo $this->getAttribute(($context["header"] ?? null), "achieve_first_content", array());
        echo "</p>   
            </article>
            <article>
                <img src=\"";
        // line 50
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "achieve_second_image", array())), "path", array());
        echo "\" alt=\"\">
                <p>";
        // line 51
        echo $this->getAttribute(($context["header"] ?? null), "achieve_second_content", array());
        echo "</p>
            </article>
            <article>
                <img src=\"";
        // line 54
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "achieve_third_image", array())), "path", array());
        echo "\" alt=\"\">
                <p>";
        // line 55
        echo $this->getAttribute(($context["header"] ?? null), "achieve_third_content", array());
        echo "</p>
            </article>
            <article>
                <img src=\"";
        // line 58
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "achieve_fourth_image", array())), "path", array());
        echo "\" alt=\"\">
                <p>";
        // line 59
        echo $this->getAttribute(($context["header"] ?? null), "achieve_fourth_content", array());
        echo "</p>
            </article>
        </div>
        
    </div>

\t<div class=\"team\">
\t\t<div class=\"team-info\">
\t\t\t<h3>";
        // line 67
        echo $this->getAttribute(($context["header"] ?? null), "team_title", array());
        echo "</h3>
\t\t\t<p>";
        // line 68
        echo $this->getAttribute(($context["header"] ?? null), "team_content", array());
        echo "</p>\t\t\t
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "team_list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 73
            echo "\t\t\t    <li> <img src=\"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["member"], "member_image", array())), "path", array());
            echo "\" alt=\"\"></li>
\t\t\t    <li> <h4>";
            // line 74
            echo $this->getAttribute($context["member"], "member_name", array());
            echo "</h4></li>
\t\t\t    <li> <h5> Coordinador ";
            // line 75
            echo $this->getAttribute($context["member"], "organization_name", array());
            echo "</h5></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</ul>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  188 => 75,  184 => 74,  179 => 73,  175 => 72,  168 => 68,  164 => 67,  153 => 59,  149 => 58,  143 => 55,  139 => 54,  133 => 51,  129 => 50,  123 => 47,  119 => 46,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  89 => 31,  86 => 30,  83 => 29,  80 => 28,  78 => 27,  71 => 23,  67 => 22,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

\t<div class=\"intro section-pattern section-pattern-lightblue section-how-is-BAE\">
\t\t<div class=\"howIsBAE\">
\t\t\t<h1>{{ header.about_title }}</h1>
\t\t\t<p>{{ header.about_text }}</p>\t\t\t
\t\t</div>
\t\t<div>
\t\t\t{% set image_parts = pathinfo(header.about_image) %}
\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t{{ image_page.media[image_basename].resize(600).html() }}\t\t
\t\t</div>

\t</div>

\t<div class=\"section-pattern section-pattern-lightblue-left goal\">
\t\t<div class=\"goal-info\">
\t\t\t<h2>{{header.goal_title}}</h2>
\t\t\t<p>{{header.goal_content}}</p>\t\t\t
\t\t</div>

\t\t<div>
\t\t\t{% set image_parts = pathinfo(header.goal_image) %}
\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t{{ image_page.media[image_basename].resize(600).html() }}
\t\t</div>
\t</div>

    <div class=\"tabs\">
        <h2>Logros</h2>
        <ul>
            <li>{{header.achieve_first_title}}</li>
            <li>{{header.achieve_second_title}}</li>
            <li>{{header.achieve_third_title}}</li>
            <li>{{header.achieve_fourth_title}}</li>
        </ul>
    
        <div class=\"tabs-content\">
            <article>
                <img src=\"{{(header.achieve_first_image|first).path}}\" alt=\"\">
                <p>{{header.achieve_first_content}}</p>   
            </article>
            <article>
                <img src=\"{{(header.achieve_second_image|first).path}}\" alt=\"\">
                <p>{{header.achieve_second_content}}</p>
            </article>
            <article>
                <img src=\"{{(header.achieve_third_image|first).path}}\" alt=\"\">
                <p>{{header.achieve_third_content}}</p>
            </article>
            <article>
                <img src=\"{{(header.achieve_fourth_image|first).path}}\" alt=\"\">
                <p>{{header.achieve_fourth_content}}</p>
            </article>
        </div>
        
    </div>

\t<div class=\"team\">
\t\t<div class=\"team-info\">
\t\t\t<h3>{{header.team_title}}</h3>
\t\t\t<p>{{header.team_content}}</p>\t\t\t
\t\t</div>

\t\t<ul>
\t\t\t{% for member in header.team_list %}
\t\t\t    <li> <img src=\"{{(member.member_image|first).path}}\" alt=\"\"></li>
\t\t\t    <li> <h4>{{member.member_name}}</h4></li>
\t\t\t    <li> <h5> Coordinador {{member.organization_name}}</h5></li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>

{% endblock %}
", "about.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/about.html.twig");
    }
}
