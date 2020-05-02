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
class __TwigTemplate_8af2b7ac70f5159258ef1f83f8c4b80643e2b5e715fc8063b6cc82285c5d2333 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('assets', $context, $blocks);
        // line 40
        echo "</head>
<body id=\"top\" class=\"";
        // line 41
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">

    ";
        // line 45
        echo "    <h1 class=\"hidden\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>

    ";
        // line 48
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 49
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 80
            echo "
    ";
            // line 81
            $this->displayBlock('hero', $context, $blocks);
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "      <div style=\"margin-bottom: -80px;\"></div>
    ";
        }
        // line 85
        echo "
        <section id=\"start\">
        ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "        </section>

    </div>

    ";
        // line 111
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 112
            echo "        ";
            $this->displayBlock('footer', $context, $blocks);
            // line 127
            echo "    ";
        }
        // line 128
        echo "
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 132
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 132)->display(twig_array_merge($context, ["mobile" => true]));
        // line 133
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 135
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 135)->display(twig_array_merge($context, ["tree" => true]));
        // line 136
        echo "            </nav>
        </div>
    </div>

";
        // line 141
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 141)->display($context);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('bottom', $context, $blocks);
        // line 146
        echo "
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'head');
    }

    // line 7
    public function block_head_deferred($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 21
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 22
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/theme.css", 1 => 100], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/my.js", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 36
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 38
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 41
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    public function block_header($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'header');
    }

    // line 49
    public function block_header_deferred($context, array $blocks = array())
    {
        // line 50
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 51
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 54
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 59
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 62
        echo "                        </nav>

                        ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 65
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 65)->display($context);
            echo "</span>
                        ";
        }
        // line 67
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 59
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 60
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "                        ";
    }

    // line 81
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        // line 88
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 89
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 90
        $this->displayBlock('messages', $context, $blocks);
        // line 93
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "
                    ";
        // line 95
        echo " ";
        // line 96
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 97
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "partials/base.html.twig", 97)->display($context);
            echo "</p>
                    ";
        }
        // line 99
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled")) && ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])))) {
            // line 100
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "partials/base.html.twig", 100)->display($context);
            echo "</p>
                    ";
        }
        // line 102
        echo "
                </section>
            </section>
        ";
    }

    // line 90
    public function block_messages($context, array $blocks = [])
    {
        // line 91
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 91);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 92
        echo "                    ";
    }

    // line 93
    public function block_content($context, array $blocks = [])
    {
    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        // line 113
        echo "            <section id=\"footer\" class=\"section bg-gray\">
                <section class=\"container ";
        // line 114
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 116
        echo "                    ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "footer")) {
            // line 117
            echo "                        <br>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 117)->display($context);
            echo "<br><br>
                    ";
        }
        // line 119
        echo "                    ";
        // line 120
        echo "                    ";
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        // line 121
        echo "                    ";
        if (($context["content"] ?? null)) {
            // line 122
            echo "                        ";
            echo ($context["content"] ?? null);
            echo "
                    ";
        }
        // line 124
        echo "                </section>
            </section>
        ";
    }

    // line 143
    public function block_bottom($context, array $blocks = [])
    {
        // line 144
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
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
        return array (  455 => 144,  452 => 143,  446 => 124,  440 => 122,  437 => 121,  434 => 120,  432 => 119,  426 => 117,  423 => 116,  419 => 114,  416 => 113,  413 => 112,  408 => 93,  404 => 92,  393 => 91,  390 => 90,  383 => 102,  377 => 100,  374 => 99,  368 => 97,  365 => 96,  363 => 95,  360 => 94,  357 => 93,  355 => 90,  351 => 89,  348 => 88,  345 => 87,  340 => 81,  336 => 61,  333 => 60,  330 => 59,  313 => 67,  307 => 65,  305 => 64,  301 => 62,  299 => 59,  293 => 55,  291 => 54,  285 => 51,  282 => 50,  279 => 49,  268 => 41,  261 => 38,  256 => 37,  253 => 36,  243 => 33,  240 => 32,  237 => 31,  234 => 30,  231 => 29,  226 => 26,  223 => 25,  220 => 24,  217 => 23,  212 => 22,  207 => 21,  204 => 20,  201 => 19,  194 => 16,  190 => 15,  187 => 14,  185 => 13,  174 => 9,  171 => 8,  168 => 7,  155 => 146,  153 => 143,  150 => 142,  148 => 141,  142 => 136,  140 => 135,  136 => 133,  134 => 132,  128 => 128,  125 => 127,  122 => 112,  119 => 111,  113 => 106,  111 => 87,  107 => 85,  103 => 83,  100 => 82,  98 => 81,  95 => 80,  92 => 49,  89 => 48,  83 => 45,  77 => 41,  74 => 40,  72 => 36,  69 => 35,  67 => 29,  64 => 28,  62 => 19,  59 => 18,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/theme.css',100) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/my.js', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">

    {# added hidden page title for screen readers - hibbittsdesign.org #}
    <h1 class=\"hidden\">{{ page.title }}</h1>

    {# check content display flag - hibbittsdesign.org #}
    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
    {% block header deferred %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}
    {% else %}
      <div style=\"margin-bottom: -80px;\"></div>
    {% endif %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}

                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}

                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {# check content display flag - hibbittsdesign.org #}
    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and (not theme_var('chromeless.enabled')) %}
        {% block footer %}
            <section id=\"footer\" class=\"section bg-gray\">
                <section class=\"container {{ grid_size }}\">
                    {# check to display git sync link in footer or not yet defined by saving theme settings - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'footer' %}
                        <br>{% include 'partials/git_sync_repo_link.html.twig' %}<br><br>
                    {% endif %}
                    {# display footer markdown page - hibbittsdesign.org #}
                    {% set content = pages.find('/footer').content %}
                    {% if content %}
                        {{ content|raw }}
                    {% endif %}
                </section>
            </section>
        {% endblock %}
    {% endif %}

    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{# added global scripts - hibbittsdesign.org #}
{% include 'partials/scripts.html.twig' %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/rcruzr/workspace/adunis/testing/user/themes/quark-open-publishing/templates/partials/base.html.twig");
    }
}
