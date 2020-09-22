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

/* @particles/assets.html.twig */
class __TwigTemplate_fc19bde41a0695ac11cbf1186f99bdf3827e0d338678143ed4fff698d33baf44 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/assets.html.twig"));

        // line 1
        ob_start();
        // line 2
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "css", []));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 4
                echo "        ";
                $context["params"] = [];
                // line 5
                echo "        ";
                if ($this->getAttribute($context["css"], "extra", [])) {
                    // line 6
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["css"], "extra", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                        // line 7
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 8
                            echo "                    ";
                            $context["params"] = twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), [$context["key"] => $context["value"]]);
                            // line 9
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 10
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "
        ";
                // line 13
                if ($this->getAttribute($context["css"], "location", [])) {
                    // line 14
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addStyle", [0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), ["href" => $this->getAttribute($context["css"], "location", [])]), 1 => $this->getAttribute($context["css"], "priority", [])], "method");
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        ";
                // line 17
                if ($this->getAttribute($context["css"], "inline", [])) {
                    // line 18
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), ["content" => $this->getAttribute($context["css"], "inline", [])]), 1 => $this->getAttribute($context["css"], "priority", [])], "method");
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "javascript", []));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 23
                echo "        ";
                $context["params"] = [];
                // line 24
                echo "        ";
                if ($this->getAttribute($context["script"], "extra", [])) {
                    // line 25
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["script"], "extra", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                        // line 26
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 27
                            echo "                    ";
                            $context["params"] = twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), [$context["key"] => $context["value"]]);
                            // line 28
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        ";
                // line 32
                if ($this->getAttribute($context["script"], "location", [])) {
                    // line 33
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), ["src" => $this->getAttribute($context["script"], "location", [])]), 1 => $this->getAttribute($context["script"], "priority", []), 2 => ((($this->getAttribute($context["script"], "in_footer", []) == true)) ? ("footer") : ("head"))], "method");
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "
        ";
                // line 36
                if ($this->getAttribute($context["script"], "inline", [])) {
                    // line 37
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineScript", [0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), ["content" => $this->getAttribute($context["script"], "inline", [])]), 1 => $this->getAttribute($context["script"], "priority", []), 2 => ((($this->getAttribute($context["script"], "in_footer", []) == true)) ? ("footer") : ("head"))], "method");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@particles/assets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 39,  164 => 38,  161 => 37,  159 => 36,  156 => 35,  153 => 34,  150 => 33,  148 => 32,  145 => 31,  142 => 30,  136 => 29,  130 => 28,  127 => 27,  122 => 26,  117 => 25,  114 => 24,  111 => 23,  107 => 22,  104 => 21,  98 => 20,  95 => 19,  92 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  73 => 11,  67 => 10,  61 => 9,  58 => 8,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{% if (particle.enabled) %}
    {% for css in particle.css %}
        {% set params = {} %}
        {% if css.extra %}
            {% for attributes in css.extra %}
                {% for key, value in attributes %}
                    {% set params = params|default({})|merge({(key): value}) %}
                {% endfor %}
            {% endfor %}
        {% endif %}

        {% if css.location %}
            {% do gantry.document.addStyle(params|default({})|merge({href: css.location}), css.priority) %}
        {% endif %}

        {% if css.inline %}
            {% do gantry.document.addInlineStyle(params|default({})|merge({content: css.inline}), css.priority) %}
        {% endif %}
    {% endfor %}

    {% for script in particle.javascript %}
        {% set params = {} %}
        {% if script.extra %}
            {% for attributes in script.extra %}
                {% for key, value in attributes %}
                    {% set params = params|default({})|merge({(key): value}) %}
                {% endfor %}
            {% endfor %}
        {% endif %}

        {% if script.location %}
            {% do gantry.document.addScript(params|default({})|merge({src: script.location}), script.priority, script.in_footer == true ? 'footer' : 'head') %}
        {% endif %}

        {% if script.inline %}
            {% do gantry.document.addInlineScript(params|default({})|merge({content: script.inline}), script.priority, script.in_footer == true ? 'footer' : 'head') %}
        {% endif %}
    {% endfor %}
{% endif %}
{% endspaceless %}
", "@particles/assets.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/particles/assets.html.twig");
    }
}
