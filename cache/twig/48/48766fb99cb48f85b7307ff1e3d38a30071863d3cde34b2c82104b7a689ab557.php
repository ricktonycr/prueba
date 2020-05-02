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

/* partials/base.html.twig */
class __TwigTemplate_590070e5809f105cef34fda59f17d0176a3ec9fea712058520595266ca27e527 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start();
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 3
        echo "
";
        // line 4
        $context["logo"] = "";
        // line 5
        echo "
";
        // line 6
        if (twig_test_iterable($this->getAttribute(($context["theme_config"] ?? null), "logo", []))) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "logo", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "        ";
                $context["logo"] = $this->getAttribute($context["file"], "name", []);
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 11
            echo "    ";
            $context["logo"] = $this->getAttribute(($context["theme_config"] ?? null), "logo", []);
        }
        // line 13
        echo "
";
        // line 14
        if (twig_test_empty(($context["logo"] ?? null))) {
            // line 15
            echo "    ";
            $context["logo"] = "logo.png";
        }
        // line 17
        echo "
";
        // line 18
        $context["favicon"] = "";
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) > 0)) {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 22
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["file"], "name", []);
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "
";
        // line 26
        if (twig_test_empty(($context["favicon"] ?? null))) {
            // line 27
            echo "    ";
            $context["favicon"] = "favicon.png";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 31
        echo "<!DOCTYPE HTML>
<html lang=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 34
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    ";
        // line 46
        $this->loadTemplate("partials/navbar.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "
                    ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 59
            echo "                            ";
            $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 60
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) == 0)) {
                // line 61
                echo "                                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                                    <a href=\"";
                // line 62
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "</a>
                                </li>
                            ";
            }
            // line 65
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 72
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "    </body>
</html>
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 48,  191 => 73,  189 => 72,  181 => 66,  175 => 65,  167 => 62,  162 => 61,  159 => 60,  156 => 59,  152 => 58,  141 => 49,  139 => 48,  136 => 47,  134 => 46,  121 => 35,  119 => 34,  114 => 32,  111 => 31,  107 => 29,  103 => 27,  101 => 26,  98 => 25,  91 => 23,  88 => 22,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  69 => 15,  67 => 14,  64 => 13,  60 => 11,  53 => 9,  50 => 8,  45 => 7,  43 => 6,  40 => 5,  38 => 4,  35 => 3,  33 => 2,  31 => 1,);
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
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{% set logo = \"\" %}

{% if theme_config.logo is iterable %}
    {% for file in theme_config.logo %}
        {% set logo = file.name %}
    {% endfor %}
{% else %}
    {% set logo = theme_config.logo %}
{% endif %}

{% if logo is empty %}
    {% set logo = 'logo.png' %}
{% endif %}

{% set favicon = \"\" %}

{% if theme_config.favicon|length > 0 %}
    {% for file in theme_config.favicon %}
        {% set favicon = file.name %}
    {% endfor %}
{% endif %}

{% if favicon is empty %}
    {% set favicon = 'favicon.png' %}
{% endif %}

{% endspaceless %}
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% include 'partials/head.html.twig' %}
    </head>
    <body>
        <div id=\"main-wrapper\">
            <div id=\"preloader\">
                <div id=\"status\">
                    <div class=\"status-mes\"></div>
                </div>
            </div>

            <div class=\"uc-mobile-menu-pusher\">
                <div class=\"content-wrapper\">
                    {% include 'partials/navbar.html.twig' %}

                    {% block content %}{% endblock %}
                </div>
            </div>

            <div class=\"uc-mobile-menu uc-mobile-menu-effect\">
                <button type=\"button\" class=\"close\" aria-hidden=\"true\" data-toggle=\"offcanvas\"
                        id=\"uc-mobile-menu-close-btn\">&times;</button>
                <div>
                    <div>
                        <ul id=\"menu\">
                        {% for p in pages.children.visible %}
                            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
                            {% if p.children.visible.count == 0 %}
                                <li class=\"{{ current_page }}\">
                                    <a href=\"{{ p.url }}\">{{ p.menu }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {% include 'partials/footer.html.twig' %}
    </body>
</html>
", "partials/base.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/partials/base.html.twig");
    }
}
