<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fdde6ff6bda50578c74aebba449f6344c9ba26224cc50cf24b401b738a4f2a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f01ba5119e462c441c59b32ae3cf50e42356e5774ad84da252cdb9c78907582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f01ba5119e462c441c59b32ae3cf50e42356e5774ad84da252cdb9c78907582->enter($__internal_5f01ba5119e462c441c59b32ae3cf50e42356e5774ad84da252cdb9c78907582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f01ba5119e462c441c59b32ae3cf50e42356e5774ad84da252cdb9c78907582->leave($__internal_5f01ba5119e462c441c59b32ae3cf50e42356e5774ad84da252cdb9c78907582_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d01e5f727c7993928e794d2c13a8db9f99619b99bb80ec0f8b2e3dc8d1bd6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d01e5f727c7993928e794d2c13a8db9f99619b99bb80ec0f8b2e3dc8d1bd6a5->enter($__internal_5d01e5f727c7993928e794d2c13a8db9f99619b99bb80ec0f8b2e3dc8d1bd6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d01e5f727c7993928e794d2c13a8db9f99619b99bb80ec0f8b2e3dc8d1bd6a5->leave($__internal_5d01e5f727c7993928e794d2c13a8db9f99619b99bb80ec0f8b2e3dc8d1bd6a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85cecf57511824eb809bff53da5fe9cc9b17de9b42db45d3700ee47ffef3eb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cecf57511824eb809bff53da5fe9cc9b17de9b42db45d3700ee47ffef3eb3c->enter($__internal_85cecf57511824eb809bff53da5fe9cc9b17de9b42db45d3700ee47ffef3eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85cecf57511824eb809bff53da5fe9cc9b17de9b42db45d3700ee47ffef3eb3c->leave($__internal_85cecf57511824eb809bff53da5fe9cc9b17de9b42db45d3700ee47ffef3eb3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9d70f126e0be289f59f2ebf737f76b7585d06f1cedbf974a83a09fef2c4ab2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d70f126e0be289f59f2ebf737f76b7585d06f1cedbf974a83a09fef2c4ab2f->enter($__internal_c9d70f126e0be289f59f2ebf737f76b7585d06f1cedbf974a83a09fef2c4ab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9d70f126e0be289f59f2ebf737f76b7585d06f1cedbf974a83a09fef2c4ab2f->leave($__internal_c9d70f126e0be289f59f2ebf737f76b7585d06f1cedbf974a83a09fef2c4ab2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
