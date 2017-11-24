<?php

/* success-story.html.twig */
class __TwigTemplate_d989e1727b45657a0420799771c2261185e2001c0610a4cd6edcc97673a3d25a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "success-story.html.twig", 1);
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
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    <section class=\"success-story\">
        <h1>Casos de Exitos</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "success", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 8
            echo "        <div class=\"container-success\"> 
            <div>
                ";
            // line 10
            if ($this->getAttribute($context["story"], "successStory_image", array())) {
                // line 11
                echo "                    <img src=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["story"], "successStory_image", array())), "path", array());
                echo "\" alt=\"\">
                ";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute($context["story"], "successStory_video", array())) {
                // line 14
                echo "                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
                echo $this->getAttribute($context["story"], "successStory_video", array());
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
                ";
            }
            // line 16
            echo "            </div>
            <div class= \"info-success\">
                <h2>";
            // line 18
            echo $this->getAttribute($context["story"], "successStory_title", array());
            echo "</h2>
                <p>";
            // line 19
            echo $this->getAttribute($context["story"], "successStory_description", array());
            echo "</p>
            </div>
            
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </section>
";
    }

    public function getTemplateName()
    {
        return "success-story.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  71 => 19,  67 => 18,  63 => 16,  57 => 14,  54 => 13,  48 => 11,  46 => 10,  42 => 8,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
    {{ page.content }}
    <section class=\"success-story\">
        <h1>Casos de Exitos</h1>
    {% for story in header.success %}
        <div class=\"container-success\"> 
            <div>
                {% if story.successStory_image %}
                    <img src=\"{{(story.successStory_image|first).path}}\" alt=\"\">
                {% endif %}
                {% if story.successStory_video %}
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{{story.successStory_video}}\" frameborder=\"0\" allowfullscreen></iframe>
                {% endif %}
            </div>
            <div class= \"info-success\">
                <h2>{{ story.successStory_title }}</h2>
                <p>{{ story.successStory_description }}</p>
            </div>
            
        </div>
    {% endfor %}
    </section>
{% endblock %}", "success-story.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/success-story.html.twig");
    }
}
