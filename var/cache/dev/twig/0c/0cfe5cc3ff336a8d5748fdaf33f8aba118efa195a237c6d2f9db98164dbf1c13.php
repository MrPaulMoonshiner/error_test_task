<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_05e0bd63b1d6223917e98a1692339942de1fd83b0c6255b2581e7caa43522e2a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>




    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />


        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
</head>

";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "<nav id=\"menu\">
    <ul class=\"links\">
        <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\">Sign up</a></li>
        <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Sign in</a></li>
        <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_yop", ["slug" => "slug"]);
        echo "\">Your opinion</a></li>
        <li><a href=\"generic.html\">Comments</a></li>
        <li><a href=\"generic.html\">Contacts</a></li>

    </ul>
</nav>
    ";
        // line 44
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "
<body class=\"is-preload\">
<header id=\"header\">
    <a class=\"logo\" href=\"index.html\">Guest book</a>
    <nav>
        <a href=\"#menu\">Menu</a>
    </nav>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "        <footer id=\"footer\">
            <div class=\"inner\">
                <div class=\"content\">
                    <section>
                        <h3>Accumsan montes viverra</h3>
                        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
                    </section>
                    <section>
                        <h4>Sem turpis amet semper</h4>
                        <ul class=\"alt\">
                            <li><a href=\"#\">Dolor pulvinar sed etiam.</a></li>
                            <li><a href=\"#\">Etiam vel lorem sed amet.</a></li>
                            <li><a href=\"#\">Felis enim feugiat viverra.</a></li>
                            <li><a href=\"#\">Dolor pulvinar magna etiam.</a></li>
                        </ul>
                    </section>
                    <section>
                        <h4>Magna sed ipsum</h4>
                        <ul class=\"plain\">
                            <li><a href=\"#\"><i class=\"icon fa-twitter\">&nbsp;</i>Twitter</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-facebook\">&nbsp;</i>Facebook</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-instagram\">&nbsp;</i>Instagram</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-github\">&nbsp;</i>Github</a></li>
                        </ul>
                    </section>
                </div>
                <div class=\"copyright\">
                    &copy; Untitled. Photos <a href=\"https://unsplash.co\">Unsplash</a>, Video <a href=\"https://coverr.co\">Coverr</a>.
                </div>
            </div>
        </footer>

        <!-- Scripts -->







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 48,  226 => 47,  215 => 45,  206 => 44,  188 => 23,  179 => 22,  165 => 16,  156 => 15,  138 => 8,  124 => 94,  120 => 93,  116 => 92,  112 => 91,  108 => 90,  105 => 89,  102 => 47,  99 => 44,  90 => 37,  86 => 36,  82 => 35,  78 => 34,  74 => 32,  72 => 22,  67 => 19,  65 => 15,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>




    <title>{% block title %}{{ title }}{% endblock %}</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />


        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        {% endblock %}

</head>

{% block header %}

<body class=\"is-preload\">
<header id=\"header\">
    <a class=\"logo\" href=\"index.html\">Guest book</a>
    <nav>
        <a href=\"#menu\">Menu</a>
    </nav>
</header>
{% endblock %}
<nav id=\"menu\">
    <ul class=\"links\">
        <li><a href=\"{{ path('app_homepage')}}\">Home</a></li>
        <li><a href=\"{{ path('user_registration') }}\">Sign up</a></li>
        <li><a href=\"{{ path('app_login') }}\">Sign in</a></li>
        <li><a href=\"{{ path('app_yop',{ slug: 'slug' }) }}\">Your opinion</a></li>
        <li><a href=\"generic.html\">Comments</a></li>
        <li><a href=\"generic.html\">Contacts</a></li>

    </ul>
</nav>
    {#{{ t }}#}
    {% block body %}

        {% endblock %}
        {% block javascripts %}
        <footer id=\"footer\">
            <div class=\"inner\">
                <div class=\"content\">
                    <section>
                        <h3>Accumsan montes viverra</h3>
                        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
                    </section>
                    <section>
                        <h4>Sem turpis amet semper</h4>
                        <ul class=\"alt\">
                            <li><a href=\"#\">Dolor pulvinar sed etiam.</a></li>
                            <li><a href=\"#\">Etiam vel lorem sed amet.</a></li>
                            <li><a href=\"#\">Felis enim feugiat viverra.</a></li>
                            <li><a href=\"#\">Dolor pulvinar magna etiam.</a></li>
                        </ul>
                    </section>
                    <section>
                        <h4>Magna sed ipsum</h4>
                        <ul class=\"plain\">
                            <li><a href=\"#\"><i class=\"icon fa-twitter\">&nbsp;</i>Twitter</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-facebook\">&nbsp;</i>Facebook</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-instagram\">&nbsp;</i>Instagram</a></li>
                            <li><a href=\"#\"><i class=\"icon fa-github\">&nbsp;</i>Github</a></li>
                        </ul>
                    </section>
                </div>
                <div class=\"copyright\">
                    &copy; Untitled. Photos <a href=\"https://unsplash.co\">Unsplash</a>, Video <a href=\"https://coverr.co\">Coverr</a>.
                </div>
            </div>
        </footer>

        <!-- Scripts -->







{% endblock %}

<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/browser.min.js') }}\"></script>
<script src=\"{{ asset('js/breakpoints.min.js') }}\"></script>
<script src=\"{{ asset('js/util.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>

</body>
</html>", "base.html.twig", "/var/www/html/TestTask/templates/base.html.twig");
    }
}
