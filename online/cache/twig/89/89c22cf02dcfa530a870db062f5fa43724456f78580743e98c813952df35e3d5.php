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

/* @particles/logo.html.twig */
class __TwigTemplate_db89a70280c7e25c9e26f4561fc80e8ba6c5ec1115dee9d12ec9fad0b00f70ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/logo.html.twig"));

        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 4
        echo "    ";
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 5
        echo "    ";
        if ((($context["url"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 6
        echo "    ";
        $context["image"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", []));
        // line 7
        echo "    
    ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "\" ";
            echo (((isset($context["rel"]) || array_key_exists("rel", $context))) ? (_twig_default_filter(($context["rel"] ?? null), "")) : (""));
            echo ">
    ";
        } else {
            // line 11
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "svg", []))) {
            // line 15
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "svg", []);
            echo "
    ";
        } elseif (        // line 16
($context["image"] ?? null)) {
            // line 17
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 19
            echo "        ";
            echo (($this->getAttribute(($context["particle"] ?? null), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "text", []), "Logo")) : ("Logo"));
            echo "
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 23
            echo "        </a>
    ";
        } else {
            // line 25
            echo "        </div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  118 => 23,  116 => 22,  113 => 21,  107 => 19,  99 => 17,  97 => 16,  92 => 15,  90 => 14,  87 => 13,  81 => 11,  67 => 9,  65 => 8,  62 => 7,  59 => 6,  54 => 5,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}
    {% set url = url(particle.url)|default(gantry.siteUrl()) %}
    {% if (url == gantry.siteUrl()) %}{% set rel='rel=\"home\"' %}{% endif %}
    {% set image = url(particle.image) %}
    
    {% if particle.link %}
        <a href=\"{{ url }}\" class=\"{{ particle.class|e }}\" target=\"{{ particle.target|default('_self') }}\" title=\"{{ particle.title }}\" {{ rel|default('')|raw }}>
    {% else %}
        <div class=\"{{ particle.class|e }}\">
    {% endif %}

    {% if particle.svg is not empty %}
        {{ particle.svg|raw }}
    {% elseif image %}
        <img src=\"{{ url(particle.image) }}\" alt=\"{{ particle.text }}\" />
    {% else %}
        {{ particle.text|default('Logo')|raw }}
    {% endif %}

    {% if particle.link %}
        </a>
    {% else %}
        </div>
    {% endif %}
{% endblock %}
", "@particles/logo.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/logo.html.twig");
    }
}
