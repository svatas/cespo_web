<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/frameworks.html.twig */
class __TwigTemplate_ba1dccd1083bbd6b55fcb209f8fedd1f3fca6ac3cfee0ece6ccdbce49039e6e6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/frameworks.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "enabled", [])) {
            // line 2
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "ui_core", [])) {
                // line 4
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery.ui.core"], "method");
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "ui_sortable", [])) {
                // line 7
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery.ui.sortable"], "method");
                // line 8
                echo "    ";
            }
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "bootstrap3", []), "enabled", [])) {
            // line 12
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "bootstrap.3"], "method");
        } elseif ($this->getAttribute($this->getAttribute(        // line 13
($context["particle"] ?? null), "bootstrap2", []), "enabled", [])) {
            // line 14
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "bootstrap.2"], "method");
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", []), "enabled", [])) {
            // line 18
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "mootools"], "method");
            // line 19
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", []), "more", [])) {
                // line 20
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "mootools.more"], "method");
                // line 21
                echo "    ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/frameworks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if particle.jquery.enabled %}
    {% do gantry.load('jquery') %}
    {% if particle.jquery.ui_core %}
        {% do gantry.load('jquery.ui.core') %}
    {% endif %}
    {% if particle.jquery.ui_sortable %}
        {% do gantry.load('jquery.ui.sortable') %}
    {% endif %}
{% endif %}

{% if particle.bootstrap3.enabled %}
    {% do gantry.load('bootstrap.3') %}
{% elseif particle.bootstrap2.enabled %}
    {% do gantry.load('bootstrap.2') %}
{% endif %}

{% if particle.mootools.enabled %}
    {% do gantry.load('mootools') %}
    {% if particle.mootools.more %}
        {% do gantry.load('mootools.more') %}
    {% endif %}
{% endif %}
", "@particles/frameworks.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/particles/frameworks.html.twig");
    }
}
