<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ec0679b18d7df495de46757bff8a2626b0fb4323cf897c53a730ad7c5d3e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ec0679b18d7df495de46757bff8a2626b0fb4323cf897c53a730ad7c5d3e42->enter($__internal_a0ec0679b18d7df495de46757bff8a2626b0fb4323cf897c53a730ad7c5d3e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b730e660eec32d471ad57f35a2b292dc10c9bbf073c72075ca10d35312bdf920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b730e660eec32d471ad57f35a2b292dc10c9bbf073c72075ca10d35312bdf920->enter($__internal_b730e660eec32d471ad57f35a2b292dc10c9bbf073c72075ca10d35312bdf920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a0ec0679b18d7df495de46757bff8a2626b0fb4323cf897c53a730ad7c5d3e42->leave($__internal_a0ec0679b18d7df495de46757bff8a2626b0fb4323cf897c53a730ad7c5d3e42_prof);

        
        $__internal_b730e660eec32d471ad57f35a2b292dc10c9bbf073c72075ca10d35312bdf920->leave($__internal_b730e660eec32d471ad57f35a2b292dc10c9bbf073c72075ca10d35312bdf920_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fccc4e630448a81a5dc51b1afb0f63e590974d69e605c64199d85dd8b2ca87a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccc4e630448a81a5dc51b1afb0f63e590974d69e605c64199d85dd8b2ca87a8->enter($__internal_fccc4e630448a81a5dc51b1afb0f63e590974d69e605c64199d85dd8b2ca87a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1f9c02d7941a16ecfcdec4c580baaff2c9a3ef1fd46256a43f97182855540fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f9c02d7941a16ecfcdec4c580baaff2c9a3ef1fd46256a43f97182855540fc->enter($__internal_a1f9c02d7941a16ecfcdec4c580baaff2c9a3ef1fd46256a43f97182855540fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1f9c02d7941a16ecfcdec4c580baaff2c9a3ef1fd46256a43f97182855540fc->leave($__internal_a1f9c02d7941a16ecfcdec4c580baaff2c9a3ef1fd46256a43f97182855540fc_prof);

        
        $__internal_fccc4e630448a81a5dc51b1afb0f63e590974d69e605c64199d85dd8b2ca87a8->leave($__internal_fccc4e630448a81a5dc51b1afb0f63e590974d69e605c64199d85dd8b2ca87a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e01a15218f9ed6ba070c092ec07e2b4fc3986772188869f2cf386dc31f7fbb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01a15218f9ed6ba070c092ec07e2b4fc3986772188869f2cf386dc31f7fbb58->enter($__internal_e01a15218f9ed6ba070c092ec07e2b4fc3986772188869f2cf386dc31f7fbb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c670433c89aca2202f7bd3cdf81446ab28cc581e05def492a0d08eb8c1be2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c670433c89aca2202f7bd3cdf81446ab28cc581e05def492a0d08eb8c1be2d7->enter($__internal_9c670433c89aca2202f7bd3cdf81446ab28cc581e05def492a0d08eb8c1be2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c670433c89aca2202f7bd3cdf81446ab28cc581e05def492a0d08eb8c1be2d7->leave($__internal_9c670433c89aca2202f7bd3cdf81446ab28cc581e05def492a0d08eb8c1be2d7_prof);

        
        $__internal_e01a15218f9ed6ba070c092ec07e2b4fc3986772188869f2cf386dc31f7fbb58->leave($__internal_e01a15218f9ed6ba070c092ec07e2b4fc3986772188869f2cf386dc31f7fbb58_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c39cb86aeb59850caf73b90e73e052975dbe3de33093ea8d4a2375c35d3fb177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39cb86aeb59850caf73b90e73e052975dbe3de33093ea8d4a2375c35d3fb177->enter($__internal_c39cb86aeb59850caf73b90e73e052975dbe3de33093ea8d4a2375c35d3fb177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69c1a378b4bf54877f4148fca4c07f0759bbac6e65f6e766e7dcbfdb1d2dabdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c1a378b4bf54877f4148fca4c07f0759bbac6e65f6e766e7dcbfdb1d2dabdb->enter($__internal_69c1a378b4bf54877f4148fca4c07f0759bbac6e65f6e766e7dcbfdb1d2dabdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69c1a378b4bf54877f4148fca4c07f0759bbac6e65f6e766e7dcbfdb1d2dabdb->leave($__internal_69c1a378b4bf54877f4148fca4c07f0759bbac6e65f6e766e7dcbfdb1d2dabdb_prof);

        
        $__internal_c39cb86aeb59850caf73b90e73e052975dbe3de33093ea8d4a2375c35d3fb177->leave($__internal_c39cb86aeb59850caf73b90e73e052975dbe3de33093ea8d4a2375c35d3fb177_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42907342651d7aa516d0ba3f5d9c21a3e84b659969daf3903ae2a65aee3d7757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42907342651d7aa516d0ba3f5d9c21a3e84b659969daf3903ae2a65aee3d7757->enter($__internal_42907342651d7aa516d0ba3f5d9c21a3e84b659969daf3903ae2a65aee3d7757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a40fbe9e9c9db4c144979402ca06adce534737255063304ebde18a9209cb2dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40fbe9e9c9db4c144979402ca06adce534737255063304ebde18a9209cb2dd2->enter($__internal_a40fbe9e9c9db4c144979402ca06adce534737255063304ebde18a9209cb2dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a40fbe9e9c9db4c144979402ca06adce534737255063304ebde18a9209cb2dd2->leave($__internal_a40fbe9e9c9db4c144979402ca06adce534737255063304ebde18a9209cb2dd2_prof);

        
        $__internal_42907342651d7aa516d0ba3f5d9c21a3e84b659969daf3903ae2a65aee3d7757->leave($__internal_42907342651d7aa516d0ba3f5d9c21a3e84b659969daf3903ae2a65aee3d7757_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Bdx0217PHP_Final_Checkpoint/Finale_Checkpoint/app/Resources/views/base.html.twig");
    }
}
