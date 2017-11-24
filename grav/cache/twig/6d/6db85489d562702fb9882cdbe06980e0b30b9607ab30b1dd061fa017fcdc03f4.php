<?php

/* categories.html.twig */
class __TwigTemplate_1b13a87b890e46b483235cb3f52f5022a03de15b4dcb6ab3e0a76ba2e99e0e5c extends Twig_Template
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
        if (($context["truncate"] ?? null)) {
            // line 2
            echo "<!-- se muestra si es la lista de categorías -->

<div class=\"list-item ";
            // line 4
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "commitee_type", array());
            echo " \">

\t";
            // line 6
            $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "logo_image", array()));
            // line 7
            echo "\t";
            $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
            // line 8
            echo "\t";
            $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
            // line 9
            echo "
\t<a href=\"";
            // line 10
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\"> ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 130, 1 => 140), "method"), "html", array(), "method");
            echo "</a> 

\t";
            // line 12
            echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 100), "method");
            echo "
\t<p><a class=\"button button-blue\" href=\"";
            // line 13
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>

</div>

";
        } else {
            // line 18
            echo "<!-- se muestra si es el detalle de la categoría -->

\t";
            // line 20
            $this->loadTemplate("categories.html.twig", "categories.html.twig", 20, "1236154847")->display($context);
            // line 172
            echo "
\t";
        }
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 172,  66 => 20,  62 => 18,  52 => 13,  48 => 12,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"list-item {{page.header.commitee_type}} \">

\t{% set image_parts = pathinfo(page.header.logo_image) %}
\t{% set image_basename = image_parts.basename %}
\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t<a href=\"{{ page.url }}\"> {{ image_page.media[image_basename].resize(130, 140).html() }}</a> 

\t{{ page.summary(100) }}
\t<p><a class=\"button button-blue\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"category-item\">

\t\t{% set header_image = page.header.header_image|defined(true) %}
\t\t{% set header_image_file = page.header.header_image_file %}

\t\t<div class=\"section-pattern section-pattern-cordinator info-category\">
\t\t\t
\t\t\t<div class=\" category-content\">
\t\t\t\t<div class=\"category-logo\">
\t\t\t\t\t{% set image_parts = pathinfo(header.logo_image) %}
\t\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t\t{{ image_page.media[image_basename].resize(200).html() }}
\t\t\t\t</div>
\t\t\t\t<div class=\"item-category-content\">
\t\t\t\t\t<div class=\"category-description\">
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-require-list\">
\t\t\t\t\t\t{% if header.require_list %}
\t\t\t\t\t\t\t<h3>Requisitos</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for requirement in header.require_list %}
\t\t\t\t\t\t\t\t    <li>{{requirement.require_item}}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"coordinator\">
\t\t\t\t{% set image_parts = pathinfo(header.coordinator_picture) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(150, 170).html() }}
\t\t\t\t<h3>{{header.coordinator_name}}</h3>
\t\t\t\t<p>{{header.coordinator_org}}</p>
\t\t\t\t<p>{{header.coordinator_email}}</p>
\t\t\t\t<p>{{header.coordinator_tel}}</p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"steps\">
\t\t{% set sum = 1 %}
\t\t\t{% if header.steps_signup_enable == 1 %}

\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_signup_title}}</h3>
\t\t\t\t<p class=\"step-dates\"> {{header.steps_signup_date_start}} <br>
\t\t\t\t{{header.steps_signup_date_end}} </p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_signup_description}}</p>

\t\t\t\t\t{% if header.steps_signup_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_signup_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>\t
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_diagnose_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_diagnose_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_diagnose_date_start}} <br>
\t\t\t\t{{header.steps_diagnose_date_end}}</p>\t\t
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p> {{header.steps_diagnose_description}} </p>

\t\t\t\t\t{% if header.steps_diagnose_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_diagnose_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t    
\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_plan_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_plan_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_plan_date_start}} <br>
\t\t\t\t{{header.steps_plan_date_end}}</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_plan_description}}</p>

\t\t\t\t\t{% if header.steps_plan_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_plan_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_report_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_report_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_report_date_start}} <br>
\t\t\t\t{{header.steps_report_date_end}}</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_report_description}}</p>
\t\t\t\t\t{% if header.steps_report_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_report_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t{% for resource in page.header.document_files %}
\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>{{resource.resource_title}}</h4>
\t\t\t\t<p>{{resource.resource_description}}</p>

\t\t\t\t{% if resource.resource_url %}
\t\t\t\t\t<a href=\"{{resource.resource_url}}\" class=\"button button-blue\">Ver recurso</a>
\t\t\t\t{% endif %}

\t\t\t\t{% if resource.resource_file_upload %}
\t\t\t\t\t<a href=\"{{(resource.resource_file_upload|first).path}}\" download=\"\" class=\"button button-blue\">Descargar recurso relacionado</a>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>
\t{% endblock %}

\t{% endembed %}

\t{% endif %}
", "categories.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/categories.html.twig");
    }
}


/* categories.html.twig */
class __TwigTemplate_1b13a87b890e46b483235cb3f52f5022a03de15b4dcb6ab3e0a76ba2e99e0e5c_1236154847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("partials/base.html.twig", "categories.html.twig", 20);
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

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
\t<div class=\"category-item\">

\t\t";
        // line 26
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 27
        echo "\t\t";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 28
        echo "
\t\t<div class=\"section-pattern section-pattern-cordinator info-category\">
\t\t\t
\t\t\t<div class=\" category-content\">
\t\t\t\t<div class=\"category-logo\">
\t\t\t\t\t";
        // line 33
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "logo_image", array()));
        // line 34
        echo "\t\t\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 35
        echo "\t\t\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 36
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 200), "method"), "html", array(), "method");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"item-category-content\">
\t\t\t\t\t<div class=\"category-description\">
\t\t\t\t\t\t";
        // line 41
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-require-list\">
\t\t\t\t\t\t";
        // line 45
        if ($this->getAttribute(($context["header"] ?? null), "require_list", array())) {
            // line 46
            echo "\t\t\t\t\t\t\t<h3>Requisitos</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "require_list", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t    <li>";
                echo $this->getAttribute($context["requirement"], "require_item", array());
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"coordinator\">
\t\t\t\t";
        // line 58
        $context["image_parts"] = pathinfo($this->getAttribute(($context["header"] ?? null), "coordinator_picture", array()));
        // line 59
        echo "\t\t\t\t";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 60
        echo "\t\t\t\t";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 61
        echo "
\t\t\t\t";
        // line 62
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "resize", array(0 => 150, 1 => 170), "method"), "html", array(), "method");
        echo "
\t\t\t\t<h3>";
        // line 63
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_name", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 64
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_org", array());
        echo "</p>
\t\t\t\t<p>";
        // line 65
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_email", array());
        echo "</p>
\t\t\t\t<p>";
        // line 66
        echo $this->getAttribute(($context["header"] ?? null), "coordinator_tel", array());
        echo "</p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"steps\">
\t\t";
        // line 71
        $context["sum"] = 1;
        // line 72
        echo "\t\t\t";
        if (($this->getAttribute(($context["header"] ?? null), "steps_signup_enable", array()) == 1)) {
            // line 73
            echo "
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">";
            // line 75
            echo ($context["sum"] ?? null);
            echo "</span>
\t\t\t\t<h3>";
            // line 76
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_title", array());
            echo "</h3>
\t\t\t\t<p class=\"step-dates\"> ";
            // line 77
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_date_start", array());
            echo " <br>
\t\t\t\t";
            // line 78
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_date_end", array());
            echo " </p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>";
            // line 81
            echo $this->getAttribute(($context["header"] ?? null), "steps_signup_description", array());
            echo "</p>

\t\t\t\t\t";
            // line 83
            if ($this->getAttribute(($context["header"] ?? null), "steps_signup_file", array())) {
                // line 84
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "steps_signup_file", array())), "path", array());
                echo "\" download=\"\" class=\"button button-blue\">Descargar</a>\t
\t\t\t\t\t";
            }
            // line 86
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 88
            $context["sum"] = (($context["sum"] ?? null) + 1);
            // line 89
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "
\t\t\t";
        // line 92
        if (($this->getAttribute(($context["header"] ?? null), "steps_diagnose_enable", array()) == 1)) {
            // line 93
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">";
            // line 94
            echo ($context["sum"] ?? null);
            echo "</span>
\t\t\t\t<h3>";
            // line 95
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_title", array());
            echo "</h3>
\t\t\t\t<p class=\"step-dates\">";
            // line 96
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_date_start", array());
            echo " <br>
\t\t\t\t";
            // line 97
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_date_end", array());
            echo "</p>\t\t
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p> ";
            // line 100
            echo $this->getAttribute(($context["header"] ?? null), "steps_diagnose_description", array());
            echo " </p>

\t\t\t\t\t";
            // line 102
            if ($this->getAttribute(($context["header"] ?? null), "steps_diagnose_file", array())) {
                // line 103
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "steps_diagnose_file", array())), "path", array());
                echo "\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t    
\t\t\t\t</div>
\t\t\t\t";
            // line 107
            $context["sum"] = (($context["sum"] ?? null) + 1);
            // line 108
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 110
        echo "
\t\t\t";
        // line 111
        if (($this->getAttribute(($context["header"] ?? null), "steps_plan_enable", array()) == 1)) {
            // line 112
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">";
            // line 113
            echo ($context["sum"] ?? null);
            echo "</span>
\t\t\t\t<h3>";
            // line 114
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_title", array());
            echo "</h3>
\t\t\t\t<p class=\"step-dates\">";
            // line 115
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_date_start", array());
            echo " <br>
\t\t\t\t";
            // line 116
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_date_end", array());
            echo "</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>";
            // line 119
            echo $this->getAttribute(($context["header"] ?? null), "steps_plan_description", array());
            echo "</p>

\t\t\t\t\t";
            // line 121
            if ($this->getAttribute(($context["header"] ?? null), "steps_plan_file", array())) {
                // line 122
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "steps_plan_file", array())), "path", array());
                echo "\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t";
            }
            // line 124
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 126
            $context["sum"] = (($context["sum"] ?? null) + 1);
            // line 127
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 129
        echo "
\t\t\t";
        // line 130
        if (($this->getAttribute(($context["header"] ?? null), "steps_report_enable", array()) == 1)) {
            // line 131
            echo "\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">";
            // line 132
            echo ($context["sum"] ?? null);
            echo "</span>
\t\t\t\t<h3>";
            // line 133
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_title", array());
            echo "</h3>
\t\t\t\t<p class=\"step-dates\">";
            // line 134
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_date_start", array());
            echo " <br>
\t\t\t\t";
            // line 135
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_date_end", array());
            echo "</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>";
            // line 138
            echo $this->getAttribute(($context["header"] ?? null), "steps_report_description", array());
            echo "</p>
\t\t\t\t\t";
            // line 139
            if ($this->getAttribute(($context["header"] ?? null), "steps_report_file", array())) {
                // line 140
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "steps_report_file", array())), "path", array());
                echo "\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 143
            $context["sum"] = (($context["sum"] ?? null) + 1);
            // line 144
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 146
        echo "
\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "document_files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 152
            echo "\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>";
            // line 153
            echo $this->getAttribute($context["resource"], "resource_title", array());
            echo "</h4>
\t\t\t\t<p>";
            // line 154
            echo $this->getAttribute($context["resource"], "resource_description", array());
            echo "</p>

\t\t\t\t";
            // line 156
            if ($this->getAttribute($context["resource"], "resource_url", array())) {
                // line 157
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["resource"], "resource_url", array());
                echo "\" class=\"button button-blue\">Ver recurso</a>
\t\t\t\t";
            }
            // line 159
            echo "
\t\t\t\t";
            // line 160
            if ($this->getAttribute($context["resource"], "resource_file_upload", array())) {
                // line 161
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["resource"], "resource_file_upload", array())), "path", array());
                echo "\" download=\"\" class=\"button button-blue\">Descargar recurso relacionado</a>
\t\t\t\t";
            }
            // line 163
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t</div>

\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 166,  648 => 163,  642 => 161,  640 => 160,  637 => 159,  631 => 157,  629 => 156,  624 => 154,  620 => 153,  617 => 152,  613 => 151,  606 => 146,  602 => 144,  600 => 143,  597 => 142,  591 => 140,  589 => 139,  585 => 138,  579 => 135,  575 => 134,  571 => 133,  567 => 132,  564 => 131,  562 => 130,  559 => 129,  555 => 127,  553 => 126,  549 => 124,  543 => 122,  541 => 121,  536 => 119,  530 => 116,  526 => 115,  522 => 114,  518 => 113,  515 => 112,  513 => 111,  510 => 110,  506 => 108,  504 => 107,  500 => 105,  494 => 103,  492 => 102,  487 => 100,  481 => 97,  477 => 96,  473 => 95,  469 => 94,  466 => 93,  464 => 92,  461 => 91,  457 => 89,  455 => 88,  451 => 86,  445 => 84,  443 => 83,  438 => 81,  432 => 78,  428 => 77,  424 => 76,  420 => 75,  416 => 73,  413 => 72,  411 => 71,  403 => 66,  399 => 65,  395 => 64,  391 => 63,  387 => 62,  384 => 61,  381 => 60,  378 => 59,  376 => 58,  369 => 53,  365 => 51,  356 => 49,  352 => 48,  348 => 46,  346 => 45,  339 => 41,  332 => 37,  329 => 36,  326 => 35,  323 => 34,  321 => 33,  314 => 28,  311 => 27,  309 => 26,  304 => 23,  301 => 22,  284 => 20,  68 => 172,  66 => 20,  62 => 18,  52 => 13,  48 => 12,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"list-item {{page.header.commitee_type}} \">

\t{% set image_parts = pathinfo(page.header.logo_image) %}
\t{% set image_basename = image_parts.basename %}
\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t<a href=\"{{ page.url }}\"> {{ image_page.media[image_basename].resize(130, 140).html() }}</a> 

\t{{ page.summary(100) }}
\t<p><a class=\"button button-blue\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

\t<div class=\"category-item\">

\t\t{% set header_image = page.header.header_image|defined(true) %}
\t\t{% set header_image_file = page.header.header_image_file %}

\t\t<div class=\"section-pattern section-pattern-cordinator info-category\">
\t\t\t
\t\t\t<div class=\" category-content\">
\t\t\t\t<div class=\"category-logo\">
\t\t\t\t\t{% set image_parts = pathinfo(header.logo_image) %}
\t\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t\t{{ image_page.media[image_basename].resize(200).html() }}
\t\t\t\t</div>
\t\t\t\t<div class=\"item-category-content\">
\t\t\t\t\t<div class=\"category-description\">
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-require-list\">
\t\t\t\t\t\t{% if header.require_list %}
\t\t\t\t\t\t\t<h3>Requisitos</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for requirement in header.require_list %}
\t\t\t\t\t\t\t\t    <li>{{requirement.require_item}}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"coordinator\">
\t\t\t\t{% set image_parts = pathinfo(header.coordinator_picture) %}
\t\t\t\t{% set image_basename = image_parts.basename %}
\t\t\t\t{% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}

\t\t\t\t{{ image_page.media[image_basename].resize(150, 170).html() }}
\t\t\t\t<h3>{{header.coordinator_name}}</h3>
\t\t\t\t<p>{{header.coordinator_org}}</p>
\t\t\t\t<p>{{header.coordinator_email}}</p>
\t\t\t\t<p>{{header.coordinator_tel}}</p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"steps\">
\t\t{% set sum = 1 %}
\t\t\t{% if header.steps_signup_enable == 1 %}

\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_signup_title}}</h3>
\t\t\t\t<p class=\"step-dates\"> {{header.steps_signup_date_start}} <br>
\t\t\t\t{{header.steps_signup_date_end}} </p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_signup_description}}</p>

\t\t\t\t\t{% if header.steps_signup_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_signup_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>\t
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_diagnose_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_diagnose_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_diagnose_date_start}} <br>
\t\t\t\t{{header.steps_diagnose_date_end}}</p>\t\t
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p> {{header.steps_diagnose_description}} </p>

\t\t\t\t\t{% if header.steps_diagnose_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_diagnose_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t    
\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_plan_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_plan_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_plan_date_start}} <br>
\t\t\t\t{{header.steps_plan_date_end}}</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_plan_description}}</p>

\t\t\t\t\t{% if header.steps_plan_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_plan_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if header.steps_report_enable == 1 %}
\t\t\t<div class=\"step-item\">
\t\t\t\t<span class=\"step-number\">{{sum}}</span>
\t\t\t\t<h3>{{header.steps_report_title}}</h3>
\t\t\t\t<p class=\"step-dates\">{{header.steps_report_date_start}} <br>
\t\t\t\t{{header.steps_report_date_end}}</p>
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<p>{{header.steps_report_description}}</p>
\t\t\t\t\t{% if header.steps_report_file %}
\t\t\t\t\t\t<a href=\"{{(header.steps_report_file|first).path}}\" download=\"\" class=\"button button-blue\">Descargar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% set sum = sum + 1 %}
\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>

\t\t<div class=\"resources\">
\t\t\t<h3>Recursos relacionados</h3>
\t\t\t{% for resource in page.header.document_files %}
\t\t\t<div class=\"resources-item\">
\t\t\t\t<h4>{{resource.resource_title}}</h4>
\t\t\t\t<p>{{resource.resource_description}}</p>

\t\t\t\t{% if resource.resource_url %}
\t\t\t\t\t<a href=\"{{resource.resource_url}}\" class=\"button button-blue\">Ver recurso</a>
\t\t\t\t{% endif %}

\t\t\t\t{% if resource.resource_file_upload %}
\t\t\t\t\t<a href=\"{{(resource.resource_file_upload|first).path}}\" download=\"\" class=\"button button-blue\">Descargar recurso relacionado</a>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>
\t{% endblock %}

\t{% endembed %}

\t{% endif %}
", "categories.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/categories.html.twig");
    }
}
