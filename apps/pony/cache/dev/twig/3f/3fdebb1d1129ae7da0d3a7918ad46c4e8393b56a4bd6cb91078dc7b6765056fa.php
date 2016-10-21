<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_839a07fe58f49ada43ad2efddf163c083b5d9f886e0cf0a661b534a39b968364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc3cf4fc6bc2bb709565621cbc68fa89aa788e6823079496da0f092f3d7a239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc3cf4fc6bc2bb709565621cbc68fa89aa788e6823079496da0f092f3d7a239->enter($__internal_0fc3cf4fc6bc2bb709565621cbc68fa89aa788e6823079496da0f092f3d7a239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc3cf4fc6bc2bb709565621cbc68fa89aa788e6823079496da0f092f3d7a239->leave($__internal_0fc3cf4fc6bc2bb709565621cbc68fa89aa788e6823079496da0f092f3d7a239_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb3a0fd35d8bf128403741a57936875fbab404e9df4725e3f9c16d2f1ed11219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3a0fd35d8bf128403741a57936875fbab404e9df4725e3f9c16d2f1ed11219->enter($__internal_eb3a0fd35d8bf128403741a57936875fbab404e9df4725e3f9c16d2f1ed11219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb3a0fd35d8bf128403741a57936875fbab404e9df4725e3f9c16d2f1ed11219->leave($__internal_eb3a0fd35d8bf128403741a57936875fbab404e9df4725e3f9c16d2f1ed11219_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dce06584d2439dc09ed6f22145d0c840cfab6ed65087c0293df2e68b833f305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dce06584d2439dc09ed6f22145d0c840cfab6ed65087c0293df2e68b833f305->enter($__internal_0dce06584d2439dc09ed6f22145d0c840cfab6ed65087c0293df2e68b833f305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0dce06584d2439dc09ed6f22145d0c840cfab6ed65087c0293df2e68b833f305->leave($__internal_0dce06584d2439dc09ed6f22145d0c840cfab6ed65087c0293df2e68b833f305_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe54282ce08bcef35d5fbb9229243ab576e393660160abfd3ea8f06b92cff4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe54282ce08bcef35d5fbb9229243ab576e393660160abfd3ea8f06b92cff4b2->enter($__internal_fe54282ce08bcef35d5fbb9229243ab576e393660160abfd3ea8f06b92cff4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fe54282ce08bcef35d5fbb9229243ab576e393660160abfd3ea8f06b92cff4b2->leave($__internal_fe54282ce08bcef35d5fbb9229243ab576e393660160abfd3ea8f06b92cff4b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
