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

/* partials/navigation.html.twig */
class __TwigTemplate_050cbaf0e6d62b0e47e46886d74363fdb4c54b58e24cdf788cac5c6770866054 extends \Twig\Template
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
        // line 29
        echo "
<ul ";
        // line 30
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 31
        $context["macros"] = $this;
        // line 32
        echo "    ";
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null), ($context["hide_home_menu_link"] ?? null), ($context["home_alias"] ?? null));
        echo "
    ";
        // line 34
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo $this->getAttribute($context["mitem"], "url", []);
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", []);
                echo "\">
                    ";
                // line 38
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 39
                    echo "                        <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", []);
                    echo "\"></i>
                    ";
                }
                // line 41
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 48
            echo "        <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 48)->display($context);
            echo "</li>
    ";
        }
        // line 50
        echo "</ul>
";
    }

    // line 1
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0))) {
                    // line 6
                    echo "            <li>
                <a href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 8
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 9
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 11
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul>
                    ";
                    // line 14
                    echo $context["macros"]->getnav_loop($context["p"]);
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 18
                    echo "            <li>
                <a href=\"";
                    // line 19
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 21
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 27
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 27,  175 => 23,  169 => 21,  167 => 20,  161 => 19,  158 => 18,  151 => 14,  144 => 11,  138 => 9,  136 => 8,  130 => 7,  127 => 6,  124 => 5,  121 => 4,  116 => 3,  113 => 2,  99 => 1,  94 => 50,  88 => 48,  85 => 47,  83 => 46,  80 => 45,  69 => 41,  63 => 39,  61 => 38,  55 => 37,  52 => 36,  47 => 35,  44 => 34,  39 => 32,  37 => 31,  33 => 30,  30 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% import _self as macros %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if theme_var('dropdown.enabled') and p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {% if p.header.icon %}
                        <i class=\"fa fa-{{ p.header.icon }}\"></i>
                    {% endif %}
                    {{ p.menu }}
                </a>
                <ul>
                    {{ macros.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {% if p.header.icon %}
                        <i class=\"fa fa-{{ p.header.icon }}\"></i>
                    {% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {% import _self as macros %}
    {{ macros.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
        {% for mitem in theme_var('menu') %}
            <li>
                <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                    {% if mitem.icon %}
                        <i class=\"fa fa-{{ mitem.icon }}\"></i>
                    {% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
        <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/home1/aduni/prueba/user/themes/quark-open-publishing/templates/partials/navigation.html.twig");
    }
}
