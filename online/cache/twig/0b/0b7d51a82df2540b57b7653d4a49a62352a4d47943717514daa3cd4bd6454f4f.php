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

/* @nucleus/content/particle.html.twig */
class __TwigTemplate_8db79ddfc08939817db78ce2e4276e917871fdfc691eed6f30bab2c1f3154432 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@nucleus/content/particle.html.twig"));

        // line 1
        try {            // line 2
            echo "    ";
            $context["id"] = $this->getAttribute(($context["segment"] ?? null), "id", []);
            // line 3
            echo "    ";
            if ( !($context["particle"] ?? null)) {
                // line 4
                echo "        ";
                if (($context["noConfig"] ?? null)) {
                    // line 5
                    echo "            ";
                    $context["enabled"] = true;
                    // line 6
                    echo "            ";
                    $context["particle"] = $this->getAttribute(($context["segment"] ?? null), "attributes", []);
                    // line 7
                    echo "        ";
                } else {
                    // line 8
                    echo "            ";
                    $context["enabled"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("particles." . $this->getAttribute(($context["segment"] ?? null), "subtype", [])) . ".enabled"), 1 => 1], "method");
                    // line 9
                    echo "            ";
                    $context["particle"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "getJoined", [0 => ("particles." . $this->getAttribute(($context["segment"] ?? null), "subtype", [])), 1 => $this->getAttribute(($context["segment"] ?? null), "attributes", [])], "method");
                    // line 10
                    echo "        ";
                }
                // line 11
                echo "    ";
            }
            // line 12
            echo "
    ";
            // line 13
            ob_start();
            // line 14
            echo "        ";
            if ((($context["enabled"] ?? null) && ((null === $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "enabled", [])) || $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "enabled", [])))) {
                // line 15
                echo "            ";
                $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["segment"] ?? null), "subtype", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(                // line 16
($context["segment"] ?? null), "subtype", [])) . ".html.twig"), 2 => "@nucleus/content/missing.html.twig"], "@nucleus/content/particle.html.twig", 15)->display($context);
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
            $context["html"] = twig_trim_filter(($context["html"] ?? null));
            // line 21
            echo "
    ";
            // line 22
            $context["classes"] = twig_trim_filter(((( !($context["inContent"] ?? null)) ? ("g-content g-particle ") : ("g-particle ")) . twig_join_filter($this->getAttribute(($context["segment"] ?? null), "classes", []), " ")));
            // line 23
            if (($context["html"] ?? null)) {
                // line 24
                if ($this->getAttribute(($context["gantry"] ?? null), "debug", [])) {
                    echo "<!-- START PARTICLE ";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " -->";
                }
                // line 25
                echo "
            ";
                // line 26
                if ( !(isset($context["ajax"]) || array_key_exists("ajax", $context))) {
                    echo "<div id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "-particle\" class=\"";
                    echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
                    echo "\">";
                }
                // line 27
                echo "            ";
                echo ($context["html"] ?? null);
                echo "
            ";
                // line 28
                if ( !(isset($context["ajax"]) || array_key_exists("ajax", $context))) {
                    echo "</div>";
                }
                // line 29
                echo "            ";
                if ($this->getAttribute(($context["gantry"] ?? null), "debug", [])) {
                    echo "<!-- END PARTICLE ";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " -->";
                }
            }
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 33
            echo "    <div class=\"alert alert-error\"><strong>Error</strong> while rendering ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["segment"] ?? null), "subtype", []), "html", null, true);
            echo " particle.</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@nucleus/content/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  118 => 29,  114 => 28,  109 => 27,  101 => 26,  98 => 25,  92 => 24,  90 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  34 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% try %}
    {% set id = segment.id %}
    {% if not particle %}
        {% if noConfig %}
            {% set enabled = true %}
            {% set particle = segment.attributes %}
        {% else %}
            {% set enabled = gantry.config.get('particles.' ~ segment.subtype ~ '.enabled', 1) %}
            {% set particle = gantry.config.getJoined('particles.' ~ segment.subtype, segment.attributes) %}
        {% endif %}
    {% endif %}

    {% set html %}
        {% if enabled and (segment.attributes.enabled is null or segment.attributes.enabled) %}
            {% include ['particles/' ~ segment.subtype ~ '.html.twig',
            '@particles/' ~ segment.subtype ~ '.html.twig',
            '@nucleus/content/missing.html.twig'] %}
        {% endif %}
    {% endset %}
    {% set html = html|trim %}

    {% set classes = ((not inContent ? 'g-content g-particle ' : 'g-particle ') ~ segment.classes|join(' '))|trim %}
    {%- if html -%}
            {% if gantry.debug %}<!-- START PARTICLE {{ id }} -->{% endif %}

            {% if ajax is not defined %}<div id=\"{{ id }}-particle\" class=\"{{ classes }}\">{% endif %}
            {{ html|raw }}
            {% if ajax is not defined %}</div>{% endif %}
            {% if gantry.debug %}<!-- END PARTICLE {{ id }} -->{% endif %}
    {%- endif -%}

{% catch %}
    <div class=\"alert alert-error\"><strong>Error</strong> while rendering {{ segment.subtype }} particle.</div>
{% endtry %}
", "@nucleus/content/particle.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/templates/content/particle.html.twig");
    }
}
