<?php

/* partials/base.html.twig */
class __TwigTemplate_4d3b07bd1dadcf5441b78ff45106c44301070c4573aad63c967249f40ee1c78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>
<body id=\"top\" class=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">

        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('showcase', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "
    </div>
    ";
        // line 100
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/styles.css"), "method");
        // line 15
        echo "    ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://code.jquery.com/jquery-1.8.3.min.js", 1 => 101), "method");
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.easing.1.3.js", 1 => 100), "method");
        echo " 
        ";
        // line 22
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.quicksand.js", 1 => 99), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/azul.js"), "method");
        echo " 

    ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "        <header class=\"global-header\">
            <div class=\"limiter\">
              <div>
                  <a href=\"";
        // line 37
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                    <img src=\"";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/logo_PBAE.png");
        echo "\" alt=\"Logo Bae\">
                </a>
              </div>
              <div class=\"main-nav\">
                  ";
        // line 42
        $this->displayBlock('header_extra', $context, $blocks);
        // line 43
        echo "                  ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "                  <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
              </div>
            </div>
        </header>
        ";
    }

    // line 42
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 43
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 44
        echo "                  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 44)->display($context);
        // line 45
        echo "                  ";
    }

    // line 52
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "        <section class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </section>
        ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "        <footer class=\"global-footer\">
            <div class=\"limiter\">  
                <div class=\"content-footer\">
                    <img src=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/logo_PBAE.png");
        echo "\" alt=\"Logo Bandera Azul\">
                    <p>© 2017 Diseño y Desarrollo por estudiantes del CETAV</p>
                    <div class=\"social-media-footer\">
                        <h6>Siguenos en:</h6>
                        <ul>
                            <li><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\"><img src=\"";
        // line 69
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/facebook_logo_white.svg");
        echo "\" alt=\"Logo Facebook\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 70
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/youtube-logo.png");
        echo "\" alt=\"Logo Youtube\"></a></li>    
                        </ul>   
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 70,  245 => 69,  237 => 64,  232 => 61,  229 => 60,  224 => 56,  219 => 57,  217 => 56,  212 => 55,  209 => 54,  204 => 52,  200 => 45,  197 => 44,  194 => 43,  189 => 42,  181 => 46,  178 => 43,  176 => 42,  169 => 38,  165 => 37,  160 => 34,  157 => 33,  149 => 23,  147 => 22,  142 => 21,  140 => 20,  137 => 19,  134 => 18,  130 => 15,  127 => 14,  124 => 13,  116 => 26,  114 => 18,  108 => 16,  106 => 13,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  84 => 7,  81 => 6,  78 => 5,  71 => 100,  67 => 77,  65 => 60,  62 => 59,  60 => 54,  57 => 53,  55 => 52,  52 => 51,  50 => 33,  44 => 30,  41 => 29,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/styles.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('https://code.jquery.com/jquery-1.8.3.min.js', 101) %}
        {# {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %} #}
        {% do assets.addJs('theme://js/jquery.easing.1.3.js', 100) %} 
        {% do assets.addJs('theme://js/jquery.quicksand.js', 99) %}
        {% do assets.addJs('theme://js/azul.js') %} 

    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">

        {% block header %}
        <header class=\"global-header\">
            <div class=\"limiter\">
              <div>
                  <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                    <img src=\"{{ url('theme://img/logo_PBAE.png')}}\" alt=\"Logo Bae\">
                </a>
              </div>
              <div class=\"main-nav\">
                  {% block header_extra %}{% endblock %}
                  {% block header_navigation %}
                  {% include 'partials/navigation.html.twig' %}
                  {% endblock %}
                  <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
              </div>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer class=\"global-footer\">
            <div class=\"limiter\">  
                <div class=\"content-footer\">
                    <img src=\"{{ url('theme://img/logo_PBAE.png')}}\" alt=\"Logo Bandera Azul\">
                    <p>© 2017 Diseño y Desarrollo por estudiantes del CETAV</p>
                    <div class=\"social-media-footer\">
                        <h6>Siguenos en:</h6>
                        <ul>
                            <li><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\"><img src=\"{{ url('theme://img/facebook_logo_white.svg')}}\" alt=\"Logo Facebook\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ url('theme://img/youtube-logo.png')}}\" alt=\"Logo Youtube\"></a></li>    
                        </ul>   
                    </div>
                </div>
            </div>
        </footer>
        {% endblock %}

    </div>
    {#{% block sidebar_navigation %}
        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
            </div>
        </div>
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}#}

</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/partials/base.html.twig");
    }
}
