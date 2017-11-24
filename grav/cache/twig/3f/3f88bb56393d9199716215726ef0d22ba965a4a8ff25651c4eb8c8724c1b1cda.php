<?php

/* own-contact.html.twig */
class __TwigTemplate_f8b9442ec57dc8db5ce10e89e66932cd1761944351a7287d3e7136268cfc056b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "own-contact.html.twig", 1);
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
    <div class=\"contact_title\">
        <h1>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "contact_title", array());
        echo "</h1>
    </div>
    <div class=\"image\">
         <img src=\"";
        // line 9
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "bgImage", array())), "path", array());
        echo "\" alt=\"\">
    </div>
    <section class=\"section-pattern section-pattern-lightblue-top contact\">

        <div>
           
            <p>";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "description", array());
        echo "</p>
            <a class=\"button button-white\" href=\"";
        // line 16
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute(($context["header"] ?? null), "redirect_section", array());
        echo "\">Ir a la sección de categorías</a>
        </div>
        <div class=\"social-media-contact\">
            <h6>";
        // line 19
        echo $this->getAttribute(($context["header"] ?? null), "redes_sociales", array());
        echo "</h6>
            <ul>
                <a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">
                    <li><img src=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/facebook_logo_color.svg");
        echo "\" alt=\"Logo Facebook\"></li>
                </a>
                <a href=\"#\">
                    <li><img src=\"";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/youtube-logo-color.png");
        echo "\" alt=\"Logo Youtube\"></li>
                </a>
                
            </ul>   
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "own-contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 22,  63 => 19,  56 => 16,  52 => 15,  43 => 9,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
    {{ page.content}}
    <div class=\"contact_title\">
        <h1>{{header.contact_title}}</h1>
    </div>
    <div class=\"image\">
         <img src=\"{{(header.bgImage|first).path}}\" alt=\"\">
    </div>
    <section class=\"section-pattern section-pattern-lightblue-top contact\">

        <div>
           
            <p>{{header.description}}</p>
            <a class=\"button button-white\" href=\"{{base_url}}{{header.redirect_section}}\">Ir a la sección de categorías</a>
        </div>
        <div class=\"social-media-contact\">
            <h6>{{header.redes_sociales}}</h6>
            <ul>
                <a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">
                    <li><img src=\"{{ url('theme://img/facebook_logo_color.svg')}}\" alt=\"Logo Facebook\"></li>
                </a>
                <a href=\"#\">
                    <li><img src=\"{{ url('theme://img/youtube-logo-color.png')}}\" alt=\"Logo Youtube\"></li>
                </a>
                
            </ul>   
        </div>
    </section>
{% endblock %}", "own-contact.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/own-contact.html.twig");
    }
}
