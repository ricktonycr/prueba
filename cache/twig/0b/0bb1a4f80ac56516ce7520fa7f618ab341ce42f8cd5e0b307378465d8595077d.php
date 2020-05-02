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

/* partials/footer.html.twig */
class __TwigTemplate_7e40fffb5bc16b7e626e21ca9c93198b612f032a1b7d173ab5d4042c555a0f66 extends \Twig\Template
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
        echo "<footer class=\"footer\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", [])) > 0)) {
            // line 3
            echo "    <div class=\"footer-widget-section\">
        <div class=\"container text-center\">
            <div class=\"row\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 7
                echo "                <div class=\"col-sm-";
                echo twig_round((12 / twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_blocks", []))));
                echo " footer-block\">
                    <div class=\"footer-widget widget_text\">
                        ";
                // line 9
                if ($this->getAttribute($context["block"], "title", [])) {
                    // line 10
                    echo "                        <h3>";
                    echo $this->getAttribute($context["block"], "title", []);
                    echo "</h3>
                        ";
                }
                // line 12
                echo "                        ";
                if ($this->getAttribute($context["block"], "logo", [])) {
                    // line 13
                    echo "                        <div class=\"footer-logo\">
                            <a href=\"";
                    // line 14
                    echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
                    echo "\">
                                <img src=\"";
                    // line 15
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . ($context["logo"] ?? null)));
                    echo "\" alt=\"\">
                            </a>
                        </div>
                        ";
                }
                // line 19
                echo "                        ";
                if ($this->getAttribute($context["block"], "content", [])) {
                    // line 20
                    echo "                        ";
                    echo $this->getAttribute($context["block"], "content", []);
                    echo "
                        ";
                }
                // line 22
                echo "                        ";
                if (($this->getAttribute($context["block"], "icons", []) && (twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "footer_icons", [])) > 0))) {
                    // line 23
                    echo "                        <ul class=\"list-inline social-links\">
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "footer_icons", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                        // line 25
                        echo "                            <li><a href=\"";
                        echo $this->getAttribute($context["icon"], "url", []);
                        echo "\"><i class=\"fa ";
                        echo $this->getAttribute($context["icon"], "icon", []);
                        echo "\"></i></a></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                        </ul>
                        ";
                }
                // line 29
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 36
        echo "
    <div class=\"copyright-section\">
        <div class=\"container clearfix\">
            <span class=\"copytext\">";
        // line 39
        echo $this->getAttribute(($context["theme_config"] ?? null), "copyright", []);
        echo "</span>

            <ul class=\"list-inline pull-right\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "shown_in_footer", [])) {
                // line 44
                echo "                ";
                $context["activeClass"] = (($this->getAttribute($context["page"], "active", [])) ? ("active") : (""));
                // line 45
                echo "                <li class=\"";
                echo ($context["activeClass"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                ";
            }
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  154 => 47,  144 => 45,  141 => 44,  138 => 43,  134 => 42,  128 => 39,  123 => 36,  117 => 32,  109 => 29,  105 => 27,  94 => 25,  90 => 24,  87 => 23,  84 => 22,  78 => 20,  75 => 19,  68 => 15,  64 => 14,  61 => 13,  58 => 12,  52 => 10,  50 => 9,  44 => 7,  40 => 6,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    {% if theme_config.footer_blocks|length > 0 %}
    <div class=\"footer-widget-section\">
        <div class=\"container text-center\">
            <div class=\"row\">
                {% for block in theme_config.footer_blocks %}
                <div class=\"col-sm-{{ (12 / theme_config.footer_blocks|length)|round }} footer-block\">
                    <div class=\"footer-widget widget_text\">
                        {% if block.title %}
                        <h3>{{ block.title }}</h3>
                        {% endif %}
                        {% if block.logo %}
                        <div class=\"footer-logo\">
                            <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                                <img src=\"{{ url('theme://img/' ~ logo) }}\" alt=\"\">
                            </a>
                        </div>
                        {% endif %}
                        {% if block.content %}
                        {{ block.content }}
                        {% endif %}
                        {% if block.icons and theme_config.footer_icons|length > 0 %}
                        <ul class=\"list-inline social-links\">
                            {% for icon in theme_config.footer_icons %}
                            <li><a href=\"{{ icon.url }}\"><i class=\"fa {{ icon.icon }}\"></i></a></li>
                            {% endfor %}
                        </ul>
                        {% endif %}
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
    {% endif %}

    <div class=\"copyright-section\">
        <div class=\"container clearfix\">
            <span class=\"copytext\">{{ theme_config.copyright }}</span>

            <ul class=\"list-inline pull-right\">
            {% for page in pages.children.visible %}
                {% if page.header.shown_in_footer %}
                {% set activeClass = (page.active) ? 'active' : '' %}
                <li class=\"{{ activeClass }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                {% endif %}
            {% endfor %}
            </ul>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/home1/aduni/prueba/user/themes/x-corporation/templates/partials/footer.html.twig");
    }
}
