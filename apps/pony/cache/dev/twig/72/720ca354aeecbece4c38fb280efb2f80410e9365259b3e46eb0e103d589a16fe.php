<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29f9c72211542cc145156b708757d1bffc1f315a80cc22a261cf762912649358 extends Twig_Template
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
        $__internal_73e023c4127c953477ffe6e581d522953bc745886c17b58bc175bdd042b89b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e023c4127c953477ffe6e581d522953bc745886c17b58bc175bdd042b89b78->enter($__internal_73e023c4127c953477ffe6e581d522953bc745886c17b58bc175bdd042b89b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e023c4127c953477ffe6e581d522953bc745886c17b58bc175bdd042b89b78->leave($__internal_73e023c4127c953477ffe6e581d522953bc745886c17b58bc175bdd042b89b78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36d76329e26642c07e1a671d680839dbe74844a9797332904616eb96dfec24ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d76329e26642c07e1a671d680839dbe74844a9797332904616eb96dfec24ff->enter($__internal_36d76329e26642c07e1a671d680839dbe74844a9797332904616eb96dfec24ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36d76329e26642c07e1a671d680839dbe74844a9797332904616eb96dfec24ff->leave($__internal_36d76329e26642c07e1a671d680839dbe74844a9797332904616eb96dfec24ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c8bfda4b49c54099da1042e6197db64ac13f4e93cf0f999979850b7df9c809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c8bfda4b49c54099da1042e6197db64ac13f4e93cf0f999979850b7df9c809->enter($__internal_18c8bfda4b49c54099da1042e6197db64ac13f4e93cf0f999979850b7df9c809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18c8bfda4b49c54099da1042e6197db64ac13f4e93cf0f999979850b7df9c809->leave($__internal_18c8bfda4b49c54099da1042e6197db64ac13f4e93cf0f999979850b7df9c809_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2259b139a0591e4f646df5d9aa6df96f359ef0bd7834b94e3f5355f1b9638b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2259b139a0591e4f646df5d9aa6df96f359ef0bd7834b94e3f5355f1b9638b91->enter($__internal_2259b139a0591e4f646df5d9aa6df96f359ef0bd7834b94e3f5355f1b9638b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2259b139a0591e4f646df5d9aa6df96f359ef0bd7834b94e3f5355f1b9638b91->leave($__internal_2259b139a0591e4f646df5d9aa6df96f359ef0bd7834b94e3f5355f1b9638b91_prof);

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
