<?php

/* @MarmiWild/layout.html.twig */
class __TwigTemplate_810e6e0244a87720491ec8b4b7d152f1e2eecd5e4052bfdbbae4ed35ed65bfcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a22ee94eabaaaaf4bddf2157e7ec6a8b7f32bd74363ec1625b1f0a4ac83b1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a22ee94eabaaaaf4bddf2157e7ec6a8b7f32bd74363ec1625b1f0a4ac83b1a0->enter($__internal_5a22ee94eabaaaaf4bddf2157e7ec6a8b7f32bd74363ec1625b1f0a4ac83b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MarmiWild/layout.html.twig"));

        $__internal_50add6f7e8dafad785b4e19f5f65ae881366c95e3037da7ee1d0f2a6ad9dd1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50add6f7e8dafad785b4e19f5f65ae881366c95e3037da7ee1d0f2a6ad9dd1ca->enter($__internal_50add6f7e8dafad785b4e19f5f65ae881366c95e3037da7ee1d0f2a6ad9dd1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MarmiWild/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>
<body>

\t";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "


\t";
        // line 26
        $this->displayBlock('scripts', $context, $blocks);
        // line 35
        echo "</body>
<footer class=\"page-footer\">
  <div class=\"footer-copyright\">
    <p>© 2017 Copyright Text</p>
  </div>
</footer>
</html>";
        
        $__internal_5a22ee94eabaaaaf4bddf2157e7ec6a8b7f32bd74363ec1625b1f0a4ac83b1a0->leave($__internal_5a22ee94eabaaaaf4bddf2157e7ec6a8b7f32bd74363ec1625b1f0a4ac83b1a0_prof);

        
        $__internal_50add6f7e8dafad785b4e19f5f65ae881366c95e3037da7ee1d0f2a6ad9dd1ca->leave($__internal_50add6f7e8dafad785b4e19f5f65ae881366c95e3037da7ee1d0f2a6ad9dd1ca_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fefe769a48ad6d4fb0c50736218ec51f93c7b31e14f6bc0da041cc66483a9d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefe769a48ad6d4fb0c50736218ec51f93c7b31e14f6bc0da041cc66483a9d80->enter($__internal_fefe769a48ad6d4fb0c50736218ec51f93c7b31e14f6bc0da041cc66483a9d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81352259f13aad06677988bb391a5db9b7d82251e54af40a4cc096376ebc6373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81352259f13aad06677988bb391a5db9b7d82251e54af40a4cc096376ebc6373->enter($__internal_81352259f13aad06677988bb391a5db9b7d82251e54af40a4cc096376ebc6373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
\t
\t";
        
        $__internal_81352259f13aad06677988bb391a5db9b7d82251e54af40a4cc096376ebc6373->leave($__internal_81352259f13aad06677988bb391a5db9b7d82251e54af40a4cc096376ebc6373_prof);

        
        $__internal_fefe769a48ad6d4fb0c50736218ec51f93c7b31e14f6bc0da041cc66483a9d80->leave($__internal_fefe769a48ad6d4fb0c50736218ec51f93c7b31e14f6bc0da041cc66483a9d80_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b9e31700968937c2d18cd5cbfee4ada1843836e034409a392751ed4be7777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b9e31700968937c2d18cd5cbfee4ada1843836e034409a392751ed4be7777f->enter($__internal_70b9e31700968937c2d18cd5cbfee4ada1843836e034409a392751ed4be7777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5eeac26469a70ce3ada3b7651326a84e794b947dd2b9f3f3c7c2d62ec0d51dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5eeac26469a70ce3ada3b7651326a84e794b947dd2b9f3f3c7c2d62ec0d51dc->enter($__internal_e5eeac26469a70ce3ada3b7651326a84e794b947dd2b9f3f3c7c2d62ec0d51dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t";
        
        $__internal_e5eeac26469a70ce3ada3b7651326a84e794b947dd2b9f3f3c7c2d62ec0d51dc->leave($__internal_e5eeac26469a70ce3ada3b7651326a84e794b947dd2b9f3f3c7c2d62ec0d51dc_prof);

        
        $__internal_70b9e31700968937c2d18cd5cbfee4ada1843836e034409a392751ed4be7777f->leave($__internal_70b9e31700968937c2d18cd5cbfee4ada1843836e034409a392751ed4be7777f_prof);

    }

    // line 26
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6e3bde66dd9bbef5281755209899188b031dee37e052026ea9c04986391e5f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3bde66dd9bbef5281755209899188b031dee37e052026ea9c04986391e5f0a->enter($__internal_6e3bde66dd9bbef5281755209899188b031dee37e052026ea9c04986391e5f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_90e8a7d15785478f41e97ba8bcac27591668dd74eb9800010c4d030ec665c1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e8a7d15785478f41e97ba8bcac27591668dd74eb9800010c4d030ec665c1da->enter($__internal_90e8a7d15785478f41e97ba8bcac27591668dd74eb9800010c4d030ec665c1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 27
        echo "\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js\"></script>
\t    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script> 


\t    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

\t";
        
        $__internal_90e8a7d15785478f41e97ba8bcac27591668dd74eb9800010c4d030ec665c1da->leave($__internal_90e8a7d15785478f41e97ba8bcac27591668dd74eb9800010c4d030ec665c1da_prof);

        
        $__internal_6e3bde66dd9bbef5281755209899188b031dee37e052026ea9c04986391e5f0a->leave($__internal_6e3bde66dd9bbef5281755209899188b031dee37e052026ea9c04986391e5f0a_prof);

    }

    public function getTemplateName()
    {
        return "@MarmiWild/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 32,  140 => 29,  136 => 27,  127 => 26,  117 => 22,  108 => 21,  95 => 14,  91 => 13,  87 => 12,  82 => 9,  73 => 8,  57 => 35,  55 => 26,  50 => 23,  48 => 21,  42 => 17,  40 => 8,  35 => 6,  28 => 1,);
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
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

\t{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/stylesheet.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/common.css') }}\">
\t
\t{% endblock %}

</head>
<body>

\t{% block body %}
\t{% endblock %}



\t{% block scripts %}
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js\"></script>
\t    <script type=\"text/javascript\" src=\"{{ asset('js/modernizr.custom.79639.js') }}\"></script> 


\t    <script src=\"{{ asset('js/script.js') }}\"></script>

\t{% endblock %}
</body>
<footer class=\"page-footer\">
  <div class=\"footer-copyright\">
    <p>© 2017 Copyright Text</p>
  </div>
</footer>
</html>", "@MarmiWild/layout.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/src/MarmiWildBundle/Resources/views/layout.html.twig");
    }
}
