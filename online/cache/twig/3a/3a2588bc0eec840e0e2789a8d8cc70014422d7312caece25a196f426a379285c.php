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

/* forms/fields/list/list.html.twig */
class __TwigTemplate_c835681e9913c854f1f3be455d4cce12bca825228ab8e203f3ae5faf77a17676 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'global_attributes' => [$this, 'block_global_attributes'],
            '__internal_204792bbacef9aed1bd29a8c8507b7e8666475cc6acf20fcebfb5a85fbb7625c' => [$this, 'block___internal_204792bbacef9aed1bd29a8c8507b7e8666475cc6acf20fcebfb5a85fbb7625c'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/list/list.html.twig"));

        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 4
        $context["name"] = $this->getAttribute(($context["field"] ?? null), "name", []);
        // line 5
        $context["btnLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnLabel", [])) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [])) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute(($context["field"] ?? null), "controls", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "controls", []), "bottom")) : ("bottom"));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 10
        echo "    <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"
                       ";
            // line 15
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (""));
        echo ">
            ";
        // line 23
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 24
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 31
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\" data-type=\"collection\"
             ";
        // line 40
        if ($this->getAttribute(($context["field"] ?? null), "selectunique", [])) {
            // line 41
            echo "                 data-select-unique=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html_attr");
            echo "\"
                 data-max=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html", null, true);
            echo "\"
             ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "min", [], "any", true, true)) {
            echo "data-min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min", []), "html", null, true);
            echo "\"";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["field"] ?? null), "max", [], "any", true, true) &&  !$this->getAttribute(($context["field"] ?? null), "selectunique", []))) {
            echo "data-max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "max", []), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "        >
            ";
        // line 47
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "top", 1 => "both"])) {
            // line 48
            echo "                <div class=\"collection-actions\">
                    ";
            // line 49
            if (($context["collapsible"] ?? null)) {
                // line 50
                echo "                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                ";
                // line 51
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
                echo "</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                ";
                // line 53
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
                echo "</button>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 56
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 57
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 59
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                            ";
            // line 60
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 63
        echo "            <ul  ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\"";
        }
        echo " data-collection-holder=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 64
        if (($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 65
            echo "                    data-collection-nosort
                ";
        }
        // line 66
        echo ">
                ";
        // line 67
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 68
            echo "                ";
            $context["collapsible"] = ((twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", [])) > 1) && ( !$this->getAttribute(($context["field"] ?? null), "collapsible", [], "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", [])));
            // line 69
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 70
                echo "                    ";
                $context["itemName"] = ((($context["name"] ?? null)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 71
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"";
                echo (((($context["collapsible"] ?? null) && $this->getAttribute(($context["field"] ?? null), "collapsed", []))) ? ("collection-collapsed") : (""));
                echo "\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 74
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], ["_list_index" => ($context["itemName"] ?? null)]);
                    // line 75
                    if (($context["childName"] == "value")) {
                        // line 76
                        $context["childKey"] = "";
                        // line 77
                        echo "                                ";
                        $context["childValue"] = $context["val"];
                        // line 78
                        echo "                                ";
                        $context["childName"] = ($context["itemName"] ?? null);
                    } elseif ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     // line 79
$context["childName"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ".") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                        // line 80
                        $context["childKey"] = twig_trim_filter($context["childName"], ".");
                        // line 81
                        echo "                                ";
                        $context["childValue"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->nestedFilter($context["val"], $context["childName"]);
                        // line 82
                        echo "                                ";
                        $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                        // line 83
                        echo "                            ";
                    } else {
                        // line 84
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 85
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => (($context["scope"] ?? null) . $context["childName"])], "method");
                        // line 86
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], ["*" => $context["key"]]);
                        // line 87
                        echo "                            ";
                    }
                    // line 88
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], ["name" => $context["childName"]]);
                    // line 89
                    echo "
                            ";
                    // line 90
                    if (($this->getAttribute($context["child"], "type", []) == "key")) {
                        // line 91
                        echo "                                ";
                        // line 92
                        $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 92)->display(twig_array_merge($context, ["field" =>                         // line 93
$context["child"], "value" => $context["key"]]));
                        // line 95
                        echo "                            ";
                    } elseif ((($this->getAttribute($context["child"], "key", []) == true) && ($this->getAttribute($context["child"], "type", []) != "list"))) {
                        // line 96
                        echo "                                ";
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                        // line 97
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"], "forms/fields/list/list.html.twig", 96)->display(twig_array_merge($context, ["field" =>                         // line 99
$context["child"], "value" => $context["key"]]));
                        // line 101
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", [])) {
                        // line 102
                        echo "                                ";
                        $context["originalValue"] = ($context["childValue"] ?? null);
                        // line 103
                        echo "                                ";
                        // line 104
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                        // line 105
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/list/list.html.twig", 104)->display(twig_array_merge($context, ["field" =>                         // line 107
$context["child"], "value" => ($context["childValue"] ?? null)]));
                        // line 109
                        echo "                            ";
                    }
                    // line 110
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                        <div class=\"item-actions\">
                            ";
                // line 112
                if (($context["collapsible"] ?? null)) {
                    // line 113
                    echo "                                <i class=\"fa fa-chevron-circle-";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("right") : ("down"));
                    echo "\" data-action=\"";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("expand") : ("collapse"));
                    echo "\"></i>
                                <br />
                            ";
                }
                // line 116
                echo "                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                ";
        }
        // line 121
        echo "            </ul>
            ";
        // line 122
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "bottom", 1 => "both"])) {
            // line 123
            echo "            <div class=\"collection-actions\">
                ";
            // line 124
            if (($context["collapsible"] ?? null)) {
                // line 125
                echo "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 126
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
                echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 128
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
                echo "</button>
                ";
            }
            // line 130
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 131
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 132
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                ";
            }
            // line 134
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        ";
            // line 135
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 139
        $context["itemName"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
        // line 140
        echo "<div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(        $this->renderBlock("__internal_204792bbacef9aed1bd29a8c8507b7e8666475cc6acf20fcebfb5a85fbb7625c", $context, $blocks), ["   " => " ", "
" => " "]), "html_attr");
        // line 189
        echo "\"></div>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 191
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 32
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 33
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 140
    public function block___internal_204792bbacef9aed1bd29a8c8507b7e8666475cc6acf20fcebfb5a85fbb7625c($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_204792bbacef9aed1bd29a8c8507b7e8666475cc6acf20fcebfb5a85fbb7625c"));

        // line 141
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 142
        if ( !($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 143
            echo "                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 145
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 147
                if (($context["childName"] == "value")) {
                    // line 148
                    $context["childKey"] = "";
                    // line 149
                    $context["childName"] = ($context["itemName"] ?? null);
                } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                 // line 150
$context["childName"]) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ".") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                    // line 151
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 152
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                } else {
                    // line 154
                    $context["childKey"] = $context["childName"];
                    // line 155
                    $context["childName"] = twig_replace_filter($context["childName"], ["*" => ($context["key"] ?? null)]);
                }
                // line 157
                $context["child"] = twig_array_merge($context["child"], ["name" => $context["childName"]]);
                // line 159
                if (($this->getAttribute($context["child"], "type", []) == "key")) {
                    // line 161
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 161)->display(twig_array_merge($context, ["field" =>                     // line 162
$context["child"], "value" => null]));
                } elseif (($this->getAttribute(                // line 164
$context["child"], "key", []) == true)) {
                    // line 166
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 167
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"], "forms/fields/list/list.html.twig", 166)->display(twig_array_merge($context, ["field" =>                     // line 169
$context["child"], "value" => null]));
                } elseif ($this->getAttribute(                // line 171
$context["child"], "type", [])) {
                    // line 173
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 174
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/list/list.html.twig", 173)->display(twig_array_merge($context, ["field" =>                     // line 176
$context["child"], "value" => null]));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                    <div class=\"item-actions\">
                        ";
            // line 181
            if (($context["collapsible"] ?? null)) {
                // line 182
                echo "                            <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                            <br />
                        ";
            }
            // line 185
            echo "                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>";
        }
        // line 188
        echo "</li>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 188,  649 => 185,  644 => 182,  642 => 181,  639 => 180,  624 => 176,  623 => 174,  622 => 173,  620 => 171,  618 => 169,  617 => 167,  616 => 166,  614 => 164,  612 => 162,  611 => 161,  609 => 159,  607 => 157,  604 => 155,  602 => 154,  599 => 152,  597 => 151,  595 => 150,  593 => 149,  591 => 148,  589 => 147,  572 => 146,  570 => 145,  566 => 143,  564 => 142,  559 => 141,  553 => 140,  544 => 35,  540 => 34,  535 => 33,  529 => 32,  518 => 191,  514 => 189,  510 => 140,  508 => 139,  498 => 135,  495 => 134,  482 => 132,  473 => 131,  470 => 130,  461 => 128,  452 => 126,  449 => 125,  447 => 124,  444 => 123,  442 => 122,  439 => 121,  436 => 120,  419 => 116,  410 => 113,  408 => 112,  405 => 111,  391 => 110,  388 => 109,  386 => 107,  385 => 105,  384 => 104,  382 => 103,  379 => 102,  376 => 101,  374 => 99,  373 => 97,  371 => 96,  368 => 95,  366 => 93,  365 => 92,  363 => 91,  361 => 90,  358 => 89,  355 => 88,  352 => 87,  349 => 86,  346 => 85,  343 => 84,  340 => 83,  337 => 82,  334 => 81,  332 => 80,  330 => 79,  327 => 78,  324 => 77,  322 => 76,  320 => 75,  317 => 74,  300 => 73,  290 => 71,  287 => 70,  269 => 69,  266 => 68,  264 => 67,  261 => 66,  257 => 65,  255 => 64,  244 => 63,  234 => 60,  231 => 59,  218 => 57,  209 => 56,  206 => 55,  197 => 53,  188 => 51,  185 => 50,  183 => 49,  180 => 48,  178 => 47,  175 => 46,  168 => 45,  161 => 44,  156 => 42,  151 => 41,  149 => 40,  145 => 39,  141 => 37,  139 => 32,  133 => 31,  126 => 28,  120 => 26,  112 => 24,  110 => 23,  105 => 22,  99 => 19,  96 => 18,  92 => 17,  87 => 16,  83 => 15,  79 => 14,  73 => 12,  71 => 11,  64 => 10,  58 => 9,  50 => 1,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  40 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set name = field.name %}
{% set btnLabel = field.btnLabel is defined ? field.btnLabel : \"PLUGIN_ADMIN.ADD_ITEM\" %}
{% set btnSortLabel = field.btnSortLabel is defined ? field.btnSortLabel : \"PLUGIN_ADMIN.SORT_BY\" %}
{% set fieldControls = field.controls|default('bottom') %}

{% block contents %}
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        {% if field.toggleable %}
            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\">
                <input type=\"checkbox\"
                       id=\"toggleable_{{ field.name }}\"
                       {% if toggleableChecked %}value=\"1\"{% endif %}
                       name=\"toggleable_{{ (scope ~ field.name)|fieldName }}\"
                       {% if toggleableChecked %}checked=\"checked\"{% endif %}
                >
                <label for=\"toggleable_{{ field.name }}\"></label>
            </span>
        {% endif %}
        <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\"
        {% block global_attributes %}
        data-grav-field=\"{{ field.type }}\"
        data-grav-disabled=\"{{ toggleableChecked }}\"
        data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
        {% endblock %}
    >

        <div class=\"form-list-wrapper {{ field.size }}\" data-type=\"collection\"
             {% if field.selectunique %}
                 data-select-unique=\"{{ field.selectunique|json_encode|e('html_attr') }}\"
                 data-max=\"{{ field.selectunique|length }}\"
             {% endif %}
            {% if field.min is defined %}data-min=\"{{ field.min }}\"{% endif %}
            {% if field.max is defined and not field.selectunique %}data-max=\"{{ field.max }}\"{% endif %}
        >
            {% if fieldControls in ['top', 'both'] %}
                <div class=\"collection-actions\">
                    {% if collapsible %}
                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                    {% endif %}
                    {% if field.sortby %}
                        <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                    {% endif %}
                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
                </div>
            {% endif %}
            <ul  {% if field.classes is defined %}class=\"{{ field.classes }}\"{% endif %} data-collection-holder=\"{{ name }}\"
                {% if field.sort is same as(false) %}
                    data-collection-nosort
                {% endif %}>
                {% if field.fields %}
                {% set collapsible = field.fields|length > 1 and (field.collapsible is not defined or field.collapsible)  %}
                {% for key, val in value %}
                    {% set itemName = name ? name ~ '.' ~ key : key %}
                    <li data-collection-item=\"{{ itemName }}\" data-collection-key=\"{{ key }}\" class=\"{{ collapsible and field.collapsed ? 'collection-collapsed' : '' }}\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        {% for childName, child in field.fields %}
                            {% set child = child|merge({ '_list_index': itemName }) %}
                            {%- if childName == 'value' -%}
                                {% set childKey = '' %}
                                {% set childValue = val %}
                                {% set childName = itemName -%}
                            {%- elseif childName starts with '.' -%}
                                {% set childKey = childName|trim('.') %}
                                {% set childValue = val|nested(childName) %}
                                {% set childName = itemName ~ childName %}
                            {% else %}
                                {% set childKey = childName %}
                                {% set childValue = data.value(scope ~ childName) %}
                                {% set childName = childName|replace({'*': key}) %}
                            {% endif %}
                            {% set child = child|merge({ name: childName }) %}

                            {% if child.type == 'key' %}
                                {%
                                    include 'forms/fields/key/key.html.twig'
                                    with { field: child, value: key }
                                %}
                            {% elseif child.key == true and child.type != 'list' %}
                                {% include [
                                        \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                        'forms/fields/key/key.html.twig'
                                    ] with { field: child, value: key }
                                %}
                            {% elseif child.type %}
                                {% set originalValue = childValue %}
                                {%
                                    include [
                                        \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                        'forms/fields/text/text.html.twig'
                                    ] with { field: child, value: childValue }
                                %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"item-actions\">
                            {% if collapsible %}
                                <i class=\"fa fa-chevron-circle-{{ field.collapsed ? 'right' : 'down' }}\" data-action=\"{{ field.collapsed ? 'expand' : 'collapse' }}\"></i>
                                <br />
                            {% endif %}
                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                {% endfor %}
                {% endif %}
            </ul>
            {% if fieldControls in ['bottom', 'both'] %}
            <div class=\"collection-actions\">
                {% if collapsible %}
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                {% endif %}
                {% if field.sortby %}
                    <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                {% endif %}
                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
            </div>
            {% endif %}

            {%- set itemName = name ? name ~ '.*' : '*' -%}
            <div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"{%- filter replace({'   ': ' ', '\\n': ' '})|e('html_attr') -%}
                <li data-collection-item=\"{{ itemName }}\">
                    {% if field.sort is not same as(false) %}
                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    {% endif %}
                    {%- if field.fields -%}
                    {%- for childName, child in field.fields -%}
                        {%- if childName == 'value' -%}
                            {%- set childKey = '' -%}
                            {%- set childName = itemName -%}
                        {%- elseif childName starts with '.' -%}
                            {%- set childKey = childName|trim('.') -%}
                            {%- set childName = itemName ~ childName -%}
                        {%- else %}
                            {%- set childKey = childName -%}
                            {%- set childName = childName|replace({'*': key}) -%}
                        {%- endif %}
                        {%- set child = child|merge({ name: childName }) -%}

                        {%- if child.type == 'key' -%}
                            {%-
                                include 'forms/fields/key/key.html.twig'
                                with { field: child, value: null }
                            -%}
                        {%- elseif child.key == true -%}
                            {%-
                            include [
                                \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                'forms/fields/key/key.html.twig'
                                ] with { field: child, value: null }
                            -%}
                        {%- elseif child.type -%}
                            {%-
                                include [
                                    \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                    'forms/fields/text/text.html.twig'
                                ] with { field: child, value: null }
                            -%}
                        {%- endif -%}
                    {%- endfor %}
                    <div class=\"item-actions\">
                        {% if collapsible %}
                            <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                            <br />
                        {% endif %}
                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>
                    {%- endif -%}
                </li>
            {%- endfilter -%}\"></div>

            <div style=\"display: none;\" data-collection-config=\"{{ name }}\"></div>
        </div>
    </div>
{% endblock %}

", "forms/fields/list/list.html.twig", "/domains1/gh43616200/public/www_root/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
