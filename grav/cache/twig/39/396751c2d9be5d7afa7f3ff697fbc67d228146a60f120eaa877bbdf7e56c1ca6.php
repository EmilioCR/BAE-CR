<?php

/* modular/how-to-apply.html.twig */
class __TwigTemplate_640a17194653a67474d4b34b1a4313ca9356d148ad20f8fe308c0cb51d338d6d extends Twig_Template
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
        echo "<section class=\"section-pattern section-pattern-lightgray-vertical info-apply\">
    <h1>";
        // line 2
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
    <p>";
        // line 3
        echo $this->getAttribute(($context["header"] ?? null), "description", array());
        echo "</p>
</section>

<section>
    <div class=\"info-pre-apply\">
        <h2>Pre aplicación</h2>
        <p>";
        // line 9
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_content", array());
        echo "</p> 
    </div>
    <div class=\"pre-apply\">
        <div class=\"section-pattern section-pattern-lightblue-squard pre-apply-step\">
            <h4>1</h4>
            <h5>";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_category_title", array());
        echo "</h3> 
            <p>";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_category_content", array());
        echo "</p> 
            <a class=\"button button-border-blue\" href=\"";
        // line 16
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_category_go_category", array());
        echo "\">Conocer categorías</a>
        </div>
        <div class=\"section-pattern section-pattern-lightgray-squard pre-apply-step\">
            <h4>2</h4>
            <h5>";
        // line 20
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_committee_title", array());
        echo "</h3> 
            <p>";
        // line 21
        echo $this->getAttribute(($context["header"] ?? null), "pre_apply_committee_content", array());
        echo "</p> 
            <a class=\"button button-border-blue\" href=\"";
        // line 22
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "pre_apply_file", array())), "path", array());
        echo "\" download=\"\">Conformación del comité</a>
        </div>
    </div>
    <div class=\"title-apply\">
        <h2>Aplicación</h2>
    </div>
    <div class=\"apply\">
        <div class=\"section-pattern section-pattern-lightgray-squard apply-step\">
            <h4>3</h4>
            <h5>";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "apply_signup_title", array());
        echo "</h3> 
            <p>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "apply_signup_content", array());
        echo "</p> 
        </div>
        <div class=\"section-pattern section-pattern-lightblue-squard apply-step\">
            <h4>4</h4>
            <h5>";
        // line 36
        echo $this->getAttribute(($context["header"] ?? null), "apply_report_title", array());
        echo "</h3> 
            <p>";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "apply_report_content", array());
        echo "</p> 
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/how-to-apply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  90 => 36,  83 => 32,  79 => 31,  67 => 22,  63 => 21,  59 => 20,  51 => 16,  47 => 15,  43 => 14,  35 => 9,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-pattern section-pattern-lightgray-vertical info-apply\">
    <h1>{{ header.title }}</h1>
    <p>{{ header.description }}</p>
</section>

<section>
    <div class=\"info-pre-apply\">
        <h2>Pre aplicación</h2>
        <p>{{header.pre_apply_content}}</p> 
    </div>
    <div class=\"pre-apply\">
        <div class=\"section-pattern section-pattern-lightblue-squard pre-apply-step\">
            <h4>1</h4>
            <h5>{{header.pre_apply_category_title}}</h3> 
            <p>{{header.pre_apply_category_content}}</p> 
            <a class=\"button button-border-blue\" href=\"{{base_url}}{{header.pre_apply_category_go_category}}\">Conocer categorías</a>
        </div>
        <div class=\"section-pattern section-pattern-lightgray-squard pre-apply-step\">
            <h4>2</h4>
            <h5>{{header.pre_apply_committee_title}}</h3> 
            <p>{{header.pre_apply_committee_content}}</p> 
            <a class=\"button button-border-blue\" href=\"{{(header.pre_apply_file|first).path}}\" download=\"\">Conformación del comité</a>
        </div>
    </div>
    <div class=\"title-apply\">
        <h2>Aplicación</h2>
    </div>
    <div class=\"apply\">
        <div class=\"section-pattern section-pattern-lightgray-squard apply-step\">
            <h4>3</h4>
            <h5>{{header.apply_signup_title}}</h3> 
            <p>{{header.apply_signup_content}}</p> 
        </div>
        <div class=\"section-pattern section-pattern-lightblue-squard apply-step\">
            <h4>4</h4>
            <h5>{{header.apply_report_title}}</h3> 
            <p>{{header.apply_report_content}}</p> 
        </div>
    </div>
</section>", "modular/how-to-apply.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/how-to-apply.html.twig");
    }
}
