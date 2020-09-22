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

/* flex-objects/types/default/list.html.twig */
class __TwigTemplate_555d6c3df94cf45b760fb58edf5f00b541fa7fd15ee7bb2d83a7cba45aad6158 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("flex-objects/types/default/titlebar/list.html.twig", "flex-objects/types/default/list.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/list.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'content_list' => [$this, 'block_content_list'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/list.html.twig"));

        // line 5
        $context["can_export"] = (($context["can_export"]) ?? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->boolFilter($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.export"], "method"))));
        // line 6
        $context["can_create"] = (($context["can_create"]) ?? ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method")));
        // line 7
        $context["can_translate"] = (($context["can_translate"]) ?? (($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute($this->getAttribute(($context["directory"] ?? null), "object", []), "hasFlexFeature", [0 => "flex-translate"], "method"))));
        // line 9
        $context["per_page"] = (($context["per_page"]) ?? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "currentUri", []), "queryParam", [0 => "per_page"], "method")));
        // line 12
        if (($context["can_translate"] ?? null)) {
            // line 13
            $context["translate_include_default"] = (($context["translate_include_default"]) ?? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "get", [0 => "system.languages.include_default_lang_file_extension", 1 => true], "method")));
            // line 14
            $context["all_languages"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "admin", []), "siteLanguages", []);
            // line 15
            $context["admin_languages"] = $this->getAttribute(($context["admin"] ?? null), "languages_enabled", []);
            // line 16
            $context["default_language"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "default", []);
            // line 17
            $context["language"] = $this->getAttribute(($context["controller"] ?? null), "language", []);
            // line 24
            $context["language"] = ((($context["language"] ?? null)) ? (($context["language"] ?? null)) : (($context["default_language"] ?? null)));
        }
        // line 29
        $context["allowed"] = (($context["allowed"]) ?? ((($context["directory"] ?? null) && $this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 30
        $context["back_route"] = (($context["back_route"]) ?? ($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1, 1 =>  -1], "method")));
        // line 31
        $context["configure_route"] = (($context["configure_route"]) ?? ($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "", 1 => "configure"], "method")));
        // line 33
        $context["title_icon"] = (($context["title_icon"]) ?? (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [])) : ("fa-file-text-o"))));
        // line 34
        $context["title"] = (($context["title"]) ?? ($this->getAttribute(($context["directory"] ?? null), "title", [])));
        // line 36
        $context["schema"] = $this->getAttribute($this->getAttribute(($context["directory"] ?? null), "blueprint", []), "schema", []);
        // line 38
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://flex-objects/js/flex-objects.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/types/default/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        $context["collection"] = ((($context["directory"] ?? null)) ? ($this->getAttribute(($context["collection"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : (""));
        // line 42
        echo "    ";
        $context["directory_config"] = (($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.list.options"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.list.options"], "method"), $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.flex-objects.admin_list", 1 => ["per_page" => 15, "order" => ["by" => "updated_timestamp", "dir" => "desc"]]], "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.flex-objects.admin_list", 1 => ["per_page" => 15, "order" => ["by" => "updated_timestamp", "dir" => "desc"]]], "method")));
        // line 43
        echo "    ";
        $context["per_page"] = max(1, (($context["per_page"]) ?? ($this->getAttribute(($context["directory_config"] ?? null), "per_page", []))));
        // line 44
        echo "    ";
        $context["table"] = ((($context["directory"] ?? null)) ? ($this->getAttribute(($context["flex"] ?? null), "dataTable", [0 => $this->getAttribute(($context["collection"] ?? null), "flexDirectory", [], "method"), 1 => ["collection" => ($context["collection"] ?? null), "limit" => ($context["per_page"] ?? null), "sort" => (($this->getAttribute($this->getAttribute(($context["directory_config"] ?? null), "order", []), "by", []) . "|") . $this->getAttribute($this->getAttribute(($context["directory_config"] ?? null), "order", []), "dir", []))]], "method")) : (""));
        // line 45
        echo "    ";
        $context["back_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null));
        // line 46
        echo "    ";
        $context["configure_url"] = (( !($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.hidden", 1 => false], "method") === true)) ? ($this->getAttribute(($context["configure_route"] ?? null), "toString", [0 => true], "method")) : (""));
        // line 47
        echo "
    ";
        // line 48
        $context["fields"] = $this->getAttribute(($context["table"] ?? null), "getColumns", [], "method");
        // line 49
        echo "    ";
        $context["fields_count"] = ((($context["fields"] ?? null)) ? (count(($context["fields"] ?? null))) : (0));
        // line 50
        echo "    ";
        $context["fields_width"] = 8;
        // line 51
        echo "    ";
        $context["fields_set"] = 0;
        // line 52
        echo "    ";
        $context["title_field"] = $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.list.title"], "method");
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["options"]) {
            // line 54
            echo "        ";
            $context["fields_width"] = (((($context["fields_width"] ?? null) + $this->getAttribute($context["options"], "width", []))) ? ((($context["fields_width"] ?? null) + $this->getAttribute($context["options"], "width", []))) : (0));
            // line 55
            echo "        ";
            $context["fields_set"] = (($context["fields_set"] ?? null) + (($this->getAttribute($context["options"], "width", [])) ? (1) : (0)));
            // line 56
            echo "        ";
            if (( !($context["title_field"] ?? null) && ($this->getAttribute($context["options"], "link", []) == "edit"))) {
                // line 57
                echo "            ";
                $context["title_field"] = $context["key"];
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    ";
        // line 61
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 64
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 65
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 66
            echo "    ";
            $context["save_location"] = $this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method");
            // line 67
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo "</b></div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 71
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 72
        if (($context["allowed"] ?? null)) {
            // line 73
            echo "    ";
            $this->displayBlock('content_list', $context, $blocks);
        } else {
            // line 77
            echo "    ";
            $this->getAttribute(($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 404], "method");
            // line 78
            echo "    <div class=\"error-block\">
        <h1>Error 404</h1>
        <div class=\"padding\">
            <p>
                Woops! Looks like this page doesn't exist.
            </p>
        </div>
    </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 73
    public function block_content_list($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_list"));

        // line 74
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/list/list.html.twig"), 1 => "flex-objects/types/default/list/list.html.twig"], "flex-objects/types/default/list.html.twig", 74)->display($context);
        // line 75
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  238 => 74,  232 => 73,  216 => 78,  213 => 77,  209 => 73,  207 => 72,  201 => 71,  188 => 67,  185 => 66,  183 => 65,  177 => 64,  168 => 61,  165 => 60,  159 => 59,  156 => 58,  153 => 57,  150 => 56,  147 => 55,  144 => 54,  139 => 53,  136 => 52,  133 => 51,  130 => 50,  127 => 49,  125 => 48,  122 => 47,  119 => 46,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  98 => 40,  90 => 1,  88 => 38,  86 => 36,  84 => 34,  82 => 33,  80 => 31,  78 => 30,  76 => 29,  73 => 24,  71 => 17,  69 => 16,  67 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 9,  57 => 7,  55 => 6,  53 => 5,  44 => 1,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% use 'flex-objects/types/default/titlebar/list.html.twig' %}

{# Allowed actions #}
{% set can_export = can_export ?? directory.config('admin.export')|bool %}
{% set can_create = can_create ?? directory.isAuthorized('create', 'admin', user) %}
{% set can_translate = can_translate ?? (admin.multilang and directory.object.hasFlexFeature('flex-translate')) %}

{% set per_page = per_page ?? grav.uri.currentUri.queryParam('per_page') %}

{# Translations #}
{% if can_translate %}
    {% set translate_include_default = translate_include_default ?? grav.config.get('system.languages.include_default_lang_file_extension', true) %}
    {% set all_languages = grav.admin.siteLanguages %}
    {% set admin_languages = admin.languages_enabled %}
    {% set default_language = grav.language.default %}
    {% set language = controller.language %}
    {#
    {% if translate_include_default %}
        {% set all_languages = all_languages|merge({'': 'Default'}) %}
        {% set admin_languages = admin_languages|merge({'': ''}) %}
    {% else %}
    #}
        {% set language = language ?: default_language %}
    {# endif #}
{% endif %}

{# These variables can be overridden from the main template file #}
{% set allowed = allowed ?? (directory and directory.isAuthorized('list', 'admin', user)) %}
{% set back_route = back_route ?? route.getRoute(1, -1) %}
{% set configure_route = configure_route ?? route.withGravParam('', 'configure') %}

{% set title_icon = title_icon ?? directory.config.admin.menu.list.icon ?? 'fa-file-text-o' %}
{% set title = title ?? directory.title %}

{% set schema = directory.blueprint.schema %}

{% do assets.addJs('plugin://flex-objects/js/flex-objects.js', { 'group': 'bottom', 'loading': 'defer' }) %}

{% block body %}
    {% set collection = directory ? collection.isAuthorized('list', 'admin', user) %}
    {% set directory_config = directory.config('admin.list.options')|default(config.get('plugins.flex-objects.admin_list', { per_page: 15, order: { by: 'updated_timestamp', dir: 'desc' }})) %}
    {% set per_page = max(1, per_page ?? directory_config.per_page) %}
    {% set table = directory ? flex.dataTable(collection.flexDirectory(), {  collection: collection, limit: per_page, sort: directory_config.order.by ~ '|' ~ directory_config.order.dir }) %}
    {% set back_url = admin_route(back_route) %}
    {% set configure_url = directory.config('admin.configure.hidden', false) is not same as(true) ? configure_route.toString(true) %}

    {% set fields = table.getColumns() %}
    {% set fields_count = fields ? count(fields) : 0 %}
    {% set fields_width = 8 %}
    {% set fields_set = 0 %}
    {% set title_field = directory.config('admin.list.title') %}
    {% for key,options in fields %}
        {% set fields_width = fields_width + options.width ?: 0 %}
        {% set fields_set = fields_set + (options.width ? 1 : 0) %}
        {% if not title_field and options.link == 'edit' %}
            {% set title_field = key %}
        {% endif %}
    {% endfor %}

    {{ parent() }}
{% endblock body %}

{% block content_top %}
{% if allowed and user.authorize('admin.super') %}
    {% set save_location = directory.getStorageFolder() %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }}</b></div>
{% endif %}
{% endblock %}

{% block content %}
{% if allowed %}
    {% block content_list %}
    {% include ['flex-objects/types/' ~ target ~ '/list/list.html.twig', 'flex-objects/types/default/list/list.html.twig'] %}
    {% endblock %}
{% else %}
    {% do page.modifyHeader('http_response_code', 404) %}
    <div class=\"error-block\">
        <h1>Error 404</h1>
        <div class=\"padding\">
            <p>
                Woops! Looks like this page doesn't exist.
            </p>
        </div>
    </div>
{% endif %}
{% endblock %}
", "flex-objects/types/default/list.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/flex-objects/admin/templates/flex-objects/types/default/list.html.twig");
    }
}
