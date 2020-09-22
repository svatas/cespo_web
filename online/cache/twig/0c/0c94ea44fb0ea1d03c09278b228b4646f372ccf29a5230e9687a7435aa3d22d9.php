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

/* @particles/verticalmenu.html.twig */
class __TwigTemplate_bee2d6a5776aac78f97afd1ee632b6aaa95df17285b4b40b943475bd84092280 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@particles/verticalmenu.html.twig"));

        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/verticalmenu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 129
    public function block_particle($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "particle"));

        // line 130
        echo "    ";
        try {            // line 131
            echo "        ";
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
            // line 132
            echo "    ";
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 133
            echo "        <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
    ";
        }
        // line 135
        echo "
    <!-- Menu toggle for mobile version -->
    <button class=\"action action--open\" aria-label=\"Open Menu\">
        <span class=\"icon icon--menu icon-vertical-menu\"></span>
    </button>

    <!-- Menu -->
    <nav id=\"ml-menu\" class=\"menu\" data-all-text=\"";
        // line 142
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "alltext", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "alltext", []), "ALL")) : ("ALL")));
        echo "\">
        <!-- Close button for mobile version -->
        <button class=\"action action--close\" aria-label=\"Close Menu\">
            <span class=\"icon icon--cross icon-vertical-menu\"></span>
        </button>
        <div class=\"menu__wrap\">
            <ul data-menu=\"main\" class=\"menu__level\">
                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu"] ?? null), "root", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            echo "                    ";
            echo $this->getAttribute($this, "displayItem", [0 => $context["item"], 1 => ($context["menu"] ?? null), 2 => ($context["gantry"] ?? null), 3 => $this->getAttribute($context["item"], "id", [])], "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "            </ul>

            ";
        // line 154
        echo $this->getAttribute($this, "displaySubmenu", [0 => ($context["menu"] ?? null), 1 => ($context["menu"] ?? null), 2 => ($context["gantry"] ?? null)], "method");
        echo "
        </div>
    </nav>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 159
    public function block_javascript_footer($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 160
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 161
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/modernizr-vmenu.js"), 1 => 10, 2 => "footer"], "method");
        // line 162
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/classie.js"), 1 => 10, 2 => "footer"], "method");
        // line 163
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/verticalmenu.js"), 1 => 10, 2 => "footer"], "method");
        // line 164
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/verticalmenu.init.js"), 1 => 10, 2 => "footer"], "method");
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function getdisplayParticle($__item__ = null, $__gantry__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "gantry" => $__gantry__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayParticle"));

            // line 4
            echo "    ";
            if (((null === $this->getAttribute($this->getAttribute(($context["item"] ?? null), "particle", []), "enabled", [])) || $this->getAttribute($this->getAttribute(($context["item"] ?? null), "particle", []), "enabled", []))) {
                // line 5
                echo "        ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 6
                echo "        <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
            ";
                // line 7
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(                    // line 8
($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(                    // line 9
($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/verticalmenu.html.twig", 7);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_to_array(["gantry" =>                     // line 12
($context["gantry"] ?? null), "particle" => $this->getAttribute($this->getAttribute(                    // line 13
($context["item"] ?? null), "options", []), "particle", [])]));
                }
                // line 16
                echo "        </div>
    ";
            }
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getdisplayTitle($__item__ = null, $__gantry__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "gantry" => $__gantry__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayTitle"));

            // line 21
            echo "    ";
            if ($this->getAttribute(($context["item"] ?? null), "icon_only", [])) {
                // line 22
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []));
                echo "\"></i>
    ";
            } else {
                // line 24
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                    // line 25
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []));
                    echo "\"/>
        ";
                } elseif ($this->getAttribute(                // line 26
($context["item"] ?? null), "icon", [])) {
                    // line 27
                    echo "            <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []));
                    echo "\"></i>
        ";
                }
                // line 29
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []));
                echo "
        ";
                // line 30
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 31
                    echo "            <div class=\"g-menu-item-subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []));
                    echo "</div>
        ";
                }
                // line 33
                echo "    ";
            }
            echo "    
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 36
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__gantry__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displayItem"));

            // line 37
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", []))) {
                // line 38
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["item"] ?? null), "icon_only", [])) ? (((" title=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 39
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? ("menu__link--current") : (""));
                // line 40
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "dropdown", [])))) : (""));
                // line 41
                echo "        ";
                $context["parent"] = (($this->getAttribute(($context["item"] ?? null), "children", [])) ? (" g-parent") : (""));
                // line 42
                echo "        ";
                $context["target"] = ((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self")) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 43
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 44
                    echo "            <li class=\"menu__item ";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    echo "\">
                <a class=\"menu__link ";
                    // line 45
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        echo "data-submenu=\"submenu-";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
                    <span>
                    ";
                    // line 47
                    echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                    echo "
                    </span>
                </a>
            </li>
        ";
                } else {
                    // line 52
                    echo "            ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                        // line 53
                        echo "                ";
                        echo $this->getAttribute($this, "displayParticle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                        echo "
            ";
                    } elseif ((($this->getAttribute(                    // line 54
($context["item"] ?? null), "type", []) == "heading") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "separator"))) {
                        // line 55
                        echo "                <li class=\"menu__item ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                        echo "\">
                    <a class=\"menu__link ";
                        // line 56
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            echo "data-submenu=\"submenu-";
                            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"javascript:void(0)\">
                      <span>
                        ";
                        // line 58
                        echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                        echo "
                          </span>
                    </a>
                </li>
            ";
                    } else {
                        // line 63
                        echo "                <li class=\"menu__item ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                        echo "\">
                    <a class=\"menu__link ";
                        // line 64
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            echo "data-submenu=\"submenu-";
                            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo "\" ";
                        echo ($context["target"] ?? null);
                        echo ">
                     <span>
                        ";
                        // line 66
                        echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null)], "method");
                        echo "
                         </span>
                    </a>
                </li>
            ";
                    }
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            }
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getdisplaySubItem($__item__ = null, $__menu__ = null, $__gantry__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displaySubItem"));

            // line 76
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", []))) {
                // line 77
                echo "        <li class=\"menu__item ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                echo "\">
            ";
                // line 78
                $context["title"] = (($this->getAttribute(($context["item"] ?? null), "icon_only", [])) ? (((" title=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 79
                echo "            ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? ("menu__link--current") : (""));
                // line 80
                echo "            ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "dropdown", [])))) : (""));
                // line 81
                echo "            ";
                $context["parent"] = (($this->getAttribute(($context["item"] ?? null), "children", [])) ? (" g-parent") : (""));
                // line 82
                echo "            ";
                $context["target"] = ((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self")) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 83
                echo "            ";
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 84
                    echo "                <a class=\"menu__link ";
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        echo "data-submenu=\"submenu-";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
                <span>
                    ";
                    // line 86
                    echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                    echo "
                     </span>
                </a>
            ";
                } else {
                    // line 90
                    echo "                ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                        // line 91
                        echo "                    ";
                        echo $this->getAttribute($this, "displayParticle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                        echo "
                ";
                    } elseif ((($this->getAttribute(                    // line 92
($context["item"] ?? null), "type", []) == "heading") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "separator"))) {
                        // line 93
                        echo "                    <a class=\"menu__link ";
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            echo "data-submenu=\"submenu-";
                            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"javascript:void(0)\">
                        <span>
                            ";
                        // line 95
                        echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null), 1 => ($context["gantry"] ?? null)], "method");
                        echo "
                        </span>
                    </a>
                ";
                    } else {
                        // line 99
                        echo "                    <a class=\"menu__link ";
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            echo "data-submenu=\"submenu-";
                            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo "\" ";
                        echo ($context["target"] ?? null);
                        echo ">
                        <span>
                            ";
                        // line 101
                        echo $this->getAttribute($this, "displayTitle", [0 => ($context["item"] ?? null)], "method");
                        echo "
                        </span>
                    </a>
                ";
                    }
                    // line 105
                    echo "            ";
                }
                // line 106
                echo "        </li>
    ";
            }
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getdisplaySubmenu($__items__ = null, $__menu__ = null, $__gantry__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "displaySubmenu"));

            // line 111
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if (($this->getAttribute($context["item"], "id", []) != "root")) {
                    // line 112
                    echo "        ";
                    if ($this->getAttribute($context["item"], "children", [])) {
                        // line 113
                        echo "            ";
                        $context["some_children_visible"] = false;
                        // line 114
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            if ($this->getAttribute($context["item"], "visible", [])) {
                                // line 115
                                echo "                ";
                                $context["some_children_visible"] = true;
                                // line 116
                                echo "            ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 117
                        echo "
            ";
                        // line 118
                        if (($context["some_children_visible"] ?? null)) {
                            // line 119
                            echo "                <ul data-menu=\"submenu-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                            echo "\" class=\"menu__level\">
                    ";
                            // line 120
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 121
                                echo "                        ";
                                echo $this->getAttribute($this, "displaySubItem", [0 => $context["item"], 1 => ($context["menu"] ?? null), 2 => ($context["gantry"] ?? null), 3 => $this->getAttribute($context["item"], "id", [])], "method");
                                echo "
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 123
                            echo "                </ul>
            ";
                        }
                        // line 125
                        echo "        ";
                    }
                    // line 126
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/verticalmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 126,  644 => 125,  640 => 123,  631 => 121,  627 => 120,  622 => 119,  620 => 118,  617 => 117,  610 => 116,  607 => 115,  601 => 114,  598 => 113,  595 => 112,  589 => 111,  572 => 110,  552 => 106,  549 => 105,  542 => 101,  526 => 99,  519 => 95,  507 => 93,  505 => 92,  500 => 91,  497 => 90,  490 => 86,  474 => 84,  471 => 83,  468 => 82,  465 => 81,  462 => 80,  459 => 79,  457 => 78,  452 => 77,  449 => 76,  431 => 75,  412 => 72,  409 => 71,  401 => 66,  386 => 64,  381 => 63,  373 => 58,  362 => 56,  357 => 55,  355 => 54,  350 => 53,  347 => 52,  339 => 47,  324 => 45,  319 => 44,  316 => 43,  313 => 42,  310 => 41,  307 => 40,  304 => 39,  301 => 38,  298 => 37,  280 => 36,  259 => 33,  253 => 31,  251 => 30,  246 => 29,  240 => 27,  238 => 26,  231 => 25,  228 => 24,  222 => 22,  219 => 21,  203 => 20,  183 => 16,  180 => 13,  179 => 12,  173 => 9,  172 => 8,  169 => 7,  164 => 6,  161 => 5,  158 => 4,  142 => 3,  134 => 164,  131 => 163,  128 => 162,  125 => 161,  122 => 160,  116 => 159,  105 => 154,  101 => 152,  92 => 150,  88 => 149,  78 => 142,  69 => 135,  63 => 133,  57 => 132,  54 => 131,  52 => 130,  46 => 129,  30 => 1,);
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

{% macro displayParticle(item, gantry) %}
    {% if item.particle.enabled is null or item.particle.enabled %}
        {% set classes = item.options.block.class %}
        <div class=\"menu-item-particle{{ classes ? ' ' ~ classes }}\">
            {% include[
                'particles/' ~ item.particle ~ '.html.twig',
                '@particles/' ~ item.particle ~ '.html.twig'
            ]
            ignore missing with {
                gantry: gantry,
                particle: item.options.particle
            }
            only %}
        </div>
    {% endif %}
{% endmacro %}

{% macro displayTitle(item, gantry) %}
    {% if item.icon_only %}
        <i class=\"{{ item.icon|e }}\"></i>
    {% else %}
        {% if item.image %}
            <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\"/>
        {% elseif item.icon %}
            <i class=\"{{ item.icon|e }}\"></i>
        {% endif %}
        {{ item.title|e }}
        {% if item.subtitle %}
            <div class=\"g-menu-item-subtitle\">{{ item.subtitle|e }}</div>
        {% endif %}
    {% endif %}    
{% endmacro %}

{% macro displayItem(item, menu, gantry, id) %}
    {% if item.visible and item.enabled %}
        {% set title = item.icon_only ? ' title=\"' ~ item.title | e ~ '\"' %}
        {% set active = menu.isActive(item) ? 'menu__link--current' %}
        {% set dropdown = item.level == 1 ? ' g-' ~ item.dropdown|e %}
        {% set parent = item.children ? ' g-parent' %}
        {% set target = item.target != '_self' ? ' target=\"' ~ item.target | e ~ '\"' %}
        {% if item.url %}
            <li class=\"menu__item {{ item.class|default('') }}\">
                <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"{{ item.url }}\" {{ target|raw }}>
                    <span>
                    {{ _self.displayTitle(item, gantry) }}
                    </span>
                </a>
            </li>
        {% else %}
            {% if item.type == 'particle' %}
                {{ _self.displayParticle(item, gantry) }}
            {% elseif item.type == 'heading' or item.type == 'separator' %}
                <li class=\"menu__item {{ item.class|default('') }}\">
                    <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"javascript:void(0)\">
                      <span>
                        {{ _self.displayTitle(item, gantry) }}
                          </span>
                    </a>
                </li>
            {% else %}
                <li class=\"menu__item {{ item.class|default('') }}\">
                    <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"{{ item.url }}\" {{ target|raw }}>
                     <span>
                        {{ _self.displayTitle(item) }}
                         </span>
                    </a>
                </li>
            {% endif %}
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro displaySubItem(item, menu, gantry, id) %}
    {% if item.visible and item.enabled %}
        <li class=\"menu__item {{ item.class|default('') }}\">
            {% set title = item.icon_only ? ' title=\"' ~ item.title | e ~ '\"' %}
            {% set active = menu.isActive(item) ? 'menu__link--current' %}
            {% set dropdown = item.level == 1 ? ' g-' ~ item.dropdown|e %}
            {% set parent = item.children ? ' g-parent' %}
            {% set target = item.target != '_self' ? ' target=\"' ~ item.target | e ~ '\"' %}
            {% if item.url %}
                <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"{{ item.url }}\" {{ target|raw }}>
                <span>
                    {{ _self.displayTitle(item, gantry) }}
                     </span>
                </a>
            {% else %}
                {% if item.type == 'particle' %}
                    {{ _self.displayParticle(item, gantry) }}
                {% elseif item.type == 'heading' or item.type == 'separator' %}
                    <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"javascript:void(0)\">
                        <span>
                            {{ _self.displayTitle(item, gantry) }}
                        </span>
                    </a>
                {% else %}
                    <a class=\"menu__link {{ active }}\" {% if (item.children) and not item.dropdown_hide %}data-submenu=\"submenu-{{ id }}\"{% endif %} href=\"{{ item.url }}\" {{ target|raw }}>
                        <span>
                            {{ _self.displayTitle(item) }}
                        </span>
                    </a>
                {% endif %}
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}

{% macro displaySubmenu(items, menu, gantry) %}
    {% for item in items if item.id != 'root' %}
        {% if item.children %}
            {% set some_children_visible = false %}
            {% for item in item.children if item.visible %}
                {% set some_children_visible = true %}
            {% endfor %}

            {% if some_children_visible %}
                <ul data-menu=\"submenu-{{ item.id }}\" class=\"menu__level\">
                    {% for item in item.children %}
                        {{ _self.displaySubItem(item, menu, gantry, item.id) }}
                    {% endfor %}
                </ul>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% block particle %}
    {% try %}
        {% set menu = gantry.menu.instance(particle) %}
    {% catch %}
        <div class=\"alert alert-error\">{{ e.getMessage }}</div>
    {% endtry %}

    <!-- Menu toggle for mobile version -->
    <button class=\"action action--open\" aria-label=\"Open Menu\">
        <span class=\"icon icon--menu icon-vertical-menu\"></span>
    </button>

    <!-- Menu -->
    <nav id=\"ml-menu\" class=\"menu\" data-all-text=\"{{ particle.alltext|default('ALL')|e }}\">
        <!-- Close button for mobile version -->
        <button class=\"action action--close\" aria-label=\"Close Menu\">
            <span class=\"icon icon--cross icon-vertical-menu\"></span>
        </button>
        <div class=\"menu__wrap\">
            <ul data-menu=\"main\" class=\"menu__level\">
                {% for item in menu.root %}
                    {{ _self.displayItem(item, menu, gantry, item.id) }}
                {% endfor %}
            </ul>

            {{ _self.displaySubmenu(menu, menu, gantry) }}
        </div>
    </nav>
{% endblock %}

{% block javascript_footer %}
    {% do gantry.load('jquery') %}
    {% do gantry.document.addScript(url('gantry-theme://js/modernizr-vmenu.js'), 10, 'footer') %}
    {% do gantry.document.addScript(url('gantry-theme://js/classie.js'), 10, 'footer') %}
    {% do gantry.document.addScript(url('gantry-theme://js/verticalmenu.js'), 10, 'footer') %}
    {% do gantry.document.addScript(url('gantry-theme://js/verticalmenu.init.js'), 10, 'footer') %}
{% endblock %}
", "@particles/verticalmenu.html.twig", "/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/verticalmenu.html.twig");
    }
}
