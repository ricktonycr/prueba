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

/* partials/navbar.html.twig */
class __TwigTemplate_b4e640f2beaf8609c7a556edaeb25ef7ae56c74d23591c5043fe3b99c43e6b17 extends \Twig\Template
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
        // line 1
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 37
        echo "
<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 48
        if ((($context["logo"] ?? null) != "")) {
            // line 49
            echo "            <a class=\"navbar-brand\" href=\"";
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\">
                <img src=\"";
            // line 50
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . ($context["logo"] ?? null)));
            echo "\" alt=\"\">
            </a>
            ";
        }
        // line 53
        echo "        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            ";
        // line 56
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 57
            echo "            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            ";
            // line 62
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navbar.html.twig", 62)->display($context);
            // line 63
            echo "                        </li>
                    </ul>
                </li>
            </ul>
            ";
        }
        // line 68
        echo "
            <ul class=\"nav navbar-nav navbar-right main-nav\">
                ";
        // line 70
        echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
            </ul>

        </div>
    </div>
</nav>
";
    }

    // line 2
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 6
                    echo "            <li class=\"dropdown m-menu-fw ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    ";
                    // line 10
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                        // line 11
                        echo "                    <ul class=\"dropdown-menu\">
                    ";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["dropdownHeader"]) {
                            // line 13
                            echo "                        <li class=\"m-menu-content\">
                            <ul class=\"col-sm-";
                            // line 14
                            echo twig_round((12 / $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", [])));
                            echo "\">
                            ";
                            // line 15
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", []), "visible", []), "count", []) > 0)) {
                                // line 16
                                echo "                            <li class=\"dropdown-header\">";
                                echo $this->getAttribute($context["dropdownHeader"], "menu", []);
                                echo "</li>
                            ";
                                // line 17
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", []), "visible", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["dropdownItem"]) {
                                    // line 18
                                    echo "                            <li>
                                <a href=\"";
                                    // line 19
                                    echo $this->getAttribute($context["dropdownItem"], "url", []);
                                    echo "\">";
                                    echo $this->getAttribute($context["dropdownItem"], "menu", []);
                                    echo "</a>
                            </li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownItem'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 22
                                echo "                            ";
                            }
                            // line 23
                            echo "                            </ul>
                        </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownHeader'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "                    </ul>
                    ";
                    }
                    // line 28
                    echo "            </li>
        ";
                } else {
                    // line 30
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 31
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "</a>
            </li>
        ";
                }
                // line 34
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
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 34,  196 => 31,  191 => 30,  187 => 28,  183 => 26,  175 => 23,  172 => 22,  161 => 19,  158 => 18,  154 => 17,  149 => 16,  147 => 15,  143 => 14,  140 => 13,  136 => 12,  133 => 11,  131 => 10,  125 => 7,  120 => 6,  117 => 5,  114 => 4,  109 => 3,  97 => 2,  86 => 70,  82 => 68,  75 => 63,  73 => 62,  66 => 57,  64 => 56,  59 => 53,  53 => 50,  48 => 49,  46 => 48,  33 => 37,  30 => 1,);
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
{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"dropdown m-menu-fw {{ current_page }}\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ p.menu }}
                <span><i class=\"fa fa-angle-down\"></i></span></a>

                    {% if p.children.visible.count > 0 %}
                    <ul class=\"dropdown-menu\">
                    {% for dropdownHeader in p.children.visible %}
                        <li class=\"m-menu-content\">
                            <ul class=\"col-sm-{{ (12 / p.children.visible.count)|round }}\">
                            {% if dropdownHeader.children.visible.count > 0 %}
                            <li class=\"dropdown-header\">{{ dropdownHeader.menu }}</li>
                            {% for dropdownItem in dropdownHeader.children.visible %}
                            <li>
                                <a href=\"{{ dropdownItem.url }}\">{{ dropdownItem.menu }}</a>
                            </li>
                            {% endfor %}
                            {% endif %}
                            </ul>
                        </li>
                    {% endfor %}
                    </ul>
                    {% endif %}
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">{{ p.menu }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}
{% endspaceless %}

<nav class=\"navbar m-menu navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            {% if logo != '' %}
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <img src=\"{{ url('theme://img/' ~ logo) }}\" alt=\"\">
            </a>
            {% endif %}
        </div>

        <div class=\"collapse navbar-collapse\" id=\"#navbar-collapse-1\">
            {% if config.plugins.simplesearch.enabled %}
            <ul class=\"nav-cta hidden-xs\">
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><i
                        class=\"fa fa-search\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </li>
                    </ul>
                </li>
            </ul>
            {% endif %}

            <ul class=\"nav navbar-nav navbar-right main-nav\">
                {{ _self.loop(pages) }}
            </ul>

        </div>
    </div>
</nav>
", "partials/navbar.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/partials/navbar.html.twig");
    }
}
