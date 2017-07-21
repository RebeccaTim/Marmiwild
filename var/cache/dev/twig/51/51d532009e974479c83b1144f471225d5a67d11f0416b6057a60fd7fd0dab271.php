<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cde43506ae4146974cc6d05be8776c9b5d5359ecca211ae9ebd41311742bc95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde43506ae4146974cc6d05be8776c9b5d5359ecca211ae9ebd41311742bc95f->enter($__internal_cde43506ae4146974cc6d05be8776c9b5d5359ecca211ae9ebd41311742bc95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9d4e1a0c2d700c6352c2cde8e8ac8445383bd0e99f5c8c87272cd41336f2f3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4e1a0c2d700c6352c2cde8e8ac8445383bd0e99f5c8c87272cd41336f2f3ea->enter($__internal_9d4e1a0c2d700c6352c2cde8e8ac8445383bd0e99f5c8c87272cd41336f2f3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cde43506ae4146974cc6d05be8776c9b5d5359ecca211ae9ebd41311742bc95f->leave($__internal_cde43506ae4146974cc6d05be8776c9b5d5359ecca211ae9ebd41311742bc95f_prof);

        
        $__internal_9d4e1a0c2d700c6352c2cde8e8ac8445383bd0e99f5c8c87272cd41336f2f3ea->leave($__internal_9d4e1a0c2d700c6352c2cde8e8ac8445383bd0e99f5c8c87272cd41336f2f3ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7787ba969b807e56756653f84d662a4af9914392dd7924883a46f3a41a05e121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7787ba969b807e56756653f84d662a4af9914392dd7924883a46f3a41a05e121->enter($__internal_7787ba969b807e56756653f84d662a4af9914392dd7924883a46f3a41a05e121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_267f2ac57d2ef26fa72c2a21df1470a416b204c68347ac710fd1347f847251b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267f2ac57d2ef26fa72c2a21df1470a416b204c68347ac710fd1347f847251b5->enter($__internal_267f2ac57d2ef26fa72c2a21df1470a416b204c68347ac710fd1347f847251b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_267f2ac57d2ef26fa72c2a21df1470a416b204c68347ac710fd1347f847251b5->leave($__internal_267f2ac57d2ef26fa72c2a21df1470a416b204c68347ac710fd1347f847251b5_prof);

        
        $__internal_7787ba969b807e56756653f84d662a4af9914392dd7924883a46f3a41a05e121->leave($__internal_7787ba969b807e56756653f84d662a4af9914392dd7924883a46f3a41a05e121_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d32de0ffc0a88af5c24d0ea4513561587a78fb055fef1b1aa075088d09a4e6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32de0ffc0a88af5c24d0ea4513561587a78fb055fef1b1aa075088d09a4e6a5->enter($__internal_d32de0ffc0a88af5c24d0ea4513561587a78fb055fef1b1aa075088d09a4e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cecfa215a77a714b1016a4d663e20086b8be615cd63297fccaa6e09ebea68f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecfa215a77a714b1016a4d663e20086b8be615cd63297fccaa6e09ebea68f96->enter($__internal_cecfa215a77a714b1016a4d663e20086b8be615cd63297fccaa6e09ebea68f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cecfa215a77a714b1016a4d663e20086b8be615cd63297fccaa6e09ebea68f96->leave($__internal_cecfa215a77a714b1016a4d663e20086b8be615cd63297fccaa6e09ebea68f96_prof);

        
        $__internal_d32de0ffc0a88af5c24d0ea4513561587a78fb055fef1b1aa075088d09a4e6a5->leave($__internal_d32de0ffc0a88af5c24d0ea4513561587a78fb055fef1b1aa075088d09a4e6a5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ece3aaa2130be8a70e0d8063823246fe4d5e22e6ae7c30732da7bafc8340e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ece3aaa2130be8a70e0d8063823246fe4d5e22e6ae7c30732da7bafc8340e3->enter($__internal_42ece3aaa2130be8a70e0d8063823246fe4d5e22e6ae7c30732da7bafc8340e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d9b5c8aabb988a6c545b1ad3326be737fd6d2b9eb301c99a4c57c2f194e0829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9b5c8aabb988a6c545b1ad3326be737fd6d2b9eb301c99a4c57c2f194e0829->enter($__internal_1d9b5c8aabb988a6c545b1ad3326be737fd6d2b9eb301c99a4c57c2f194e0829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d9b5c8aabb988a6c545b1ad3326be737fd6d2b9eb301c99a4c57c2f194e0829->leave($__internal_1d9b5c8aabb988a6c545b1ad3326be737fd6d2b9eb301c99a4c57c2f194e0829_prof);

        
        $__internal_42ece3aaa2130be8a70e0d8063823246fe4d5e22e6ae7c30732da7bafc8340e3->leave($__internal_42ece3aaa2130be8a70e0d8063823246fe4d5e22e6ae7c30732da7bafc8340e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
