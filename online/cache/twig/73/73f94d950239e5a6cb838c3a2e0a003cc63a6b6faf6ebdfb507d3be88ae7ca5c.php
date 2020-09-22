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

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_08ad1913d1d20a47ee7cf0dcef308c7a5aa9ecc8c98b12f93f9c03eadd3d0c16 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@nucleus/layout/section.html.twig"));

        // line 1
        $context["tag_type"] = (($this->getAttribute(($context["segment"] ?? null), "subtype", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "subtype", []), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", []))));
        // line 3
        $context["attr_class"] = ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "class", []) . (($this->getAttribute($this->getAttribute(        // line 4
($context["segment"] ?? null), "attributes", []), "variations", [])) ? ((" " . twig_join_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "variations", []), " "))) : ("")));
        // line 5
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "extra", []));
        // line 6
        $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "boxed", []);
        // line 7
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : (($context["boxed"] ?? null)));
        }
        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ($this->getAttribute(($context["segment"] ?? null), "children", [])) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 14
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/section.html.twig", 14)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
                // line 15
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "sticky", []) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 20
            if (( !(null === ($context["boxed"] ?? null)) && ((($context["boxed"] ?? null) == 0) || (($context["boxed"] ?? null) == 2)))) {
                // line 21
                echo "        ";
                ob_start();
                // line 22
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 24
                echo "    ";
            }
            // line 25
            echo "
    ";
            // line 26
            ob_start();
            // line 27
            echo "    ";
            if ((($context["boxed"] ?? null) == 2)) {
                $context["attr_class"] = (($context["attr_class"] ?? null) . " g-flushed");
            }
            // line 28
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 29
            echo "<";
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 30
            echo ($context["html"] ?? null);
            echo "
    </";
            // line 31
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            if ((($context["boxed"] ?? null) == 1)) {
                // line 35
                echo "    <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 37
                echo "    ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  143 => 35,  141 => 34,  137 => 31,  133 => 30,  123 => 29,  120 => 28,  115 => 27,  113 => 26,  110 => 25,  107 => 24,  101 => 22,  98 => 21,  96 => 20,  94 => 19,  90 => 16,  76 => 15,  73 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set tag_type = segment.subtype|default('section') %}
{% set attr_id = segment.attributes.id ?: 'g-' ~ segment.id %}
{% set attr_class = segment.attributes.class
    ~ (segment.attributes.variations ? ' ' ~ segment.attributes.variations|join(' ')) %}
{% set attr_extra = segment.attributes.extra|attribute_array %}
{% set boxed = segment.attributes.boxed %}
{% if boxed is not null %}
    {% set boxed = boxed|trim == '' ? gantry.config.page.body.layout.sections : boxed %}
{% endif %}

{%- set html %}
    {% if segment.children %}
        {% for segment in segments %}
            {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments':segment.children } %}
        {% endfor %}
    {% endif %}
{% endset %}

{%- if segment.attributes.sticky or html|trim %}
    {%- if boxed is not null and (boxed == 0 or boxed == 2) %}
        {% set html %}
        <div class=\"g-container\">{{ html|raw }}</div>
        {% endset %}
    {% endif %}

    {% set html %}
    {% if boxed == 2 %}{% set attr_class = attr_class ~ ' g-flushed' %}{% endif %}
    {% set attr_class = attr_class ? ' class=\"' ~ attr_class|trim ~ '\"' -%}
    <{{ tag_type }} id=\"{{ attr_id }}\"{{ attr_class|raw }} {{- attr_extra|raw }}>
        {{ html|raw }}
    </{{ tag_type }}>
    {%- endset %}

    {%- if boxed == 1 %}
    <div class=\"g-container\">{{ html|raw }}</div>
    {% else %}
    {{ html|raw }}
    {% endif %}
{% endif %}
", "@nucleus/layout/section.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/templates/layout/section.html.twig");
    }
}
